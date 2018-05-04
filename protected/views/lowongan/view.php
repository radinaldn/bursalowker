<?php
/* @var $this LowonganController */
/* @var $model Lowongan */

$this->breadcrumbs=array(
	'Lowongans'=>array('index'),
	$model->id_lowongan,
);

$this->menu=array(
	// array('label'=>'List Lowongan', 'url'=>array('index')),
	// array('label'=>'Create Lowongan', 'url'=>array('create')),
	// array('label'=>'Update Lowongan', 'url'=>array('update', 'id'=>$model->id_lowongan)),
	// array('label'=>'Delete Lowongan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_lowongan),'confirm'=>'Are you sure you want to delete this item?')),
	// array('label'=>'Manage Lowongan', 'url'=>array('admin')),
);
?>

<h2><i class="fa fa-map-marker"></i> Lihat Lowongan #<?php echo $model->id_lowongan; ?></h2>
<div class="x_title">
                    </div>

<div class="row">
        <div class="col-md-12">
            <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
            	<a class="btn btn-primary" onclick="location='admin'"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
<br><br>    

                <div class="profile_img">
                                <div id="crop-avatar">
                                    <!-- Current avatar -->
                                    <img class="img-responsive avatar-view" src="<?php echo Yii::app()->request->baseUrl; ?>/images/<?php echo $model->id_lowongan; ?>" alt="Avatar" title="<?php ?>">
                                </div>
                            </div>
                            <h3><?php ?></h3>

                            <ul class="list-unstyled user_data">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <th scope="row">ID Lowongan</th>
                                        <td><?php echo $model->id_lowongan; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">ID Kategori</th>
                                        <td><?php echo $model->id_kategori; ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </ul>

                        <!-- <a title="Edit Kabupaten/Kota" class="btn btn-warning col-md-12" href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/Lowongan/update/<?= $model->id_lowongan; ?>"><i class="fa fa-pencil"></i> Update Data</a> -->
                        <a onclick="return confirm('Anda yakin ingin menghapus lamaran #<?php echo $model->id_lowongan;?> ?')" title="Hapus data lamaran" class="btn btn-danger col-md-12" href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/lamaran/delete/<?= $model->id_lowongan; ?>"><i class="fa fa-trash"></i> Hapus Data</a>
                        </div>
<br>
<br>
<br>
                        <div class="col-md-9 col-sm-9 col-xs-15">
                            <div class="x_panel">

                                <div class="x_content">

                                    <!-- start accordion -->
                                    <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <table class="table">
                                                    <tbody>
                                    <tr>
                                        <th scope="row">ID Lowongan</th>
                                        <td><?php echo $model->id_lowongan; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">ID Kategori</th>
                                        <td><?php echo $model->id_kategori; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">ID Perusahaan</th>
                                        <td><?php echo $model->id_perusahaan; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">ID Kota</th>
                                        <td><?php echo $model->id_kabkota; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">ID Jurusan</th>
                                        <td><?php echo $model->id_jurusan; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tanggal Buat</th>
                                        <td><?php echo $model->tgl_buat; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Pekerjaan</th>
                                        <td><?php echo $model->pekerjaan; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tipe Pekerjaan</th>
                                        <td><?php echo $model->tipe_pekerjaan; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Deskripsi</th>
                                        <td><?php echo $model->deskripsi; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Persyaratan</th>
                                        <td><?php echo $model->persyaratan; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tawaran Gaji</th>
                                        <td><?php echo $model->tawaran_gaji; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Usia Max</th>
                                        <td><?php echo $model->usia_max; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Jenis Kelamin</th>
                                        <td><?php echo $model->jenis_kelamin; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Batas Lamaran</th>
                                        <td><?php echo $model->batas_lamaran; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Status</th>
                                        <td><?php echo $model->status; ?></span>
                                        </td>
                                    </tr>
                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of accordion -->


                                </div>
                            </div>
                        </div>
			</div>
		</div>
</div>

<?php
//  $this->widget('zii.widgets.CDetailView', array(
// 	'data'=>$model,
// 	'attributes'=>array(
// 		'id_lowongan',
// 		'id_kategori',
// 		'id_perusahaan',
// 		'id_kabkota',
// 		'id_jurusan',
// 		'tgl_buat',
// 		'pekerjaan',
// 		'tipe_pekerjaan',
// 		'deskripsi',
// 		'persyaratan',
// 		'tawaran_gaji',
// 		'usia_max',
// 		'jenis_kelamin',
// 		'batas_lamaran',
// 		'status',
// 	),
// )); 
?>
