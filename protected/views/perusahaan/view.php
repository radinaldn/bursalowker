<?php
/* @var $this PerusahaanController */
/* @var $model Perusahaan */

$this->breadcrumbs=array(
	'Perusahaans'=>array('index'),
	$model->id_perusahaan,
);

$this->menu=array(
	// array('label'=>'List Perusahaan', 'url'=>array('index')),
	// array('label'=>'Create Perusahaan', 'url'=>array('create')),
	// array('label'=>'Update Perusahaan', 'url'=>array('update', 'id'=>$model->id_perusahaan)),
	// array('label'=>'Delete Perusahaan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_perusahaan),'confirm'=>'Are you sure you want to delete this item?')),
	// array('label'=>'Manage Perusahaan', 'url'=>array('admin')),
);
?>

<h2><i class="fa fa-university"></i> Lihat Profil Perusahaan #<?php echo $model->id_perusahaan; ?></h2>
<div class="x_title">
                    </div>

<div class="row">
        <div class="col-md-12">
            <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
            <?php if (Yii::app()->session->get('level') == "admin"){ ?>
            	<a class="btn btn-primary" onclick="location='admin'"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
                <?php } else { ?>
                <a class="btn btn-primary" onclick="location='<?= Yii::app()->request->baseUrl ?>/index.php/home'"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
                <?php } ?>
<br><br>    

                <div class="profile_img">
                                <div id="crop-avatar">
                                    <!-- Current avatar -->
                                    <img class="img-responsive avatar-view" src="<?php echo Yii::app()->request->baseUrl; ?>/images/<?php echo $model->id_perusahaan; ?>" alt="Avatar" title="<?php ?>">
                                </div>
                            </div>
                            <h3><?php ?></h3>

                            <ul class="list-unstyled user_data">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <th scope="row">ID Perusahaan</th>
                                        <td><?php echo $model->id_perusahaan; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nama Perusahaan</th>
                                        <td><?php echo $model->nama_perusahaan; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Status Akun</th>
                                        <td><?php if ($model->level == "perusahaan") echo "Tervalidasi"; else echo "Belum divalidasi"; ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </ul>

                        <?php if (Yii::app()->session->get('level') == "admin"){ ?>
                        <a title="Edit Kabupaten/Kota" class="btn btn-warning col-md-12" href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/perusahaan/update/<?= $model->id_perusahaan; ?>"><i class="fa fa-pencil"></i> Update Profil</a>
                        <?php } ?>
                        <!-- <a class="btn btn-danger col-md-12" href="delete/<?= $model['id_perusahaan']; ?>" role="button"  onclick="return confirm('Anda yakin ingin menghapus <?php echo $model['nama_perusahaan'];?>? Semua lowongan dari <?= $model['nama_perusahaan']; ?>juga ikut terhapus')"><i class="fa fa-trash"></i> Hapus data</a> -->
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
                                        <th scope="row">ID Perusahaan</th>
                                        <td><?php echo $model->id_perusahaan; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">ID Kota</th>
                                        <td><?php echo $model->id_kabkota; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">username</th>
                                        <td><?php echo $model->username; ?></td>
                                    </tr>
                                    <!-- <tr>
                                        <th scope="row">Password</th>
                                        <td><?php echo $model->password; ?></td>
                                    </tr> -->
                                    <tr>
                                        <th scope="row">Tanggal Daftar</th>
                                        <td><?php echo $model->tgl_daftar; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nama Perusahaan</th>
                                        <td><?php echo $model->nama_perusahaan; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Alamat</th>
                                        <td><?php echo $model->alamat; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">No Telpon</th>
                                        <td><?php echo $model->no_telp; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Situs</th>
                                        <td><a title="Kunjungi situs <?= $model->nama_perusahaan; ?>" target="_blank" href="http://<?= $model->situs ?>"><?php echo $model->situs; ?></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nama Kontak</th>
                                        <td><?php echo $model->nama_kontak; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">No HP</th>
                                        <td><?php echo $model->no_hp; ?></td>
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
// 		'id_perusahaan',
// 		'id_kota',
// 		'username',
// 		'password',
// 		'tgl_daftar',
// 		'nama_perusahaan',
// 		'alamat',
// 		'no_telp',
// 		'situs',
// 		'nama_kontak',
// 		'no_hp',
// 	),
// )); 
?>
