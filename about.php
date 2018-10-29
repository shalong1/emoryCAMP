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
                              
                               
                                <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="images/bios/sullivan.jpg"   alt="Patrick Sullivan, DVM, PhD">
                                            <a href="#" class="bio-link read-more" data-toggle="modal" data-target=".bio-sullivan">read more</a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title">Patrick Sullivan, DVM, PhD</h4>
                                            <span class="post">Co-Principal Investigator</span>
                                        </div>
                                    </div>
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
                               
                                <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="images/bios/Trigg.jpg"   alt="Monica Trigg, MPH">
                                            <a href="#" class="bio-link read-more" data-toggle="modal" data-target=".bio-trigg">read more</a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title">Monica Trigg, MPH</h4>
                                            <span class="post">Project Coordinator, Governance Team</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade bio-trigg">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">Monica Trigg, MPH</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios/Trigg.jpg"
                                                    alt="Monica Trigg, MPH">
                                                <p>Monica is an Associate Director of Programs in the Department of Epidemiology. Before joining Emory, Monica supported a number of global health initiatives with CARE, The Carter Center, and the Peace Corps. These roles took her on many incredible adventures across the world and provided exposure and built expertise in real-world public health concerns and programs through which to address them. She also spent five years with the Georgia Department of Public Health with the Immunization Program, first as a regional program officer and then as the Vaccine Manager, overseeing distribution of federally-purchased vaccine to the state’s 1,500+ immunization providers.</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="images/bios/Hall.jpg"   alt="Eric Hall, MPH">
                                            <a href="#" class="bio-link read-more" data-toggle="modal" data-target=".bio-hall">read more</a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title">Eric Hall, MPH</h4>
                                            <span class="post">Data Analyst</span>
                                        </div>
                                    </div>
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
                                                    <p>Eric is a Data Analyst at the Department of Epidemiology. He graduated from Rollins School of Public Health with a Masters of Public Health with a focus in Global Epidemiology in 2015. Previously, he was a Peace Corps volunteer in Swaziland and worked with an international educational organization in New York.</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="images/bios/Jenness.jpg"   alt="Samuel Jenness, PHD">
                                            <a href="#" class="bio-link read-more" data-toggle="modal" data-target=".bio-jenness">read more</a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title">Samuel Jenness, PHD</h4>
                                            <span class="post">Assistant Professor</span>
                                        </div>
                                    </div>
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

                                <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="images/bios/Jones.jpg"   alt="Jeb Jones, PhD, MPH, MS">
                                            <a href="#" class="bio-link read-more" data-toggle="modal" data-target=".bio-jones">read more</a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title">Jeb Jones, PhD, MPH, MS</h4>
                                            <span class="post">Research Assistant Professor</span>
                                        </div>
                                    </div>
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

                                <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="images/bios/Fields.jpg"   alt="Megan Fields, MPH">
                                            <a href="#" class="bio-link read-more" data-toggle="modal" data-target=".bio-fields">read more</a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title">Megan Fields, MPH</h4>
                                            <span class="post"></span>
                                        </div>
                                    </div>
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

                                <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="images/bios/Weiss.jpg"   alt="Kevin Weiss, MPH">
                                            <a href="#" class="bio-link read-more" data-toggle="modal" data-target=".bio-weiss">read more</a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title">Kevin Weiss, MPH</h4>
                                            <span class="post"></span>
                                        </div>
                                    </div>
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
                                            <div class="modal-footer">Data Analyst</div>
                                        </div>
                                    </div>
                                </div>
                          
                            </div>
                        </div>


                        

                        <div class="team-breadcrumb" id="ua">
                            <h3>University of Albany School of Public Health</h3>
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="images/bios/Rosenberg.jpg"   alt="Eli Rosenberg, PhD">
                                            <a href="#" class="bio-link read-more" data-toggle="modal" data-target=".bio-rosenberg">read more</a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title">Eli Rosenberg, PhD</h4>
                                            <span class="post">Co-Principal Investigator</span>
                                        </div>
                                    </div>
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

                                <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="images/bios/Rosenthal.jpg"   alt="Elizabeth Rosenthal, MPH">
                                            <a href="#" class="bio-link read-more" data-toggle="modal" data-target=".bio-rosenthal">read more</a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title">Elizabeth Rosenthal, MPH</h4>
                                            <span class="post">Senior Research Support Specialist</span>
                                        </div>
                                    </div>
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
                               
                                <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="images/bios/Tote.jpg"   alt="Katherine Tote, MPH">
                                            <a href="#" class="bio-link read-more" data-toggle="modal" data-target=".bio-tote">read more</a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title">Katherine Tote, MPH</h4>
                                            <span class="post">Senior Research Support Associate II</span>
                                        </div>
                                    </div>
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
                                
                                <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="images/bios/Dowdy.jpg"   alt="David Dowdy, MD, PhD">
                                            <a href="#" class="bio-link read-more" data-toggle="modal" data-target=".bio-dowdy">read more</a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title">David Dowdy, MD, PhD</h4>
                                            <span class="post">
                                                JHU Principal Investigator; Economic Modeling Core Dir., Scientific Advisory Group<br>
                                                <a href="https://www.jhsph.edu/faculty/directory/profile/2529/david-w-dowdy" target="_blank"><i class="fa fa-book"></i> Publications</a>
                                            </span>
                                        </div>
                                    </div>
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

                                <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="images/bios/Jo.jpg"   alt="Youngji Jo, PhD">
                                            <a href="#" class="bio-link read-more" data-toggle="modal" data-target=".bio-jo">read more</a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title">Youngji Jo, PhD</h4>
                                            <span class="post">Research Associate</span>
                                        </div>
                                    </div>
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

                                <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="images/bios/Kasaie.png"   alt="Parastu Kasaie, PhD">
                                            <a href="#" class="bio-link read-more" data-toggle="modal" data-target=".bio-kasaie">read more</a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title">Parastu Kasaie, PhD</h4>
                                            <span class="post">Research Associate</span>
                                        </div>
                                    </div>
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

                                <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="images/bios/Shah.jpg"   alt="Maunank Shah">
                                            <a href="#" class="bio-link read-more" data-toggle="modal" data-target=".bio-shah">read more</a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title">Maunank Shah</h4>
                                            <span class="post">Associate Professor in the Division of Infectious Diseases</span>
                                        </div>
                                    </div>
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

                                <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="images/bios/Shrestha.jpg"   alt="Sourya Shrestha, PhD">
                                            <a href="#" class="bio-link read-more" data-toggle="modal" data-target=".bio-shrestha">read more</a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title">Sourya Shrestha, PhD</h4>
                                            <span class="post">Research Associate</span>
                                        </div>
                                    </div>
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

                                
                                <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="images/bios/Goodreau.jpg"   alt="Steven Goodreau, PhD">
                                            <a href="#" class="bio-link read-more" data-toggle="modal" data-target=".bio-goodreau">read more</a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title">Steven Goodreau, PhD</h4>
                                            <span class="post">UW Principal Investigator</span>
                                        </div>
                                    </div>
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
                                                <p>Steven Goodreau is Professor of Anthropology at the University of Washington, where he is also an Adjunct Professor of Epidemiology and an affiliate of the Center for AIDS and STD. He is a Biological Anthropologist and modeler, whose work focuses in two related areas: (1) the development of methods and tools for the statistical modeling of social and sexual networks, and (2) the application of these methods to questions related to the epidemiology of HIV and STIs, including the origin of disparities, the impact of interventions, and the nature of pathogen evolution. Most of his work relates to populations of men who have sex with men and, more recently, to adolescents. He is a member of both the statnet and EpiModel development teams.</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="images/bios/Hamilton.png"   alt="Deven Hamilton, MPH, PhD">
                                            <a href="#" class="bio-link read-more" data-toggle="modal" data-target=".bio-hamilton">read more</a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title">Deven Hamilton, MPH, PhD</h4>
                                            <span class="post">Research Scientist</span>
                                        </div>
                                    </div>
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

                               
                                <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="images/bios/Katz.jpg"   alt="David Katz, PhD, MPH">
                                            <a href="#" class="bio-link read-more" data-toggle="modal" data-target=".bio-katz">read more</a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title">David Katz, PhD, MPH</h4>
                                            <span class="post">Acting Instructor</span>
                                        </div>
                                    </div>
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


                                <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="images/bios/Pollock.jpg"   alt="Emily Pollock">
                                            <a href="#" class="bio-link read-more" data-toggle="modal" data-target=".bio-pollock">read more</a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title">Emily Pollock</h4>
                                            <span class="post">PhD Student, Biological Anthropology, University of Washington</span>
                                        </div>
                                    </div>
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




                        <div class="team-breadcrumb" id="pha">
                            <h3>Public Health Advisory Group</h3>
                            <div class="row">

                                <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="images/bios/Kelly.jpg"   alt="Jane Kelly, MD">
                                            <a href="#" class="bio-link read-more" data-toggle="modal" data-target=".bio-kelly">read more</a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title">Jane Kelly, MD</h4>
                                            <span class="post">
                                                <b>Georgia Department of Public Health</b><br/>
                                                Public Health Advisory Group Director
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade bio-kelly">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">Jane Kelly, MD</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios/Kelly.jpg"
                                                    alt="Jane Kelly, MD">
                                                <p>Dr. Kelly is an HIV Medical Epidemiologist in the HIV/AIDS Epidemiology Unit in the Georgia Department of Public Health Epidemiology Section.  She oversees the Georgia site of CDC’s Medical Monitoring Project, and provides consultation and technical assistance to the unit staff on the analysis and interpretation of HIV surveillance registry and special project data.  Kelly has over 30 years of clinical and public health experience in HIV, STI, and TB at the local, state and federal levels, including as a medical officer in the DHAP HIV Incidence and Case Surveillance Branch and as a Tuberculosis Control Officer with Indian Health Service (IHS).</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="images/bios/Allen.jpg"   alt="Michelle Allen">
                                            <a href="#" class="bio-link read-more" data-toggle="modal" data-target=".bio-allen">read more</a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title">Michelle Allen</h4>
                                            <span class="post">
                                                Georgia Department of Public Health
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade bio-allen">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">Michelle Allen</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios/Allen.jpg"
                                                    alt="Michelle Allen">
                                                <p>Michelle L. Allen currently serves as the Infection Section Director for the Georgia Department of Public Health.  Ms. Allen presently oversees Program Collaboration and Service Integration initiatives.  Ms. Allen assists in the development of policies and procedures and directs planning and operational activities.  Ms. Allen is a champion for public health as she continually strives to move the Georgia Department of Public Health from "Good to Great".   Ms. Allen is a past advisory board member of the STD/HIV Prevention Training Center at John Hopkins University. Ms. Allen is the incoming Chair-Elect of the Board of Directors for the National Coalition of STD Directors. Ms. Allen's work has been recognized by several institutions. She has received the Leadership in Health Award by the Greater Atlanta National Pan Hellenic Council, the Gerald Ludd Lifetime Award for Excellence in Support of HIV/AIDS and Community Service by the (NAESM) National Aids Education and Services for Minorities, Inc, and the 2014 Janet Stancliff Epidemiology Award from the Georgia Public Health Association. She was also the recipient of the first annual Brenda Fitzgerald Leadership award from the Georgia Department of Public Health.  Ms. Allen has presented at several national conferences including the National STD Conference, the HIV Prevention Leadership Conference, and the American Public Health Association Conference. Ms. Allen continues to dedicate her heart and passion to Public Health. A native of Atlanta and proud "Georgia Peach", Ms. Allen is a distinguished alum of Georgia Southern University and a member of Sigma Gamma Rho Sorority Inc. She and her husband, Tony live in metro-Atlanta.</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="images/bios/Benbow.jpg"   alt="Nanette Benbow, MA">
                                            <a href="#" class="bio-link read-more" data-toggle="modal" data-target=".bio-benbow">read more</a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title">Nanette Benbow, MA</h4>
                                            <span class="post">
                                                Northwestern University Feinberg School of Medicine
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade bio-benbow">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">Nanette Benbow, MA</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios/Benbow.jpg"
                                                    alt="Nanette Benbow, MA">
                                                <p>As Deputy Commissioner of the Chicago Department of Public Health’s STI/HIV Services Bureau for three years, Ms. Benbow was responsible for ensuring that federal and local prevention, care and housing dollars were used in the most effective way to decrease the burden of STIs and HIV in the city. An important means for achieving this overarching goal is to fund and implement evidence-based interventions that address Chicago’s STI and HIV epidemics. Close collaboration with local research partners on intervention design and evaluation ensures that our combined expertise and resources will inform and strengthen the local STI/HIV strategy. Ms. Benbow is now at Northwestern University Feinberg School of Medicine as Senior Policy Advisor for the Center for Prevention Implementation Science (Ce-PIM) and the Third Coast Center for AIDS Research, where she continues to foster academic/public health partnerships.</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="images/bios/Bertrand.jpg"   alt="Thomas Bertrand, MPH">
                                            <a href="#" class="bio-link read-more" data-toggle="modal" data-target=".bio-bertrand">read more</a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title">Thomas Bertrand, MPH</h4>
                                            <span class="post">
                                                Rhode Island Department of Health
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade bio-bertrand">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">Thomas Bertrand, MPH</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios/Bertrand.jpg"
                                                    alt="Thomas Bertrand, MPH">
                                                <p>Thomas Bertrand, MPH, is the Chief of the Center for HIV, STDs, Hepatitis, and TB at the Rhode Island Department of Health.  During his twenty years in public health, Tom was the Executive Director of AIDS Project Rhode Island and the STD Director for the Massachusetts Department of Public Health.  Tom has an undergraduate degree in biology from Vassar College and a masters in public health in epidemiology from the State University of New York at Albany.</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="images/bios/Blank.jpg"   alt="Susan Blank, MD, MPH">
                                            <a href="#" class="bio-link read-more" data-toggle="modal" data-target=".bio-blank">read more</a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title">Susan Blank, MD, MPH</h4>
                                            <span class="post">
                                                NYC Department of Health
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade bio-blank">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">Susan Blank, MD, MPH</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios/Blank.jpg"
                                                    alt="Susan Blank, MD, MPH">
                                                    <p>Dr. Susan Blank is a board-certified Pediatrician, with a Master’s degree in Public Health.  After completing her residency at Yale-New Haven Hospital, she joined CDC’s Epidemic Intelligence Service in Environmental Health.  Thereafter she began her work with the Division of STD Prevention, and was assigned to the NYC Department of Health and Mental Hygiene, where she currently directs the Bureau of STD Control.  The Bureau includes ~ 300 staff, 8 STD clinics, units for Surveillance and Epidemiology, Policy, Assurance, Technology Initiatives, budgeting, and human resources.</p>
					                                <p>Dr. Blank's areas of interest and contribution have included the use of data – STD clinic data as well as surveillance & case investigation data to inform strategy and activity.  From very early (2004) implementation of a custom-built electronic medical record, to identifying targeting methods to cost-effectively identify acute HIV testing candidates at NYC STD clinics, to most recently, advocating for funding of HIV prevention services in STD clinics.</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="images/bios/Chiasson.jpg"   alt="Mary Ann Chiasson, DrPH">
                                            <a href="#" class="bio-link read-more" data-toggle="modal" data-target=".bio-chiasson">read more</a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title">Mary Ann Chiasson, DrPH</h4>
                                            <span class="post">
                                                Columbia University Mailman School of Public Health
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade bio-chiasson">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">Mary Ann Chiasson, DrPH</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios/Chiasson.jpg"
                                                    alt="Mary Ann Chiasson, DrPH">
                                                <p>Before serving as Vice President for Research and Evaluation at Public Health Solutions, a New York City non-profit, from 1999 to 2018, Dr. Chiasson served for fourteen years in various capacities at the New York City Department of Health including nine years as an Assistant Commissioner of Health with scientific and administrative responsibility for AIDS Surveillance, HIV/AIDS Research, and Vital Statistics and Epidemiology. Her research interests and expertise include the epidemiology of HIV and STIs, women's reproductive health, and obesity. Since 2001, her HIV/STI related research has focused on the relationship between the Internet and high risk sexual behavior among men who have sex with men (MSM) and how the Internet and other digital media can be harnessed for delivery of HIV prevention interventions. Dr. Chiasson is a Professor of Clinical Epidemiology (in Medicine) at Columbia University Mailman School of Public Health.</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="images/bios/Douglas.jpg"   alt="John Douglas, MD ">
                                            <a href="#" class="bio-link read-more" data-toggle="modal" data-target=".bio-douglas">read more</a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title">John Douglas, MD </h4>
                                            <span class="post">
                                                Tri-County Health Department
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade bio-douglas">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">John Douglas, MD </h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios/Douglas.jpg"
                                                    alt="John Douglas, MD ">
                                                <p>Dr. Douglas is the Executive Director of the Tri-County Department of Health, where he oversees infectious disease programs for the Denver area. He also has served as Director of STD Control and Medical Director of the Denver STD Prevention Training Center, and is a professor at the University of Colorado Health Sciences Center. Beyond is work in Colorado, he is a former Director of the CDC’s Division of STD Prevention. Dr. Douglas is a recognized expert the field of STD prevention, having published over 150 scientific manuscripts or reports. His professional memberships include the Infectious Diseases Society of America, the American STD Association, the American Social Health Association, the American College of Physicians, the American Public Health Association, and the American Society of Microbiology.</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="images/bios/Felzien.jpg"   alt="Gregory Felzien, MD, AAHIVS">
                                            <a href="#" class="bio-link read-more" data-toggle="modal" data-target=".bio-felzien">read more</a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title">Gregory Felzien, MD, AAHIVS</h4>
                                            <span class="post">
                                            Georgia Department of Public Health    
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade bio-felzien">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">Gregory Felzien, MD, AAHIVS</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios/Felzien.jpg"
                                                    alt="Gregory Felzien, MD, AAHIVS">
                                                    <p>Dr. Gregory Felzien received his medical degree from the University Of Colorado School Of Medicine. He went on to complete his internship and residency at Vanderbilt University and pursued further fellowship training in infectious diseases at the Medical University of South Carolina. He holds board certification in both internal medicine and infectious diseases and is certified as an American Academy of HIV specialist.</p> 
                                                    <p>In 2008, Dr. Felzien transitioned his practice from Oklahoma, where he was the Division Director for Infectious Diseases working within Indian Health Services, and accepted the position as the Director of the Office of Infectious Diseases and HIV Medicine for the Southeast Health District within the Georgia Department of Public Health. Dr. Felzien practices infectious diseases with an emphasis on HIV, Tb, and Hepatitis.</p>
                                                    <p>He is actively involved in the rural community through coordinating HIV awareness and education and writing and speaking at the local, state, and national level. In addition, Dr. Felzien works closely with community partners, such as Georgia Southern University and as a member of the provider advisory board for the CDC’s HIV medical monitoring program.  Early 2014, Dr. Felzien accepted the position as the medical advisor within the Georgia Department of Public Health’s Division of Health Protection/IDI-HIV. As part of this new position, Dr. Felzien continues to care for and focus on the needs of rural HIV positive individuals, those affected by Tb and Hepatitis throughout the state.
                                                    </p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="images/bios/Harvey.jpg"   alt="David Harvey, MSW, ACC">
                                            <a href="#" class="bio-link read-more" data-toggle="modal" data-target=".bio-harvey">read more</a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title">David Harvey, MSW, ACC</h4>
                                            <span class="post">
                                            National Coalition of STD Directors
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade bio-harvey">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">David Harvey, MSW, ACC</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios/Harvey.jpg"
                                                    alt="David Harvey, MSW, ACC">
                                                    <p>David C. Harvey is executive director of the National Coalition of STD Directors, the national association of state and local public health STD agencies.  During his 30-year public health and nonprofit leadership career, he was founding executive director of the national AIDS Alliance for Children, Youth & Families, President and CEO of Proliteracy, and held positions as project director and policy analyst for the National Disability Rights Network and the University of Medicine & Dentistry of NJ -  National Pediatric & Family HIV Resource Center.  He started out his career as an aide to U.S. Representative Sam Gejdenson (D-CT) and Martin Stevens, M.P. (C-Fulham & Hammersmith) in the House of Commons. He has spoken widely at domestic and international conferences, served on various national boards and blue ribbon panels and in 2012 was appointed by Secretary Clinton to the U.S. National Commission for UNESCO. He is a graduate of Clark University and Catholic University of America and has authored over 20 peer-reviewed articles and chapters and various other publications. He is currently a member of the board of the American Sexually Transmitted Diseases Association.</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="images/bios/Poe.jpg"   alt="Jonathon Poe, MSSW ">
                                            <a href="#" class="bio-link read-more" data-toggle="modal" data-target=".bio-poe">read more</a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title">Jonathon Poe, MSSW</h4>
                                            <span class="post">
                                                <b></b><br/>
                                                
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade bio-poe">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">Jonathon Poe, MSSW</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios/Poe.jpg"
                                                    alt="Jonathon Poe, MSSW">
                                                    <p>Jonathon Poe is the TB/STD/HIV Epidemiology and Surveillance Branch Manager at the Texas Department of State Health Services, where he oversees core and supplemental TB, HIV, STD and viral hepatitis surveillance activities, including the Dallas National HIV Behavioral Surveillance project, a survey of populations at high risk for HIV, and the Texas Medical Monitoring Project, a survey of people living with HIV. Jonathon began his professional career 25 years ago working on the Dallas Young Men's Survey, a survey of young MSM, and later the Web-Based HIV Behavioral Surveillance project, HIV Incidence and Molecular Surveillance, and HIV prevention program monitoring and evaluation. He received his Bachelor and Master of Social Work degrees from the University of Texas at Arlington.</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="images/bios/Wohlfeiler.jpg"   alt="Dan Wohlfeiler, MJ, MPH ">
                                            <a href="#" class="bio-link read-more" data-toggle="modal" data-target=".bio-wohlfeiler">read more</a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title">Dan Wohlfeiler, MJ, MPH </h4>
                                            <span class="post">
                                            Building Healthy Online Communities
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade bio-wohlfeiler">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">Dan Wohlfeiler, MJ, MPH </h4>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-responsive pull-left" style="width: 180px; padding-right: 7px;" src="images/bios/Wohlfeiler.jpg"
                                                    alt="Dan Wohlfeiler, MJ, MPH ">
                                                    <p>Dan Wohlfeiler is the founder and director of Building Healthy Online Communities, a collaboration of HIV/STD prevention organizations and the owners of dating and hook-up apps aiming to reduce transmission among gay and bisexual men. Dan directed programs at the STOP AIDS Project in San Francisco from 1990 to 1998, and then served as Chief of the Office of Policy, Planning and Communications at the California Department of Health's STD Control Branch. He has a longstanding interest in structural and network-level interventions to reduce transmission, and in partnering with the private sector. Dan holds Master's degrees in Public Health and Journalism from the University of California, Berkeley.</p> 
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
                                            <img src="images/bios/Cherng.jpg"   alt="Sarah Cherng, PHD">
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