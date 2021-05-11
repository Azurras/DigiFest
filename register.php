<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Profile-DigiFest</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
        <link rel="shortcut icon" href="images/tab_icons/yui-peeking.jpg">
    </head>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <body>
    
        <!-- Navagation Bar -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                    </button>
                    <a class="navbar-brand" href="profile.php">DigiFest</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="profile.php">Home</a></li>
                        <li class="active"><a href="festival.html">Festivals</a></li>

                    </ul>
                    
                    <form class="nav navbar-form navbar-right">
                       <input type="text" class="form-control col-lg-8" placeholder="Search">
                    </form>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav><!-- End Nav Bar -->


        
        <br>
        <br>
        <br>
        <br>

        
            <div class="bs-component">
                <div class="jumbotron">
                    <h1 style="text-align:center;">
                        Current Festivals
                    </h1>
                    <p style="text-align:center;">
                    	<?php
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

					$selected_radio = $_POST['UserType'];
					$email			= $_POST['email'];
					$username		= $_POST['username'];
					$password		= $_POST['password'];

					if(!$email) {
						echo "<p>Add Email please.</p>";
					}
					if(!$username) {
						echo "<p>Add Username please.</p>";
					}
					if(!$password) {
						echo "<p>Add Password please.</p>";
					}

					if($selected_radio == "User") {
						$sql = "INSERT INTO USER (UserName, UserEmail, UserPassword)
								Values ('$username', '$email', '$password')";
						if(!mysql_query($sql)) {
							die('Error: '. mysql_error($conn));
						}	
					}
					else if($selected_radio == "Vender") {
						$sql = "INSERT INTO VenderUser (VenderUserName, VenderUserEmail, VenderUserPassword)
								Values ('$username', '$email', '$password')";
						if(!mysql_query($sql)) {
							die('Error: '. mysql_error($conn));
						}
					} 
					mysql_close($link);
				?>
                        A way to attend a festival or concert without being there.
                    </p>
                    <p>
                        Something
                    </p>
                </div>
            </div>


        </div>   
        
        <hr>
        

  
        <footer>
            <div class="container">
                <p style="text-align:center;">
                    Author: Christopher Bell<br>
                    Email: cbell7@xula.edu<br>
                    Phone: 504-701-6315
                </p>
            </div>
        </footer>
    </body>
</html>

