/* 
First, users should download the appropriate YRBS SAS format and input programs. Then, users should copy the following code into SAS. 
It is important to note that there are several places where users need to insert their file locations. 
As stated in the YRBS Data User's Guide, the format program needs to be run prior to running the input program. 

All variables that may vary in jurisdiction-specific YRBS should be defined in the section below.
*/

**************************************************************************************************************************************;
* User-defined filenames and variables
* National YRBS variable names and numbers are specified below. Please change according to your codebook;

*Define location for formats and import programs;
	%let filepath = C:\YRBSTool;
*Define variable for "How old are you?";
	%let age_question = Q1;
*Define variable for "What is your sex?";
	%let sex_question = Q2;
*Define variable for "Have you ever had sexual intercourse?";
	%let intercourse_ever = Q60;
*Define variable for "During your life, with whom have you had sexual contact?"; 
	%let intercourse_who = Q67;
*Define a variable for "The last time you had sexual intercourse, did you or your partner use a condom?";
	%let condom_question = Q65; 
*Define "How old were you when you had sexual intercourse for the first time?";
	%let firstsex_question = Q61;
*"During your life, with how many people have you had sexual intercourse?";
	%let partners_question = Q62;
**************************************************************************************************************************************;


*Once the YRBS format and input programs are set up with the user's file locations, they can be easily run from this program in the following step;
%include "&filepath.\YRBS-2015-SAS_Formats_Program.sas";
%include "&filepath.\YRBS-2015-SAS_Input_Program.sas";

*Create a dataset with new variables described in manual;
data yrbs_tool;
	set dataout.yrbs2015;

	*Define age groups from the question "How old are you?" (age_question) as: 1=13-15 year olds, 2=16-17 year olds, 3=18 year olds, 4=None of the above;
	if &age_question in (2,3,4) then agegroup=1;
	else if &age_question=5 | &age_question=6 then agegroup=2;
	else if &age_question=7 then agegroup=3;
	else agegroup=4;

	*Create second age group variable in which "None of the above" is marked as missing;
	if agegroup~=4 then age2=agegroup; *otherwise, if agegroup=4 then set to missing;

	*Create numeric variable for age, ignoring 12 year olds and defining 18 as 18 and older;
	if &age_question = "2" then age = 13;
	else if &age_question = "3" then age = 14;
	else if &age_question = "4" then age = 15;
	else if &age_question = "5" then age = 16;
	else if &age_question = "6" then age = 17;
	else if &age_question = "7" then age = 18;
	else if &age_question = "1" then age = .;

	*Sexual partner groups (SPG) are defined from the following questions: 
	"What is your sex?" (sex_question), "Have you ever had sexual intercourse?" (intercourse_ever), and 
	"During your life, with whom have you had sexual contact?" (intercourse_who).
		SPG group 1, MSM/MSMF, is defined as: male sex, ever had sexual intercourse, had sexual intercourse with males or males and females 
		SPG group 2, MSFO, is defined as: male sex, ever had sexual intercourse, had sexual intercourse wiht females only.
		SPG group 3, FSM/FSMF, is defined as: female sex, ever had sexual intercourse, had sexual intercourse with males or males and females.
		SPG group 4 is defined as none of the above;

	if (&sex_question=2 & &intercourse_ever=1 & (&intercourse_who=3 | &intercourse_who=4)) then sexpartgp = 1;
	else if (&sex_question=2 & &intercourse_ever=1 & &intercourse_who=2) then sexpartgp=2;
	else if (&sex_question=1 & &intercourse_ever=1 & (&intercourse_who=3 | &intercourse_who=4)) then sexpartgp=3;
	else sexpartgp=4;

	*Create second sexual partner group variable in which "none of the above" is marked as missing;
	if sexpartgp ~=4 then spg2 = sexpartgp; *otherwise, if sexpartgp=4 then set to missing;

	*Overall population sizes for males and females are defined from the question "What is your sex?" (sex_question);
	if &sex_question=1 then sex=1;
	else if &sex_question=2 then sex=0;
	*otherwise, sex=.;
	
	*Create a dichotomous condom use variable, ignoring those who have never had sex, 
	from the question "The last time you had sexual intercourse, did you or your partner use a condom?" (condom_question);
	if &condom_question=2 then condomuse=1;
	if &condom_question=3 then condomuse=0;
	
	*Create numeric variable for age at first sex, ignoring those who have never had sex, defining 11 as 11 and younger and 17 as 17 or older, 
	from the question "How old were you when you had sexual intercourse for the first time?" (firstsex_question);
	if &firstsex_question = "2" then firstsexage=11;
	else if &firstsex_question = "3" then firstsexage=12;
	else if &firstsex_question = "4" then firstsexage=13;
	else if &firstsex_question = "5" then firstsexage=14;
	else if &firstsex_question = "6" then firstsexage=15;
	else if &firstsex_question = "7" then firstsexage=16;
	else if &firstsex_question = "8" then firstsexage=17;

	*Create numeric variable for lifetime number of partners, ignoring those who have never had sex, 
	from the question "During your life, with how many people have you had sexual intercourse?" (partners_question);
	if &partners_question="2" then lifesex=1;
	else if &partners_question="3" then lifesex=2;
	else if &partners_question="4" then lifesex=3;
	else if &partners_question="5" then lifesex=4;
	else if &partners_question="6" then lifesex=5;
	else if &partners_question="7" then lifesex=6;


	*Create labels for new variables;
	label 	agegroup="Age group including none"
			age2="Age group"
			age="Current age"
			sex="Population by sex"
			sexpartgp="Sexual partner groups including none"
			spg2="Sexual partner groups"
			condomuse="Condom use"
			firstsexage="At at first sex"
			lifesex="Lifetime number of sexual partners";
	
	*Create formats for categorical variables;
	proc format;
		value 	age4cat 	1="13-15"
						 	2="16-17"
						 	3="18+"
						 	4="None of the above";
		value	spg4cat		1="MSM"
							2="MSF"
							3="FSM"
							4="None of the above";
		value	sex			0="Male"
							1="Female";
		value	condomuse	1="Yes"
							0="No";
		value	spg3cat		1="MSM"
							2="MSF"
							3="FSM";
		value	age3cat		1="13-15"
						 	2="16-17"
						 	3="18+";
		value 	blank		.="        ";
