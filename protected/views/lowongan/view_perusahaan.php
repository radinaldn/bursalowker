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
            	<a class="btn btn-primary" onclick="location='<?= Yii::app()->request->baseUrl?>/index.php/lowongan/perusahaanSaya/<?= Yii::app()->session->get('id_perusahaan'); ?>'"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
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

                        <a title="Edit Kabupaten/Kota" class="btn btn-warning col-md-12" href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/lowongan/update/<?= $model->id_lowongan; ?>"><i class="fa fa-pencil"></i> Update Data</a>
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
                                        <td><span class="label label-info"><?php echo $model->status; ?></span></td>
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

            <!-- TABLE STRIPED -->
            <!-- <div class="panel"> -->
                <div class="">
                    <div class="col-md-6">
                    <h3><i class="fa fa-table"></i> List pelamar <small> Bursa-Lowker </small></h3>
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
                                <th>Nama Pelamar</th>
                                <th>ID Lowongan</th>
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
                                <?php foreach ($model_data_pelamar as $data) : ?>

                                    
                                    <tr>
                                        <td><?php echo $no;?></td>
                                        <td><a title="Lihat profil lengkap <?= $data['nama_lengkap']; ?>" href="../../pelamar/<?= $data['id_pelamar'];?>"><?= $data['nama_lengkap']; ?></a></td>
                                        <td><a href="../lowongan/<?= $data['id_lowongan']; ?>"><?= $data['id_lowongan']; ?></a> </td>
                                        <td><?= $data['tgl_lamar']; ?></td>
                                        <td><a target="_blank" title="unduh lampiran" href="<?= Yii::app()->request->baseUrl; ?>/files/lampiran/<?= $data['lampiran']; ?>"><?= $data['lampiran']; ?></a></td>
                                        <td>
                                            <?php
                                        if($data['status'] == "Proses"){
                                            echo "<span class='label label-warning'><i class='fa fa-refresh'>";
                                        } else if ($data['status'] == "Diterima"){
                                            echo "<span class='label label-success'><i class='fa fa-check'>";
                                        } else if ($data['status'] == "Ditolak"){
                                            echo "<span class='label label-danger'><i class='fa fa-times'>";
                                        } else {
                                            echo "status not defined.";
                                        }
                                        ?>

                                        </i> <?php echo $data['status']; ?></span>
                                        </td>
                                        <td>
                                        <!--<div class="hidden-sm hidden-xs action-buttons">-->
                                        <?php if ($data['status'] == "Proses") { ?>
                                            <a class="btn btn-primary btn-xs" href="<?= Yii::app()->request->baseUrl; ?>/index.php/lamaran/terima/<?= $data['id_lamaran']; ?>" role="button" onclick="return confirm('Anda yakin ingin menerima lamaran #<?php echo $data['id_lamaran'];?>')"><i class="fa fa-check"></i> Terima lamaran</a>
                                            <!-- <a class="btn btn-warning btn-xs" href="update/<?= $data['id_lamaran']; ?>" role="button"><i class="fa fa-pencil"></i></a> -->
                                            <a class="btn btn-danger btn-xs" href="<?= Yii::app()->request->baseUrl; ?>/index.php/lamaran/tolak/<?= $data['id_lamaran']; ?>" role="button"  onclick="return confirm('Anda yakin ingin menolak lamaran #<?php echo $data['id_lamaran'];?>')"><i class="fa fa-times"></i> Tolak lamaran</a>
                                            <!--</div>-->
                                        <?php } else { } ?>

                                            
                                            

                                        </td>
                                    </tr>
                                    <?php $no++; ?>
                                <?php endforeach; ?>


                            </tbody>
                        </table>
                    </div>
                <!-- </div> -->
                <!-- END TABLE STRIPED -->
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
