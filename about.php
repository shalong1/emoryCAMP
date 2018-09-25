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
                    <small>Meet the Emory CAMP Team</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">About - Meet the Emory CAMP Team</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

		<!-- Intro Content -->
        <div class="col-lg-12">
            <h2 class="page-header">Emory CAMP Team</h2>
        </div>
        
        <a name="rosenberg">
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="images/Rosenberg.png" alt="Eli Rosenberg, PhD">
            </div>
            <div class="col-md-6">
                <div class="caption">
                    <h3>Eli Rosenberg, PhD<br>
                        <small>Co-Principal Investigator</small>
                    </h3>
                    <p>Dr. Rosenberg is an Associate Professor in the Department of Epidemiology and Biostatistics at the University at Albany School of Public Health. He manages a diverse portfolio of HIV and other infectious disease studies and programs. His expertise is in statistical modeling approaches for prevention and surveillance of HIV, STD, and viral hepatitis. As part of the Governance Team, Rosenberg oversees a number of the modeling activities within CAMP.</p>
                </div>
            </div>
        </div>
        </a>
        
        
        <a name="sullivan">
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="images/Sullivan.jpg" alt="Patrick Sullivan, DVM, PhD">
            </div>
            <div class="col-md-6">
                <div class="caption">
                    <h3>Patrick Sullivan, DVM, PhD<br>
                        <small>Co-Principal Investigator</small>
                    </h3>
                    <p>Dr. Sullivan is a Professor in the Department of Epidemiology and has 20 years of experience in infectious disease epidemiology, mostly focused on the use of information from public health data systems to improve responses to the US HIV epidemic. In his work as an EIS officer, an epidemiologist, and a manager in CDC’s Division of HIV/AIDS Prevention, he has supported state and local health departments in the implementation and interpretation of surveillance and programmatic data.  At CDC, he served as Chief of the Behavioral and Clinical Surveillance Branch, Acting Chief of the HIV Incidence and Case Surveillance Branch, and Acting DHAP Deputy Director for Science. He has published >150 manuscripts, including several high-impact models, was a Deputy Editor of Public Health Reports, and currently serves on the boards of PLoS ONE and Annals of Epidemiology. Sullivan is the co-director of the Center for AIDS Research Prevention Core, coordinating dissemination of prevention technologies and HIV prevention training/technical assistance.</p>
                </div>
            </div>
        </div>
        </a>
        
        <a name="sanchez">
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="images/Sanchez.jpg" alt="Travis Sanchez, DVM, MPH">
            </div>
            <div class="col-md-6">
                <div class="caption">
                    <h3>Travis Sanchez, DVM, MPH<br>
                        <small>Dissemination Core Member</small>
                    </h3>
                    <p>Dr. Sanchez is an Associate Professor in the Department of Epidemiology. He worked as an epidemiologist in Fulton County, GA, and coordinated Georgia's District Epidemiology program, which involved prevention for HIV/STD/Viral Hepatitis/TB. In 10 years at CDC, he helped to establish 2 supplemental HIV surveillance systems (NHBS and MMP) and supervised teams responsible for determining the cost effectiveness of different models of HIV screening. As Associate Chief for Science in DHAP’s BCSB, he developed manuscript tracking systems and ensured that resources were applied to manuscript completion. Sanchez shepherded key papers on HIV surveillance, epidemiology, and trials results through drafting, clearance, and publication. As ACS, he worked on a model to estimate HIV transmissions among MSM and provided data inputs and advice on DHAP’s resource allocation model.</p>
                </div>
            </div>
        </div>
        </a>
         
        <a name="jenness">
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="images/Jenness.jpg" alt="Samuel Jenness, PHD">
            </div>
            <div class="col-md-6">
                <div class="caption">
                    <h3>Samuel Jenness, PHD<br>
                        <small>Assistant Professor</small>
                    </h3>
                    <p>Dr. Jenness is an infectious disease epidemiologist specializing in mathematical and computational approaches for investigating the prevention and treatment of HIV and other sexually transmitted infections. He received his PhD in Epidemiology from the University of Washington. At Rollins School of Public Health, he is the Principal Investigator of the EpiModel Research Lab, which focuses on developing methods and software tools for network-based mathematical modeling of infectious disease transmission dynamics.</p>
                </div>
            </div>
        </div>
        </a>
         
        <a name="jones">
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="images/Jones.jpg" alt="Jeb Jones, PhD, MPH, MS">
            </div>
            <div class="col-md-6">
                <div class="caption">
                    <h3>Jeb Jones, PhD, MPH, MS<br>
                        <small>Research Assistant Professor</small>
                    </h3>
                    <p>Dr. Jones is a Research Assistant Professor in the Department of Epidemiology. His research focuses on behavioral aspects of HIV risk, risk assessment methods, mobile-based HIV prevention interventions, and mathematical modeling approaches to understanding the HIV epidemic among men who have sex with men. He teaches multiple epidemiological methods courses at Emory and serves as Thesis Advisor for Applied Epidemiology students in Emory's Executive Master of Public Health program. His CAMP projects include network modeling analyses to explore HIV/STI transmission dynamics and small-area estimation of HIV prevalence and diagnosis rates.</p>
                </div>
            </div>
        </div>
        </a>
        
        <a name="trigg">
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="images/Trigg.jpg" alt="Monica Trigg, MPH">
            </div>
            <div class="col-md-6">
                <div class="caption">
                    <h3>Monica Trigg, MPH<br>
                        <small>Project Coordinator, Governance Team</small>
                    </h3>
                    <p>Monica is an Associate Director of Programs in the Department of Epidemiology.  Before joining Emory, Monica supported a number of global health initiatives with CARE, The Carter Center, and the Peace Corps.  These roles took her on many incredible adventures across the world and provided exposure and built expertise in real-world public health concerns and programs through which to address them.  She also spent five years with the Georgia Department of Public Health with the Immunization Program, first as a regional program officer and then as the Vaccine Manager, overseeing distribution of federally-purchased vaccine to the state’s 1,500+ immunization providers.</p>
                </div>
            </div>
        </div>
        </a>
        
        <a name="hall">
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="images/Hall.jpg" alt="Eric Hall, MPH">
            </div>
            <div class="col-md-6">
                <div class="caption">
                    <h3>Eric Hall, MPH<br>
                        <small>Data Analyst</small>
                    </h3>
                    <p>Eric is a Data Analyst is the Department of Epidemiology. He graduated from Rollins School of Public Health with a Masters of Public Health with a focus in Global Epidemiology in 2015. Previously, he was a Peace Corps volunteer in Swaziland and worked with an international educational organization in New York.</p>
                </div>
            </div>
        </div>
        </a>
            
        <a name="weiss">
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="images/Weiss.jpg" alt="Kevin Weiss, MPH">
            </div>
            <div class="col-md-6">
                <div class="caption">
                    <h3>Kevin Weiss, MPH<br>
                        <small>Data Analyst</small>
                    </h3>
                    <p>Kevin joined PRISM Health as a graduate research assistant in 2014, and started as a full time staff member in 2016, focusing on CAMP. He works to support agent-based modeling efforts focusing on HIV and other STIs in MSM. He has worked on multiple projects with PRISM, including AIDSVu, HIVContinuum, Sibanye Health Project, and KPIS. He earned a BS in International Studies and Biology from the University of Michigan and a MPH in Global Epidemiology from the Rollins School of Public Health.</p>
                </div>
            </div>
        </div>
        </a>
       
        <a name="wimbly">
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="images/Wimbly.jpg" alt="Taylor Wimbly, MPH, CHES">
            </div>
            <div class="col-md-6">
                <div class="caption">
                    <h3>Taylor Wimbly, MPH, CHES<br>
                        <small>Public Health Program Associate</small>
                    </h3>
                    <p>Taylor Wimbly holds a Bachelor of Arts from Spelman College and a Masters of Public Health from Emory, Rollins School of Public Health. While at Spelman, Wimbly gained a passion for working with individuals infected and affected by HIV/AIDS. She has worked with various populations local and abroad to provide HIV education, testing and counseling. She joined the PRISM team in 2014 as a Graduate Research Assistant on Stronger Together and remained working with the study throughout her time at Rollins. Wimbly also worked in a Gwinnett County high school facilitating an evidence -based sexual education curriculum to 9th grade students. Wimbly currently works as a Project Coordinator on Stronger Together and supports dissemination efforts on the Emory Coalition for Applied Modeling for Prevention (CAMP) project.</p>
                </div>
            </div>
        </div>
        </a>
            
            <div class="col-lg-12">
                <h2 class="page-header">Scientific Advisory Group</h2>
            </div>
        
        
        <a name="curran">
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="images/Curran.jpg" alt="James Curran, MD">
            </div>
            <div class="col-md-6">
                <div class="caption">
                    <h3>James Curran, MD<br>
                        <small>Scientific Advisory Group Co-director</small>
                    </h3>
                    <p>Dr. Curran is Dean and Professor of Epidemiology of the Rollins School of Public Health and Principal Investigator of the Emory Center for AIDS Research.  He has authored > 270 scientific publications and was elected to the Institute of Medicine of the National Academy of Sciences in 1993.  He served as Director of the CDC AIDS Activity, Director of the HIV/AIDS Division, Assistant Surgeon General, and has been a member of the Board of Public Health in the State of Georgia since 2011.</p>
                </div>
            </div>
		</div>
        </a>
        
        
        <a name="delrio">
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="images/del Rio.jpg" alt="Carlos del Rio, MD">
            </div>
            <div class="col-md-6">
                <div class="caption">
                    <h3>Carlos del Rio, MD<br>
                        <small>Clinical Core Co-director, Scientific Advisory Group</small>
                    </h3>
                    <p>Dr. del Rio is Professor and Chair of the Hubert Department of Global Health and a Professor of Infectious Diseases. He is also co-Director of the Emory Center for AIDS Research (CFAR). Dr. del Rio is a member of the Monitoring of the AIDS Pandemic (MAP) Network, Board of the IAS-USA, DHHS Antiretroviral Treatment Guidelines, and Board of the HIVMA; Senior Clinical Editor for AIDS Research and Human Retroviruses; and an Associate Editor of AIDS Clinical Care. His focus is access to care and healthcare utilization among HIV-infected persons in the US.</p>
                </div>
            </div>
        </div>
        </a>
        
        <a name="morris">
        <div class="row">
            <div class="col-md-6">
               <img class="img-responsive" src="images/Morris.jpg" alt="Martina Morris, PhD">
            </div>
            <div class="col-md-6">
                <div class="caption">
                    <h3>Martina Morris, PhD<br>
                        <small>Scientific Advisory Group</small>
                    </h3>
                    <p>Dr. Morris is a Professor at the University of Washington. She is an expert in population dynamics, sexual networks, and HIV/STI transmission models.</p>
                    
                </div>
            </div>
        </div>
        </a>
        
        <a name="holtgrave">
        <div class="row">
            <div class="col-md-6">
                 <img class="img-responsive" src="images/Holtgrave.jpg" alt="David Holtgrave, PhD ">
            </div>
            <div class="col-md-6"> 
				<div class="caption">
                    <h3>David Holtgrave, PhD <br>
                        <small>Scientific Advisory Group Co-Director, Economic Modeling Core</small>
                    </h3>
                    <p>Dr. Holtgrave is Professor, and Chair of the Department of Health, Behavior, and Society at Johns Hopkins University. He has held many CDC leadership positions, including Director of the Division of HIV/AIDS Prevention Intervention Research & Support. Dr. Holtgrave is a leading authority on economic evaluation and planning of HIV prevention programs and has extensive experience working with local public health departments to apply economic modeling to optimize HIV prevention resource allocation. He co-led an enhanced comprehensive HIV prevention plan (ECHHP) for the Baltimore-Towson MSA, which allocated $6 million in federal funds across interventions to avert the highest possible number of infections over 4 years, and has used mathematical modeling and economic evaluation methods to assess the effectiveness and cost-effectiveness of strategies designed to meet the goals of the National HIV/AIDS Strategy in the United States.</p>
                        
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
