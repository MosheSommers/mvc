<?php
/**
 * Created by PhpStorm.
 * User: msomm
 * Date: 12/27/2018
 * Time: 10:38 AM
 */
$model->addLayout('header', $model);
?>
<h1><?php echo ucfirst($model->title );?></h1>
<form action="../../blog/addPost/" method="post">
    <div class="input">
        <label for="author">Author</label>
        <input type="text" name="author" value="<?php echo $model->author; ?>">
    </div>
    <div class="input">
        <label for="header">Header</label>
        <input type="text" name="header" value="<?php echo $model->header; ?>">
    </div>
    <label for="post">Post</label>
    <div class="input">
        <textarea name="post" rows="30"><?php echo $model->post; ?></textarea>
    </div>

    <input type="submit">
</form>
<?php $model->addLayout('footer' ,$model); ?>
