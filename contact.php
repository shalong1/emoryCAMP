<?PHP
require_once("./include/membersite_config.php");
if(!$fgmembersite->DBLogin()) 
{
	echo "Error Connecting to Database";
	exit;
}	

if(isset($_POST['submitted']))
{
    if ($fgmembersite->MailingListPageUser())
        echo '<div class="alert alert-success" role="alert"><center><strong>Successfully Added to to the mailing list.</strong></center></div>';
    else
        echo '<div class="alert alert-danger" role="alert"><center><strong>This email could not be added</strong></center></div>';
}   
?>


<!DOCTYPE html>
<html lang="en">

<head><?php include("header.php"); ?></head>

<body>
    <style>
        .g-recaptcha {
            display: inline-block;
        }
    </style>
    <script>
		function imNotARobot() {
            document.getElementById("btnMailingList").disabled = false;
        }
    </script>

    <!-- Navigation -->
    <?php include("menu.php"); ?>

    <!-- Page Content -->
    <div class="container">
		<br>
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact Us
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Contact Us</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-md-offset-4 col-md-4 text-center">
                <h3>Join our Mailing List</h3>
            </div>
        </div>

        <form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8' enctype='multipart/form-data'>

        <div class="row">
			<div class="col-md-offset-4 col-md-4 text-center">
				<span class="text-center">
					<div class="controls" style="padding-top:5px">
						<input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name"
						 required data-validation-required-message="Please enter your first name." required>
					</div>
				</span>
            </div>
        </div>
        <div class="row">
			<div class="col-md-offset-4 col-md-4 text-center">
				<span class="text-center">
					<div class="controls" style="padding-top:5px">
						<input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name" required data-validation-required-message="Please enter your last name." required>
					</div>
				</span>
            </div>
        </div>
        <div class="row">
			<div class="col-md-offset-4 col-md-4 text-center">
				<span class="text-center">
					<div class="controls" style="padding-top:5px">
						<input type="email" class="form-control" name="email" id="email" required data-error="Please endter a valid Email Address" data-validation-required-message="Please enter your email address." placeholder="Email" required>
					</div>
				</span>
			</div>
		</div>
        <div class="row">
			<div class="col-md-offset-4 col-md-4 text-center">
				<span class="text-center">
					<div class="controls" style="padding-top:5px">
                        <textarea rows="6" cols="100" class="form-control" name="message" id="message"  maxlength="500" style="resize:none" placeholder="Optional Message"></textarea>
					</div>
				</span>
			</div>
        </div>
        <div class="row" style="padding-bottom:0px">
			<div class="col-md-offset-4 col-md-4">
                What is your focus area of interest?  Check all that apply:
            </div>
        </div>
        <div class="row">
			<div class="col-md-12 text-center">
                
                <input type='checkbox' value='HIV' id='chkInterest' name='chkInterest[]' />  
                <strong>HIV</strong>&nbsp;&nbsp;&nbsp;
                <input type='checkbox' value='STD' id='chkInterest' name='chkInterest[]' />  
                <strong>Sexually Transmitted Disease</strong>&nbsp;&nbsp;&nbsp;
                <input type='checkbox'  value='AH' id='chkInterest' name='chkInterest[]' />  
                <strong>Adolescent Health</strong>&nbsp;&nbsp;&nbsp;
                <input type='checkbox' value='VH' id='chkInterest' name='chkInterest[]' />  
                <strong>Viral Hepatitis</strong>&nbsp;&nbsp;&nbsp;
                <input type='checkbox' value='TB' id='chkInterest' name='chkInterest[]' />  
                <strong>TB</strong>
            </div>
        </div>
        
        <div class="row">
			<div class="col-md-12 text-center" >
                <div class="control-group form-group" >
                    <div class="g-recaptcha" id="rcaptcha" data-callback="imNotARobot" data-sitekey="6Lepsj0UAAAAAJ2JXX-4DYFY54z7itywp6PQCGg9"></div>
                </div>
            </div>
        </div>
        
		<div class="row">
			<div class="col-md-12 text-center" >
				<div class="control-group form-group" >
                    <input type='hidden' name='submitted' id='submitted' value='1'/>
                    <button type="submit" id="btnMailingList" name="btnMailingList" disabled type="button" class="btn btn-primary"  data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Adding Email">Add To Mailing List</button>
				</div>
			</div>
		</div>
        </form>
       
        <!-- /.row -->

        <!-- Footer -->
        <?php include("footer.php"); ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
   <script src="js/jqBootstrapValidation.js"></script>

</body>

</html>
