<?php
	$department=$_POST['department'];
	$position=$_POST['position'];
	$level=$_POST['level'];
	$subject = '';
	
		
	if($position == 'Reading Teacher'){
		$subject = 'Reading';
	}else if($position == 'Language Teacher'){
		$subject = 'Language';
	}else if($position == 'Filipino Teacher'){
		$subject = 'Filipino';
	}else if($position == 'English Teacher'){
		$subject = 'English';
	}else if($position == 'Araling Panlipunan Teacher'){
		$subject = 'Araling Panlipunan';
	}else if($position == 'MAPEH Teacher'){
		$subject = 'MAPEH';
	}else if($position == 'Mother Tongue Teacher'){
		$subject = 'Mother Tongue';
	}else if($position == 'Edukasyon Sa Pagkatao Teacher'){
		$subject = 'Edukasyon sa Pagkatao';
	}else if($position == 'HELE Teacher'){
		$subject = 'HELE';
	}else if($position == 'Physical Education Teacher'){
		$subject = 'Physical Education';
	}else if($position == 'TLE Teacher'){
		$subject = 'TLE';
	}else if($position == 'Arts Teacher'){
		$subject = 'Arts';
	}else if($position == 'Music Teacher'){
		$subject = 'Music';
	}else if($position == 'Health Teacher'){
		$subject = 'Health';
	}else if($position == 'Mathematics Teacher'){
		$subject = 'Mathematics';
	}else if($position == 'Science Teacher'){
		$subject = 'Science';
	}else if($position == 'Science & Health Teacher'){
		$subject = 'Science & Health';
	}else if($position == 'Computer Teacher'){
		$subject = 'Computer';
	}else if($position == 'Natural Science Teacher'){
		$subject = 'Natural Science';
	}else if($position == 'General Math Teacher'){
		$subject = 'General Math';
	}else if($position == 'Computer Education Teacher'){
		$subject = 'Computer Education';
	}else if($position == 'Practical Math Teacher'){
		$subject = 'Practical Math';
	}else if($position == 'Environmental Science Teacher'){
		$subject = 'Environmental Science';
	}else if($position == 'Statistics Teacher'){
		$subject = 'Statistics';
	}else if($position == 'Biology Teacher'){
		$subject = 'Biology';
	}else if($position == 'Trigonometry Teacher'){
		$subject = 'Trigonometry';
	}else if($position == 'Physics Teacher'){
		$subject = 'Physics';
	}else if($position == 'TLE-Computer Teacher'){
		$subject = 'TLE-Computer';
	}else if($position == 'Chemistry Teacher'){
		$subject = 'Chemistry';
	}else {
		$subject = '';
	}
	
	echo"$department </br>";
	echo"$position </br>";
	echo"$level </br>";
	echo"$subject </br>";

?>