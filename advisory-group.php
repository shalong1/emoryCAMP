<?PHP
require_once("./include/membersite_config.php");
if(!$fgmembersite->DBLogin()) 
{
	echo "Error Connecting to Database";
	exit;
}	
?>

<!DOCTYPE html>
<html lang="en">

<head><?php include("header.php"); ?></head>

<body>

    <!-- Navigation -->
    <?php include("menu.php"); ?>

    <!-- Page Content -->
    <div class="container">
		<br>
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">About
                    <small>Public Health Advisory Group</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">About - Public Health Advisory Group</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        
        <div class="col-lg-12">
        	<div class="alert alert-info" role="alert">
			  *The Public Health Advisory Group, in conjunction with Emory CAMP leadership, gathers once a year in Atlanta to discuss how this group of leaders for state and local health departments can inform model development such that it is impactful and meaningful at local levels.  The next meeting is scheduled for <b>September 27-29, 2017</b> and will include representation from Emory's partner institutions as well as leadership from CDC's center and divisional levels.  Stay tuned for notes from this meeting!  
			</div>
        </div>

		<!-- Intro Content -->
        <div class="col-lg-12">
            <h2 class="page-header">Public Health Advisory Group</h2>
        </div>
        <!-- Team Members -->
    	<a name="kelly">
        <div class="row">
            <div class="col-md-6">
                    <img class="img-responsive" src="images/Kelly.jpg" alt="Jane Kelly, MD (Georgia Department of Public Health)">
            </div>
            <div class="col-md-6">
                <div class="caption">
                	<h3><b>
                            Georgia Department of Public Health
                            <hr>
                     </b></h3>      
                     <h3>
                        Jane Kelly, MD <br>
                        <small>Public Health Advisory Group Director</small>                       
                    </h3>
                  
                    <p>Dr. Kelly is an HIV Medical Epidemiologist in the HIV/AIDS Epidemiology Unit in the Georgia Department of Public Health Epidemiology Section.  She oversees the Georgia site of CDC’s Medical Monitoring Project, and provides consultation and technical assistance to the unit staff on the analysis and interpretation of HIV surveillance registry and special project data.  Kelly has over 30 years of clinical and public health experience in HIV, STI, and TB at the local, state and federal levels, including as a medical officer in the DHAP HIV Incidence and Case Surveillance Branch and as a Tuberculosis Control Officer with Indian Health Service (IHS).</p>
                </div>
            </div>
        </div>
        </a>
        
        <a name="allen">
            <div class="row">
                <div class="col-md-6">
                        <img class="img-responsive" src="images/Allen.jpg" alt="Michelle Allen">
                </div>
                <div class="col-md-6">
                    <div class="caption">
                        <h3><b>Georgia Department of Public Health</b><hr></h3>
                        
                        <h3>Michelle Allen
                        </h3>
                        <p>Michelle L. Allen currently serves as the Infection Section Director for the Georgia Department of Public Health.  Ms. Allen presently oversees Program Collaboration and Service Integration initiatives.  Ms. Allen assists in the development of policies and procedures and directs planning and operational activities.  Ms. Allen is a champion for public health as she continually strives to move the Georgia Department of Public Health from "Good to Great".   Ms. Allen is a past advisory board member of the STD/HIV Prevention Training Center at John Hopkins University. Ms. Allen is the incoming Chair-Elect of the Board of Directors for the National Coalition of STD Directors. Ms. Allen's work has been recognized by several institutions. She has received the Leadership in Health Award by the Greater Atlanta National Pan Hellenic Council, the Gerald Ludd Lifetime Award for Excellence in Support of HIV/AIDS and Community Service by the (NAESM) National Aids Education and Services for Minorities, Inc, and the 2014 Janet Stancliff Epidemiology Award from the Georgia Public Health Association. She was also the recipient of the first annual Brenda Fitzgerald Leadership award from the Georgia Department of Public Health.  Ms. Allen has presented at several national conferences including the National STD Conference, the HIV Prevention Leadership Conference, and the American Public Health Association Conference. Ms. Allen continues to dedicate her heart and passion to Public Health. A native of Atlanta and proud "Georgia Peach", Ms. Allen is a distinguished alum of Georgia Southern University and a member of Sigma Gamma Rho Sorority Inc. She and her husband, Tony live in metro-Atlanta.</p>
                    </div>
                </div>
           </div>
        </a>
        
        <a name="benbow">
            <div class="row">
                <div class="col-md-6">
                        <img class="img-responsive" src="images/Benbow.jpg" alt="Nanette Benbow, MA (Chicago Department of Public Health)">
                </div>
                <div class="col-md-6">
                    <div class="caption">
                        <h3><b>Northwestern University Feinberg School of Medicine</b><hr></h3>
                        
                        <h3>Nanette Benbow, MA
                        </h3>
                        <p>As Deputy Commissioner of the Chicago Department of Public Health’s STI/HIV Services Bureau for three years, Ms. Benbow was responsible for ensuring that federal and local prevention, care and housing dollars were used in the most effective way to decrease the burden of STIs and HIV in the city. An important means for achieving this overarching goal is to fund and implement evidence-based interventions that address Chicago’s STI and HIV epidemics. Close collaboration with local research partners on intervention design and evaluation ensures that our combined expertise and resources will inform and strengthen the local STI/HIV strategy. Ms. Benbow is now at Northwestern University Feinberg School of Medicine as Senior Policy Advisor for the Center for Prevention Implementation Science (Ce-PIM) and the Third Coast Center for AIDS Research, where she continues to foster academic/public health partnerships.</p>
                    </div>
                </div>
           </div>
        </a>
        
         <a name="bertrand">
        <div class="row">
            <div class="col-md-6">
                    <img class="img-responsive" src="images/Bertrand.jpg" alt="Thomas Bertrand">
            </div>
            <div class="col-md-6">
                <div class="caption">
                    <h3><b>Rhode Island Department of Health</b><hr>
                    </h3>
                    
                    <h3>Thomas Bertrand, MPH<br>
                        <small></small>
                    </h3>
                    <p>Thomas Bertrand, MPH, is the Chief of the Center for HIV, STDs, Hepatitis, and TB at the Rhode Island Department of Health.  During his twenty years in public health, Tom was the Executive Director of AIDS Project Rhode Island and the STD Director for the Massachusetts Department of Public Health.  Tom has an undergraduate degree in biology from Vassar College and a masters in public health in epidemiology from the State University of New York at Albany.</p>
                </div>
            </div>
        </div>
    	</a>
    
     
        <a name="blank">
        <div class="row">
            <div class="col-md-6">
                    <img class="img-responsive" src="images/Blank.jpg" alt="Susan Blank">
            </div>
            <div class="col-md-6">
                <div class="caption">
                    <h3><b>NYC Department of Health</b><hr>
                    </h3>
                    
                    <h3>Susan Blank, MD, MPH<br>
                        <small></small>
                    </h3>
                    <p>Dr. Susan Blank is a board-certified Pediatrician, with a Master’s degree in Public Health.  After completing her residency at Yale-New Haven Hospital, she joined CDC’s Epidemic Intelligence Service in Environmental Health.  Thereafter she began her work with the Division of STD Prevention, and was assigned to the NYC Department of Health and Mental Hygiene, where she currently directs the Bureau of STD Control.  The Bureau includes ~ 300 staff, 8 STD clinics, units for Surveillance and Epidemiology, Policy, Assurance, Technology Initiatives, budgeting, and human resources.</p>
					<p>Dr. Blank's areas of interest and contribution have included the use of data – STD clinic data as well as surveillance & case investigation data to inform strategy and activity.  From very early (2004) implementation of a custom-built electronic medical record, to identifying targeting methods to cost-effectively identify acute HIV testing candidates at NYC STD clinics, to most recently, advocating for funding of HIV prevention services in STD clinics.</p>
                </div>
            </div>
        </div>
    	</a>
    	
    	<a name="chiasson">
        <div class="row">
            <div class="col-md-6">
                    <img class="img-responsive" src="images/Chiasson.jpg" alt="Mary Ann Chiasson, DrPH">
            </div>
            <div class="col-md-6">
                <div class="caption">
                    <h3><b>Columbia University Mailman School of Public Health</b><hr>
                    </h3>
                    
                    <h3>Mary Ann Chiasson, DrPH<br>
                        <small></small>
                    </h3>
                    <p>Before serving as Vice President for Research and Evaluation at Public Health Solutions, a New York City non-profit, from 1999 to 2018, Dr. Chiasson served for fourteen years in various capacities at the New York City Department of Health including nine years as an Assistant Commissioner of Health with scientific and administrative responsibility for AIDS Surveillance, HIV/AIDS Research, and Vital Statistics and Epidemiology. Her research interests and expertise include the epidemiology of HIV and STIs, women's reproductive health, and obesity. Since 2001, her HIV/STI related research has focused on the relationship between the Internet and high risk sexual behavior among men who have sex with men (MSM) and how the Internet and other digital media can be harnessed for delivery of HIV prevention interventions. Dr. Chiasson is a Professor of Clinical Epidemiology (in Medicine) at Columbia University Mailman School of Public Health.</p>
                </div>
            </div>
        </div>
    	</a>
    	
    	
     	<a name="douglas">
        <div class="row">
            <div class="col-md-6">
                    <img class="img-responsive" src="images/Douglas.png" alt="John Douglas, MD, PhD">
            </div>
            <div class="col-md-6">
                <div class="caption">
                    <h3><b>
                            Tri-County Health Department
                            <hr>
                     </b></h3>
                        
                     <h3>
                        John Douglas, MD                        
                    </h3>
                    <p>Dr. Douglas is the Executive Director of the Tri-County Department of Health, where he oversees infectious disease programs for the Denver area. He also has served as Director of STD Control and Medical Director of the Denver STD Prevention Training Center, and is a professor at the University of Colorado Health Sciences Center. Beyond is work in Colorado, he is a former Director of the CDC’s Division of STD Prevention. Dr. Douglas is a recognized expert the field of STD prevention, having published over 150 scientific manuscripts or reports. His professional memberships include the Infectious Diseases Society of America, the American STD Association, the American Social Health Association, the American College of Physicians, the American Public Health Association, and the American Society of Microbiology.</p>
                    
                </div>
            </div>
        </div>
        </a>

		
    	<a name="felzien">
        <div class="row">
            <div class="col-md-6">
                    <img class="img-responsive" src="images/Felzien.jpg" alt="Gregory Felzien">
            </div>
            <div class="col-md-6">
                <div class="caption">
                    <h3><b>Georgia Department of Public Health</b><hr>
                    </h3>
                    
                    <h3>Gregory Felzien, MD, AAHIVS<br>
                        <small></small>
                    </h3>
                    <p>Dr. Gregory Felzien received his medical degree from the University Of Colorado School Of Medicine. He went on to complete his internship and residency at Vanderbilt University and pursued further fellowship training in infectious diseases at the Medical University of South Carolina. He holds board certification in both internal medicine and infectious diseases and is certified as an American Academy of HIV specialist.</p> 
