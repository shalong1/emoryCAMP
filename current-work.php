<?PHP


	
require_once("./include/membersite_config.php");
if(!$fgmembersite->DBLogin()) 
{
	echo "Error Connecting to Database";
	exit;
}	

function write_item($row_items, $focusarea, $focusid)
	{
		$shortname = str_replace(" ","",$focusarea);
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
			
			if ($focusarea != '')
			{
				echo '<div class="panel panel-default"><div class="panel-heading"><font size="5px"><a class="accordion-toggle" data-toggle="collapse"  href="#collapse'.$shortname.'">'.$focusarea.'</a></font></div><div id="collapse'.$shortname.'" class="panel-collapse collapse';
				
				if (($_SERVER['QUERY_STRING'] == $shortname) or ($_SERVER['QUERY_STRING'] == 'All'))
					echo ' in';
				echo'">';
			}
			echo '<div class="panel"><div class="panel-subheading"><h3 class="panel-title" style="padding: 10px 0px 10px 0px"><a class="accordion-toggle collapsed" data-toggle="collapse" href="#collapse'.$focusid."_".$row_items['id'].'">'.$row_items['title'].'</a></h3></div><div id="collapse'.$focusid."_".$row_items['id'].'" class="panel-collapse collapse" style="padding: 0px 30px;">
			
                
                <h4>';
				echo $row_items['description'];
				echo '</h4><h4>';
				echo GetAuthors($row_items['id']);
						
				echo '</h4>
                </div></div>';
				
	}
 
 	function GetAuthors($id)
	{
		$sql = "SELECT * FROM itemauthors inner join authors on itemauthors.authorid = authors.id where itemauthors.itemid=".$id;
		$itemauthors_results = mysql_query($sql)or die(mysql_error());
		$strAuthors = "";
		while ($row_itemauthors = mysql_fetch_assoc($itemauthors_results)) {
			if ($row_itemauthors['lname'] != "")
				$strAuthors = $strAuthors.$row_itemauthors['lname'];
			if ($row_itemauthors['fname'] != "")
				$strAuthors = $strAuthors." ".substr($row_itemauthors['fname'],0,1);
			//if ($row_itemauthors['mname'] != "")
			//	$strAuthors = $strAuthors." ".substr($row_itemauthors['mname'],0,1);
			
			$strAuthors = $strAuthors.",";
		}
		
		return substr($strAuthors,0,-1);	
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
                <h1 class="page-header">Current Work
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Current Work</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="panel-group" id="accordion">
        <?php
		$hcount = $scount = $acount = $vcount = $tcount = $ocount = 0;
		
		while ($row_items = mysql_fetch_assoc($item_results)) {
			if ($row_items['isHIV'] ==1 )
			{
				if ($hcount == 0)
					$focusarea = 'HIV';
				else
					$focusarea = '';
					
				write_item($row_items, $focusarea,1);
				$hcount++;
			}
		}
		if ($hcount > 0)
			echo '</div></div>';
			
		mysql_data_seek($item_results, 0);
		while ($row_items = mysql_fetch_assoc($item_results)) {	
			if ($row_items['isSTD'] ==1 )
			{
				if ($scount == 0)
					$focusarea = 'Sexually Transmitted Diseases';
				else
					$focusarea = '';
					
				write_item($row_items, $focusarea,2);
				$scount++;
			}
		}
		if ($scount > 0)
			echo '</div></div>';
			
		mysql_data_seek($item_results, 0);
		while ($row_items = mysql_fetch_assoc($item_results)) {	
			
			if ($row_items['isAH'] ==1 )
			{
				if ($acount == 0)
					$focusarea = 'Adolescent Health';
				else
					$focusarea = '';
					
				write_item($row_items, $focusarea,3);
				$acount++;
			}
		}
		if ($acount > 0)
			echo '</div></div>';
			
		mysql_data_seek($item_results, 0);
		while ($row_items = mysql_fetch_assoc($item_results)) {	
			
			if ($row_items['isVH'] ==1 )
			{
				if ($vcount == 0)
					$focusarea = 'Viral Hepatitis';
				else
					$focusarea = '';
					
				write_item($row_items, $focusarea,4);
				$vcount++;
			}
		}
		if ($vcount > 0)
			echo '</div></div>';
			
		mysql_data_seek($item_results, 0);
		while ($row_items = mysql_fetch_assoc($item_results)) {	
			
			if ($row_items['isTB'] ==1 )
			{
				if ($tcount == 0)
					$focusarea = 'Tuberculosis';
				else
					$focusarea = '';
					
				write_item($row_items, $focusarea,5);
				$tcount++;
			}
		}
		if ($tcount > 0)
			echo '</div></div>';
			
		mysql_data_seek($item_results, 0);
		while ($row_items = mysql_fetch_assoc($item_results)) {	
			
			if ($row_items['isHIV'] == 0 && $row_items['isSTD'] == 0 && $row_items['isAH'] == 0 && $row_items['isVH'] == 0 && $row_items['isTB'] == 0)
			{
				if ($ocount == 0)
					$focusarea = 'Other';
				else
					$focusarea = '';
					
				write_item($row_items, $focusarea,0);
				$ocount++;
			}
		}
		if ($ocount > 0)
			echo '</div></div>';
			
		?>
       	</div>
        
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
