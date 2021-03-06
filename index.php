<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Android Pattern Unlock</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/android.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>

  <body>

    <div class="container-narrow">

      <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="#">Home</a></li>
          <li><a target="_blank" href="http://robinsingh.name/e-resume/">e-Resume</a></li>
          <li><a target="_blank" href="http://robinsingh.name/contact-me/">Contact</a></li>
        </ul>
        <h3 class="muted">Android Pattern Unlock - Flipkart Test</h3>
      </div>

      <hr>

		<!-- Android HTML Starts Here-->
		<div class="row">
			<div class="offset1 span3">
				<div class="well">
					<div class="row">
						<div id="1" class="circle"><div class="circle-small"></div></div>
						<div id="2" class="circle"><div class="circle-small"></div></div>
						<div id="3" class="circle"><div class="circle-small"></div></div>
					</div>
					<div class="row">
						<div id="4" class="circle"><div class="circle-small"></div></div>
						<div id="5" class="circle"><div class="circle-small"></div></div>
						<div id="6" class="circle"><div class="circle-small"></div></div>
					</div>
					<div class="row">
						<div id="7" class="circle"><div class="circle-small"></div></div>
						<div id="8" class="circle"><div class="circle-small"></div></div>
						<div id="9" class="circle"><div class="circle-small"></div></div>
					</div>
				</div>
			</div>
		</div>
		<!-- Android HTML Ends Here-->

		<div class="row">
			<div class="offset1 span5">
				<div class="alert" id="answer">
				</div>
			</div>
		</div>

		<form class="form-horizontal">
			<div class="control-group">
				<label class="control-label" for="inputEmail">Current Pattern</label>
				<div class="controls"><input class="input-small" type="text" name="" value="" id="current-pattern" disabled="disabled"></div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputEmail">Final Pattern</label>
				<div class="controls">
					<input class="input-small" type="text" name="" value="" id="final-pattern" disabled="disabled">
					<button id="btnSave" class="btn" type="button" onClick="FlipKart.savePattern();">Save</button>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputEmail">Saved Pattern</label>
				<div class="controls">
					<input class="input-small" type="text" name="" value="" id="saved-pattern" disabled="disabled">
					<button id="btnReset" class="btn" type="button" onClick="FlipKart.unsavePattern();">Reset</button>
				</div>
			</div>
		</form>
      
      <hr>

      <div class="footer">
        <p><a target="_blank" href="https://twitter.com/robinflyhigh">@robinflyhigh</a></p>
      </div>

    </div> <!-- /container -->

	<script src="js/android.js"></script>

  </body>
</html>