run;

*Close output;
ods html close;
ods listing close;

*1) Determine proportion males and females by age group by creating a crosstab for sex by age and outputting to dataset;
		proc surveyfreq data=yrbs_tool nomcar varheader=label;
			strata stratum; cluster psu; weight weight;
			tables age2*sex/cl row;
			format age2 age3cat. sex sex.;
			ods select CrossTabs;
			ods output crosstabs= yrbs_totalpop;
		run;

		*Clean output dataset to remove unneeded values;
		data yrbs_total;
			set yrbs_totalpop;
			*Calculate proportion from percent and round;
			sexdist=round(percent/100,0.0001);
			*Remove total rows generated by crosstab;
			if F_age2="Total" or sex=. or sexdist=. then delete; 
			keep 	age2 sex sexdist;
		run; 

		*Re-arrange dataset into 2x3 table format for output;
		proc sort data = yrbs_total; by descending   age2; run;

		data yrbs_total_final;
			merge 
				yrbs_total (where = (age2 = 1) rename = (sexdist = sexdist1) )	
				yrbs_total (where = (age2 = 2) rename = (sexdist = sexdist2) )		
				yrbs_total (where = (age2 = 3) rename = (sexdist = sexdist3) )
			;
			by  sex;
			drop age2;
			label 	sexdist1="13-15"
					sexdist2="16-17"
					sexdist3="18+"; 
		run; 

