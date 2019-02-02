<?PHP
require_once("./include/fg_membersite.php");
error_reporting(E_ALL ^ E_DEPRECATED);

$fgmembersite = new FGMembersite();

//Provide your site name here
$fgmembersite->SetWebsiteName('EmoryCAMP.org');

//Provide the email address where you want to get notifications
//$fgmembersite->SetAdminEmail('emorycamp@emory.edu');
$fgmembersite->SetAdminEmail('shalong@gmail.com');

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.php for the first time
$fgmembersite->InitDB(/*hostname*/'localhost',
                      /*username*/'emorycam_db_usr',
                      /*password*/'emoryCAMP2015!',					  
                      /*database name*/'emorycam_main',
                      /*table name*/'users');

//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$fgmembersite->SetRandomKey('shanetestsite');

$directory='files';

?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77816556-1', 'auto');
  ga('send', 'pageview');

</script>