<?php
class Classified
{
   function __construct()
   {
      
   }

function add($vars)
   {
       if(!is_numeric($vars['category_id'])) exit;


        $servername = "SERVERNAME";
	$username = "USERNAME";
	$password = "PASSWORD";
	$dbname = "DATABASENAME";
          // Create connection
          $conn = new mysqli ( $servername, $username, $password, $dbname );


       $vars['title']=mysqli_real_escape_string($conn, $vars['title']);
       $vars['content']=mysqli_real_escape_string($conn, $vars['content']);
       $vars['contact_details']=mysqli_real_escape_string($conn, $vars['contact_details']);
        $vars['username']=mysqli_real_escape_string($conn, $vars['username']);
        $vars['price']=number_format( $vars['price'], 2, ',', ' ');
       $q="INSERT INTO classifieds (category_id,title,content,contact_details,date,User_sub, price)
       VALUES ('$vars[category_id]',\"$vars[title]\",\"$vars[content]\",
       \"$vars[contact_details]\",CURDATE(),\"$vars[username]\",\"$vars[price]\" )";
       mysqli_query($conn, $q);

       $id=mysqli_insert_id();
       return $id;
   }

   // list classifieds in a category
   function Classlist($category_id)
   {

        $servername = "SERVERNAME";
	$username = "USERNAME";
	$password = "PASSWORD";
	$dbname = "DATABASENAME";
          // Create connection
          $conn = new mysqli ( $servername, $username, $password, $dbname );

       if(!is_numeric($category_id)) exit;

       $q="SELECT * FROM classifieds WHERE category_id='$category_id' AND taken != 1
       ORDER BY id DESC";
       $result=mysqli_query($conn, $q);

       $ads=array();
       while($ad=mysqli_fetch_array($result)) $ads[]=$ad;
       return $ads;
   }


      function mark($vars)
   {

         $servername = "SERVERNAME";
	 $username = "USERNAME";
	 $password = "PASSWORD";
	 $dbname = "DATABASENAME";
          // Create connection
          $conn = new mysqli ( $servername, $username, $password, $dbname );

       if(!is_numeric($vars['ad_id'])) exit;

        $vars['username']=mysqli_real_escape_string($_SESSION['login']);


        	echo $vars['username'];
        	echo $vars['ad_id'];
       $q="update `classifieds` SET `User_take`= '$vars[username]' , `taken`= 1   WHERE `ID`='$vars[ad_id]'";
       //So yeah, I double checked this on the PHPmyAdmin, the sql should work so it is the variables that are messed up
       //It appears to be ad_id
       $result=mysqli_query($conn, $q);

       if ($conn->query($q) === TRUE) {
              echo "You have successfully answered this ad";
          } else {
              echo "Error updating record: " . $conn->error;
          }
   }




}
?>