*2) Determine proportion who are sexually experienced into the three SPG groups;
		proc surveyfreq data=yrbs_tool nomcar varheader=label ;
			strata stratum; cluster psu; weight weight;
			tables agegroup*sex*sexpartgp / cl row ;
			format agegroup age4cat. sexpartgp spg4cat. sex sex.;
			ods select CrossTabs;
			ods output crosstabs = yrbs_eversex_out;
		run;

		*Create analysis dataset that only includes the age and sex partner groups of interest;
		data yrbs_eversex;
			set yrbs_eversex_out;
			*Create proportion sexually experienced from row percent and round;
			eversex=round(rowpercent/100,0.0001);
			*Remove total rows generated by crosstab;
			if agegroup=4 or sexpartgp=4 or (sex=1 and sexpartgp=1) or (sex=1 and sexpartgp=2) or (sex=2 and sexpartgp=3) 
				or F_sexpartgp="Total" or eversex=. then delete;
			keep 	agegroup eversex sexpartgp;
		run;

		*Re-arrange dataset into 9x9 table format for output;
		proc sort data = yrbs_eversex; by sexpartgp agegroup; run;

		data yrbs_eversex_final;
			merge 
				yrbs_eversex (where = (agegroup = 1) rename = (eversex = eversex_age1) )	
				yrbs_eversex (where = (agegroup = 2) rename = (eversex = eversex_age2) )		
				yrbs_eversex (where = (agegroup = 3) rename = (eversex = eversex_age3) )
			;
			by sexpartgp;
			drop agegroup;
			label 	eversex_age1="13-15"
					eversex_age2="16-17"
					eversex_age3="18+"
					sexpartgp="Sexual partner groups"; 
		run;

*3) Run a logistic regression to determine the predicted condom use for each SPG and age group and output to dataset;
		proc surveylogistic data=yrbs_tool  varmethod=taylor;
			format age2 age3cat. spg2 spg3cat. condomuse condomuse.;
			strata stratum; cluster psu; weight weight;
			class condomuse (ref="No") age2 (ref="18+") spg2 (ref="FSM")/param=ref;
			model condomuse= age2 spg2;
			ods select Estimates;
			ods output estimates = yrbs_condom_out; 

				*Create estimate statements to get predicted probability for SPG by age group combination;
				estimate '13-15 MSM' 	intercept 1 age2 1 0 spg2 0 1 /ilink; 
				estimate '16-17 MSM'	intercept 1 age2 0 1 spg2 0 1 /ilink;
				estimate '18+ MSM'		intercept 1 age2 0 0 spg2 0 1 /ilink;
				estimate '13-15 MSF'	intercept 1 age2 1 0 spg2 1 0 /ilink;
				estimate '16-17 MSF'	intercept 1 age2 0 1 spg2 1 0 /ilink;
				estimate '18+ MSF'		intercept 1 age2 0 0 spg2 1 0 /ilink;
				estimate '13-15 FSM'	intercept 1 age2 1 0 spg2 0 0 /ilink;
				estimate '16-17 FSM'	intercept 1 age2 0 1 spg2 0 0 /ilink;
				estimate '18+ FSM'		intercept 1 age2 0 0 spg2 0 0 /ilink;
				
		run;

		*Clean resulting output to add age and spg back in;
		data yrbs_condom;
			set yrbs_condom_out;
			if label = '13-15 MSM' then do; age2=1; spg_condom=1; end;
			if label = '16-17 MSM' then do; age2=2; spg_condom=1; end;
			if label = '18+ MSM' then do; 	age2=3; spg_condom=1; end;
			if label = '13-15 MSF' then do; age2=1; spg_condom=2; end;
			if label = '16-17 MSF' then do; age2=2; spg_condom=2; end;
			if label = '18+ MSF' then do; 	age2=3; spg_condom=2; end;
			if label = '13-15 FSM' then do; age2=1; spg_condom=3; end;
			if label = '16-17 FSM' then do; age2=2; spg_condom=3; end;
			if label = '18+ FSM' then do; 	age2=3; spg_condom=3; end;
			
			*Round predicted condom use;
			mean=round(mu,.0001);
			keep age2 spg_condom mean;
			label spg_condom = "Sexual partner groups";
		run;

		*Re-arrange dataset into 3x3 table format for output;
		proc sort data = yrbs_condom; by spg_condom age2; run;

		data condomout_final;
			merge 
				yrbs_condom (where = (age2 = 1) rename = (mean = condom1) )	
				yrbs_condom (where = (age2 = 2) rename = (mean = condom2) )		
				yrbs_condom (where = (age2 = 3) rename = (mean = condom3) )
			;
			by spg_condom;
			drop age2;
			label 	condom1="13-15"
					condom2="16-17"
					condom3="18+"; 
		run; 

