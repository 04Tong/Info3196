<?php

$data=array();
//die($_POST['max']);
for ($i=0; $i < $_POST['max']; $i++) { 
    # code...
    
    $fileName=$_FILES['fileupload'.$i]['name'];
    $filetmp=$_FILES['fileupload'.$i]['tmp_name'];
    $fileDestination='../files1/'.$fileName;
    move_uploaded_file($filetmp, $fileDestination); 
  }
  if($_POST['max']==1){
    die(json_encode($fileName));
  }

