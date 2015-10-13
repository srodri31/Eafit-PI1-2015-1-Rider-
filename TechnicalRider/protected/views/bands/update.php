<?php
/* @var $this BandsController */
/* @var $model bands */

$this->breadcrumbs=array(
	'Bands'=>array('index'),
	$model->id_band=>array('view','id'=>$model->id_band),
	'Update',
);

$this->menu=array(
	array('label'=>'List bands', 'url'=>array('index')),
	array('label'=>'Create bands', 'url'=>array('create')),
	array('label'=>'View bands', 'url'=>array('view', 'id'=>$model->id_band)),
	array('label'=>'Manage bands', 'url'=>array('admin')),
);
?>

<h1>Update bands <?php echo $model->id_band; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>