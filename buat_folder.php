<?php
   $folder=$_POST["alamat_folder"];
   $url=$_POST["alamat_url"];
   if ( is_dir($folder."/".$_POST["nama_folder"])) {
   	  echo "<script> alert('Folder Sudah ada !');history.go(-1);</script>";
   } else {
      mkdir($folder."/".$_POST["nama_folder"]);
      echo "<script> alert('Folder berhasil dibuat !');history.go(-1);</script>";
   }
?>