<?php
        mysql_connect("localhost", "root", "")
        or die(mysql_error());
        mysql_select_db("lbas_hr") 
        or die(mysql_error());
        
            $result = mysql_query("
            SELECT  F_Name, L_Name, ID_No, B_Day
            FROM person
            WHERE ID_No like 'Admin' 
              
            "); 

        
        while($row = mysql_fetch_array($result)){
          $birthday = $row['B_Day'];
       
        function age ($birthday)
          {
            list($year,$month,$day) = explode("-",$birthday);
            $year_diff  = date("Y") - $year;
            $month_diff = date("m") - $month;
            $day_diff   = date("d") - $day;
            
            if ($month_diff < 0) $year_diff--;
            elseif (($month_diff==0) && ($day_diff < 0)) $year_diff--;
            return $year_diff;
          }
 
        echo age($birthday); // age of employee

        if (age($birthday) == 59) {
          echo "Ready for Retirement next school year";

          echo '<script language="javascript">';
          echo 'alert("Ready for retirment")';
          echo '</script>';
        }
        
        // Ung B_day na ung nagserserve as variable para magdisplay ung age.

  
        }
?>