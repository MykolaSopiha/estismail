<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="Mykola Sopiha">
	<meta name="description" content="Estismail Test">
	<meta name="keywords" content="Estismail, PHP, Front-End"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Test</title>

	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<style type="text/css">
		.row {
			margin-top: 50px;
			margin-bottom: 50px;
		}
	</style>
</head>
<body>
	<main role="main">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
					<h1>Enter your data and push "Send!"</h1>
					<form class="form-horizontal" name="letterData" id="letterData">
						<div class="from-group">
							<label for="total_count" class="col-sm-4 control-label">Total Count</label>
							<div class="col-sm-8">
								<input class="form-control" type="number" name="total_count" id="total_count" required>
							</div>
						</div>
						<div class="from-group">
							<label for="delivered" class="col-sm-4 control-label">Delivered</label>
							<div class="col-sm-8">
								<input class="form-control" type="number" name="delivered" id="delivered" required>
							</div>
						</div>
						<div class="from-group">
							<label for="fail" class="col-sm-4 control-label">Fail</label>
							<div class="col-sm-8">
								<input class="form-control" type="number" name="fail" id="fail" required>
							</div>
						</div>
						<div class="from-group">
							<label for="open" class="col-sm-4 control-label">Open</label>
							<div class="col-sm-8">
								<input class="form-control" type="number" name="open" id="open" required>
							</div>
						</div>
						<div class="from-group">
							<label for="click" class="col-sm-4 control-label">Click</label>
							<div class="col-sm-8">
								<input class="form-control" type="number" name="click" id="click" required>
							</div>
						</div>
						<div class="from-group">
							<div class="col-sm-offset-4 col-sm-8">
								<input type="button" class="btn btn-default" id="sendBtn" value="Send!" name="send">
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
					<h2></h2>
					<div class="progress">
						<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 0%;">
							0%
							<span class="sr-only">0%</span>
						</div>
						<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 0%;">
							0%
							<span class="sr-only">0%</span>
						</div>
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 0%;">
							0%
							<span class="sr-only">0%</span>
						</div>
						<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 0%;">
							0%
							<span class="sr-only">0%</span>
						</div>
						<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 0%;">
							0%
							<span class="sr-only">0%</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="script.js"></script>
</body>
</html>