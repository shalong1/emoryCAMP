<?PHP
require_once("./include/membersite_config.php");
if(!$fgmembersite->DBLogin()) 
{
	echo "Error Connecting to Database";
	exit;
}	
 
 

	$sql = "select itemfiles.*, items.projectid, items.title, items.itemtype, projects.name from itemfiles
inner join items on itemfiles.itemid = items.id
inner join projects on items.projectid = projects.id
where isFutureWork=0 and isActive=1  and length(itemfiles.filename) > 0
order by projectid, itemid";

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
                <h1 class="page-header">Downloads</h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Downloads</li>
                </ol>
                <h4>The following files are available for download.  For more information on each project and individual files, please click on the project title.</h4>
            </div>
        </div>
        <!-- /.row -->

        
        <?php
		echo '<div class="list-group">';
		$currprojectid = 0;
		while ($row_items = mysql_fetch_assoc($item_results)) {
			if (($currprojectid==0) || ($currprojectid != $row_items['projectid']))
			{
				$currprojectid=$row_items['projectid'];
				echo '<a href="project.php?i='.$row_items['projectid'].'" class="list-group-item"><h4>'.$row_items['name'].'</h4></a>';
			}
			echo '
			  <a href="download.php?file='.$row_items['filename'].'" class="list-group-item active">
				<h5 class="list-group-item-heading">'.$row_items['title'].'</h5>
				<p class="list-group-item-text">'.$row_items['filename'].'</p>
			  </a>';
			 			  
		}
		echo '</div>';
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
