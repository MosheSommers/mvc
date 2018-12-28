<?php
/**
 * Created by PhpStorm.
 * User: msomm
 * Date: 12/26/2018
 * Time: 2:00 PM
 */
$model->addLayout('header',$model);
?>

<h1><?php echo ucfirst($model->title);?></h1>

<?php $model->addLayout('footer',$model);

