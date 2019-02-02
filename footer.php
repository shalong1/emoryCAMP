<?PHP
if(isset($_POST['submitted']))
  {
	if($_POST['submitted'] == "mailinglist")
    {	
	   if($fgmembersite->Login())
	   {
			$fgmembersite->RedirectToURL("s-dashboard.php");
	   }
	}
  }
?>

<script>
	function imNotARobot() {

			document.getElementById("btnMailingList").disabled = false;
		}

		function addToMailinglist() {

			fname = document.getElementById("mailinglist_firstname").value;
			lname = document.getElementById("mailinglist_lastname").value;
			email = document.getElementById("mailinglist_email").value;

			if ((fname == "") || (lname == "") || (email == "")) {
				document.getElementById("txtAddResult").innerHTML =
					"<div class='alert alert-danger' role='alert'>All fields are required.</div>";
				return;
			} else {

				$(btnMailingList).button('loading');

				if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp = new XMLHttpRequest();
				} else { // code for IE6, IE5
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange = function () {
					if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
						document.getElementById("txtAddResult").innerHTML = xmlhttp.responseText;
						$(btnMailingList).button('reset');
					}
				}

				var paramURL = "";
				paramURL = "addtoml.php?f=" + fname + "&l=" + lname + "&e=" + email;


				xmlhttp.open("GET", paramURL, true);
				xmlhttp.send();

			}
		}
	</script>
	<script>
       function onSubmit(token) {
         document.getElementById("demo-form").submit();
       }
	</script>

	<style>
		.grecaptcha-badge {
			display: none;
		}
    </style>	   
	 
<footer style="background-color:#d9edf7">
	<hr />
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<?php
	if (\strpos($_SERVER['PHP_SELF'], 'contact.php') == false) {
	?>
	<form style="padding:5px" data-toggle="validator" class="form-inline" id='profile' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
		<div class="row">
			<div id="txtAddResult" class="text-center"><b>SIGN UP FOR OUR MAILING LIST</b></div>
			<input type='hidden' name='submitted' id='submitted' value='mailinglist' />
		</div>
		<div class="row">
			<div class="col-md-4">
				<span class="text-center">
					<div class="controls" style="padding-top:5px">
						<input type="text" class="form-control" name="mailinglist_firstname" id="mailinglist_firstname" placeholder="First Name"
						 required data-validation-required-message="Please enter your first name." required>
					</div>
				</span>
			</div>
			<div class="col-md-4">
				<span class="text-center">
					<div class="controls" style="padding-top:5px">
						<input type="text" class="form-control" name="mailinglist_lastname" id="mailinglist_lastname" placeholder="Last Name" required data-validation-required-message="Please enter your last name." required>
					</div>
				</span>
			</div>
			<div class="col-md-4">
				<span class="text-center">
					<div class="controls" style="padding-top:5px">
						<input type="email" class="form-control" name="mailinglist_email" id="mailinglist_email" required data-error="Please endter a valid Email Address" data-validation-required-message="Please enter your email address." placeholder="Email" required>
					</div>
				</span>
			</div>
			
		</div>

		<div class="row">
			<div class="col-xs-12 text-center" >
				<small>This site is protected by reCAPTCHA and the Google 
					<a href="https://policies.google.com/privacy">Privacy Policy</a> and
					<a href="https://policies.google.com/terms">Terms of Service</a> apply.
				</small>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 text-center" >
				<div class="control-group form-group" >
					<button data-badge="inline" class="g-recaptcha btn btn-primary" data-sitekey="6Le5Xo0UAAAAAHN3xP6W0Az3_eC17t-pBujx1pNY" data-callback='onSubmit'  style="margin-bottom:-80px" id="btnMailingList" name="btnMailingList" disabled type="button" class="btn btn-primary" onclick="addToMailinglist()" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Adding Email">Add To Mailing List</button>
				</div>
			</div>
		</div>

		<?php
		}
		?>
		<div class="row" sytle="padding-bottom: 0px;">
		<div class="col-xs-4">
			<div class="row">
				<a href="http://prismhealth.emory.edu/" style="max-width:10px" target="blank">
					<img style="max-width:60px;margin-left:5px;margin-bottom:5px;" class="pull-right img-hover" src="images/logo-PRISM.jpg" alt="PRISM Healthcare">
				</a>
				<a href="http://www.sph.emory.edu/" width="200px" target="blank">
					<img style="max-width:80px;margin-right:5px;" class="pull-right img-hover" src="images/logo-RSPH.png" alt="Rollins School of Public Health">
				</a>
			</div>
		</div>

			
			
			<div class="col-xs-4 text-center">
			<?php
				if (\strpos($_SERVER['PHP_SELF'], 'contact.php') !== false) { 
					echo ' <b>Email:</b> <a href="mailto:emorycamp@emory.edu?Subject=Message From EmoryCAMP.org" target="_top">emorycamp@emory.edu</a>
					</br>
					<b>Address:</b>
					</br>
					1518 Clifton Rd.</br>
					4th Floor GCR</br>
					Atlanta, GA 30322';
				}
			?>
				
			</div>

			<div class="col-xs-4">
				<div class="row" style="margin-right:10px;" >
					<div  style="background:green;">
						<a href="http://www.facebook.com"  target="blank">
							<img style="max-width:40px;margin:2px;" class="pull-left img-hover" src="images/icon_facebook.png" alt="EmoryCAMP Facebook Page">
						</a>
						<a href="http://www.twitter.com"  target="blank">
							<img style="max-width:40px;margin:2px;" class="pull-left img-hover" src="images/icon_twitter.png" alt="EmoryCAMP Twitter Posts">
						</a>
					</div>
				</div>
				<div class="row pull-left" style="margin-top:0px;">
					<strong>#CAMPresearch</strong>
				</div>
			</div>
			
		</div>
	</form>

	<div class="row">
		<div class="col-lg-12" style="padding-top:-20px">
			<p class="text-center">Emory CAMP - Coalition for Applied Modeling for Prevention</p>
		</div>
	</div>
</footer>