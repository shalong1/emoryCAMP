<?PHP
require_once("./include/membersite_config.php");
if(!$fgmembersite->DBLogin()) 
{
	echo "Error Connecting to Database";
	exit;
}	
 
$projectid = substr($_GET[i],0,3);
if ($projectid!= "") {
			
	$sql = "SELECT * FROM projects where id=" . $projectid;

	$results = mysql_query($sql)or die(mysql_error());
	$row_projects = mysql_fetch_array($results);
	
	
	$projectName = ($row_projects['name']);
	$projectTitle = ($row_projects['title']);
	$projectDescription = ($row_projects['description']);
	
	
	$sql = "SELECT * FROM items where isFutureWork=0 and isActive=1 and projectid=" . $projectid . "  ORDER by sortorder, createdate desc";

	$item_results = mysql_query($sql)or die(mysql_error());

	 
 }
 else
 	$fgmembersite->RedirectToURL("index.php");
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
                <h1 class="page-header">
                    <small><?php echo $projectTitle ?></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Project - <?php echo $projectName ?></li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        
        <?php
		//Insert the description and a line break before the loop
		if (strlen($projectDescription) > 0)
			echo '<h5>'.$projectDescription.'</h5><hr/>';
			
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
            <div class="col-md-7">
                <a href="item.php?i='.$row_items['id'].'">
                    <img class="img-responsive img-hover" src="'.$coverimage.'" alt="'.$row_items['title'].'">
                </a>
            </div>
            <div class="col-md-5">
                <h3>'.$row_items['title'].'</h3>
                <h4>'.$fgmembersite->GetAuthors($row_items['id']).'</h4>
                <a class="btn btn-primary" href="item.php?i='.$row_items['id'].'">View Details</i></a>
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
