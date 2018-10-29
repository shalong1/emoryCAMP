<?PHP
require_once("./include/membersite_config.php");
if(!$fgmembersite->DBLogin()) 
{
	echo "Error Connecting to Database";
	exit;
}	
 
 

	$sql = "SELECT * FROM items where isFutureWork=1 and isActive=1";

	$item_results = mysql_query($sql)or die(mysql_error());	 

?>

<!DOCTYPE html>
<html lang="en">

<head><?php include("header.php"); ?></head>

<body>

    <!-- Navigation -->
    <?php include("menu.php"); ?>
    
    <!-- Page Content -->
    <div class="container">
		</br>
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tools
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Tools</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        
      
		<div class="row">
            
            <div class="col-md-12">
                <h3>TeenSparc</h3>
                <h4><p>This tool is designed to help public health jurisdictions and other entities, to explore the potential impact of behavior change in reducing sexually transmitted infections (STIs) among the sexually active high-school attending adolescent population.</p>
                <p>Key outputs include the expected number of new infections and diagnoses in the next year (for base scenarios), and the change in these relative to a base scenario (for intervention scenarios). These output numbers are for adolescents attending high school, due to the nature of the YRBS survey that underlies many parameters. Thus, they do not reflect all incident infections and diagnoses among adolescents in the jurisdiction.</p></h4>
            </div>
        </div>
        <hr>	

        <div class="row">
            
            <div class="col-md-12">
                <h3>Test</h3>
                <h4>Test</h4>
            </div>
        </div>
        <hr>	
       
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
