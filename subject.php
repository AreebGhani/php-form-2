<?php

 $connect = mysqli_connect("localhost","root");

 mysqli_select_db($connect,"formdb");

 $nameid = $_POST["datapost"];

 $query = "select * from subject where main_id ='$nameid' ";

 $result = mysqli_query($connect,$query);

   while ($rows = mysqli_fetch_array($result)) {

?>

       <option> <?php echo $rows["subjects"]; ?> </option>

       <?php
        
   }

?>