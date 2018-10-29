<?PHP
require_once("./include/membersite_config.php");

$addResult ="";

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

if (isset($_GET['remove'])) {
	$delete_id = $_GET['remove'];
	$sql = "DELETE FROM pendingEmails where id=" . $delete_id;
	$results = mysql_query($sql)or die(mysql_error());
	
	$addResult = "User deleted from pending email list.";
}

if(isset($_POST['btnRemoveAllEmails']))
{
	$sql = "DELETE FROM pendingEmails";
	$results = mysql_query($sql)or die(mysql_error());
	
	$addResult = "All pending emails have been removed.";
}

if(isset($_POST['btnSendEmails']))
{
	$addResult = "Sending the emails...  ";
	
	$sql = "select * from pendingEmails where isSent=0";
	$results = mysql_query($sql)or die(mysql_error());
	while ($row_users = mysql_fetch_assoc($results)) {
		//print_r("Email:".$row_users["email"]."<br>"); 
  		mysql_query($sql)or die(mysql_error());
		
		
		$emailSubject = $row_users['subject'];
		$emailSubject = str_replace("*firstname*",($row_users['fname']), $emailSubject);
		$emailSubject = str_replace ("*lastname*",($row_users['lname']), $emailSubject);
		$emailSubject = str_replace ("*uniqueurl*",("www.emorycamp.com?i=".$row_users['user_id']), $emailSubject);

		$emailBody = $row_users['body'];
		//$emailBody = str_replace("\n","<br />", $emailBody);
		$emailBody = str_replace ("*firstname*",($row_users['fname']), $emailBody);
		$emailBody = str_replace ("*lastname*",($row_users['lname']), $emailBody);
		$emailBody = str_replace ("*uniqueurl*",("www.emorycamp.com?i=".$row_users['user_id']), $emailBody);
		
		$mailer = new PHPMailer();
		$mailer->CharSet = 'utf-8';
		$mailer->AddAddress($row_users['email'],$row_users['fname']." ".$row_users['lname']);
		$mailer->AddBCC("shalong@gmail.com","Shane Long");
		$mailer->Subject = $emailSubject;
		$mailer->From = "noreply@emorycamp.com";        
		$mailer->Body =$emailBody;

		if(!$mailer->Send()) {
			$errormessage ="Failed sending user reminder email.";
			
			$mailer = new PHPMailer();
			$mailer->CharSet = 'utf-8';
			$mailer->AddAddress("noreply@emorycamp.com","noreply@emorycamp.com");
			$mailer->Subject = "There was an error in the emorycamp processEmails Routine";
			$mailer->From = "noreply@emorycamp.com";        
			$mailer->Body = "Error Message:".$errormessage;
			$mailer->Send();
		}
		else
		{
			$sql="update pendingEmails set isSent=true where id=".$row_users['id'];
			mysql_query($sql)or die(mysql_error());
		}
		// sleep for 1 second
		sleep(1);
	 }
	$addResult = "All pending emails have been sent.";
	
	
}

