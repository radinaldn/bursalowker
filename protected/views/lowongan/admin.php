<?php
/* @var $this LowonganController */
/* @var $model Lowongan */

$this->breadcrumbs=array(
	'Lowongans'=>array('index'),
	'Manage',
);

$this->menu=array(
	// array('label'=>'List Lowongan', 'url'=>array('index')),
	// array('label'=>'Create Lowongan', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#lowongan-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<!-- <h1>Manage Lowongans</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p> -->

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<!-- <div class="search-form" style="display:none"> -->
<?php 
// $this->renderPartial('_search',array(
// 	'model'=>$model,
// )); 
?>
<!-- </div> --><!-- search-form -->

<div class="row">
		<div class="col-md-12">

			<!-- TABLE STRIPED -->
			<!-- <div class="panel"> -->
				<div class="">
					<div class="col-md-6">
					<h3><i class="fa fa-table"></i> Lowongan <small> Bursa-Loweker </small></h3>
				</div>
					<div class="col-md-6 text-right">

									<!-- <i class="fa fa-plus m-right-xs"></i>
                                    <?php echo CHtml::Button('Tambah Lowongan',array('onClick'=>"location='create'", 'class'=>'btn btn-primary')); ?> -->

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
								<!-- th>ID Lowongan</th> -->
								<th>Kategori</th>
								<th>Perusahaan</th>
								<th>Kota</th>
								<th>Jurusan</th>
								<th>Tanggal Buat</th>
								<th>Tanggal Panggilan</th>
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
										<!-- <td><?= $data['id_lowongan']; ?></td> -->
										<td><?= $data['nama_kategori']; ?></td>
										<td><a href="../perusahaan/<?= $data['id_perusahaan']; ?>"><?= $data['nama_perusahaan']; ?></a></td>
										<td><?= $data['name']; ?></td>
										<td><?= $data['nama_jurusan']; ?></td>
										<td><?= $data['tgl_buat']; ?></td>
										<td><?= $data['tgl_panggilan']; ?></td>
										<td>
										<!--<div class="hidden-sm hidden-xs action-buttons">-->
											<a class="btn btn-success btn-xs" href="<?= $data['id_lowongan']; ?>" role="button"><i class="fa fa-search"></i></a>
											<!-- <a class="btn btn-warning btn-xs" href="update/<?= $data['id_lowongan']; ?>" role="button"><i class="fa fa-pencil"></i></a> -->
											<a class="btn btn-danger btn-xs" href="delete/<?= $data['id_lowongan']; ?>" role="button"  onclick="return confirm('Anda yakin ingin menghapus lowongan #<?php echo $data['id_lowongan'];?>? Semua lamaran dari lowongan ini juga ikut terhapus')"><i class="fa fa-trash"></i></a>
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
//  $this->widget('zii.widgets.grid.CGridView', array(
// 	'id'=>'lowongan-grid',
// 	'dataProvider'=>$model->search(),
// 	'filter'=>$model,
// 	'columns'=>array(
// 		'id_lowongan',
// 		'id_kategori',
// 		'id_perusahaan',
// 		'id_kota',
// 		'id_jurusan',
// 		'tgl_buat',
// 		/*
// 		'pekerjaan',
// 		'tipe_pekerjaan',
// 		'deskripsi',
// 		'persyaratan',
// 		'tawaran_gaji',
// 		'usia_max',
// 		'jenis_kelamin',
// 		'batas_lamaran',
// 		'status',
// 		*/
// 		array(
// 			'class'=>'CButtonColumn',
// 		),
// 	),
// )); 
?>
