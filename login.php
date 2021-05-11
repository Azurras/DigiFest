<?php
	session_start();
	
	$user = 'root';
	$password = 'root';
	$db = 'DigiFest';
	$host = 'localhost';
	$port = 3306;

	$conn = mysql_connect("$host:$port", $user, $password);
	if(!$conn ) {
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db($db);

	$email		= $_POST['email'];
	$password	= $_POST['password'];

	//if($email != null || $password != null){

	$sql = "SELECT * FROM USER 
		WHERE UserEmail = '$email'
		AND UserPassword = '$password' ";


	$result = mysql_query($sql, $conn);
	$row2 = mysql_fetch_assoc($result);

	if( ($email == $row2["UserEmail"] && $password == $row2["UserPassword"]) && ($email != null || $password != null)) {
		// Set session variables

		$sql2 = "SELECT UserName FROM USER 
		WHERE UserEmail = '$email'
		AND UserPassword = '$password' ";

		$result2 = mysql_query($sql, $conn);
		$row3 = mysql_fetch_assoc($result2);
		$username = $row3["UserName"];

		$_SESSION["Email"] = "$email";
		$_SESSION["Password"] = "$password";
		$_SESSION["Username"] = "$username";

		

		echo "		<html>
					    <head>
					        <meta charset=\"utf-8\">
					        <title>Profile-DigiFest</title>
					        <link rel=\"stylesheet\" type=\"text/css\" href=\"bootstrap/css/bootstrap.css\">
					        <link rel=\"shortcut icon\" href=\"images/tab_icons/yui-peeking.jpg\">
					    </head>

					    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
					    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
					    <!-- Include all compiled plugins (below), or include individual files as needed -->
					    <script src=\"js/bootstrap.min.js\"></script>

					    <body>
					    
					        <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
					            <div class=\"container-fluid\">
					                <!-- Brand and toggle get grouped for better mobile display -->
					                <div class=\"navbar-header\">
					                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\">
					                    </button>
					                    <a class=\"navbar-brand\" href=\"profile.php\">DigiFest</a>
					                </div>

					                <!-- Collect the nav links, forms, and other content for toggling -->
					                <div class=\"collapse navbar-collapse\">
					                    <ul class=\"nav navbar-nav\">
					                        <li class=\"active\"><a href=\"profile.php\">Home</a></li>
					                        <li><a href=\"festival.html\">Festivals</a></li>

					                    </ul>
					                    
					                    <form class=\"nav navbar-form navbar-right\">
					                        <button type=\"search\" name=\"search\" formmethod=\"post\" formaction=\"search.php\" class=\"btn btn-default\">
					                                Search
					                            </button>
					                        <button type=\"submit\" name=\"submit\" formaction=\"logout.php\" class=\"btn btn-primary\">
					                                            Logout
					                                        </button>
					                       <input type=\"text\" name=\"search\" class=\"form-control col-lg-8\" placeholder=\"Search For Festivals\">
					                    </form>
					                </div><!-- /.navbar-collapse -->
					            </div><!-- /.container-fluid -->
					        </nav><!-- End Nav Bar -->

					        <br>
					        <br>


					            <div class=\"bs-component\" >
					                <div class=\"jumbotron\" style=\"background-color:#d8755f\">
					                    <h1 style=\"text-align:center;\">";
					                        
		echo "<h1 style='text-align:center;'> Hello "  . $_SESSION["Username"] . "</h1>";
					                        
		echo"          </h1>
					    	<p style=\"text-align:center;\">
					                        Welcome to DigiFest!
					                    </p>
					                </div>
					            </div>

					        

					        <hr>    
					        
					       
					        <footer>
					            <div class=\"container\">
					                <p style=\"text-align:center;\">
					                    Author: Christopher Bell<br>
					                    Email: cbell7@xula.edu<br>
					                    Phone: 504-701-6315
					                </p>
					            </div>
					        </footer>
					    </body>
					</html> ";
	}
		else {
			$doc = new DOMDocument();
			$doc->loadHTMLFile("index.html");
			echo $doc->saveHTML();
			echo "<h2 style='color:Red; text-align:center;'>Your login information is wrong.</h2>";
		}



	mysql_close($link);
?>