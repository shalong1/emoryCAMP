<?PHP
require_once("./include/membersite_config.php");
if(!$fgmembersite->DBLogin()) 
{
	echo "Error Connecting to Database";
	exit;
}	

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
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
            <div class="col-md-4">
                <img width="100%" alt="teen-SPARC STI Prevention and Risk Calculator Logo" src="images/teensparc_logo.png"/>
            </div>
            <div class="col-md-8">
                <h3>teen-SPARC STI Prevention and Risk Calculator</h3>
                <h4><p>The teen-SPARC Excel tool is designed to help public health jurisdictions and other entities explore the potential impact of behavior change on reducing sexually transmitted infections (STIs) among the sexually active high-school-attending adolescent population. It focuses on three STIs: gonorrhea (Neisseria gonorrhea), chlamydia (Chlamydia trachomatis), and HIV (human immunodeficiency virus). It includes three age groups (13-15 year olds, 16-17 year olds, and 18 year olds) and three “sexual partnering groups” (SPGs): males who have sex with males (MSM), males who have sex with females only (MSF), and females who have sex with males (FSM). For HIV, only MSM are modeled.</p>
                    <p>The tool is optimized for use with data from the CDC's Youth Risk Behavior Survey (YRBS), available for many jurisdictions; however it is also structured to allow other jurisdictions to enter local parameters for any data they have while keeping default values for others.  Defaults are derived mostly from the 2015 national YRBS. Key outputs include the expected number of new infections and diagnoses in the next year among high-school-attending adolescents (for base scenarios), and the change in these relative to a base scenario (for intervention scenarios).</p>
                </h4>
                <p> 
                    <a class="btn btn-primary" href="files/teen-SPARC_1.0.clearance.xlsm">teen-SPARC Excel</i></a>
                    <a class="btn btn-primary" href="files/teen-SPARC_Quick_Start_Guide_1.0.clearance.pdf">teen-SPARC Quick Start </i></a>
                    <a class="btn btn-primary" href="files/teen-SPARC_Users_Manual_1.0.clearance.pdf">teen-SPARC Manual</i></a>
                    <a class="btn btn-primary" href="files/teen-SPARC_YRBS_SAS_Code_1.0.clearance.sas">teen-SPARC SAS</i></a>
                    <a class="btn btn-primary" href="files/teen-SPARC_1.0.clearance.zip">Teen-Sparc ZIP (All Files)</i></a>
                </p>
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
