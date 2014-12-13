<?php 
ini_set("display_errors","On");
error_reporting(E_ALL);
$host = getenv("HOST");
if (empty($host)) {
	$host = gethostname();
}?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Welcome to <?= $host ?></title>

		<!-- Bootstrap CSS -->
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
		<style>
			.btn-toolbar .btn-group {
			    margin-top: 9px;
			}

			.btn-toolbar .btn-group:last-child {
			    margin-bottom: 9px;
			}

			output {
			    margin-bottom: 40px;
			    border-radius: 4px;
			    height: 350px;
			    padding: 9.5px;
			    background-color: #2d2d2d;
			    font-family: Menlo, Monaco, Consolas, "Courier New", monospace;
			    font-size: 90%;
			    color: #fff;
			    overflow: auto;
			}

			.green {
			    color: #a9d3ab;
			}

			.yellow {
			    color: #fed37f;
			}

			.blue {
			    color: #7aabd4;
			}	
	</style>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			
			<div class="jumbotron" style="margin-top: 50px;">
				<h1>Welcome to <?= $host ?></h1>
				<p>This is a simple demo server, maintained by Vishal Doshi</p>
				<p>
					<a class="btn btn-primary btn-lg" href="/mini">Speed Test Mini</a>
				</p>
			</div> <!-- jumbotron -->

			<form>
            <fieldset>
                <legend>Network measures</legend>

                <div class="row">
                    <div class="col-md-6">
                        <div class="btn-toolbar">
                            <div class="btn-group" data-toggle="tooltip" title="[Bug] 0 values can occur">
                                <button class="btn btn-default" type="button" data-measure="latency">
                                    <span class="glyphicon glyphicon-time"></span> Latency
                                </button>
                            </div>

                            <div class="btn-group">
                                <button class="btn btn-default" type="button" data-measure="upload">
                                    <span class="glyphicon glyphicon-upload"></span> Upload
                                </button>
                                <button class="btn btn-default" type="button" data-measure="download">
                                    <span class="glyphicon glyphicon-download"></span> Download
                                </button>
                            </div>

                            <div class="btn-group">
                                <button class="btn btn-default" type="button" data-abort disabled>
                                    <span class="glyphicon glyphicon-remove-circle"></span> Abort
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" id="chrome-warning" style="display: none;">
                        <div class="alert alert-warning" role="alert">
                            Currently, it is recommended to use <strong>Chrome's latest version</strong>.
                        </div>
                    </div>
                </div>
            </fieldset>

            <output>Click one of the above buttons to start network measures…</output>
        	</form>

		</div> <!-- container -->

		<!-- jQuery -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script>
		$(function() {
			var isChrome = navigator.userAgent.toLowerCase().indexOf('chrome') > -1;
			if (!isChrome) {
				$("#chrome-warning").show();
			}
		});
		</script>
		<!-- Bootstrap JavaScript -->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
		<script src="./js/speedtest.min.js"></script>
    	<script src="./main.js"></script>
	</body>
</html>