<?php
 require $_SERVER["DOCUMENT_ROOT"] . "/seis751-individual-project/src/config.php";
 include_once "" . ROOT_PATH . PROJECT_PATH . "/controller/php/Controller.php";

 $obj = new Controller();

echo "Welcome " . $obj->returnUserController()['username'];

 ?>
