<?php
/**
 * Created by PhpStorm.
 * User: msomm
 * Date: 12/26/2018
 * Time: 12:30 PM
 */
$model->addLayout('header',$model); ?>

<h1><?php echo ucfirst($model->title );?></h1>
<p><?php echo $model->body; ?></p>

<?php $model->addLayout('footer',$model);


