<?php include 'db.php';
      // prepare query
                $sql = "SELECT id, title, body, author, created_at 
                FROM posts ORDER BY created_at DESC ";
                $statement = $connection->prepare($sql);
                // execute  query
                $statement->execute();
                // result as associative array
               
                $statement->setFetchMode(PDO::FETCH_ASSOC);
               
                $posts = $statement->fetchAll();
                // use var_dump to check 
                    // echo '<pre>';
                    // var_dump($posts);
                    // echo '</pre>';

                   
                    
  foreach($posts as $post){
                   
  ?>


<div class="blog-post">
    <h2 class="blog-post-title">
        <a href="single_post.php?post_id=<?php echo($post['id']) ?>" class="blog-title-link">
            <?php echo($post['title']) ?>
        </a>
    </h2>
    <p class="blog-post-meta">
        <?php echo($post['created_at']) ?> <a href="#">
            <?php echo($post['author']) ?></a></p>

    <p>
        <?php echo($post['body']) ?>
    </p>
    <hr>

</div><!-- /.blog-post -->

<?php }
?>