<?php
session_start();
$_SESSION['message']='';
$mysqli = new mysqli('localhost', 'root', '', 'modernhospital') or die("unable to conect".mysqli_connect_error());
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //if two password are equal
if($_POST['docpass'] == $_POST['confirmpassword'] ) { 
$docname = $mysqli->real_escape_string($_POST['docname']);
$docemail = $mysqli->real_escape_string($_POST['docemail']);
$city = $mysqli->real_escape_string($_POST['doccity']);
$docpass = md5($_POST['docpass']); 
$docspe = $mysqli->real_escape_string($_POST['docspe']);  
$hospital = $mysqli->real_escape_string($_POST['dochospital']);   
        $sql = "INSERT INTO doctor (docname, dochospital, docemail, doccity, docpass, docspe) VALUES ('$docname','$hospital','$docemail','$city','$docpass', '$docspe')";
        //print_r($sql); exit();
        if($mysqli->query($sql) === true){
            $docid=$mysqli->insert_id;
           
            $_SESSION['docname']=$docname;
        $_SESSION['signed_in']=true;
         $_SESSION['docid']=$docid;
            header("location: profile.php");
        }
        else{
            $_SESSION['message']="User could not be added to the database!";
        }
    }
}
else{
    $_SESSION['message']="Two passwords do not match! ";
}
?>