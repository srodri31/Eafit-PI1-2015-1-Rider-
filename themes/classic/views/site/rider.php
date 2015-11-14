<html>
<br><br>
<div class="row">
	<div class="col-lg-6">	
    	<h3>My riders</h3>
    </div>
    <div class="col-lg-6"></div>
</div>

<section id="rider">
<div>
	
<?php 
if($model == null){
	?>
	<legend>Al parecer aún no tienes ningun rider :(</legend>
	<?php echo CHtml::link( 'Nuevo rider',array('stage')); ?> 
<?php
}
foreach ($model as $data):?>
	<li><?php echo CHtml::link( $data->name_rider,array('stage')); ?> </li>
<?php endforeach ?>
<div>
</section>
<?php echo CHtml::link('logout',array('logout')); ?>
</html>