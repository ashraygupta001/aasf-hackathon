<?php
session_start();
$_SESSION['message']='';
$mysqli = new mysqli('localhost', 'root', '', 'modernhospital');
      if(isset($_POST['submit'])){
          $patientname = $_POST['patientname'];
          $password = md5($_POST['patientpass']);
          $query = "SELECT * FROM patient WHERE patientname='$patientname' && patientpass='$password'";
              $data = mysqli_query($mysqli,$query);
             while($row = mysqli_fetch_assoc($data)) {
                 $idd=$row["patientid"];
                 $email = $row['patientemail'];
             }
               $total = mysqli_num_rows($data);
              if($total == 1)
              { 
                  $_SESSION['patientname']=$patientname;
                  $_SESSION['patientemail'] = $patientemail;
                 $_SESSION['signed_in']=true;
                 $_SESSION['patientid']=$idd;
                  header("location:paprofile.php");
              }
              else{
                echo "<script>
                     window.location.href='index.php';
                 alert('USERNAME NOT FOUND!!');
                 </script>";
              }
      }
  ?>