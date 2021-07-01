<?php
unlink($_GET["name"]);
//redirection
header("Location:".$_SERVER["HTTP_REFERER"]);