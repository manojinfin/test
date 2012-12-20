<?php

for($i=1;$i<=100;$i++){	?>  <!-- for loop start -->
	<div style="width:300px; border:1px solid; background-color:#CCC;">
	<?php   if($i%3 == 0){  ?>             <!-- this condition for number 3 -->
	<div style="background-color:#999;">
	        <?php
		      echo "cake instead of the number"."(".$i."/"."3".")"."<br>"; // this number is divided by 3
		          if($i%5 == 0){                                                // this condition for number 5
		            echo  "pi instead of the number"."(".$i."/"."5".")"."<br>";	// this number is divided by 5
		                       }
		         if($i%15 == 0){                                                //this condition for number 15 
			        echo "cakepi instead of the number"."(".$i."/"."15".")"."<br>"; // this number is divided by 15
		      } ?>
      </div>
        
    <?php 	} elseif($i%5 == 0){  ?>                              <!-- this condition for number 5 -->
	  <div style="background-color:#9F9;">
         	<?php	echo  "pi instead of the number"."(".$i."/"."5".")"."<br>";  // this number is divided by 5
		      if($i%15 == 0){                                                  // this condition for number 15
			    echo "cakepi instead of the number"."(".$i."/"."15".")"."<br>"; // this number is divided by 15
		             } ?>
        </div>

    <?php	}	else{
		        echo "Number :".$i."<br>";  //otherwise case 
              	}

     ?> </div>
   <?php  } ?> <!-- end of for loop -->
