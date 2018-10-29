<?PHP
require_once("./include/membersite_config.php");
$itemid="";

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

if(isset($_POST[saveAction]))
	$itemid=$_POST['txtitemid'];

else
	$itemid=$_GET['i'];

if ($itemid == "")
	$fgmembersite->RedirectToURL("index.php");
	
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>authors for Item</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
      <script language="javascript" src="calendar.js"></script>

</head>
<body>
<?php include("menu.html"); ?> 
<form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >

<div id='fg_membersite_content'>
<h2>Authors of Items</h2>
Use this page to associate authors to an item.
<p>
<?PHP

	if(isset($_POST[saveAction]))
	{
		
		$sql = "INSERT INTO `itemauthors`(`itemid`,`authorid`)
		VALUES (" . $itemid.",".$_POST['ddlauthor'].")";

		mysql_query($sql) or die(mysql_error());
			
		echo "New author Saved.<br>";
		
	}
	
	 echo "<div id='fg_membersite'>";
	
	 	
	if ($_GET['action'] == "delete") {
		
		$sql = "SELECT * FROM itemauthors ic  inner join authors c on c.id = ic.authorid where ic.id=" . $_GET['id'];

		$results = mysql_query($sql)or die(mysql_error());
		$row_projects = mysql_fetch_array($results);
		
		
		$deleteName = ($row_projects['name']);
	
		 $sql = "DELETE FROM itemauthors where id=" . $_GET['id'];
		 
		 $results = mysql_query($sql)or die(mysql_error());
		 
		 echo "<font color='red'>Sucessfully removed author: ".$deleteName."</font><BR>";
	 }
	 $editID = "";
	 $surveyLabel = "Associate Author";
	 $buttonLabel = "Add This Author";
	
	    


		echo "<strong>".$surveyLabel."</strong><br>";
		echo "<table>
				<tr>
					<td><strong>Name:</strong></td>
					<td colspan='2'>
						<select name='ddlauthor' id='ddlauthor'>";
							$results = mysql_query("SELECT * FROM authors WHERE id NOT IN (SELECT authorid FROM itemauthors where itemid=".$itemid.")  ORDER BY lname, fname")or die(mysql_error());
							$row_count=mysql_num_rows($results);
							while ($row_authorlist = mysql_fetch_assoc($results)) {
								echo "<option value='".$row_authorlist['id']."'";
								
								echo ">".$row_authorlist['lname'].", ".$row_authorlist['fname']."</option>";
							}
											
						echo "</select>
						
					<input type='hidden' value='".$itemid."' id='txtitemid' name='txtitemid' /></td>	
					<input type='hidden' value='edit' id='saveAction' name='saveAction' /></td>
			  </tr>
				";
		
		echo " 
			  <tr><td colspan='7'><hr></td></tr>
			  
				<td colspan='7' align='right'><input type='submit' name='btnSubmitEdit' id='btnSubmitEdit' value='".$buttonLabel."'  /></td>
			  </tr>
			</table>
		<br>";
			
		echo "</div><br>";	
		
	
	$results = mysql_query("SELECT ic.id as id, c.lname  as name FROM itemauthors ic inner join authors c on c.id = ic.authorid where itemid=".$itemid)or die(mysql_error());
	$row_count=mysql_num_rows($results);
	//$row_users = mysql_fetch_array($results);
	
	echo "<table cellpadding='0' cellspacing='0'>
		<tr bgcolor='#33CC66'  align='center'>
			<td width='250px' ><strong>Name</strong></td>
			<td width='250px' ><strong>Action</strong></td>
		</tr>";
	while ($row_itemauthors = mysql_fetch_assoc($results)) {
		echo "<tr>";
		echo "<td>".($row_itemauthors['name'])."</td>";
		echo "<td align='center'><a href='item-authors.php?action=delete&i=".$itemid."&id=".($row_itemauthors['id'])."'>Remove</a></td>";
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