<p>In 2008, Dr. Felzien transitioned his practice from Oklahoma, where he was the Division Director for Infectious Diseases working within Indian Health Services, and accepted the position as the Director of the Office of Infectious Diseases and HIV Medicine for the Southeast Health District within the Georgia Department of Public Health. Dr. Felzien practices infectious diseases with an emphasis on HIV, Tb, and Hepatitis.</p>
<p>He is actively involved in the rural community through coordinating HIV awareness and education and writing and speaking at the local, state, and national level. In addition, Dr. Felzien works closely with community partners, such as Georgia Southern University and as a member of the provider advisory board for the CDC’s HIV medical monitoring program.  Early 2014, Dr. Felzien accepted the position as the medical advisor within the Georgia Department of Public Health’s Division of Health Protection/IDI-HIV. As part of this new position, Dr. Felzien continues to care for and focus on the needs of rural HIV positive individuals, those affected by Tb and Hepatitis throughout the state.
</p>
                </div>
            </div>
        </div>
    	</a>
              
        <a name="harvey">
        <div class="row">
            <div class="col-md-6">
                    <img class="img-responsive" src="images/Harvey.jpg" alt="David Harvey, MSW, ACC">
            </div>
            <div class="col-md-6">
                <div class="caption">
                    <h3><b>
                            National Coalition of STD Directors
                            <hr>
                     </b></h3>
                        
                     <h3>
                        David Harvey, MSW, ACC                     
                    </h3>
                    <p>David C. Harvey is executive director of the National Coalition of STD Directors, the national association of state and local public health STD agencies.  During his 30-year public health and nonprofit leadership career, he was founding executive director of the national AIDS Alliance for Children, Youth & Families, President and CEO of Proliteracy, and held positions as project director and policy analyst for the National Disability Rights Network  and the University of Medicine & Dentistry of NJ�s -  National Pediatric & Family HIV Resource Center.  He started out his career as an aide to U.S. Representative Sam Gejdenson (D-CT) and Martin Stevens, M.P. (C-Fulham & Hammersmith) in the House of Commons. He has spoken widely at domestic and international conferences, served on various national boards and blue ribbon panels and in 2012 was appointed by Secretary Clinton to the U.S. National Commission for UNESCO. He is a graduate of Clark University and Catholic University of America and has authored over 20 peer-reviewed articles and chapters and various other publications. He is currently a member of the board of the American Sexually Transmitted Diseases Association.</p>                    
                </div>
            </div>
        </div>
        </a>
        
        <a name="poe">
        <div class="row">
            <div class="col-md-6">
                    <img class="img-responsive" src="images/Poe.jpg" alt="Jonathon Poe, MSSW">
            </div>
            <div class="col-md-6">
                <div class="caption">
                    <h3><b>
                            Texas Department of State Health Services
                            <hr>
                     </b></h3>
                        
                     <h3>
                        Jonathon Poe, MSSW                     
                    </h3>
                    <p>Jonathon Poe is the TB/STD/HIV Epidemiology and Surveillance Branch Manager at the Texas Department of State Health Services, where he oversees core and supplemental TB, HIV, STD and viral hepatitis surveillance activities, including the Dallas National HIV Behavioral Surveillance project, a survey of populations at high risk for HIV, and the Texas Medical Monitoring Project, a survey of people living with HIV. Jonathon began his professional career 25 years ago working on the Dallas Young Men's Survey, a survey of young MSM, and later the Web-Based HIV Behavioral Surveillance project, HIV Incidence and Molecular Surveillance, and HIV prevention program monitoring and evaluation. He received his Bachelor and Master of Social Work degrees from the University of Texas at Arlington.</p>                    
                </div>
            </div>
        </div>
        </a>
        
        <a name="wohlfeiler">
        <div class="row">
            <div class="col-md-6">
                    <img class="img-responsive" src="images/Wohlfeiler.jpg" alt="Dan Wohlfeiler, MJ, MPH">
            </div>
            <div class="col-md-6">
                <div class="caption">
                    <h3><b>
                            Building Healthy Online Communities
                            <hr>
                     </b></h3>
                        
                     <h3>
                        Dan Wohlfeiler, MJ, MPH                       
                    </h3>
                    <p>Dan Wohlfeiler is the founder and director of Building Healthy Online Communities, a collaboration of HIV/STD prevention organizations and the owners of dating and hook-up apps aiming to reduce transmission among gay and bisexual men. Dan directed programs at the STOP AIDS Project in San Francisco from 1990 to 1998, and then served as Chief of the Office of Policy, Planning and Communications at the California Department of Health's STD Control Branch. He has a longstanding interest in structural and network-level interventions to reduce transmission, and in partnering with the private sector. Dan holds Master's degrees in Public Health and Journalism from the University of California, Berkeley.</p>                     
                </div>
            </div>
        </div>
        </a>

        <!-- /.row -->

    
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
