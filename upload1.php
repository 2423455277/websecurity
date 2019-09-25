<?php
if(isset($_POST['submit'])){
   echo "Upload: " . $_FILES["upfile"]["name"] . "<br />";
    echo "Type: " . $_FILES["upfile"]["type"] . "<br />";
    echo "Size: " . ($_FILES["upfile"]["size"] / 1024) . " Kb<br />";
    echo "Stored in: " . $_FILES["upfile"]["tmp_name"];

   if($_FILES['upfile']['error']==0){
      if(!is_dir("./upload")){
      mkdir("./upload");
   }
   /*$dir="./upload".$_FILES['upfile']['name'];
   move_uploaded_file($_FILES['upfile']['tmp_name'],$dir);
   echo "文件保存路径：".$dir."<br />";*/
}
}
?>