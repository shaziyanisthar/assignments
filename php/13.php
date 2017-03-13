<html>
   <body>
      
      <?php
         $student = array( 
            "name" => array (
               "1" => mohammed,
               "2" => zara,	
               "3" => anu
            ),
            
            "age" => array (
               "1" => 30,
               "2" => 32,
               "3" => 29
            ),
            
            "t_marks" => array (
               "1" => 31,
               "2" => 22,
               "3" => 39
            )
         );
         
         /* Accessing multi-dimensional array values */
         echo "names of 3 students: " ;
         echo $student['name']['1'] . "<br />";
         echo $student['name']['2'] . "<br />";
         echo $student['name']['3'] . "<br />";
         
         echo "age of 3 students: ";
         echo $student['age']['1'] . "<br />";
         echo $student['age']['2'] . "<br />";
         echo $student['age']['3'] . "<br />";

         echo "Marks for 3students : " ;
         echo $student['t_marks']['1'] . "<br />";
         echo $student['t_marks']['2'] . "<br />";
         echo $student['t_marks']['3'] . "<br />";

         $age = array($student['t_marks'][1],$student['t_marks'][2],$student['t_marks'][3]);
         sort($age);
         print_r($age);
      ?>
   
   </body>
</html>