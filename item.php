<?PHP
require_once("./include/membersite_config.php");
if(!$fgmembersite->DBLogin()) 
{
	echo "Error Connecting to Database";
	exit;
}	
 
$itemid = substr($_GET[i],0,3);
if ($itemid!= "") {
	$sql = "SELECT * FROM items where isActive=1 and id=" . $itemid;

	$result = mysql_query($sql)or die(mysql_error());
	
	if (mysql_num_rows($result) == 0)
		$fgmembersite->RedirectToURL("index.php");
	
	$item_results = mysql_fetch_array($result);
										
 }
 else
 	$fgmembersite->RedirectToURL("index.php");
	
	
	$coverimagedetail = "files/".($item_results['cidfilename']);
	
	echo $row_items['cidfilename'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include("header.php"); ?>
 
	<script type="application/ld+json">
	 {
		  "@context" : "http://schema.org", 
		  "@type" : "Article", 
		  "name" : "<?PHP echo ($item_results['title']);?>", 
		  "image" : "http://emorycamp.org/<?=$coverimagedetail?>", 
		  "url" : "http://emorycamp.org/item.php?i=<?=$itemid?>" 
	 } 
    </script>
    
</head>

<body>

    <!-- Navigation -->
    <?php include("menu.php"); ?>

    <!-- Page Content -->
    <div itemscope itemtype="http://schema.org/Article" class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
            <br/><br/><br/>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="project.php?i=<?=$item_results['projectid']?>">Projects</a></li>
                    <li class="active">Item Details Page</li>
                </ol>
                <h1 class="page-header"><span itemprop="name"><?PHP echo ($item_results['title']);?></span>
                <br/>
                <small><?PHP echo $fgmembersite->GetAuthors($item_results['id']) ?></small></h1>
            </div>
        </div>
        
        <!-- /.row -->
		<form name="change">
        
        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-6">
                <?PHP echo '<img itemprop="image" class="img-responsive img-hover" src="'.$coverimagedetail.'" alt="'.$item_results['title'].'">'; ?>
            </div>

            <div class="col-md-6">
                <h4><?PHP 
						if (strlen($item_results['journalname']) > 0)
							echo $item_results['journalname'] ." | ";
						
						 echo $item_results['journaldate'];
					?>
                </h4>
                <p><?PHP echo $item_results['description'] ?></p>
				<?PHP
					if (strlen($item_results['journalurl']) > 0)
                		echo '<a class="btn btn-primary" href="'. $item_results['journalurl']. '">Read Article</i></a>';
					if (strlen($item_results['toolurl']) > 0)
                		echo '<a class="btn btn-primary" target="_blank" href="'. $item_results['toolurl']. '">Use The Tool</i></a>';	
						
				?>
                
                <br/>
                <?PHP
                $sql = "SELECT * FROM itemfiles where itemid=" . $itemid;					
					$results = mysql_query($sql)or die(mysql_error());
					$row_count=mysql_num_rows($results);
					if ($row_count > 0)
					echo '<br/><b>Downloadable Files:</b><br/>';
					
					while ($row_itemfile = mysql_fetch_assoc($results)) {
						echo "<a href='download.php?file=".$row_itemfile['filename']."' download>".$row_itemfile['filename']."</a><br/>";
					}
				
				
					if ($item_results['itemtype'] == "4")   //RShiney
						{
							$sql = "SELECT * FROM statefiles";					
							$results = mysql_query($sql)or die(mysql_error());
							$row_count=mysql_num_rows($results);
							if ($row_count > 0)
							
							
							
					
							echo '<p><div class="form-group">
								<SELECT class="form-control" NAME="ddlStates" ONCHANGE="document.getElementById(\'ifDetails\').src = this.options[this.selectedIndex].value">';
				
				
				while ($row_statefile = mysql_fetch_assoc($results)) {
				echo '<option value="files/states/'.$row_statefile['htmlfile'].'">'.$row_statefile['statename'].'</option>';
				}
				
				echo '</SELECT>
					</div></p>';
						
						}
				?>
                
                
            </div>

        </div>
        
        <?PHP
        if ($item_results['itemtype'] == "4")   //RShiney
		{
			
			echo '<div>
				<div class="col-md-12">
					
					<iframe id="ifDetails" name="ifDetails" src="files/states/1_alabama_profile_2013.html" width="100%" height="1000px"></iframe>
				</div>
			</div>';
		}
        ?>
        </form>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <?php include("footer.php"); ?>

    </div>
    <meta itemprop="url" content="http://www.emorycamp.org/item.php?i=<?=$itemid?>"></div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
