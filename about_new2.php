<?PHP
require_once("./include/membersite_config.php");
if(!$fgmembersite->DBLogin()) 
{
	echo "Error Connecting to Database";
	exit;
}	
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <?php include("header.php"); ?>
        <style>
            /* Three columns side by side - SL*/
            .column {
                float: left;
                width: 33.3%;
                margin-bottom: 16px;
                padding: 0 8px;
            }

            /* Display the columns below each other instead of side by side on small screens */
            @media screen and (max-width: 650px) {
                .column {
                    width: 100%;
                    display: block;
                }
            }

            /* Add some shadows to create a card effect */
            .card {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            }

            /* Some left and right padding inside the container */
            .container {
                padding: 0 16px;
            }

            /* Clear floats */
            .container::after, .row::after {
                content: "";
                clear: both;
                display: table;
            }

            .title {
                color: grey;
            }

            .button {
                border: none;
                outline: 0;
                display: inline-block;
                padding: 8px;
                color: white;
                background-color: #000;
                text-align: center;
                cursor: pointer;
                width: 100%;
            }

            .button:hover {
                background-color: #555;
            }
        </style>
        
    </head>

    <body>

        <!-- Navigation -->
        <?php include("menu.php"); ?>


        <div class="col-md-10">
        <div class="row">
            <div class="column">
                <div class="card">
                <img src="images/bios/team1.jpg" alt="Jane" style="width:100%">
                <div class="container">
                    <h2>Jane Doe</h2>
                    <p class="title">CEO &amp; Founder</p>
                    <p>Some text that describes me.</p>
                    <p>example@example.com</p>
                    <a href="#" class="bio-link" data-toggle="modal" data-target=".bio-sullivan">
                                        <i class="fa fa-external-link"></i> Read bio</a>&nbsp;&nbsp;&nbsp;
                </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                <img src="images/bios/team2.jpg" alt="Mike" style="width:100%">
                <div class="container">
                    <h2>Mike Ross</h2>
                    <p class="title">Art Director</p>
                    <p>Some text that describes me.</p>
                    <p>example@example.com</p>
                    <a href="#" class="bio-link" data-toggle="modal" data-target=".bio-sullivan">
                                        <i class="fa fa-external-link"></i> Read bio</a>&nbsp;&nbsp;&nbsp;
                </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                <img src="images/bios/team3.jpg" alt="John" style="width:100%">
                <div class="container">
                    <h2>John Doe</h2>
                    <p class="title">Designer</p>
                    <p>Some text that describes me.</p>
                    <p>example@example.com</p>
                    <a href="#" class="bio-link" data-toggle="modal" data-target=".bio-sullivan">
                                        <i class="fa fa-external-link"></i> Read bio</a>&nbsp;&nbsp;&nbsp;
                </div>
                </div>
            </div>
        </div>
        </div>



        <!-- Page Content -->
        <div class="container">
            <br>
            <!-- Page Heading/Breadcrumbs -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">About
                        <small>Meet the Emory CAMP Team</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="active">About - Meet the Emory CAMP Team</li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->





            









            <!-- Footer -->
            <?php include("footer.php"); ?>

            </div>
            <!-- /.container -->

            <!-- jQuery -->
            <script src="js/jquery.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="js/bootstrap.min.js"></script>

    </body>

    </html>