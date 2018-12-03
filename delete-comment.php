<?php

//delete value in database comments table
$connection = mysqli_connect('localhost','root','','plainBlog');
if(mysqli_connect_errno($connection)){
    echo 'Faild connect!';
}


 $id=$_GET['comment_id'];
 $post_id=$_GET['post_id'];

 $sql = "DELETE FROM comments WHERE comments.id=" .$id;
 if ($connection->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }


header("Location:http://localhost:8001/single_post.php?post_id= $post_id");



?>