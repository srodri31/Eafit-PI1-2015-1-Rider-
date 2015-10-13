<?php
/* @var $this BandsController */
/* @var $model bands */

$this->breadcrumbs=array(
	'Bands'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List bands', 'url'=>array('index')),
	array('label'=>'Manage bands', 'url'=>array('admin')),
);
?>

<h1>Create bands</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>