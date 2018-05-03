<?php
/* @var $this ProvinsiController */
/* @var $model Provinsi */

$this->breadcrumbs=array(
	// 'Provinsis'=>array('index'),
	// 'Manage',
);

$this->menu=array(
	// array('label'=>'List Provinsi', 'url'=>array('index')),
	// array('label'=>'Create Provinsi', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#provinsi-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<!-- <h1>Manage Provinsis</h1> -->

<?php if(Yii::app()->user->hasFlash('success')):?>
<div class="info">
    
    <div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Berhasil!</strong> <?php echo Yii::app()->user->getFlash('success'); ?>
  </div>    
</div>
<?php endif; ?>


				<div class="row">
		<div class="col-md-12">

			<!-- TABLE STRIPED -->
			<!-- <div class="panel"> -->
				<div class="">
					<div class="col-md-6">
					<h3><i class="fa fa-table"></i> Provinsi <small> Bursa Lowker </small></h3>
				</div>
					<div class="col-md-6 text-right">

									<i class="fa fa-plus m-right-xs"></i>
                                    <?php echo CHtml::Button('Tambah Provinsi',array('onClick'=>"location='create'", 'class'=>'btn btn-primary')); ?>

                            </div>

					
					
				</div>
				<div class="panel-body">
					<table id="example" class="table table-striped jambo_table bulk-action" cellspacing="0" width="100%">
						<br>
						<div class="x_title">
							<br>
					</div>
						<thead>
							<tr>
								<th>#</th>
								<th>ID Provinsi</th>
								<th>name Provinsi</th>
								<th></th>
							</tr>
							</thead>
							<tbody>

									<?php
										// print_r($model); // testing pemanggilan data
									?>

								<?php $no = 1; ?>
								<?php foreach ($model as $data) : ?>

									
									<tr>
										<td><?php echo $no;?></td>
										<td><?= $data->id_provinsi; ?></td> 
										<td><?= $data->name ?></td>
										<td>
										<!--<div class="hidden-sm hidden-xs action-buttons">-->
											<a class="btn btn-success btn-xs" href="<?= $data['id_provinsi']; ?>" role="button"><i class="fa fa-search"></i></a>
											<a class="btn btn-warning btn-xs" href="update/<?= $data['id_provinsi']; ?>" role="button"><i class="fa fa-pencil"></i></a>
											<a class="btn btn-danger btn-xs" href="delete/<?= $data['id_provinsi']; ?>" role="button"  onclick="return confirm('Anda yakin ingin menghapus <?php echo $data['name'];?>? Semua Kabupaten/Kota <?= $data['name']; ?>juga ikut terhapus')"><i class="fa fa-trash"></i></a>
											<!--</div>-->
											
											

										</td>
									</tr>
									<?php $no++; ?>
								<?php endforeach; ?>


							</tbody>
						</table>
					</div>
				<!-- </div> -->
				<!-- END TABLE STRIPED -->

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php 
// $this->renderPartial('_search',array(
// 	'model'=>$model,
// )); 
?>
</div><!-- search-form -->

<?php
//  $this->widget('zii.widgets.grid.CGridView', array(
// 	'id'=>'provinsi-grid',
// 	'dataProvider'=>$model->search(),
// 	'filter'=>$model,
// 	'columns'=>array(
// 		'id_provinsi',
// 		'name',
// 		array(
// 			'class'=>'CButtonColumn',
// 		),
// 	),
// )); 
?>
