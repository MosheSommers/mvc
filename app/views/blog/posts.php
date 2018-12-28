<?php
/**
 * Created by PhpStorm.
 * User: msomm
 * Date: 12/27/2018
 * Time: 9:20 AM
 */
$model->addLayout('header',$model);
?>
<h1><?php echo ucfirst($model->title );?></h1>
<button><a href="../../blog/create/">Create Post</a></button>
<ul class="posts">
    <?php foreach ($model->blogs as $blog ): ?>
        <li class="post">
            <h2 class="post-header"><?php echo $blog->header; ?></h2>
            <p class="post-author"><?php echo $blog->author ?></p>
            <p class="post-content"><?php echo $blog->post; ?></p>
            <button><a href="../../blog/deletePost/<?php echo $blog->id ?>" >Delete Post</a></button>
            <hr>
        </li>
    <?php endforeach; ?>
</ul>

<?php $model->addLayout('footer',$model);

?>
