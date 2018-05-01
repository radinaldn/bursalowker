<?php
/* @var $this PerusahaanController */
/* @var $model Perusahaan */

$this->breadcrumbs=array(
	'Perusahaans'=>array('index'),
	'Manage',
);

$this->menu=array(
	// array('label'=>'List Perusahaan', 'url'=>array('index')),
	// array('label'=>'Create Perusahaan', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#perusahaan-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<!-- h1>Manage Perusahaans</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	//'model'=>$model,
)); ?>
</div><!-- search-form -->


<div class="row">
		<div class="col-md-12">

			
			<!-- TABLE STRIPED -->
			<!-- <div class="panel"> -->
				<div class="">
					<div class="col-md-6">
					<h3><i class="fa fa-table"></i> Laporan Hasil Seleksi (Diterima<i class="fa fa-check"></i>) <small> Bursa Lowker </small></h3>
				</div>
					<div class="col-md-6 text-right">

									<!-- <i class="fa fa-plus m-right-xs"></i>
                                    <?php echo CHtml::Button('Tambah Perusahaan',array('onClick'=>"location='create'", 'class'=>'btn btn-primary')); ?> -->

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
								<th>Nama Pelamar</th>
								<th>Lowongan</th>
								<th>Nama Perusahaan</th>
								<th>Tanggal Lamaran</th>
								<th>Lampiran</th>
								<th>Status</th>
								
							</tr>
							</thead>
							<tbody>

									<?php
										// print_r($model); // testing pemanggilan data
									?>

								<?php $no = 1; ?>
								<?php foreach ($getAllTerima as $data) : ?>

									
									<tr>
										<td><?php echo $no;?></td>
										<td><?= $data['nama_lengkap']; ?></td> 
										<td><?= $data['pekerjaan']; ?></td>
										<td><?= $data['nama_perusahaan']; ?></td>
										<td><?= $data['tgl_lamar']; ?></td>
										<td><a title="unduh lampiran" href="<?= Yii::app()->request->baseUrl ?>/files/lampiran/<?= $data['lampiran'] ?>"><?= $data['lampiran']; ?></a></td>
										<td><span class="label label-success"><?= $data['status']; ?></span></td>
										
									</tr>
									<?php $no++; ?>
								<?php endforeach; ?>


							</tbody>
						</table>
					</div>
				<!-- </div> -->
				<!-- END TABLE STRIPED -->

				<!-- TABLE STRIPED -->
			<!-- <div class="panel"> -->
				<div class="">
					<div class="col-md-6">
					<h3><i class="fa fa-table"></i> Laporan Hasil Seleksi (Ditolak<i class="fa fa-check"></i>) <small> Bursa Lowker </small></h3>
				</div>
					<div class="col-md-6 text-right">

									<!-- <i class="fa fa-plus m-right-xs"></i>
                                    <?php echo CHtml::Button('Tambah Perusahaan',array('onClick'=>"location='create'", 'class'=>'btn btn-primary')); ?> -->

                            </div>

					
					
				</div>
				<div class="panel-body">
					<table id="example2" class="table table-striped jambo_table bulk-action" cellspacing="0" width="100%">
						<br>
						<div class="x_title">
							<br>
					</div>
						<thead>
							<tr>
								<th>#</th>
								<th>Nama Pelamar</th>
								<th>Lowongan</th>
								<th>Nama Perusahaan</th>
								<th>Tanggal Lamaran</th>
								<th>Lampiran</th>
								<th>Status</th>
								
							</tr>
							</thead>
							<tbody>

									<?php
										// print_r($model); // testing pemanggilan data
									?>

								<?php $no = 1; ?>
								<?php foreach ($getAllTolak as $data) : ?>

									
									<tr>
										<td><?php echo $no;?></td>
										<td><?= $data['nama_lengkap']; ?></td> 
										<td><?= $data['pekerjaan']; ?></td>
										<td><?= $data['nama_perusahaan']; ?></td>
										<td><?= $data['tgl_lamar']; ?></td>
										<td><a title="unduh lampiran" href="<?= Yii::app()->request->baseUrl ?>/files/lampiran/<?= $data['lampiran'] ?>"><?= $data['lampiran']; ?></a></td>
										<td><span class="label label-danger"><?= $data['status']; ?></span></td>
										
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
// 	'id'=>'perusahaan-grid',
// 	'dataProvider'=>$model->search(),
// 	'filter'=>$model,
// 	'columns'=>array(
// 		'id_perusahaan',
// 		'id_kota',
// 		'username',
// 		'password',
// 		'tgl_daftar',
// 		'nama_perusahaan',
// 		/*
// 		'alamat',
// 		'no_telp',
// 		'situs',
// 		'nama_kontak',
// 		'no_hp',
// 		*/
// 		array(
// 			'class'=>'CButtonColumn',
// 		),
// 	),
// )); 
?>
