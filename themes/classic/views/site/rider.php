<div class="row" >
  <div class="col-lg-8"> 
  	<?php foreach ($bandInfo as $data):?>	 
    	<h3><div class="btn btn-custom">Wellcome</div> <?php echo $data->name_band;?></h3>    
    <?php endforeach ?>                           
  </div>
  <div class="col-lg-4"></div>
</div>

<section id="rider">
	<div class="row">	
		<div class="col-lg-6">
			<?php foreach ($bandInfo as $data):?>
				<div class="row">
					<div class="col-lg-4">
						<img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/<?php echo $data->logo_band; ?>" class="img-rounded img-responsive" style="width: 120pt; height:120pt;">
					</div>
					<div class="col-lg-6">
						<p style="text-align:center">
							<?php echo $data->page_band; ?><br>
							<?php echo $data->email_band; ?><br>
							<b><?php echo $data->genre_band;?></b>
						</p>						
					</div>
					<div class="col-lg-2"></div>
				</div><br>
				<div class="row">
					<div class="col-lg-10" style="text-align:justify;"><?php echo $data->desc_band; ?></div>
					<div class="col-lg-2"></div>
				</div>			
			<?php endforeach ?>
		</div>	
		<div class="col-lg-6">	
			



			<section id="rider">
				<div>
				<?php 
				if($model == null){
					?>
					<legend>Al parecer aún no tienes ningun rider :(</legend>
				<?php
				}
				foreach ($model as $data):?>
					<legend>
						<?php echo CHtml::link( $data->name_rider ,array('callGeneral', 'id'=>$data->id_rider)); ?> <br>
						<?php echo CHtml::link("Delete",array('delete','id'=>$data->id_rider),array("confirm"=>"Esta seguro"));?>
					</legend>
				<?php endforeach ?>
				<?php echo CHtml::link( 'Nuevo rider',array('NewGeneral')); ?> 
				<div>
			</section>
		</div>
	</div>
</section>

