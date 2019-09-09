<?php
session_start();
$_SESSION['message']='';
$mysqli = new mysqli('localhost', 'root', '', 'modernhospital');
      if(isset($_POST['submit'])){
          $docname = $_POST['docname'];
          
          $password = md5($_POST['docpass']);
          $query = "SELECT * FROM doctor WHERE docname='$docname' && docpass='$password'";
              $data = mysqli_query($mysqli,$query);
             while($row = mysqli_fetch_assoc($data)) {
                 $idd=$row["docid"];
                 $email = $row['docemail'];
             }
               $total = mysqli_num_rows($data);
              if($total == 1)
              { 
                  $_SESSION['docname']=$docname;
                  $_SESSION['docemail'] = $docemail;
                 $_SESSION['signed_in']=true;
                 $_SESSION['docid']=$idd;
                  header("location:profile.php");
              }
              else{
                echo "<script>
                     window.location.href='index.php';
                 alert('USERNAME NOT FOUND!!');
                
                     </script>";
              }
      }
  ?>