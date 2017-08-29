<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\Products;

class productController extends Controller
{
	//This function will return uploadForm on the Screen
    public function showUploadForm()
    {
    	return view('uploadForm');
    }

    //This function will store the products data into products table 
    public function storeData(Request $request)
    {
    	//Get file and file path
    	$upload=$request->file('upload-file');
    	if(file_exists($upload)){

	    	$filepath=$upload->getRealPath();

	    	//open and read
	    	$file=fopen($filepath, 'r');

	    	//Get File Header
	    	$header=fgetcsv($file);


	    	while($rows=fgetcsv($file))
	    	{
	    		//Combine header and each data
	    		$data=array_combine($header, $rows);

	    		//Store each csv row data into variables 
	    		$date=date('Y-m-d',strtotime($data['date']));
	    		$category=$data['category'];
	    		$title=$data['lot title'];
	    		$location=$data['lot location'];
	    		$condition=$data['lot condition'];
	    		$pre_tax_amount=$data['pre-tax amount'];
	    		$tax_name=$data['tax name'];
	    		$tax_amount=$data['tax amount'];
	    		
	    		$product = new Products;
	    		$product->date=$date;
	    		$product->category=$category;
	    		$product->title=$title;
	    		$product->location=$location;
	    		$product->condition=$condition;
	    		$product->pre_tax_amount=$pre_tax_amount;
	    		$product->tax_name=$tax_name;
	    		$product->tax_amount=$tax_amount;
	    		$product->save();
	    	}

	    	//Fetch amount spend per category
	    	$amountspends = Products::groupBy('category')->selectRaw('sum(pre_tax_amount) as pre_tax_amount, sum(tax_amount) as tax_amount, category')->get();
	    	
	    	//Fetch amount spend per month
	    	//$amountspendspermonth = Products::groupBy(YEAR('date'), MONTH('date'))->selectRaw('sum(pre_tax_amount) as pre_tax_amount, sum(tax_amount) as tax_amount, category')->get();

	    	return view('show', compact('amountspends'));
    	} 
    	else
    	{
    		return "Please select file";

    	}
    }
}
