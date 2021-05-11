<?php
    session_start();
?>

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
                        <li class="active"><a href="profile.php">Home</a></li>
                        <li><a href="festival.html">Festivals</a></li>

                    </ul>
                    
                    <form class="nav navbar-form navbar-right">
                        <button type="search" name="search" formmethod="post" formaction="search.php" class="btn btn-default">
                                Search
                            </button>
                        <button type="submit" name="submit" formaction="logout.php" class="btn btn-primary">
                                            Logout
                                        </button>
                       <input type="text" name="search" class="form-control col-lg-8" placeholder="Search For Festivals">
                    </form>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav><!-- End Nav Bar -->

        <br>
        <br>


            <div class="bs-component" >
                <div class="jumbotron" style="background-color:#d8755f">
                    <h1 style="text-align:center;">
                        <?php
                            echo "<h1 style='text-align:center;'> Hello " .$_SESSION["Username"]. "</h1>";
                        ?>
                    </h1>
                    <p style="text-align:center;">
                        Welcome to DigiFest!
                    </p>
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