<?php
// again this may be unnecessary
require_once("models/classifieds.php");

$_classified=new Classified();

if(!empty($_POST['submit']))
{
   $id=$_classified->add($_POST);

   // redirect to see the posted classified
   header("Location: home.php");
   exit;
}

require("views/submit.php");
?>