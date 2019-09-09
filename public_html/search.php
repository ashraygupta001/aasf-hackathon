<?php
$mysqli = new mysqli('localhost', 'root', '', 'modernhospital') or die("unable to conect".mysqli_connect_error());
  $output='';
  if(isset($_POST['search'])){
  $searchq=$_POST['search'];
  $searchq=preg_replace("#[^0-9a-z]#i","",$searchq);
  $sql="SELECT * FROM doctor WHERE docspe LIKE '%$searchq%'";
  //print_r($sql); exit();
  $query=mysqli_query($mysqli,$sql) or die("couldnot search");
  //print_r($query); exit();
  $count=mysqli_num_rows($query);
  //echo $count; exit();
  if($count==0){
  $output='there waas no search result';
}
else{
    while($row=mysqli_fetch_array($query)){
    $fname=$row['docname'];
    //$id=$row['id'];
    $output .='<div>'.$fname.'</div>';
}
}
}

?>
         <form action="search.php" method="post">
            <input type="text" name="search" placeholder="Search for specalist..."/>
            <input type="submit" value=">>"/>
         </form>
<?php print("$output");?>
    </body>
    </html>