<?PHP
require_once("./include/membersite_config.php");
if(!$fgmembersite->DBLogin()) 
{
	echo "Error Connecting to Database";
	exit;
}	
 $strTitle = "";
 $focusareaid = substr($_GET[i],0,3);
 if ($focusareaid!= "") {
 	$sql = "SELECT * FROM items where isFutureWork=0 and isActive=1 and is" . $focusareaid."=1 ORDER by sortorder, createdate desc";
	$item_results = mysql_query($sql)or die(mysql_error());
	
	switch ($focusareaid) {
		case "hiv":
			$strTitle = "HIV";
			break;
		case "STD":
			$strTitle = "Sexually Transmitted Disease";
			break;
		case "AH":
			$strTitle = "Adolescent Health";
			break;
		case "VH":
			$strTitle = "Viral Hepatitis";
			break;
		case "TB":
			$strTitle = "Tuberculosis";
			break;
		default:
			$fgmembersite->RedirectToURL("index.php");
	};
			
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
                    <small><?php echo $strTitle ?></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Focus Area - <?php echo $strTitle ?></li>
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
            <div class="col-md-3">
                <a href="item.php?i='.$row_items['id'].'">
                    <img class="img-responsive img-hover" style="max-height:200px" src="'.$coverimage.'" alt="'.$row_items['title'].'">
                </a>
            </div>
            <div class="col-md-9">
                <h3>'.$row_items['title'].'</h3>
                <h4>';
				
				echo $fgmembersite->GetAuthors($row_items['id']);
						
						echo '</h4>

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
