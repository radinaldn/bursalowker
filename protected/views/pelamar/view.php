<?php
/* @var $this PelamarController */
/* @var $model Pelamar */

$this->breadcrumbs=array(
	'Pelamars'=>array('index'),
	$model->id_pelamar,
);

$this->menu=array(
	// array('label'=>'List Pelamar', 'url'=>array('index')),
	// array('label'=>'Create Pelamar', 'url'=>array('create')),
	// array('label'=>'Update Pelamar', 'url'=>array('update', 'id'=>$model->id_pelamar)),
	// array('label'=>'Delete Pelamar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pelamar),'confirm'=>'Are you sure you want to delete this item?')),
	// array('label'=>'Manage Pelamar', 'url'=>array('admin')),
);
?>

<h2><i class="fa fa-map-marker"></i> Lihat Pelamar #<?php echo $model->id_pelamar; ?></h2>
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
                                    <img class="img-responsive avatar-view" src="<?php echo Yii::app()->request->baseUrl; ?>/images/<?php echo $model->photo; ?>" alt="Avatar" title="<?php ?>">
                                </div>
                            </div>
                            <h3><?php ?></h3>

                            <ul class="list-unstyled user_data">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <th scope="row">ID Pelamar</th>
                                        <td><?php echo $model->id_pelamar; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nama Lengkap</th>
                                        <td><?php echo $model->nama_lengkap; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Status Akun</th>
                                        <td><?php if ($model->level == "pelamar") echo "Tervalidasi"; else echo "Belum divalidasi"; ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </ul>

                    <?php if ($model->level == "") { ?>
                        <a onclick="return confirm('Anda yakin ingin memvalidasi <?php echo $model->nama_lengkap;?>?')" class="col-md-12 btn btn-primary" href="validasi/<?= $model->id_pelamar; ?>" role="button"><i class="fa fa-check"></i> Validasi</a>

                        <?php } else { } ?>
                        <!-- <a class="btn btn-danger col-md-12" href="delete/<?= $model['id_pelamar']; ?>" role="button"  onclick="return confirm('Anda yakin ingin menghapus <?php echo $model['nama_lengkap'];?>? Semua lamaran dari <?= $model['nama_lengkap']; ?>juga ikut terhapus')"><i class="fa fa-trash"></i> Hapus data</a> -->
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
                                    <!-- <tr>
                                        <th scope="row">ID Pelamar</th>
                                        <td><?php echo $model->id_pelamar; ?></td>
                                    </tr> -->
                                    <tr>
                                        <th scope="row">Kota</th>
                                        <td><?php print_r($model->idKota->name); ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Jurusan</th>
                                        <td><?php echo $model->idJurusan->nama_jurusan; ?></td>
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
                                        <th scope="row">NIK</th>
                                        <td><?php echo $model->no_ktp; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tanggal Daftar</th>
                                        <td><?php echo $model->tgl_daftar; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nama Lengkap</th>
                                        <td><?php echo $model->nama_lengkap; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Jenis Kelamin</th>
                                        <td><?php echo $model->jenis_kelamin; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tanggal Lahir</th>
                                        <td><?php echo $model->tgl_lahir; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Alamat</th>
                                        <td><?php echo $model->alamat; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">No HP</th>
                                        <td><?php echo $model->no_hp; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Foto</th>
                                        <td><?php echo $model->photo; ?></td>
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
// 		'id_pelamar',
// 		'id_kota',
// 		'id_jurusan',
// 		'username',
// 		'password',
// 		'no_ktp',
// 		'tgl_daftar',
// 		'nama_lengkap',
// 		'jenis_kelamin',
// 		'tgl_lahir',
// 		'alamat',
// 		'no_hp',
// 		'photo',
// 	),
// )); 
?>
