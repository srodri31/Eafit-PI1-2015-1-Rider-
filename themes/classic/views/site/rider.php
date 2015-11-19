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
				<?php if($model == null){ ?>
					<legend>Al parecer aún no tienes ningun rider :(</legend>
				<?php }	foreach ($model as $data):?>
					<div class="span7">   
						<div class="widget stacked widget-table action-table">
							<div class="widget-header">
								<h3>Your Riders</h3>
								<h3>New Rider</h3>
								<i class="glyphicon glyphicon-file"></i>
							</div> <!-- /widget-header -->			    				
							<div class="widget-content">								
								<table class="table table-striped table-bordered">
									<thead>
										<tr>
											<th>Last Modification</th>
											<th>Name</th>
											<th class="td-actions"> Options</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Date of last modification</td>
											<td><?php echo CHtml::link( $data->name_rider ,array('generatePdf', 'id'=>$data->id_rider)); ?></td>
											<td class="td-actions">
												<a class="btn btn-small">													
													<?php echo CHtml::link( '<i class="glyphicon glyphicon-pencil"></i>' ,array('callGeneral', 'id'=>$data->id_rider)); ?>
												</a>
												
												<a class="btn btn-small">
													<?php echo CHtml::link('<i class="glyphicon glyphicon-trash"></i>',array('delete','id'=>$data->id_rider),array("confirm"=>"Esta seguro"));?>																							
												</a>
											</td>
										</tr>										
									</tbody>
								</table>
								
							</div> <!-- /widget-content -->
						
						</div> <!-- /widget -->
			        </div>
					
				<?php endforeach ?>
				<?php echo CHtml::link( 'Nuevo rider',array('NewStage')); ?> 
				<div>
			</section>
		</div>
	</div>
</section>

