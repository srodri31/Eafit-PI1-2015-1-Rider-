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
					  <?php echo $data->logo_band; if($data->logo_band == null) { ?>
						<img src="https://c4.staticflickr.com/4/3466/3717131691_8a4e652456_z.jpg" class="img-rounded img-responsive" style="width: 120pt; height:120pt;">
					  <?php } else { ?>	
						<img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/<?php echo $data->logo_band; ?>" class="img-rounded img-responsive" style="width: 120pt; height:120pt;">
					  <?php } ?>	
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
			<?php echo CHtml::link( 'Modify Bands Info',array('correctInfo', 'id'=>$data->id_band)); ?>			
			<?php endforeach ?>
		</div>	
		<div class="col-lg-6">	
			



			<section id="rider">
				<div>
				<?php if($model == null){ ?>
					<legend>There is Not Riders </legend>
				<?php } ?>
					<div class="span7">   
						<div class="widget stacked widget-table action-table">
							<div class="widget-header">
								<h3>Your Riders</h3>
								<h3><?php echo CHtml::link( 'New Rider',array('newgeneral')); ?></h3>
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
										<?php foreach ($model as $data): ?>
											<tr>
												<td>Date of last modification</td>
												<td><?php echo CHtml::link( $data->name_rider ,array('generatePdf', 'id'=>$data->id_rider)); ?></td>
												<td class="td-actions">
													<a class="btn btn-small">													
														<?php echo CHtml::link( '<i class="glyphicon glyphicon-pencil"></i>' ,array('callgeneral', 'id'=>$data->id_rider)); ?>
													</a>
													
													<a class="btn btn-small">
														<?php echo CHtml::link('<i class="glyphicon glyphicon-trash"></i>',array('delete','id'=>$data->id_rider),array("confirm"=>"Esta seguro"));?>																							
													</a>
												</td>
											</tr>
										<?php endforeach ?>										
									</tbody>
								</table>
								
							</div> <!-- /widget-content -->
						</div> <!-- /widget -->
			        </div>			
				<div>
			</section>
		</div>
	</div>
</section>