*4) Create matrices for partners per year calculator;
	*4a) Create matrix 1 for age at first intercourse by current age, showing weighted counts of persons;	
		proc surveyfreq data=yrbs_tool;
			strata stratum; cluster psu; weight weight;
			tables spg2*age*firstsexage; 
			ods select CrossTabs;
			ods output crosstabs = yrbs_matrix1_out;
		run;

			data yrbs_matrix1;
				set yrbs_matrix1_out;
				if firstsexage=. then delete;
				if age=. then delete;
				if age=firstsexage then delete;	
				freq=round(wgtfreq,.01);
				keep spg2 age firstsexage freq;
			run;

			proc sort data = yrbs_matrix1; by spg2 age firstsexage; run;

			data matrix1;
				merge 
					yrbs_matrix1 (where = (firstsexage = 11) rename = (freq = freq1) )	
					yrbs_matrix1 (where = (firstsexage = 12) rename = (freq = freq2) )		
					yrbs_matrix1 (where = (firstsexage = 13) rename = (freq = freq3) )
					yrbs_matrix1 (where = (firstsexage = 14) rename = (freq = freq4) )
					yrbs_matrix1 (where = (firstsexage = 15) rename = (freq = freq5) )
					yrbs_matrix1 (where = (firstsexage = 16) rename = (freq = freq6) )
					yrbs_matrix1 (where = (firstsexage = 17) rename = (freq = freq7) )
				;
				by spg2 age;
				drop firstsexage;
				label 	freq1="11"
						freq2="12"
						freq3="13"
						freq4="14"
						freq5="15"
						freq6="16"
						freq7="17"; 
			run;
			proc sort data=  matrix1; by spg2 age; run;

			data matrix1_table;
				set matrix1;
				by spg2 ;
				retain expected_age;

				*Reset expected age counter for each risk group;
				if first.spg2 then expected_age = 13;
				else expected_age++1;

				*Check if expected age = the age on the row. If they don't match, make a blank version of the row;
				if expected_age ~= age then do;
					output;	* Copy over the current row WITH data before we make a new one; 

					*Begin to make a new blank row for the missing age year;
					age = expected_age; 
					if expected_age = 13 then do; 		freq1 = 0; freq2 = 0; freq3 = .; freq4 = .; freq5 = .; freq6 = .; freq7 = .; end;
					else if expected_age = 14 then do; 	freq1 = 0; freq2 = 0; freq3 = 0; freq4 = .; freq5 = .; freq6 = .; freq7 = .; end;
					else if expected_age = 15 then do; 	freq1 = 0; freq2 = 0; freq3 = 0; freq4 = 0; freq5 = .; freq6 = .; freq7 = .; end;
					else if expected_age = 16 then do; 	freq1 = 0; freq2 = 0; freq3 = 0; freq4 = 0; freq5 = 0; freq6 = .; freq7 = .; end;
					else if expected_age = 17 then do; 	freq1 = 0; freq2 = 0; freq3 = 0; freq4 = 0; freq5 = 0; freq6 = 0; freq7 = .; end;

					*Because we added a row we need to increment expected age by 1 year;
					expected_age++1;
				end;

				output;
			run;

			*Add zeros where numbers in matrix are missing;
			proc sort data=  matrix1_table; by spg2 age; run;
			data clean_matrix1;
				set matrix1_table;
				if age=13 then do;
					if freq1=. then freq1=0;
					if freq2=. then freq2=0; end;
				if age=14 then do;
					if freq1=. then freq1=0;
					if freq2=. then freq2=0; 
					if freq3=. then freq3=0; end;
				if age=15 then do;
					if freq1=. then freq1=0;
					if freq2=. then freq2=0; 
					if freq3=. then freq3=0; 
					if freq4=. then freq4=0; end;
				if age=16 then do;
					if freq1=. then freq1=0;
					if freq2=. then freq2=0; 
					if freq3=. then freq3=0; 
					if freq4=. then freq4=0; 
					if freq5=. then freq5=0; end;
				if age=17 then do;
					if freq1=. then freq1=0;
					if freq2=. then freq2=0; 
					if freq3=. then freq3=0; 
					if freq4=. then freq4=0; 
					if freq5=. then freq5=0; 
					if freq6=. then freq6=0; end;
				if age=18 then do;
					if freq1=. then freq1=0;
					if freq2=. then freq2=0; 
					if freq3=. then freq3=0; 
					if freq4=. then freq4=0; 
					if freq5=. then freq5=0; 
					if freq6=. then freq6=0; 
					if freq7=. then freq7=0; end;
				drop expected_age;
			run;

		*4b) Create matrix 2 for age at first intercourse by current age, showing average number of partners;	
		proc surveymeans data=yrbs_tool ;
			strata stratum; cluster psu; weight weight;
			domain spg2*age*firstsexage; 
			var lifesex;
			ods output domain=matrix2;
		run;

			data partner;
				set matrix2;
				if age=firstsexage then delete;	
				meanpartner=round(mean,.01);
				keep spg2 age firstsexage  meanpartner;
			run;
	
			proc sort data = partner; by spg2 age firstsexage; run;

			data yrbs_partner;
				merge 
					partner (where = (firstsexage = 11) rename = (meanpartner = mean1) )	
					partner (where = (firstsexage = 12) rename = (meanpartner = mean2) )		
					partner (where = (firstsexage = 13) rename = (meanpartner = mean3) )
					partner (where = (firstsexage = 14) rename = (meanpartner = mean4) )
					partner (where = (firstsexage = 15) rename = (meanpartner = mean5) )
					partner (where = (firstsexage = 16) rename = (meanpartner = mean6) )
					partner (where = (firstsexage = 17) rename = (meanpartner = mean7) )
				;
				by spg2 age;
				drop firstsexage;
				label 	mean1="11"
						mean2="12"
						mean3="13"
						mean4="14"
						mean5="15"
						mean6="16"
						mean7="17"; 
			run;
			proc sort data=  Yrbs_partner; by spg2 age; run;

			data matrix2_table;
				set Yrbs_partner;
				by spg2 ;
				retain expected_age;

				* reset expected age counter for each risk group;
				if first.spg2 then expected_age = 13;
				else expected_age++1;

				* check if expected age = the age on the row. If they don't match, make a blank version of the row;
			
				if expected_age ~= age then do;
					output;	* copy over the current row WITH data before we make a new one ; 

					* begin to make a new blank row for the missing age year;
					age = expected_age; 
					if expected_age = 13 then do; 		mean1 = 0; mean2 = 0; mean3 = .; mean4 = .; mean5 = .; mean6 = .; mean7 = .; end;
					else if expected_age = 14 then do; 	mean1 = 0; mean2 = 0; mean3 = 0; mean4 = .; mean5 = .; mean6 = .; mean7 = .; end;
					else if expected_age = 15 then do; 	mean1 = 0; mean2 = 0; mean3 = 0; mean4 = 0; mean5 = .; mean6 = .; mean7 = .; end;
					else if expected_age = 16 then do; 	mean1 = 0; mean2 = 0; mean3 = 0; mean4 = 0; mean5 = 0; mean6 = .; mean7 = .; end;
					else if expected_age = 17 then do; 	mean1 = 0; mean2 = 0; mean3 = 0; mean4 = 0; mean5 = 0; mean6 = 0; mean7 = .; end;

					* because we added a row we need to increment expected age by 1 year;
					expected_age++1;
				end;

				output;
			run;

			*Add zeros where numbers in matrix are missing;
			proc sort data=  matrix2_table; by spg2 age; run;
			data clean_matrix2;
				set matrix2_table;
				if age=13 then do;
					if mean1=. then mean1=0;
					if mean2=. then mean2=0; end;
				if age=14 then do;
					if mean1=. then mean1=0;
					if mean2=. then mean2=0; 
					if mean3=. then mean3=0; end;
				if age=15 then do;
					if mean1=. then mean1=0;
					if mean2=. then mean2=0; 
					if mean3=. then mean3=0; 
					if mean4=. then mean4=0; end;
				if age=16 then do;
					if mean1=. then mean1=0;
					if mean2=. then mean2=0; 
					if mean3=. then mean3=0; 
					if mean4=. then mean4=0; 
					if mean5=. then mean5=0; end;
				if age=17 then do;
					if mean1=. then mean1=0;
					if mean2=. then mean2=0; 
					if mean3=. then mean3=0; 
					if mean4=. then mean4=0; 
					if mean5=. then mean5=0; 
					if mean6=. then mean6=0; end;
				if age=18 then do;
					if mean1=. then mean1=0;
					if mean2=. then mean2=0; 
					if mean3=. then mean3=0; 
					if mean4=. then mean4=0; 
					if mean5=. then mean5=0; 
					if mean6=. then mean6=0; 
					if mean7=. then mean7=0; end;
				drop expected_age;
			run;


