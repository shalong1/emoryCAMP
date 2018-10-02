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

    <head>
        <?php include("header.php"); ?>
        <link href="css/style.css" rel="stylesheet">
    </head>

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
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="active">About - Meet the Emory CAMP Team</li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->


            <div class="col-md-10 alert alert-info text-center" role="alert">
               
                <a href="about.php#eu" >Emory University</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="about.php#jh" >Johns Hopkins University</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="about.php#u2" >University of Washington</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="about.php#ua" >University of Albany</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="about.php#a" >Alumni</a>
              
            </div>



            <div class="col-md-10">
                <article id="post-83" class="post-83 page type-page status-publish hentry">
                    <div class="entry-content">                        
                        <div class="team-breadcrumb" id="eu">
                        <h3>Emory University, Rollins School of Public Health</h3>
                            <div class="row">
                              
                               
                            
                                <div class="col-md-4 well team-member">
                                    <img class="img-responsive" style="width: 130px; height: 180px;" src="images/bios/sullivan.jpg"
                                        alt="">
                                    <h4>Patrick Sullivan, DVM, PhD</h4>
                                    <br>Co-Principal Investigator
                                    <br>
                                    <br>
                                    <a href="#" class="bio-link" data-toggle="modal" data-target=".bio-sullivan">
                                        <i class="fa fa-external-link"></i> Read bio</a>&nbsp;&nbsp;&nbsp;
                                   
                                </div>
                                <div class="modal fade bio-sullivan">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">Patrick Sullivan, DVM, PhD</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios/sullivan.jpg"
                                                    alt="Patrick Sullivan, DVM, PhD">
                                                <p>Dr. Sullivan is a Professor in the Department of Epidemiology and has 20 years of experience in infectious disease epidemiology, mostly focused on the use of information from public health data systems to improve responses to the US HIV epidemic. In his work as an EIS officer, an epidemiologist, and a manager in CDC’s Division of HIV/AIDS Prevention, he has supported state and local health departments in the implementation and interpretation of surveillance and programmatic data.  At CDC, he served as Chief of the Behavioral and Clinical Surveillance Branch, Acting Chief of the HIV Incidence and Case Surveillance Branch, and Acting DHAP Deputy Director for Science. He has published >150 manuscripts, including several high-impact models, was a Deputy Editor of Public Health Reports, and currently serves on the boards of PLoS ONE and Annals of Epidemiology. Sullivan is the co-director of the Center for AIDS Research Prevention Core, coordinating dissemination of prevention technologies and HIV prevention training/technical assistance.</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 well team-member">
                                    <img class="img-responsive" style="width: 130px; height: 180px;" src="images/bios/trigg.jpg"
                                        alt="">
                                    <h4>Monica Trigg, MPH</h4>
                                    <br>Project Coordinator, Governance Team
                                    <br>
                                    <br>
                                    <a href="#" class="bio-link" data-toggle="modal" data-target=".bio-trigg">
                                        <i class="fa fa-external-link"></i> Read bio</a>&nbsp;&nbsp;&nbsp;
                                  
                                </div>
                                <div class="modal fade bio-trigg">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">Monica Trigg, MPH</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios/trigg.jpg"
                                                    alt="Monica Trigg, MPH">
                                                <p>Monica is an Associate Director of Programs in the Department of Epidemiology. Before joining Emory, Monica supported a number of global health initiatives with CARE, The Carter Center, and the Peace Corps. These roles took her on many incredible adventures across the world and provided exposure and built expertise in real-world public health concerns and programs through which to address them. She also spent five years with the Georgia Department of Public Health with the Immunization Program, first as a regional program officer and then as the Vaccine Manager, overseeing distribution of federally-purchased vaccine to the state’s 1,500+ immunization providers.</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 well team-member">
                                    <img class="img-responsive" style="width: 130px; height: 180px;" src="images/bios/Hall.jpg"
                                        alt="">
                                    <h4>Eric Hall, MPH</h4>
                                    <br>Data Analyst
                                    <br>
                                    <br>
                                    <a href="#" class="bio-link" data-toggle="modal" data-target=".bio-hall">
                                        <i class="fa fa-external-link"></i> Read bio</a>&nbsp;&nbsp;&nbsp;
                                    
                                </div>
                                <div class="modal fade bio-hall">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">Eric Hall, MPH</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios/Hall.jpg"
                                                    alt="Eric Hall, MPH">
                                                    <p>Eric is a Data Analyst is the Department of Epidemiology. He graduated from Rollins School of Public Health with a Masters of Public Health with a focus in Global Epidemiology in 2015. Previously, he was a Peace Corps volunteer in Swaziland and worked with an international educational organization in New York.</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 well team-member">
                                    <img class="img-responsive" style="width: 130px; height: 180px;" src="images/bios/Jenness.jpg"
                                        alt="">
                                    <h4>Samuel Jenness, PHD</h4>
                                    <br>Assistant Professor
                                    <br>
                                    <br>
                                    <a href="#" class="bio-link" data-toggle="modal" data-target=".bio-jenness">
                                        <i class="fa fa-external-link"></i> Read bio</a>&nbsp;&nbsp;&nbsp;
                                   
                                </div>
                                <div class="modal fade bio-jenness">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">Samuel Jenness, PHD</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios/Jenness.jpg"
                                                    alt="Samuel Jenness, PHD">
                                                    <p>Dr. Jenness is an infectious disease epidemiologist specializing in mathematical and computational approaches for investigating the prevention and treatment of HIV and other sexually transmitted infections. He received his PhD in Epidemiology from the University of Washington. At Rollins School of Public Health, he is the Principal Investigator of the EpiModel Research Lab, which focuses on developing methods and software tools for network-based mathematical modeling of infectious disease transmission dynamics.</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 well team-member">
                                    <img class="img-responsive" style="width: 130px; height: 180px;" src="images/bios/Jones.jpg"
                                        alt="Jeb Jones, PhD, MPH, MS">
                                    <h4>Jeb Jones, PhD, MPH, MS</h4>
                                    <br>Research Assistant Professor
                                    <br>
                                    <br>
                                    <a href="#" class="bio-link" data-toggle="modal" data-target=".bio-jones">
                                        <i class="fa fa-external-link"></i> Read bio</a>&nbsp;&nbsp;&nbsp;
                                   
                                </div>
                                <div class="modal fade bio-jones">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">Jeb Jones, PhD, MPH, MS</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios/Jones.jpg"
                                                    alt="Jeb Jones, PhD, MPH, MS">
                                                    <p>Dr. Jones is a Research Assistant Professor in the Department of Epidemiology. His research focuses on behavioral aspects of HIV risk, risk assessment methods, mobile-based HIV prevention interventions, and mathematical modeling approaches to understanding the HIV epidemic among men who have sex with men. He teaches multiple epidemiological methods courses at Emory and serves as Thesis Advisor for Applied Epidemiology students in Emory's Executive Master of Public Health program. His CAMP projects include network modeling analyses to explore HIV/STI transmission dynamics and small-area estimation of HIV prevalence and diagnosis rates.</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4 well team-member">
                                    <img class="img-responsive" style="height: 180px;" src="images/bios/Fields.jpg"
                                        alt="">
                                    <h4>Megan Fields, MPH</h4>
                                    <br>
                                    <br>
                                    <a href="#" class="bio-link" data-toggle="modal" data-target=".bio-fields">
                                        <i class="fa fa-external-link"></i> Read bio</a>&nbsp;&nbsp;&nbsp;
                                    
                                </div>
                                <div class="modal fade bio-fields">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">Megan Fields, MPH</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios/Fields.jpg"
                                                    alt="Megan Fields, MPH">
                                                <p>Megan joined the PRISM Health team in 2018.  With over 6 years of both international and domestic public health experience, her focus has been on the needs of marginalized communities affected by HIV/AIDS.   During her work with The AIDS Support Organization in Uganda she focused on developing and implementing sustainable solutions to support adolescents. While completing her graduate degree she designed and tested a monitoring and evaluation rubric for a World Health Organization multi-country initiative in the Pacific Islands also focused on youth health outcomes. Megan has extensive community outreach experience having managed Ryan White funded initiatives, performed HIV testing and counseling, and led several prevention efforts.  Megan holds a Bachelor of Science in Interdisciplinary Social Sciences from Florida State University and an MPH with a Global Health concentration from the University of South Florida.</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4 well team-member">
                                    <img class="img-responsive" style=" height: 180px;" src="images/bios/Weiss.jpg"
                                        alt="Kevin Weiss, MPH">
                                    <h4>Kevin Weiss, MPH</h4>
                                    <br>Data Analyst
                                    <br>
                                    <br>
                                    <a href="#" class="bio-link" data-toggle="modal" data-target=".bio-weiss">
                                        <i class="fa fa-external-link"></i> Read bio</a>&nbsp;&nbsp;&nbsp;
                                   
                                </div>
                                <div class="modal fade bio-weiss">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">Kevin Weiss, MPH</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios/Weiss.jpg"
                                                    alt="Kevin Weiss, MPH">
                                                    <p>Kevin joined PRISM Health as a graduate research assistant in 2014, and started as a full time staff member in 2016, focusing on CAMP. He works to support agent-based modeling efforts focusing on HIV and other STIs in MSM. He has worked on multiple projects with PRISM, including AIDSVu, HIVContinuum, Sibanye Health Project, and KPIS. He earned a BS in International Studies and Biology from the University of Michigan and a MPH in Global Epidemiology from the Rollins School of Public Health.</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>
                          
                            </div>
                        </div>


                        

                        <div class="team-breadcrumb" id="ua">
                            <h3>University of Albany School of Public Health</h3>
                            <div class="row">
                                <div class="col-md-4 well team-member">
                                    
                                    <img class="img-responsive" style="width: 130px; height: 180px;" src="images/bios/Rosenberg.jpg"
                                        alt="">
                                    <h4>Eli Rosenberg, PhD</h4>
                                    <br>Co-Principal Investigator
                                    <br>
                                    <br>
                                    <a href="#" class="bio-link" data-toggle="modal" data-target=".bio-rosenberg">
                                        <i class="fa fa-external-link"></i> Read bio</a>&nbsp;&nbsp;&nbsp;
                                    
                                </div>
                                <div class="modal fade bio-rosenberg">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">Eli Rosenberg, PhD</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios/Rosenberg.jpg"
                                                    alt="Eli Rosenberg, PhD">
                                                <p>Dr. Rosenberg is an Associate Professor in the Department of Epidemiology and Biostatistics at the University at Albany School of Public Health. He manages a diverse portfolio of HIV and other infectious disease studies and programs. His expertise is in statistical modeling approaches for prevention and surveillance of HIV, STD, and viral hepatitis. As part of the Governance Team, Rosenberg oversees a number of the modeling activities within CAMP.</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 well team-member">
                                    <img class="img-responsive" style="height: 180px;" src="images/bios/Rosenthal.jpg"
                                        alt="Elizabeth Rosenthal, MPH">
                                    <h4>Elizabeth Rosenthal, MPH</h4>
                                    <br>Senior Research Support Specialist
                                    <br>
                                    <br>
                                    <a href="#" class="bio-link" data-toggle="modal" data-target=".bio-rosenthal">
                                        <i class="fa fa-external-link"></i> Read bio</a>&nbsp;&nbsp;&nbsp;
                                    
                                </div>
                                <div class="modal fade bio-rosenthal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">Elizabeth Rosenthal, MPH</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios/Rosenthal.jpg"
                                                    alt="Elizabeth Rosenthal, MPH">
                                                <p>Elizabeth is a Senior Research Support Specialist in the Department of Biostatistics and Epidemiology at the University at Albany School of Public Health. She graduated from the Rollins School of Public Health with a Masters of Public Health in Epidemiology in 2015. She worked with PRISM Health at Emory on a clinical trial evaluating pleasure, preference, and failure of fitted condoms and on several PrEP studies prior to joining CAMP.</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 well team-member">
                                    <img class="img-responsive" style="height: 180px;" src="images/bios/Tote.jpg"
                                        alt="Katherine Tote, MPH">
                                    <h4>Katherine Tote, MPH</h4>
                                    <br>Senior Research Support Associate II
                                    <br>
                                    <br>
                                    <a href="#" class="bio-link" data-toggle="modal" data-target=".bio-tote">
                                        <i class="fa fa-external-link"></i> Read bio</a>&nbsp;&nbsp;&nbsp;
                                    
                                </div>
                                <div class="modal fade bio-tote">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">Katherine Tote, MPH</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios/Tote.jpg"
                                                    alt="Katherine Tote, MPH">
                                                <p>Katie is a Senior Research Support Associate in the Department of Epidemiology and Biostatistics at the University at Albany School of Public Health. She holds an MPH with a focus in Epidemiology from the Rollins School of Public Health at Emory University and a BA in Sociology from SUNY Plattsburgh. Previously, she has worked at the Carter Center as part of the Mental Health Program, at the Georgia Department of Public Health, and served as an AmeriCorps volunteer contributing to Hurricane Sandy relief efforts in New York City.</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>



                                
                            </div>
                        </div>
                        

                        <div class="team-breadcrumb" id="jh">
                            <h3>Johns Hopkins University, Bloomberg School of Public Health</h3>
                            <div class="row">
                                <div class="col-md-4 well team-member">
                                    
                                    <img class="img-responsive" style="width: 130px; height: 180px;" src="images/bios/Dowdy.jpg"
                                        alt="">
                                    <h4>David Dowdy, MD, PhD</h4>
                                    <br>JHU Principal Investigator; Economic Modeling Core Director, Scientific Advisory Group
                                    <br>
                                    <br>
                                    <a href="#" class="bio-link" data-toggle="modal" data-target=".bio-dowdy">
                                        <i class="fa fa-external-link"></i> Read bio</a>&nbsp;&nbsp;&nbsp;
                                    <a href="https://www.jhsph.edu/faculty/directory/profile/2529/david-w-dowdy" target="_blank">
                                        <i class="fa fa-book"></i> Publications</a>
                                </div>
                                <div class="modal fade bio-dowdy">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">David Dowdy, MD, PhD</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios/Dowdy.jpg"
                                                    alt="David Dowdy, MD, PhD">
                                                <p>Dr. Dowdy is an Assistant Professor of Epidemiology, practicing general internist, leader in the field of TB and TB/HIV modeling, and Director of the Johns Hopkins Tuberculosis Modeling Group. His expertise combines operational/implementation research, epidemiology, health economics, and mathematical modeling. He has published >75 peer-reviewed manuscripts, constructed >10 economic models of interventions to fight TB and TB/HIV and has interests in constructing models that account for local distribution of disease, as well as user-friendly models that can be accessed by public health decision-makers. He , won the International Union Against TB and Lung Disease’s Young Investigator Award in 2012 and leads twice-monthly conference calls (>100 group members) that highlight the importance of linkages between TB modelers and public health practitioners (podcasts available at modeltb.org), which include participants from the CDC and local health departments.</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 well team-member">
                                    
                                    <img class="img-responsive" style="height: 180px;" src="images/bios/Jo.jpg"
                                        alt="Youngji Jo, PhD">
                                    <h4>Youngji Jo, PhD </h4>
                                    <br>Research Associate
                                    <br>
                                    <br>
                                    <a href="#" class="bio-link" data-toggle="modal" data-target=".bio-jo">
                                        <i class="fa fa-external-link"></i> Read bio</a>&nbsp;&nbsp;&nbsp;
                                    
                                </div>
                                <div class="modal fade bio-jo">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">Youngji Jo, PhD </h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios/Jo.jpg"
                                                    alt="Youngji Jo, PhD ">
                                                <p>Youngji Jo is a post-doctoral fellow at the Department of Epidemiology, Johns Hopkins Bloomberg School of Public Health (JHBSPH). She analyzes cost-effectiveness models of tuberculosis and preventive therapy in the four states in the United States.  She earned her Ph.D. in Health Systems Program in the Department of International Health at JHBSPH. Her thesis research was about cost-effectiveness and scalability of an mHealth program, which uses mobile phones to improve pregnancy surveillance and care seeking of essential maternal and newborn health service in rural Bangladesh. She holds M.A. in International Relations/Economics at Johns Hopkins School of Advanced International Studies (SAIS) and a B.E. in Electrical Engineering at Seoul National University in South Korea.</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 well team-member">
                                    
                                    <img class="img-responsive" style="height: 180px;" src="images/bios/Kasaie.png"
                                        alt="Parastu Kasaie, PhD">
                                    <h4>Parastu Kasaie, PhD </h4>
                                    <br>Research Associate
                                    <br>
                                    <br>
                                    <a href="#" class="bio-link" data-toggle="modal" data-target=".bio-kasaie">
                                        <i class="fa fa-external-link"></i> Read bio</a>&nbsp;&nbsp;&nbsp;
                                    
                                </div>
                                <div class="modal fade bio-kasaie">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">Parastu Kasaie, PhD </h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios/Kasaie.png"
                                                    alt="Parastu Kasaie, PhD ">
                                                <p>Dr. Kasaie is a Research Associate faculty at the department of Health, Behavior and Science. Her research focuses on the development and analysis of computer simulation models of infectious disease in human population and implications for policy making. Dr. Kasaie’s research interests include modeling and simulation of social/epidemiological systems, resource allocation, HIV/AIDS, Tuberculosis, biostatistics, public health policy making. Her current research focuses on modeling the epidemic of HIV/AIDS and other Sexually Transmitted Infections (STIs) among Men who have Sex with Men (MSM) in Baltimore City. In this work, Dr. Kasaie investigates the population-level impact of various prevention/control interventions (e.g., Pre-Exposure Prophylaxis) and aims to develop effective strategies for reducing the burden of disease in this population.</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 well team-member">
                                    <img class="img-responsive" style="height: 180px;" src="images/bios/Shah.jpg"
                                        alt="Maunank Shah">
                                    <h4>Maunank Shah</h4>
                                    <br>Associate Professor in the Division of Infectious Diseases
                                    <br>
                                    <br>
                                    <a href="#" class="bio-link" data-toggle="modal" data-target=".bio-shah">
                                        <i class="fa fa-external-link"></i> Read bio</a>&nbsp;&nbsp;&nbsp;
                                    
                                </div>
                                <div class="modal fade bio-shah">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">Maunank Shah</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios/Shah.jpg"
                                                    alt="Maunank Shah">
                                                <p>Dr. Shah is Associate Professor in the Division of Infectious Diseases at Johns Hopkins (JH) School of Medicine, and a faculty member of both the JH Center for Clinical Global Health Education and the JH Center for TB Research. He is Medical Director for the Baltimore City Tuberculosis Program, an attending physician at the Johns Hopkins Hospital, and is board certified in infectious diseases and internal medicine. Dr. Shah’s research involves evaluating and implementing novel HIV and tuberculosis (TB) intervention strategies in resource constrained settings. He evaluates new TB diagnostic technologies and assesses the cost-effectiveness of emerging strategies for HIV and TB care in South Africa, Uganda, India, and Baltimore.  He has expertise in conducting economic evaluations, and he currently leads efforts to develop mathematical transmission models to examine the economic and epidemiological impact of the HIV continuum of care domestically and globally.</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 well team-member">
                                    <img class="img-responsive" style="height: 180px;" src="images/bios/Shrestha.jpg"
                                        alt="Sourya Shrestha, PhD">
                                    <h4>Sourya Shrestha, PhD</h4>
                                    <br>Research Associate
                                    <br>
                                    <br>
                                    <a href="#" class="bio-link" data-toggle="modal" data-target=".bio-shrestha">
                                        <i class="fa fa-external-link"></i> Read bio</a>&nbsp;&nbsp;&nbsp;
                                </div>
                                <div class="modal fade bio-shrestha">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">Sourya Shrestha, PhD</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios/Shrestha.jpg"
                                                    alt="Sourya Shrestha, PhD">
                                                <p>Sourya Shrestha is a Research Associate in the department of Epidemiology at the Johns Hopkins Bloomberg School of Health. He received his doctoral training in applied mathematics from the University of Michigan, and postdoctoral training in ecology and epidemiology of infectious diseases at Michigan and Hopkins, respectively. He is interested in developing mathematical and computational models of epidemiology of infectious diseases, and to ultimately use them to design and inform effective public health interventions. Although he maintains interest in the epidemiology of pneumococcus and dengue virus, tuberculosis (TB) is the primary focus of his current research. Some of his recent and ongoing work includes (i) understanding the heterogeneity of TB in the context of targeted interventions; (ii) modeling dynamics and control of domestic TB in the US (in collaboration with the CDC); and (iii) developing models to inform active case finding efforts in Pakistan and Bangladesh (in collaboration with IRD), and in Nepal (in collaboration with IMPACT TB team).</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="team-breadcrumb" id="uw">
                            <h3>University of Washington</h3>
                            <div class="row">

                                <div class="col-md-4 well team-member">
                                    <img class="img-responsive" style="height: 180px;" src="images/bios/Goodreau.jpg"
                                        alt="Steven Goodreau, PhD">
                                    <h4>Steven Goodreau, PhD</h4>
                                    <br>UW Principal Investigator
                                    <br>
                                    <br>
                                    <a href="#" class="bio-link" data-toggle="modal" data-target=".bio-goodreau">
                                        <i class="fa fa-external-link"></i> Read bio</a>&nbsp;&nbsp;&nbsp;
                                    
                                </div>
                                <div class="modal fade bio-goodreau">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">Steven Goodreau, PhD</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios/Goodreau.jpg"
                                                    alt="Steven Goodreau, PhD">
                                                <p>Steven Goodreau is Professor of Anthropology at the University of Washington, where he is also an Adjunct Professor of Epidemiology and an affiliate of the Center for AIDS and STD.  He is a Biological Anthropologist and modeler, whose work focuses in two related areas: (1) the development of methods and tools for the statistical modeling of social and sexual networks, and (2) the application of these methods to questions related to the epidemiology of HIV and STIs, including the origin of disparities, the impact of interventions, and the nature of pathogen evolution. Most of his work relates to populations of men who have sex with men and, more recently, to adolescents. He is a member of both the statnet and EpiModel development teams.</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>

                                 <div class="col-md-4 well team-member">
                                    <img class="img-responsive" style="height: 180px;" src="images/bios/Hamilton.png"
                                        alt="Deven Hamilton, MPH, PhD">
                                    <h4>Deven Hamilton, MPH, PhD</h4>
                                    <br>Research Scientist
                                    <br>
                                    <br>
                                    <a href="#" class="bio-link" data-toggle="modal" data-target=".bio-hamilton">
                                        <i class="fa fa-external-link"></i> Read bio</a>&nbsp;&nbsp;&nbsp;
                                    
                                </div>
                                <div class="modal fade bio-hamilton">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">Deven Hamilton, MPH, PhD</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios/Hamilton.png"
                                                    alt="Deven Hamilton, MPH, PhD">
                                                <p>Dr. Hamilton is a research scientist in the Center for Studies in Demography and Ecology at the University of Washington.  He has been conducting research in the HIV/STI field for over 15 years in both the US and Africa with a focus on the evaluation of prevention interventions including voluntary medical male circumcision, home-based testing, RNA testing and pre-exposure prophylaxis.  Dr. Hamilton specializes in statistical methods and mathematical modeling approaches to HIV/STI prevention research.  As a member of CAMP Dr. Hamilton has developed network-based mathematical models of HIV transmission among adolescent populations.</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 well team-member">
                                    <img class="img-responsive" style="height: 180px;" src="images/bios/Katz.jpg"
                                        alt="David Katz, PhD, MPH">
                                    <h4>David Katz, PhD, MPH</h4>
                                    <br>Acting Instructor
                                    <br>
                                    <br>
                                    <a href="#" class="bio-link" data-toggle="modal" data-target=".bio-katz">
                                        <i class="fa fa-external-link"></i> Read bio</a>&nbsp;&nbsp;&nbsp;
                                    
                                </div>
                                <div class="modal fade bio-katz">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">David Katz, PhD, MPH</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios/Katz.jpg"
                                                    alt="David Katz, PhD, MPH">
                                                <p>Dr. Katz is an Acting Instructor in the Department of Medicine at the University of Washington and an Epidemiologist for the Public Health – Seattle & King County HIV/STD Program.  His research and public health practice activities focus on HIV/STD partner services, HIV self-testing, and mathematical modeling of HIV prevention strategies for gay, bisexual, and other men who have sex with men. He also serves as a consultant to the World Health Organization Department of HIV/AIDS on HIV testing services.</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-md-4 well team-member">
                                    <img class="img-responsive" style="height: 180px;" src="images/bios/Pollock.jpg"
                                        alt="Emily Pollock">
                                    <h4>Emily Pollock</h4>
                                    <br>PhD Student, Biological Anthropology, University of Washington
                                    <br>
                                    <br>
                                    <a href="#" class="bio-link" data-toggle="modal" data-target=".bio-pollock">
                                        <i class="fa fa-external-link"></i> Read bio</a>&nbsp;&nbsp;&nbsp;
                                    
                                </div>
                                <div class="modal fade bio-pollock">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">Emily Pollock</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios/Pollock.jpg"
                                                    alt="Emily Pollock">
                                                <p>No additional info.</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>
                                

                            </div>
                        </div>




                        <div class="team-breadcrumb" id="a">
                            <h3>Alumni</h3>
                            <div class="row">

                                 <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="images/bios/Cherng.jpg"   alt=">Sarah Cherng, PHD">
                                            <a href="#" class="bio-link read-more" data-toggle="modal" data-target=".bio-cherng">read more</a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title">Sarah Cherng, PHD</h4>
                                            <span class="post">Postdoctoral Fellow</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade bio-cherng">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">Sarah Cherng, PHD</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios/Cherng.jpg"
                                                    alt="Sarah Cherng, PHD">
                                                <p>Sarah is a postdoctoral fellow working on mathematical modeling of TB dynamics and prevention. She received her PhD in Epidemiology from the University of Michigan with certification in Computational Engineering and Discovery. Prior to becoming an infectious disease modeler, Sarah's work utilized agent-based and networks modeling in tobacco control epidemiology, focusing on the effects of friendship networks and feedbacks on smoking behavior diffusion.</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="images/bios/Grey.jpg"   alt="Jeremy Grey, PHD">
                                            <a href="#" class="bio-link read-more" data-toggle="modal" data-target=".bio-grey">read more</a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title">Jeremy Grey, PHD</h4>
                                            <span class="post">Epidemiologist, Centers for Disease Control</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade bio-grey">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">Jeremy Grey, PHD</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios/Grey.jpg"
                                                    alt="Jeremy Grey, PHD">
                                                <p>No additional info.</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>


                                 <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="images/bios/Hankin-Wei.jpg"    alt="Abigail Hankin-Wei, MD, MPHG">
                                            <a href="#" class="read-more bio-link" data-toggle="modal" data-target=".bio-wei">read more</a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title">Abigail Hankin-Wei, MD, MPHG</h4>
                                            <span class="post">Assistant Professor Emergency Medicine, Emory University School of Medicine </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade bio-wei">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">Abigail Hankin-Wei, MD, MPHG</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios/Hankin-Wei.jpg"
                                                    alt="Abigail Hankin-Wei, MD, MPHG">
                                                <p>No additional info.</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="images/bios/McKenney.jpg"   alt="Jennie McKenney, PhD">
                                            <a href="#" class="bio-link read-more" data-toggle="modal" data-target=".bio-mckenney">read more</a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title">Jennie McKenney, PhD</h4>
                                            <span class="post">Post-Doctoral Fellow, Emory University Rollins School of Public Health </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade bio-mckenney">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">Jennie McKenney, PhD</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios/McKenney.jpg"
                                                    alt="Jennie McKenney, PhD">
                                                <p>No additional info.</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                               
                                 <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="images/bios/Risher.jpg"   alt="Kathryn Risher, PhD, MHS">
                                            <a href="#" class="bio-link read-more" data-toggle="modal" data-target=".bio-risher">read more</a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title">Kathryn Risher, PhD, MHS</h4>
                                            <span class="post">Research Fellow, London School of Hygiene and Tropical Medicine</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade bio-risher">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">Kathryn Risher, PhD, MHS</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios/Risher.jpg"
                                                    alt="Kathryn Risher, PhD, MHS">
                                                <p>No additional info.</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>
                            

                                 <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="images/bios/Sanchez.png"   alt="Travis Sanchez, DVM, MPH">
                                            <a href="#" class="bio-link read-more" data-toggle="modal" data-target=".bio-sanchez">read more</a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title">Travis Sanchez, DVM, MPH</h4>
                                            <span class="post">Dissemination Core Member</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade bio-sanchez">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">Travis Sanchez, DVM, MPH</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios//Sanchez.png"
                                                    alt="Travis Sanchez, DVM, MPH">
                                                <p>Dr. Sanchez is an Associate Professor in the Department of Epidemiology. He worked as an epidemiologist in Fulton County, GA, and coordinated Georgia's District Epidemiology program, which involved prevention for HIV/STD/Viral Hepatitis/TB. In 10 years at CDC, he helped to establish 2 supplemental HIV surveillance systems (NHBS and MMP) and supervised teams responsible for determining the cost effectiveness of different models of HIV screening. As Associate Chief for Science in DHAP’s BCSB, he developed manuscript tracking systems and ensured that resources were applied to manuscript completion. Sanchez shepherded key papers on HIV surveillance, epidemiology, and trials results through drafting, clearance, and publication. As ACS, he worked on a model to estimate HIV transmissions among MSM and provided data inputs and advice on DHAP’s resource allocation model.</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>

                                 <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="images/bios/Sharma.jpg"    alt="Akshay Sharma, MBBS, MPH, PHD">
                                            <a href="#" class="read-more bio-link" data-toggle="modal" data-target=".bio-sharma">read more</a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title">Akshay Sharma, MBBS, MPH, PHD</h4>
                                            <span class="post">Assistant Professor, University of Michigan School of Nursing</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade bio-sharma">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">Akshay Sharma, MBBS, MPH, PHD</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios/Sharma.jpg"
                                                    alt="Akshay Sharma, MBBS, MPH, PHD">
                                                <p>No additional info.</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="images/bios/Valencia.jpg"   alt="Rachel Valencia, MPH">
                                            <a href="#" class="bio-link read-more" data-toggle="modal" data-target=".bio-valencia">read more</a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title">Rachel Valencia, MPH</h4>
                                            <span class="post">Data Analyst, Emory University Rollins School of Public Health</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade bio-valencia">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">Rachel Valencia, MPH</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios/Valencia.jpg"
                                                    alt="Rachel Valencia, MPH">
                                                <p>No additional info.</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="images/bios/Wimbly.jpg"   alt="Taylor Wimbly, MPH, CHES">
                                            <a href="#" class="bio-link read-more" data-toggle="modal" data-target=".bio-wimbly">read more</a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title">Taylor Wimbly, MPH, CHES</h4>
                                            <span class="post">Data Analyst, Emory University Rollins School of Public Health</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade bio-wimbly">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">Taylor Wimbly, MPH, CHES</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios/Wimbly.jpg"
                                                    alt="Taylor Wimbly, MPH, CHES">
                                                <p>Taylor Wimbly holds a Bachelor of Arts from Spelman College and a Masters of Public Health from Emory, Rollins School of Public Health. While at Spelman, Wimbly gained a passion for working with individuals infected and affected by HIV/AIDS. She has worked with various populations local and abroad to provide HIV education, testing and counseling. She joined the PRISM team in 2014 as a Graduate Research Assistant on Stronger Together and remained working with the study throughout her time at Rollins. Wimbly also worked in a Gwinnett County high school facilitating an evidence -based sexual education curriculum to 9th grade students. Wimbly currently works as a Project Coordinator on Stronger Together and supports dissemination efforts on the Emory Coalition for Applied Modeling for Prevention (CAMP) project.</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>









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