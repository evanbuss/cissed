<?php
	// var_dump($form);
	// die();
 ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
		<title>CISeed Project</title>

		<script type="text/javascript" src="//code.jquery.com/jquery-2.1.0.js"></script>
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

		<script type="text/javascript" src="/resources/js/script.js"></script>
		<script> var students = <?php echo json_encode($students); ?>; </script>
		<style type="text/css">
			body {
			  padding-top: 20px;
			  padding-bottom: 20px;
			}
			.navbar {
			  margin-bottom: 20px;
			}
			/* Ripple Out */
			@-webkit-keyframes hvr-ripple-out {
			  100% {
			    top: -30px;
			    right: -30px;
			    bottom: -30px;
			    left: -30px;
			    opacity: 0;
			  }
			}
			@keyframes hvr-ripple-out {
			  100% {
			    top: -30px;
			    right: -30px;
			    bottom: -30px;
			    left: -30px;
			    opacity: 0;
			  }
			}

			.hvr-ripple-out {
			  display: inline-block;
			  vertical-align: middle;
			  -webkit-transform: translateZ(0);
			  transform: translateZ(0);
			  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
			  -webkit-backface-visibility: hidden;
			  backface-visibility: hidden;
			  -moz-osx-font-smoothing: grayscale;
			  position: relative;
			}
			.hvr-ripple-out:before {
			  content: '';
			  position: absolute;
			  border: #e1e1e1 solid 3px;
			  top: 0;
			  right: 0;
			  bottom: 0;
			  left: 0;
			  -webkit-animation-duration: 1s;
			  animation-duration: 1s;
			}
			.hvr-ripple-out:hover:before, .hvr-ripple-out:focus:before, .hvr-ripple-out:active:before {
			  -webkit-animation-name: hvr-ripple-out;
			  animation-name: hvr-ripple-out;
			}

		</style>

	</head>
	<body>
		<div class="container">

			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="javascript:void(0)">CISeed Project</a>
					</div>
				</div>
			</nav>

			<table id="studentsTable" class="table table-striped">
			    <thead>
			      <tr>
			        <th>Id</th>
			        <th>Student Name</th>
			        <th>Password </th>
			      </tr>
			    </thead>
			    <tbody>
			    <!-- jQuery Elements -->
			    </tbody>
			</table>

			<div class="row">
	  			<button id="random" class="btn btn-default hvr-ripple-out"> Random Names </button>
			</div>


		</div>
	</body>
</html>