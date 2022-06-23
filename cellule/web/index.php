<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Uploader un fichier</h1>
    <div class="form">
    <form enctype="multipart/form-data" method="POST">
        <input type="file" name="fichier" id="file" accept=".xlsx"> 
        <input type="submit" value="verifier" name="envoie">
    </form>
    </div>
</body>
</html>
<!-- --------------------------bout de code en php----------------------- -->
<?php
require_once"Classes/PHPExcel.php";
//var_dump($_FILES);
if(!empty($_FILES)){
    $file_name=$_FILES['fichier']['name'];
    $file_type=$_FILES['fichier']['type'];
    $a=strchr($file_name,'.');
    $file_dest='media/'.$file_name;
// --------------------------fonction pour verifier l'extension du fichier-----------------
    function verif_extension($a,$file_dest){ 
        $file_tmp_name=$_FILES['fichier']['tmp_name'];
    $extensions_autorisees=array('.xlsx','.xls','.XLSX','.XLS');
    if(in_array($a,$extensions_autorisees)){
        move_uploaded_file($file_tmp_name,$file_dest);
    }else{
        echo'seuls les fichiers excel sont autorisés <br> <br>';
    }
    }
    //------------------------script pour spliter le nom du fichier--------------------
    $split=explode(".",$file_name);
    $session=array('CC','TP','EE');
    $semestre=array('S1','S2','S3','S4');
    $temp=explode("_",$split[0]);
    $note=$temp[4];
    $type=$temp[1];
    $sem=$temp[2];
    //---------------fonction pour ouvrir le fichier excel -----------------------------
    function excel_open($file_name){
        $path='media/'.$file_name;
        $reader=PHPExcel_IOFactory::createReaderForFile($file_name);
        $excel_object=$reader->load($file_name);
        //$worksheet=$excel_object->getActiveSheet();
        $worksheet=$excel_object->getSheet('0');
        return array($worksheet,$excel_object,$reader);

    }
    //-----------------fonction pour verifier le nom du fichier-------------------------
    function verif_nom($temp,$session,$semestre){
        if(in_array($temp[1],$session) and in_array($temp[2],$semestre) and in_array($temp[2],$semestre) and count($temp)==5){
            echo 'la syntaxe du nom du fichier est bonne <br> <br>';
        }else{
            echo"la syntaxe du nom du fichier n\' est pas bonne <br> <br>";
        }
    }
    //-------------------fonction pour verifier les notes-------------------------------
    function verif_note($note,$file_name,$type){
        $tab=excel_open($file_name);
        $worksheet=$tab[0];
        $note=intval($note);
        $arr=[];
        $lastrow=$worksheet->getHighestRow();
        $col=$worksheet->getHighestDataColumn();
        if($type=='EE'){
            for ($i=2; $i <=$lastrow ; $i++) { 
                $not=$worksheet->getCell(PHPExcel_Cell::stringFromColumnIndex(1).$i)->getValue();
                $not=intval($not);
                if($not>$note){
                    echo'la note depasse sur la ligne ',$i,' veuillez la modifier <br> <br>';
                }
            }
        }else{
            for ($i=2; $i <=$lastrow ; $i++) { 
                $not=$worksheet->getCell(PHPExcel_Cell::stringFromColumnIndex(2).$i)->getValue();
                $not=intval($not);
                if($not>$note){
                    echo'la note depasse sur la ligne ',$i,' veuillez la modifier <br> <br>';
                }
            }
            
        }

    }
    //-------------------------fonction pour verifier le matricule---------------------------------
    function verif_matricule($file_name,$type){
       $tab=excel_open($file_name);
       $worksheet=$tab[0];
       $lastrow=$worksheet->getHighestRow();
        $col=$worksheet->getHighestDataColumn();
        if($type=='EE'){
            echo'les matricules n existent pas dans le type EE.';
        }else{
            for ($i=2; $i <=$lastrow ; $i++) { 
                $mat=$worksheet->getCell(PHPExcel_Cell::stringFromColumnIndex(1).$i)->getValue();
                if (strlen($mat)==7 || strlen($mat)==6) {
                $mat1=substr($mat,0,2);
                $str=substr($mat,2,1);
                $reste=substr($mat,-3);
                //is_string($str)
                $numbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
                    if(ctype_digit($mat1)==TRUE and ctype_digit($reste)==TRUE and ctype_alpha($str) ){

                    }else{
                        echo'verifier la colonne matricule a la ligne ',$i,'<br>';
                    }
                }
            }
        }

   }
   // -----------------------fonction pour verifier le nombre de colonne en fonction du type de fichier---------
function verif_colonne($file_name,$type){
    $tab=excel_open($file_name);
    $worksheet=$tab[0];
    $col=$worksheet->getHighestDataColumn();
    if($type=='EE'){
        if($col==2){
            echo 'les colonnes sont bien structurées <br> <br>';
        }else{
            echo'verifier la structure des colonnes <br> <br>';
        }
    }else{
        if($col==3){
            echo 'les colonnes sont bien structurées <br> <br>';
        }else{
            echo'verifier la structure des colonnes <br> <br>';
        } 
    }
  }
  /*function main(){
      $choice = POST[]
      echo 1'pour verifier le nom du fichi
  }*/
  //-------------------appel des differentes fonctions-------------------------
    verif_nom($temp,$session,$semestre);
    //excel_open($file_name);
    //verif_extension($a,$file_dest);
    verif_note($note,$file_name,$type);
    verif_matricule($file_name,$type);
}


?>