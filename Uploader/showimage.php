<?php

		mysql_connect("127.0.0.1","root","");
			mysql_select_db("shuttle_service_system");
	
	if(isset($_GET['id']))
	{
		$id = mysql_real_escape_string($_GET['id']);
		$query = mysql_query("
		SELECT *
		FROM `blob`
		WHERE `id` = '$id'
							");
		while($row = mysql_fetch_assoc($query))
		{
			$imageData = $row["image"];
		}
		header("content-type: image/jpg");
		echo $imageData;
	}
	else
	{
		echo "ERROR";
	}
		

?>