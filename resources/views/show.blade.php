<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Upload CSV File</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/product.min.css" rel="stylesheet">
        
        <!-- Custom Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body id="page-top" class="index">
    
        
	    
        <!-- Header -->
	    <header>
	        <div class="container">
	            <div class="intro-text">
	                <div class="intro-lead-in"><h1>Total Amount Spend Per Category</h1></div>
	            </div>
	        </div>
	    </header>
    
    	<div class="container">
            <table class="table table-bordered table-responsive">
                <thead class="thead-inverse">
                    <tr>
                      <th>Category</th>
                      <th>Pre Tax Amount</th>
                      <th>Tax Amount</th>
                    </tr>
                </thead>
                
                <tbody>
                

                @foreach($amountspends as $amountspend) 
                <tr>
                    <td>{{ $amountspend->category }}</td>
                    <td>{{ $amountspend->pre_tax_amount }}</td>
                    <td>{{ $amountspend->tax_amount }}</td>
                </tr>
                @endforeach
                
                </tbody>
            </table>
            <a href="{{url('/upload')}}">Click Here to Upload another file</a>

		</div>

        <!--Footer Content-->
	    

    </body>
</html>