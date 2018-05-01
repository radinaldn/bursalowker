<?php
/* @var $this KotaController */
/* @var $model Kota */

$this->breadcrumbs=array(
	'Kotas'=>array('index'),
	'Manage',
);

$this->menu=array(
	// array('label'=>'List Kota', 'url'=>array('index')),
	// array('label'=>'Create Kota', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#kota-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php if(Yii::app()->user->hasFlash('tambah')):?>
<div class="info">
    
    <div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Berhasil!</strong> <?php echo Yii::app()->user->getFlash('tambah'); ?>
  </div>    
</div>
<?php endif; ?>

<?php if(Yii::app()->user->hasFlash('ubah')):?>
<div class="info">
    
    <div class="alert alert-warning">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Berhasil!</strong> <?php echo Yii::app()->user->getFlash('ubah'); ?>
  </div>    
</div>
<?php endif; ?>

<?php if(Yii::app()->user->hasFlash('hapus')):?>
<div class="info">
    
    <div class="alert alert-error">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Berhasil!</strong> <?php echo Yii::app()->user->getFlash('hapus'); ?>
  </div>    
</div>
<?php endif; ?>

<div class="row">
		<div class="col-md-12">

			<!-- TABLE STRIPED -->
			<!-- <div class="panel"> -->
				<div class="">
					<div class="col-md-6">
					<h3><i class="fa fa-table"></i> Operator Dinas <small> Bursa-Lowker </small></h3>
				</div>
					<div class="col-md-6 text-right">

									<i class="fa fa-plus m-right-xs"></i>
                                    <?php echo CHtml::Button('Tambah Operator Dinas',array('onClick'=>"location='create'", 'class'=>'btn btn-primary')); ?>

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
								<!-- <th>ID Jurusan</th> -->
								<th>Nama</th>
								<th>Username</th>
								<th>Password</th>
								<th>Tanggal Daftar</th>
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
										
										<td><?= $data->nama; ?></td>
										<td><?= $data->username; ?></td>
										<td><?= $data->password; ?></td>
										<td><?php
										$date = date_create($data->tgl_daftar); 
										echo date_format($date, 'j F Y');
										 
										 ?></td>
										<td>
										<!--<div class="hidden-sm hidden-xs action-buttons">-->
											<!-- <a class="btn btn-success btn-xs" href="<?= $data->id_admin; ?>" role="button"><i class="fa fa-search"></i></a> -->
											<a class="btn btn-warning btn-xs" href="update/<?= $data->id_admin; ?>" role="button"><i class="fa fa-pencil"></i></a>
											<a class="btn btn-danger btn-xs" href="delete/<?= $data->id_admin; ?>" role="button"  onclick="return confirm('Anda yakin ingin menghapus Operator Dinas <?php echo $data->nama;?>?')"><i class="fa fa-trash"></i></a>
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

<!-- <h1>Manage Kotas</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p> -->

<!-- <?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form --> 

<?php
//  $this->widget('zii.widgets.grid.CGridView', array(
// 	'id'=>'kota-grid',
// 	'dataProvider'=>$model->search(),
// 	'filter'=>$model,
// 	'columns'=>array(
// 		'id_admin',
// 		'nama',
// 		array(
// 			'class'=>'CButtonColumn',
// 		),
// 	),
// ));
 ?>
