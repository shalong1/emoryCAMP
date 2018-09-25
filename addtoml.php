 <?php
require_once("./include/membersite_config.php");

if(!$fgmembersite->DBLogin())
{
	//$this->HandleError("Database login failed!");
	return false;
}      

if($fgmembersite->MailingListUser())
{
	echo '<div class="alert alert-success" role="alert">This email has been added to the list.</div>';
}      
else
{
	echo '<div class="alert alert-danger" role="alert">We could not add this user.  Please try again later.</div>';
}

	
	
	
?> 