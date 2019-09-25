<?php

if ((($_FILES["upfile"]["type"] == "image/gif")
|| ($_FILES["upfile"]["type"] == "image/jpeg")
|| ($_FILES["upfile"]["type"] == "image/pjpeg"))
&& ($_FILES["upfile"]["size"] < 20000222))
  {
  if ($_FILES["upfile"]["error"] > 0)
    {
    echo "Error: " . $_FILES["upfile"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["upfile"]["name"] . "<br />";
    echo "Type: " . $_FILES["upfile"]["type"] . "<br />";
    echo "Size: " . ($_FILES["upfile"]["size"] / 1024) . " Kb<br />";
    echo "Stored in: " . $_FILES["upfile"]["tmp_name"];
    }
  }
else
  {
  echo "此文件不允许被上传";
  }

?>
