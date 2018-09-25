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

<head><?php include("header.php"); ?></head>

<body>

    <!-- Navigation -->
    <?php include("menu.php"); ?>

    <!-- Page Content -->
    <div class="container">
		<br>
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">About
                    <small>Partner Institutions</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">About - Partner Institutions</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->


        <!-- Team Members -->
        <a name="dowdy">
        <div class="row">
            <div class="col-md-6">
                    <img class="img-responsive" src="images/Dowdy.jpg" alt="David Dowdy, MD, PhD">
            </div>
            <div class="col-md-6">
                <div class="caption">
                    <h3><b>
                            Johns Hopkins University<br/>
                            Bloomberg School of Public Health
                            <hr>
                     </b></h3>
                        
                     <h3>
                        David Dowdy, MD, PhD<br>
                        <small>JHU Principal Investigator; Economic Modeling Core Director, Scientific Advisory Group</small>
                    </h3>
                    <p>Dr. Dowdy is an Assistant Professor of Epidemiology, practicing general internist, leader in the field of TB and TB/HIV modeling, and Director of the Johns Hopkins Tuberculosis Modeling Group. His expertise combines operational/implementation research, epidemiology, health economics, and mathematical modeling.  He has published >75 peer-reviewed manuscripts, constructed >10 economic models of interventions to fight TB and TB/HIV and has interests in constructing models that account for local distribution of disease, as well as user-friendly models that can be accessed by public health decision-makers.  He , won the International Union Against TB and Lung Disease’s Young Investigator Award in 2012 and leads twice-monthly conference calls (>100 group members) that highlight the importance of linkages between TB modelers and public health practitioners (podcasts available at modeltb.org), which include participants from the CDC and local health departments.</p>
                    
                </div>
            </div>
        </div>
		</a>
        
        <a name="goodreau">
        <div class="row">
            <div class="col-md-6">
                    <img class="img-responsive" src="images/Goodreau.png" alt="Steven Goodreau, PhD">
            </div>
            <div class="col-md-6">
                <div class="caption">
                    <h3><b>
                            University of Washington
                            <hr>
                     </b></h3>
                        
                     <h3>
                        Steven Goodreau, PhD<br>
                        <small>UW Principal Investigator</small>
                    </h3>
                    <p>Dr. Goodreau is an Associate Professor at the University of Washington.  He has key expertise in medical anthropology, modeling of social and sexual networks and viral evolution.</p>
                    
                </div>
            </div>
        </div>
		</a>
         

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
