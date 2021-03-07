<?php 

$server   = "localhost";
$userName = "root";
$password = "";
$dbName   = "posts";

    $con = mysqli_connect($server,$userName,$password,$dbName);

     if(!$con){
         die('error : '.mysqli_connect_error());
     }else{

        if($_SERVER["REQUEST_METHOD"] == "POST"){

        $title = strip_tags(htmlspecialchars(trim($_POST['title'])));  
        $content = $_POST['content'];
        $created= date("d/m/Y  h:i:sa ");
   

        $sql  = "insert into post (title,content,created) values ('$title','$content','$created') "; 

        $result =  mysqli_query($con,$sql);

        if($result){
            echo 'success';
        }





        }






     }




?>
