<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

if(!$fgmembersite->DBLogin()) 
{
	echo "Error Connecting to Database";
	exit;
}	

if(isset($_POST['submitted']))
{
   if($fgmembersite->Login())
   {
        $fgmembersite->RedirectToURL("login-home.php");
   }
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Categories</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
      <script language="javascript" src="calendar.js"></script>

</head>
<body>
<?php include("menu.html"); ?> 
<form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >

<div id='fg_membersite_content'>
<h2>Categories</h2>
Use this page to add, edit and Categories.
<p>
<?PHP

	if(isset($_POST[saveAction]))
	{
		if(strlen($_POST[txtID]) > 0)
		{
			if(isset($_POST['chkIsActive']) &&  $_POST['chkIsActive'] == 'yes')
				$isActive = "1";
			else
				$isActive = "0";
				
			$sql = "UPDATE categories SET name='".$_POST['txtName']."'
				,position=".$_POST['txtPosition']." WHERE id=".$_POST[txtID];
			mysql_query($sql) or die(mysql_error());

			echo "Category Saved.<br>";
		}
		else
		{
			if(isset($_POST['chkIsActive']) &&  $_POST['chkIsActive'] == 'yes')
				$isActive = "1";
			else
				$isActive = "0";
			
			$sql = "INSERT INTO `categories`(`name`, `position`)
			VALUES ('".$_POST['txtName']."',
			".$_POST['txtPosition'].")";

			mysql_query($sql) or die(mysql_error());
				
			echo "New Category Saved.<br>";
		}
	}
	
	 echo "<div id='fg_membersite'>";
	 if ($_GET['action'] == "edit") {
		
		$sql = "SELECT * FROM categories where id=" . $_GET['id'];
		
		$results = mysql_query($sql)or die(mysql_error());
		$row_categories = mysql_fetch_array($results);
		
		
		$editName = ($row_categories['name']);
		$editPosition = ($row_categories['position']);
		$editID = ($row_categories['id']);
		$surveyLabel = "Edit Existing Category";
		$buttonLabel = "Submit Changes";
	 }
	 else
	 {	
	 	
	 	if ($_GET['action'] == "delete") {
			
			$sql = "SELECT * FROM categories where id=" . $_GET['id'];
		
			$results = mysql_query($sql)or die(mysql_error());
			$row_categories = mysql_fetch_array($results);
			
			
			$deleteName = ($row_categories['name']);
		
			 $sql = "DELETE FROM categories where id=" . $_GET['id'];
			 $results = mysql_query($sql)or die(mysql_error());
			 
			 echo "<font color='red'>Sucessfully deleted category: ".$deleteName."</font><BR>";
		 }
		 $editID = "";
		 $surveyLabel = "Add New Category";
		 $buttonLabel = "Add New";
	 }
	    


		echo "<strong>".$surveyLabel."</strong><br>";
		echo "<table>
				<tr>
					<td><strong>Name:</strong></td>
					<td><input maxlength='100' style='width:350px' type='text' value='".$editName."' id='txtName' name='txtName' /></td>
					<td><strong>Position:</strong></td>
					<td colspan='2'><input style='width:75px' maxlength='3' type='text' value='".$editPosition."' id='txtPosition' name='txtPosition' /></td>
				</tr>
				";
		
		echo "
			  <td><input type='hidden' value='".$editID."' id='txtID' name='txtID' />
				<input type='hidden' value='edit' id='saveAction' name='saveAction' /></td>
			  </tr>
			  <tr><td colspan='7'><hr></td></tr>
			  
				<td colspan='7' align='right'><input type='submit' name='btnSubmitEdit' id='btnSubmitEdit' value='".$buttonLabel."'  /></td>
			  </tr>
			</table>
		<br>";
			
		echo "</div><br>";	
		
	
	$results = mysql_query("SELECT * FROM categories order by position")or die(mysql_error());
	$row_count=mysql_num_rows($results);
	//$row_users = mysql_fetch_array($results);
	
	echo "<table cellpadding='0' cellspacing='0'>
		<tr bgcolor='#33CC66'  align='center'>
			<td width='180px' ><strong>Category Name</strong></td>
			<td width='50px'><strong>Position</strong></td>
			<td width='100px'><strong>Items in Category</strong></td>
			<td width='100px'><strong>Action</strong></td>
		</tr>";
	while ($row_categories = mysql_fetch_assoc($results)) {
		//output a row here
		$sql = "SELECT count(*) as itemQty FROM items where categoryId=". $row_categories['id'];
		
		$resultsQty = mysql_query($sql)or die(mysql_error());
		$row_qty = mysql_fetch_array($resultsQty);
		
		echo "<tr>";
		echo "<td>".($row_categories['name'])."</td>";
		echo "<td align='center'>".($row_categories['position'])."</td>";
		echo "<td align='center'>".($row_qty['itemQty'])."</td>";
		echo "<td align='center'><a href='categories.php?action=edit&id=".($row_categories['id'])."'>Edit</a> <a href='categories.php?action=delete&id=".($row_categories['id'])."'>Delete</a></td>";
		echo "</tr>";
	}
	
	echo "</table>";

?>
</p>
</div>

</fieldset>
</form>
</div>
</body>
</html>
