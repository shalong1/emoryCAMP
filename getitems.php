 <?php
require_once("./include/membersite_config.php");

if(!$fgmembersite->DBLogin())
{
	//$this->HandleError("Database login failed!");
	return false;
}      

$keywordSearch = "";


if ($_GET['st'] == "1")
{
	$keywordSearch = $_GET['q'];
	$sql = "select items.* from items where isActive=1 and (items.title like '%".$fgmembersite->Sanitize($keywordSearch)."%' or description like '%".$fgmembersite->Sanitize($keywordSearch)."%')";
}
else
{
	
	$sql = "SELECT distinct items.* from items ";

	if (strlen($_GET['a']) > 0)
		$sql = $sql." inner join itemauthors ia on items.id = ia.itemid 
		              inner join authors a on ia.authorid = a.id";

	$sql = $sql." where isActive = 1 and
			
			((";
			
			if (strlen($_GET['t']) > 0)
				$sql = $sql." items.title like '%".$fgmembersite->Sanitize($_GET['t'])."%'";
			else
				$sql = $sql." 1=1";
			
			if (strlen($_GET['d']) > 0)
				$sql = $sql." or description like '%".$fgmembersite->Sanitize($_GET['d'])."%'";
			
			$sql = $sql.")";
			
			if (strlen($_GET['a']) > 0)
			{
				$sql = $sql." and( a.fname like '%".$fgmembersite->Sanitize($_GET['a'])."%'";
				$sql = $sql." or a.mname like '%".$fgmembersite->Sanitize($_GET['a'])."%'";
				$sql = $sql." or a.lname like '%".$fgmembersite->Sanitize($_GET['a'])."%')";
			}
			
			
			if ($_GET['p'] != 'All')
				$sql = $sql." and projectid = ".$fgmembersite->Sanitize($_GET['p']);
			
			
			if ($_GET['h'] == 'true' or $_GET['s'] == 'true' or $_GET['ah'] == 'true' or $_GET['vh'] == 'true' or $_GET['tb'] == 'true')
			{
				$sql = $sql."and (";
				
				if ($_GET['h'] == 'true')
					$sql = $sql." isHIV = 1";
				else
					$sql = $sql." 1=0";
					
				if ($_GET['s'] == 'true')
					$sql = $sql." or isSTD = 1";
					
				if ($_GET['ah'] == 'true')
					$sql = $sql." or isAH = 1";
					
				if ($_GET['vh'] == 'true')
					$sql = $sql." or isVH = 1";
					
				if ($_GET['tb'] == 'true')
					$sql = $sql." or istb =1";
					
				$sql = $sql.")";
			}
			
			
			if ($_GET['y1'] == 'true' or $_GET['y2'] == 'true' or $_GET['y3'] == 'true' or $_GET['y4'] == 'true' or $_GET['y5'] == 'true')
			{
				$sql = $sql."and (";
				
				if ($_GET['y1'] == 'true')
					$sql = $sql." fiscalYear = 1";
				else
					$sql = $sql." 1=0";
					
				if ($_GET['y2'] == 'true')
					$sql = $sql." or fiscalYear = 2";
					
				if ($_GET['y3'] == 'true')
					$sql = $sql." or fiscalYear = 3";
					
				if ($_GET['y4'] == 'true')
					$sql = $sql." or fiscalYear = 4";
					
				if ($_GET['y5'] == 'true')
					$sql = $sql." or fiscalYear =5";
					
				$sql = $sql.")";
			}
			 
				
			$sql = $sql.")";	
}
	//echo $sql;
	//exit;
			
	$result = mysql_query($sql,$fgmembersite->connection);							
		
	if (mysql_num_rows($result) > 0)
	{
		echo '<div class="list-group">';
		while($row = mysql_fetch_array($result))
		{
			echo '
			  <a href="item.php?i='.$row['id'].'" class="list-group-item">
				<h4 class="list-group-item-heading">'.$row['title'].'</h4>
				<p class="list-group-item-text">';
				
				echo $fgmembersite->GetAuthors($row['id']);
						
				echo '</p>
			  </a>
			';
		}
		echo '</div>';
	}
	else
		echo "<div class='alert alert-danger' role='alert'> No results Found.".$sql."</div>";

?> 