if(isset($_POST['btnSubmit']))
{	
	$sql = "select * from user";
	
	//print_r("SQL:".$sql."<br>");
	$results = mysql_query($sql)or die(mysql_error());
	$i = 0;
	while ($row_users = mysql_fetch_assoc($results)) {
		$i = $i+1;
		$sql = "insert into pendingEmails (user_id,fname,lname,email,subject,body,createDate,createdBy,isSent) values (".$row_users["id"].", '".$fgmembersite->SanitizeForSQL($row_users["firstName"])."', '".$fgmembersite->SanitizeForSQL($row_users["lastName"])."', '".$fgmembersite->SanitizeForSQL($row_users["email"])."', '".$fgmembersite->SanitizeForSQL($_POST["txtSubject"])."', '".$fgmembersite->SanitizeForSQL($_POST["txtBody"])."', CURDATE(), '".$_SESSION['name_of_user']."',false)";
		//print_r("SQL2:".$sql."<br>"); 
  		mysql_query($sql)or die(mysql_error());
	 }
	 
	 //if ($_POST['chkSendToMe'] == 'yes')
	 if ('no' == 'yes')
	 {
		 $i = $i+1;
		 $sql = "insert into pendingEmails (fname,lname,email,subject,body,createDate,createdBy,isSent) values ('SENDER_FIRST_NAME', 'SENDER_LAST_NAME', '".$fgmembersite->SanitizeForSQL($fgmembersite->UserEmail())."', '".$fgmembersite->SanitizeForSQL($_POST["txtSubject"])."', '".$fgmembersite->SanitizeForSQL($_POST["txtBody"])."', CURDATE(), '".$_SESSION['name_of_user']."',false)"; 
  		mysql_query($sql)or die(mysql_error());
	 }
	 $addResult = $i." emails have been added to the pending emails list.";	
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Email Users</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>

</head>
<body>
<?php include("menu.html"); ?> 
<form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >

<div id='fg_membersite_content'>
<h2>Send Reminder Emails</h2>
Email user in the system (Email all users, or filter on user who haven't taken a particular survey).<br />
<b>All emails will be sent in a nightly batch process to avoid server stress during peak hours.</b><br/>
In the email text area, use <strong>*firstname*</strong>, <strong>*lastname*</strong>, and <strong>*uniqueurl*</strong> to insert the first and last names  of the user and unique URL for invitations.
<p>
<?PHP
	echo "<div id='fg_membersite'>";
	echo "<strong><font color='Red'>".$addResult."</font></strong><BR>";

	echo "<strong>Email Details</strong><br>";
	echo "<table>";
	echo "<tr><td>Send Email To:</td><td><Input type='Radio' checked Name='emailaudience' value='all' >All Active Participants<br/>
	            <!--<Input type = 'Radio' Name ='emailaudience' value= 'survey' >Only users who have not completed the following survey:&nbsp;-->";
	
	
	echo "</td></tr>";
	echo "<tr><td>Email Subject:</td><td><input type='text' style='width:400px' name='txtSubject' value='EmoryCAMP Invitation Reminder' /></td></tr>";
	echo "<tr><td>Email Body:</td><td><textarea style=\"width:900px\"  name=\"txtBody\" >*firstname*,\nThis is a reminder to invite your friends to participate in the EmoryCAMP.  Here is your personalized URL to send to your friends:\n *uniqueurl* \n \nThanks,\nThe EmoryCAMP.com Team\n\n\n\nThis mailbox is not monitored.  If you have any questions or concerns please contact the administrators located on EmoryCAMP.com.</textarea></td></tr>";
	//echo "<tr><td>Send copy to me</td><td><input type='checkbox' id='chkSendToMe' name='chkSendToMe' value='yes' /></td></tr>";
	echo "<tr><td colspan='2'><input type='submit' name='btnSubmit' style='width:200px' id='btnSubmit' value='Create Pending Emails' /></td></tr>";
	echo "</table>";
	echo "</div><br>";
?>
</p>
</div>

<div id='fg_membersite_content'>
<h2>Pending Emails</h2>
<?php

	$sql = "select * from pendingEmails where isSent=0";
	
	//print_r("SQL:".$sql."<br>");
	$result = mysql_query($sql)or die(mysql_error());
	
	
	if (mysql_num_rows($result) > 0){
		echo "<input type='submit' name='btnSendEmails' id='btnSendEmails' value='Send Emails' />&nbsp;&nbsp;&nbsp;&nbsp;
				<input type='submit' name='btnRemoveAllEmails' id='btnRemoveAllEmails' value='Remove All Pending Emails' /><br><br>";
		echo "<table>";
		while($row = mysql_fetch_array($result)){
			echo "<tr><td><a href='emails.php?remove=".$row["id"]."'>Remove</a></td><td>".$row["email"]."</td></tr>";
		}
		echo "</table>";
	}
	else
		echo "There are no new pending emails at this time.";

?>
</div>

</fieldset>
</form>
</div>
</body>
</html>
