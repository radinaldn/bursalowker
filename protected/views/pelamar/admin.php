<?php
/* @var $this PelamarController */
/* @var $model Pelamar */

$this->breadcrumbs=array(
	'Pelamars'=>array('index'),
	'Manage',
);

$this->menu=array(
	// array('label'=>'List Pelamar', 'url'=>array('index')),
	// array('label'=>'Create Pelamar', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pelamar-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<!-- <h1>Manage Pelamars</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p> -->

<?php
 //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); 
 ?>
<!-- <div class="search-form" style="display:none"> -->
<?php 
// $this->renderPartial('_search',array(
// 	'model'=>$model,
// )); 
?>
</div><!-- search-form -->

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
					<h3><i class="fa fa-table"></i> Pelamar (Tervalidasi<i class="fa fa-check"></i>) <small> Bursa Lowker </small></h3>
				</div>
					<div class="col-md-6 text-right">

									<!-- <i class="fa fa-plus m-right-xs"></i>
                                    <?php echo CHtml::Button('Tambah Pelamar',array('onClick'=>"location='create'", 'class'=>'btn btn-primary')); ?> -->

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
								<th>NIK</th>
								<th>Nama</th>
								<th>Kota</th>
								<th>Jurusan</th>
								<th>username</th>
								<th>Foto</th>
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
										<td><?= $data['no_ktp']; ?></td> 
										<td><?= $data['nama_lengkap']; ?></td>
										<td><?= $data['nama_kota']; ?></td>
										<td><?= $data['nama_jurusan']; ?></td>
										<td><?= $data['username']; ?></td>
										<td><?= $data['photo']; ?></td>
										<td>
										<!--<div class="hidden-sm hidden-xs action-buttons">-->
											<a class="btn btn-success btn-xs" href="<?= $data['id_pelamar']; ?>" role="button"><i class="fa fa-search"></i></a>
											<!-- <a class="btn btn-warning btn-xs" href="update/<?= $data['id_pelamar']; ?>" role="button"><i class="fa fa-pencil"></i></a> -->
											<a class="btn btn-danger btn-xs" href="delete/<?= $data['id_pelamar']; ?>" role="button"  onclick="return confirm('Anda yakin ingin menghapus <?php echo $data['nama_lengkap'];?>? Semua lamaran dari <?= $data['nama_lengkap']; ?>juga ikut terhapus')"><i class="fa fa-trash"></i></a>
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

<div class="row">
		<div class="col-md-12">

			<!-- TABLE STRIPED -->
			<!-- <div class="panel"> -->
				<div class="">
					<div class="col-md-6">
					<h3><i class="fa fa-table"></i> Pelamar (Belum Tervalidasi<i class="fa fa-times"></i>) <small> Bursa Lowker </small></h3>
				</div>
					<div class="col-md-6 text-right">

									<!-- <i class="fa fa-plus m-right-xs"></i>
                                    <?php echo CHtml::Button('Tambah Pelamar',array('onClick'=>"location='create'", 'class'=>'btn btn-primary')); ?> -->

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
								<th>NIK</th>
								<th>Nama</th>
								<th>Kota</th>
								<th>Jurusan</th>
								<th>username</th>
								<th>Foto</th>
								<th></th>
							</tr>
							</thead>
							<tbody>

									<?php
										// print_r($model); // testing pemanggilan data
									?>

								<?php $no = 1; ?>
								<?php foreach ($getAllNonValid as $data) : ?>

									
									<tr>
										<td><?php echo $no;?></td>
										<td><?= $data['no_ktp']; ?></td> 
										<td><?= $data['nama_lengkap']; ?></td>
										<td><?= $data['nama_kota']; ?></td>
										<td><?= $data['nama_jurusan']; ?></td>
										<td><?= $data['username']; ?></td>
										<td><?= $data['photo']; ?></td>
										<td>
										<!--<div class="hidden-sm hidden-xs action-buttons">-->
										<a onclick="return confirm('Anda yakin ingin memvalidasi <?php echo $data['nama_lengkap'];?>?')" class="btn btn-primary btn-xs" href="validasi/<?= $data['id_pelamar']; ?>" role="button"><i class="fa fa-check"></i>Validasi</a>
											<a class="btn btn-success btn-xs" href="<?= $data['id_pelamar']; ?>" role="button"><i class="fa fa-search"></i></a>
											<!-- <a class="btn btn-warning btn-xs" href="update/<?= $data['id_pelamar']; ?>" role="button"><i class="fa fa-pencil"></i></a> -->
											<a class="btn btn-danger btn-xs" href="delete/<?= $data['id_pelamar']; ?>" role="button"  onclick="return confirm('Anda yakin ingin menghapus <?php echo $data['nama_lengkap'];?>? Semua lamaran dari <?= $data['nama_lengkap']; ?>juga ikut terhapus')"><i class="fa fa-trash"></i></a>
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


<?php 
// $this->widget('zii.widgets.grid.CGridView', array(
// 	'id'=>'pelamar-grid',
// 	'dataProvider'=>$model->search(),
// 	'filter'=>$model,
// 	'columns'=>array(
// 		'id_pelamar',
// 		'id_kota',
// 		'id_jurusan',
// 		'username',
// 		'password',
// 		'no_ktp',
// 		/*
// 		'tgl_daftar',
// 		'nama_lengkap',
// 		'jenis_kelamin',
// 		'tgl_lahir',
// 		'alamat',
// 		'no_hp',
// 		'photo',
// 		*/
// 		array(
// 			'class'=>'CButtonColumn',
// 		),
// 	),
// )); 
?>
