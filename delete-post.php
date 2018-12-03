<?php

//delete value in database posts table

$connection = mysqli_connect('localhost','root','','plainBlog');
if(mysqli_connect_errno($connection)){
    echo 'Faild connect!';
}



 $post_id=$_GET['post_id'];
 $sql = "DELETE FROM posts WHERE posts.id =".$post_id;
 if ($connection->query($sql) === TRUE) {
        echo "New record deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }


header("Location:http://localhost:8001/index.php");


?>