**************************************************************************************************************************************************************
*Change fonts for excel output;
proc template;
	define style excel;
	class data / fontfamily="Arial" fontsize=11pt;
	class header / fontfamily="Arial" fontsize=11pt fontweight=bold;
	class byline / fontfamily="Arial" fontsize=11pt fontweight=bold textalign=center;
	class systemtitle / fontfamily="Arial" fontsize=12pt fontweight=bold;
	class systemfooter / fontfamily="Arial" fontsize=10pt textalign=left;
	class table / backgroundcolor=#f0f0f0 bordercolor=black borderstyle=solid borderwidth=1pt cellpadding=5pt cellspacing=0pt rules=groups;
	end;
run;

*Create final excel output with inputs for table;
ODS tagsets.ExcelXP FILE="&filepath\USERFILENAME_&sysdate..xls" style=excel
	options(sheet_name='Adolescent population size' embedded_titles='yes' embedded_footnotes='yes' merge_titles_footnotes='yes');
	proc print data=yrbs_total_final label noobs;
		title 'YRBS weighted proportion males and females by age group';
		footnote 'On the pop tab of the tool, copy the weighted proportions shown here into step 2';
	run;

ods tagsets.Excelxp options(sheet_name='Proportion sexually experienced');
	proc print data = yrbs_eversex_final label noobs;
		title 'YRBS proportion of sexually experienced adolescents by age group and SPG';
		footnote 'On the pop tab of the tool, copy the proportion of adolescents who are sexually experienced into the three sexual activity groups in step 3';
		footnote2 'If using the advanced options, copy the proportion of adolescents who are sexually experienced into the three sexual activity groups in step 3';
	run;

