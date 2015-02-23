
	<?php
	$hr = $_POST['hr'];
	$test = $_POST['test'];
	$teaching = $_POST['teaching'];
	$coor = $_POST['coor'];
	$principal = $_POST['principal'];

	echo "this is $hr";
	echo "$test";
	echo "$teaching";
	echo "$coor";
	echo "$principal";
	
	if(!empty($hr) && empty($test) && empty($teaching) && empty($coor) && empty($principal)){		
		echo"Success();";
		
	}else if(empty($hr) && !empty($test) && empty($teaching) && empty($coor) && empty($principal)){
		
		echo"Success();";
	}else if(empty($hr) && empty($test) && !empty($teaching) && empty($coor) && empty($principal)){
		
		echo"Success();";
	}else if(empty($hr) && empty($test) && empty($teaching) && !empty($coor) && empty($principal)){
		
		echo"Success();";
	}else if(empty($hr) && empty($test) && empty($teaching) && empty($coor) && !empty($principal)){
		
		echo"Success();";
	}else{
		echo"shit";
	}




?>
