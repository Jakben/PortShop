<?php
class Category
{
   function __construct()
   {
      // for this tutorial there will be nothing inside this method
      // in the real app you could possibly add some initialization
   }

   function add($name)
   {
      $this->filter($name);
      $q="INSERT INTO categories (name) VALUES (\"$name\")";
      mysql_query($q) or die(mysql_error());
   }

   function edit($name, $id)
   {
      $this->filter($name);
      // add some basic security
      if(!is_numeric($id)) exit;

      $q="UPDATE categories SET name=\"$name\" WHERE id='$id'";
      mysqli_query($q);
   }

   // category name allows only alphanumeric
   private function filter($name)
   {
      $name=preg_replace("/\W/","",$name);
      return $name;
   }

   function delete($id)
   {
       if(!is_numeric($id)) exit;

       $q="DELETE FROM categories WHERE id='$id'";
       mysqli_query($q);
   }

   // method to list the categories for admin edit/delete
   function Catelist()
   {
       $q="SELECT * FROM categories ORDER BY name";
       $result=mysqli_query($q);

       $cats=array();

       while($cat=mysqli_fetch_array($result)) $cats[]=$cat;
       return $cats;
   }

   // method to return categories along with number of ads in them
   function list_count()
  {

   $servername = "SERVERNAME";
   $username = "USERNAME";
   $password = "PASSWORD";
   $dbname = "DATABASENAME";
    // Create connection
    $conn = new mysqli ( $servername, $username, $password, $dbname );


  $q="SELECT COUNT(tA.id) as classifieds, tC.name as name, tC.id as id
  FROM categories as tC LEFT JOIN  classifieds as tA ON tA.category_id=tC.id WHERE tA.taken != 1
  ORDER BY tC.name"; //THis is only returning one category and all of the classifieds, suggesting that Cake has 10 ads
  //Need to fix that or use this method instead
  $result=mysqli_query($conn, $q);
  $cats=array();

  while($cat=mysqli_fetch_array($result)) $cats[]=$cat;
  return $cats;
  }

   // method to return full category data for a single category
   function select($id)
   {
			$servername = "SERVERNAME";
			$username = "USERNAME";
			$password = "PASSWORD";
			$dbname = "DATABASENAME";
          // Create connection
          $conn = new mysqli ( $servername, $username, $password, $dbname );
      if(!is_numeric($id)) exit;

       $q="SELECT * FROM categories WHERE id='$id'";
       $result=mysqli_query($conn, $q);
       $category=mysqli_fetch_array($result);
       return $category;
    }
}
?>