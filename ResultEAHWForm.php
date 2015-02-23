<?php
	mysql_connect("localhost", "root", "")
			or die(mysql_error());
	
	mysql_select_db("lbas_hr") 
		or die(mysql_error());

		$result = mysql_query("
						SELECT  AVG(Ques_1),
								AVG(Ques_2),
								AVG(Ques_3),
								AVG(Ques_4),
								AVG(Ques_5),
								AVG(Ques_6),
								AVG(Ques_7),
								AVG(Ques_8),
								AVG(Ques_9),
								AVG(Ques_10),
								AVG(Ques_11),
								AVG(Ques_12),
								AVG(Ques_13),
								AVG(Ques_14),
								AVG(Ques_15),
								AVG(Ques_16),
								AVG(Ques_17),
								AVG(Ques_18),
								AVG(Ques_19),
								AVG(Ques_20),
								AVG(Ques_21),
								AVG(Ques_22),
								AVG(Ques_23),
								AVG(Ques_24),
								AVG(Result),
								Count(Result)
						FROM eval_eahw_a
						WHERE ID_No = ''	
						");	
						
					while($row = mysql_fetch_array($result)){
					
					$ques_1 = ($row['AVG(Ques_1)']/5)* 100;
					$ques_2 = ($row['AVG(Ques_2)']/5)* 100;
					$ques_3 = ($row['AVG(Ques_3)']/5)* 100;
					$ques_4 = ($row['AVG(Ques_4)']/5)* 100;
					$ques_5 = ($row['AVG(Ques_5)']/5)* 100;
					$ques_6 = ($row['AVG(Ques_6)']/5)* 100;
					$ques_7 = ($row['AVG(Ques_7)']/5)* 100;
					$ques_8 = ($row['AVG(Ques_8)']/5)* 100;
					$ques_9 = ($row['AVG(Ques_9)']/5)* 100;
					$ques_10 = ($row['AVG(Ques_10)']/5)* 100;
					$ques_11 = ($row['AVG(Ques_11)']/5)* 100;
					$ques_12 = ($row['AVG(Ques_12)']/5)* 100;
					$ques_13 = ($row['AVG(Ques_13)']/5)* 100;
					$ques_14 = ($row['AVG(Ques_14)']/5)* 100;
					$ques_15 = ($row['AVG(Ques_15)']/5)* 100;
					$ques_16 = ($row['AVG(Ques_16)']/5)* 100;
					$ques_17 = ($row['AVG(Ques_17)']/5)* 100;
					$ques_18 = ($row['AVG(Ques_18)']/5)* 100;
					$ques_19 = ($row['AVG(Ques_19)']/5)* 100;
					$ques_20 = ($row['AVG(Ques_20)']/5)* 100;
					$ques_21 = ($row['AVG(Ques_21)']/5)* 100;
					$ques_22 = ($row['AVG(Ques_22)']/5)* 100;
					$ques_23 = ($row['AVG(Ques_23)']/5)* 100;
					$ques_24 = ($row['AVG(Ques_24)']/5)* 100;
					$ques_25 = ($row['AVG(Result)']/$row['Count(Result)'])* 100;
					
					echo"1. Developing a homeroom relationship in the advisory class, average is $ques_1% </br>";
					echo"2. Creating a physical classroom setting conducive to a homeroom atmosphere $ques_2% </br>";
					echo"3. Developing team spirit and camaraderie in the advisory class $ques_3% </br>";
					echo"4. Holding regular homeroom meetings $ques_4% </br>";
					echo"5. Sensing/Detecting academic and other problems in students/class $ques_5% </br>";
					echo"6. Holding friendly individual/group consultations/counselling with advisory students $ques_6% </br>";
					echo"7. Maintaining good contact with parents; doing home visits when needed $ques_7% </br>";
					echo"8. Exhibiting discretion, tact, and confidentiality in dealing with students/ parents/guardians $ques_8% </br>";
					echo"9. Enforcing Student Handbook provisions in general $ques_9% </br>";
					echo"10. Checking students' names in advisory class relative to Forms 1, 137, and 138 $ques_10% </br>";
					echo"11. Submitting promotion report (Form 18-E) at the end of the year $ques_11% </br>";
					echo"12. Showing quality participation in the deliberation meetings every grading period(3) $ques_12% </br>";
					echo"13. Performing well during Parent-Teacher Conferences (3) $ques_13% </br>";
					echo"14. Supervising the students during flag ceremonies, programs, field trips, and other similar activities $ques_14% </br>";
					echo"15. Monitoring and following up the release/retrieval of communications to parents $ques_15% </br>";
					echo"16. Monitoring/Recording habitual minor offenses and reporting the same to the POD $ques_16% </br>";
					echo"17. Making referrals to the Guidance Conselors/Prefect of Discipline $ques_17% </br>";
					echo"18. Reporting damages and repair needs in the classroom $ques_18% </br>";
					echo"19. Creating and implementing a system of maintaining order/cleanliness in the room (5) $ques_19% </br>";
					echo"20. Coordinating with subject teachres on the schedules of long tests, projects, etc. (5) $ques_20% </br>";
					echo"21. Conducting daily routine checks on haircut, uniform, and ID (5) $ques_21% </br>";
					echo"22. Conducting daily routine checks on attendance/submission of reports related thereto(3) $ques_22% </br>";
					echo"23. Guiding/Inspiring the advisory class in relation to environmental thrust $ques_23% </br>";
					echo"24. Encouraging by word and example the living out of the LBAS core values $ques_24% </br>";
					echo"Average is $ques_25% </br>";
					
					}


?>