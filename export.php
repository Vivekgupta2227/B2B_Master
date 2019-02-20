<?php  
      //export.php  
 if(isset($_POST["export"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "jetlead");  
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('emails', 'FirstName', 'LastName', 'Designation', 'CompanyName', 'CompanyWebsite','City'));  
      $query2 = "SELECT * from se";  
      $result1 = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result1))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>  