<?php
//recupération du fichier uploadé
$file = $_FILES["file"];

//upload dans le dossier upload
move_uploaded_file($file["tmp_name"],"uploads/".$file["name"]);

//redirection
header("Location:".$_SERVER["HTTP_REFERER"]);