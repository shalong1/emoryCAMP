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
                <h1 class="page-header">Future Work
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Future Work</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        
        <?php
		while ($row_items = mysql_fetch_assoc($item_results)) {
			$coverimage = "files/".($row_items['cifilename']);
			switch ($row_items['itemtype']) {
				case 1:
					$filetype = "Image";
					break;
				case 2:
					$filetype = "Video";
					break;
				case 3:
					$filetype = "Website";
					break;
				case 4:
					$filetype = "R-Shiney";
					break;
				case 5:
					$filetype = "Manuscript";
					break;
			};
			
			echo '<div class="row">
            
            <div class="col-md-12">
                <h3>'.$row_items['title'].'</h3>
                <h4>'.$row_items['authors'].'</h4>
                
            </div>
        </div>
        <hr>';
		}
		?>
       
       
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
