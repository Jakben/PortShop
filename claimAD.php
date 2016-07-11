<?php
// again this may be unnecessary
require_once("models/classifieds.php");

$_classified=new Classified();

if(!empty($_POST['submit']))
{
   $ad_id=$_classified->mark($_POST);

   // redirect to see the posted classified
   header("Location: home.php");
   exit;
}

//require("views/category.php");
?>