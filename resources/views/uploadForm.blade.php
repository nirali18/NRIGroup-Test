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
	                <div class="intro-lead-in"><h1>NRIGroup CSV Upload Test</h1></div>
	                <div class="intro-heading"></div>
	                
	            </div>
	        </div>
	    </header>
    
    	<div class="container uploadSection">
	        <form action="{{url('/upload')}}" method="post" enctype="multipart/form-data" name="uploadFile">
				{{csrf_field()}}
				<div class="form-group">
					<label for="upload-file">*Please select CSV file</label>
					<input type="file" name='upload-file' id="upload-file" class="form-control">
					<div class="intro-heading">Please use below Example CSV template</div>
					<a href="{{ URL::to('/data/data.csv') }}" target="_blank">Example CSV Template</a>
				</div>
				
				<input class="btn btn-sucess" type="submit" value="Upload" name="submit">

			</form>
		</div>

        <!--Footer Content-->
	    

    </body>
</html>