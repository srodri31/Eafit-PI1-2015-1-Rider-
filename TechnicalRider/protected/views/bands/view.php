<?php
/* @var $this BandsController */
/* @var $model bands */

$this->breadcrumbs=array(
	'Bands'=>array('index'),
	$model->id_band,
);

$this->menu=array(
	array('label'=>'List bands', 'url'=>array('index')),
	array('label'=>'Create bands', 'url'=>array('create')),
	array('label'=>'Update bands', 'url'=>array('update', 'id'=>$model->id_band)),
	array('label'=>'Delete bands', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_band),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage bands', 'url'=>array('admin')),
);
?>

<h1>View bands #<?php echo $model->id_band; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_band',
		'name_band',
		'gender_band',
		'desc_band',
		'code_band',
	),
)); ?>
