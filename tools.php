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
            <div class="col-md-4">
                <img width="100%" alt="tb graph" src="files/tb.PNG"/>
            </div>
            <div class="col-md-8">
                <h3>State-Level Heterogeneity of Tuberculosis Incidence by Risk Factor in the United States</h3>
                <h4>This tool is a web application that shows the amount of "heterogeneity" of tuberculosis incidence for different high-risk populations. Tuberculosis (TB) is a disease caused by bacteria that are spread from person to person through the air. TB usually affects the lungs, but it can also affect other parts of the body, such as the brain, the kidneys, or the spine. In most cases, TB is treatable and curable; however, people with TB can die if they do not get proper treatment.</h4>
                <p> 
                    <a class="btn btn-primary" target="_blank" href="http://modeltb.org/tbheteroinc">modeltb.org</a>
                </p>
            </div>
        </div>
        <hr>	

        <div class="row">
            <div class="col-md-4"><img width="100%" alt="tb graph" src="files/prep tools.PNG"/>
            </div>
            <div class="col-md-8">
                <h3>Estimates of Persons with Indications for Preexposure Prophylaxis (PrEP): A Web-Based Modeling Tool for Public Health Practice</h3>
                <h4>This web-tool provides users the ability to estimate the number of individuals indicated for PrEP. This includes estimates by transmission risk group and estimates by race.  This software tool provides additional opportunities to explore the estimates from the paper, “Estimates of Persons with Indications for Preexposure Prophylaxis by Jurisdiction Transmission Risk Group, Race and Ethnicity.” Smith DK, Van Handel M, Grey J. Estimates of Persons with Indications for Preexposure Prophylaxis by Jurisdiction Transmission Risk Group, and Race/Ethnicity, United States, 2015. Annals of Epidemiology, 2018.</h4>
                <p> 
                    <a class="btn btn-primary" target="_blank" href="https://prepind.shinyapps.io/prepind2/">PrEP Populations</a>
                </p>
            </div>
        </div>
        <hr>	
       

    

        <div class="row">
            <div class="col-md-4"><img width="100%" alt="tb graph" src="files/Capture%202.JPG"/>
            </div>
            <div class="col-md-8">
                <h3> Impact of HIV Pre-Exposure Prophylaxis among MSM in the United States: A Web-Based Modeling Tool for Public Health Practice</h3>
                <h4>This software tool provides additional opportunities to explore the mathematical models of the paper:
Jenness SM, Goodreau SM, Rosenberg E, Beylerian EN, Hoover KW, Smith DK, Sullivan P.(2016). Impact of CDC’s HIV Preexposure Prophylaxis Guidelines among MSM in the United States. Journal of Infectious Diseases 214(12),1800-1807
This tool provides tools to explore the simulation results from the main CDC guidelines modeling scenario (J3) that served as the basis of the main analysis results and sensitivity analyses.  The tool allows users to input their own parameters for PrEP coverage and PrEP adherence into the model and returns plots and summary data tables.</h4>
                <p> 
                    <a class="btn btn-primary" target="_blank" href="https://prism.shinyapps.io/cdc-prep-guidelines/">CDC PrEP Guidelines</a>
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
