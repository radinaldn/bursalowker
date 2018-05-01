<?php
/* @var $this LamaranController */
/* @var $model Lamaran */

$this->breadcrumbs=array(
	'Lamarans'=>array('index'),
	'Manage',
);

$this->menu=array(
	// array('label'=>'List Lamaran', 'url'=>array('index')),
	// array('label'=>'Create Lamaran', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#lamaran-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<!-- <h1>Manage Lamarans</h1>

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
</div><!-- search-form -->

<div class="row">
		<div class="col-md-12">

			<!-- TABLE STRIPED -->
			<!-- <div class="panel"> -->
				<div class="">
					<div class="col-md-6">
					<h3><i class="fa fa-table"></i> Hasil Seleksi <small> Bursa-Lowker </small></h3>
				</div>
					<div class="col-md-6 text-right">

									<!-- <i class="fa fa-plus m-right-xs"></i>
                                    <?php echo CHtml::Button('Tambah Kabupaten/Kota',array('onClick'=>"location='create'", 'class'=>'btn btn-primary')); ?> -->

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
								<th>Nama Perusahaan</th>
								<th>Tawaran Kerja</th>
								<th>Tanggal Lamar</th>
								<th>Lampiran</th>
								<th>Status</th>
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
										<td><a href="../perusahaan/<?= $data['id_perusahaan'];?>"><?= $data['nama_perusahaan']; ?></a></td> 
										<td><a title="Lihat lowongan" href="../lowongan/viewPelamar/<?= $data['id_lowongan']; ?>"><?= $data['pekerjaan']; ?></a>	</td>
										<td><?= $data['tgl_lamar']; ?></td>
										<td><a target="_blank" title="unduh lampiran" href="<?= Yii::app()->request->baseUrl; ?>/files/lampiran/<?= $data['lampiran']; ?>"><?= $data['lampiran']; ?></a></td>
										<td>
										<?php
                                        if($data['status'] == "Proses"){
                                            echo "<span title='Lamaran anda telah dikirim, mohon menunggu' class='label label-warning'><i class='fa fa-refresh'>";
                                        } else if ($data['status'] == "Diterima"){
                                            echo "<span title='Selamat! anda berhasil diterima' class='label label-success'><i class='fa fa-check'>";
                                        } else if ($data['status'] == "Ditolak"){
                                            echo "<span title='Mohon maaf, anda belum memenuhi persyaratan untuk diterima' class='label label-danger'><i class='fa fa-times'>";
                                        } else {
                                            echo "status not defined.";
                                        }
                                        ?>
                                        </i> <?php echo $data['status']; ?></span>
										</td>
										<td>
										<!--<div class="hidden-sm hidden-xs action-buttons">-->
											<!-- <a class="btn btn-success btn-xs" href="<?= $data['id_lamaran']; ?>" role="button"><i class="fa fa-search"></i></a> -->
											<?php if ($data['status'] == "Proses") { ?>
											<a title="Edit lamaran" class="btn btn-warning btn-xs" href="update/<?= $data['id_lamaran']; ?>" role="button"><i class="fa fa-pencil"></i></a>
											<a title="Hapus lamaran" class="btn btn-danger btn-xs" href="delete/<?= $data['id_lamaran']; ?>" role="button"  onclick="return confirm('Anda yakin ingin menghapus lamaran #<?php echo $data['id_lamaran'];?>')"><i class="fa fa-trash"></i></a>
											<?php } else { } ?>
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
// 	'id'=>'lamaran-grid',
// 	'dataProvider'=>$model->search(),
// 	'filter'=>$model,
// 	'columns'=>array(
// 		'id_lamaran',
// 		'id_pelamar',
// 		'id_lowongan',
// 		'tgl_lamar',
// 		'lampiran',
// 		'status',
// 		array(
// 			'class'=>'CButtonColumn',
// 		),
// 	),
// ));
 ?>
