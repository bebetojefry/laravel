<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <title>URL Shortner</title>

    <!-- Bootstrap -->
    <link href="{!! URL::asset('css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! URL::asset('css/app.css') !!}" type="text/css" rel="stylesheet" />

	<script src="{!! URL::asset('js/jquery-1.11.2.min.js') !!}" type="text/javascript" ></script>
	<script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
	<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
	<script src="{!! URL::asset('js/app.js') !!}" type="text/javascript" ></script>
	
  </head>
  <body>
    <div class="container">
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-10">
				<div class="box">
					<div class="col-sm-12">
						<h5>Paste your long URL here:</h5>
					</div>
					<form name="frmUrlShortner" id="frmUrlShortner" method="POST" action="<?php echo route('short_url_submit'); ?>">
						<div class="col-sm-10">
							<input class="text-box" name="longUrl" id="longUrl" type="text"/>
						</div>
						<div class="col-sm-2">
							<input type="hidden" name="_token" id="csrf-token" value="{!! Session::token() !!}" />
							<button type="submit" name="btnSubmit" id="btnSubmit">Click</button>
						</div>
					</form>
				</div>
				<div class="res">
					<div class="result" id="short_url_cont"></div>
				</div>
			</div>
			<div class="col-sm-1"></div>
		</div>
	</div>

    <script src="{!! URL::asset('js/bootstrap.min.js') !!}"></script>
  </body>
</html>