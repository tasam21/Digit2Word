<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
<title>Digit-to-Word</title>
</head>

<body>

	<header>
		<h1>Conversion of Amount in Digit to Word Format</h1>
	</header>
	
	<section>
	
		<article>
			<header>
				<h2>Language Used:</h2>
				<p>HTML5 | CSS3 | Bootstrap | JavaScript </p>
			
		</article>
		
		<div class="col-md-4">
			<form>
	  				<div class="form-group">
    					<label for="AmountInNumber">Amount in Number</label>
    						<input type="text" class="form-control" id="num" placeholder="Amount in Number Format">
    						<small id="description" class="form-text text-muted">Write your donation amout in number format.</small>
  					</div>
					<div class="form-group">
  						<input type="button" class="btn btn-primary" name="sr1" value="Convert into Word" onClick="numinwrd()">
  					</div>

  					<div class="form-group">
    					<label for="AmountInWord">Amount in Word Format</label>
    						<input type="text" class="form-control" id="number" placeholder="Amount in Word Format">
  					</div>
  					
			</form>


		</div>
		
	</section>

	<div class="col-md-12">

	<footer>
		<p>Copyright &copy 2017: All right reserved to Tashi Samphel</p>
	</footer>
	</div>
<script src="js/conversion.js" type="text/javascript"></script>
</body>
</html>
