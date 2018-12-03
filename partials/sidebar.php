<?php include 'db.php'; 
          
    
                $sql = "SELECT id, title, body, author, created_at FROM posts ORDER BY created_at DESC LIMIT 5 ";
                $statement = $connection->prepare($sql);
             
                $statement->execute();
                $statement->setFetchMode(PDO::FETCH_ASSOC);
                $posts = $statement->fetchAll();
                    // echo '<pre>';
                    // var_dump($posts);
                    // echo '</pre>';

?>


<aside class="col-sm-3 ml-sm-auto blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <h4>Latests posts</h4>
        <?php 
                foreach($posts as $post)
                {?>
        <h5><a href="single_post.php?post_id=<?php echo($post['id']) ?>">
                <?php echo($post['title']) ?></a></h5>
        <?php 
                }?>
    </div>

</aside>