ods tagsets.Excelxp options(sheet_name='Predicted condom use');
	proc print data=condomout_final label noobs;
		title 'YRBS predicted condom use for each SPG and age group';
		footnote 'On the behavior tab of the tool, copy the predicted condom use for each SPG and age group under "Probability of Condom Use"';
		footnote2 	'Copy the predicted condom use table onto the MSM anal-penile row down through the FSM row';
		footnote3	'Copy the predicted condom use for MSF onto the Group 1 Vaginal-Penile row';
		format spg_condom spg3cat.;
	run;

ods tagsets.Excelxp options(sheet_name='Partners per year matrix 1' sheet_interval='proc');
	proc print data=clean_matrix1 label noobs;
		by spg2;
		format spg2 spg3cat. freq1 blank. freq2 blank. freq3 blank. freq4 blank. freq5 blank. freq6 blank. freq7 blank.;
		title 'Matrix 1: Age at first sex by current age, cells=counts of persons';
		footnote 'Copy into Matrix 1 on the "Advanced Options Page" under "New Partners per Year Calculator"';
	run;

ods tagsets.Excelxp options(sheet_name='Partners per year matrix 2' sheet_interval='proc');
	proc print data=clean_matrix2 label noobs;
		by spg2;
		format spg2 spg3cat. mean1 blank. mean2 blank. mean3 blank. mean4 blank. mean5 blank. mean6 blank. mean7 blank.;
		title 'Matrix 2: Age at first sex by current age, average number of lifetime partners';
		footnote 'Copy into Matrix 2 on the "Advanced Options Page" under "New Partners per Year Calculator"';
	run;

ODS tagsets.ExcelXP CLOSE;
