<?php
/* @var $this JurusanPendidikanController */
/* @var $model JurusanPendidikan */

$this->breadcrumbs=array(
	'Jurusan Pendidikans'=>array('index'),
	$model->id_jurusan,
);

$this->menu=array(
	// array('label'=>'List JurusanPendidikan', 'url'=>array('index')),
	// array('label'=>'Create JurusanPendidikan', 'url'=>array('create')),
	// array('label'=>'Update JurusanPendidikan', 'url'=>array('update', 'id'=>$model->id_jurusan)),
	// array('label'=>'Delete JurusanPendidikan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_jurusan),'confirm'=>'Are you sure you want to delete this item?')),
	// array('label'=>'Manage JurusanPendidikan', 'url'=>array('admin')),
);
?>

<h2><i class="fa fa-map-marker"></i> Lihat Jurusan Pendidikan #<?php echo $model->id_jurusan; ?></h2>
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
                                    <img class="img-responsive avatar-view" src="<?php echo Yii::app()->request->baseUrl; ?>/images/<?php echo $model->nama_jurusan; ?>" alt="Avatar" title="<?php ?>">
                                </div>
                            </div>
                            <h3><?php ?></h3>

                            <ul class="list-unstyled user_data">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <th scope="row">ID Jurusan Pendidikan</th>
                                        <td><?php echo $model->id_jurusan; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nama Jurusan Pendidikan</th>
                                        <td><?php echo $model->nama_jurusan; ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </ul>

                        <a title="Edit Kabupaten/Kota" class="btn btn-warning col-md-12" href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/jurusanPendidikan/update/<?= $model->id_jurusan; ?>"><i class="fa fa-pencil"></i> Update Data</a>
                        <a onclick="return confirm('Anda yakin ingin menghapus <?php echo $model->nama_jurusan;?>? Semua Lowongan dan Pelamar yang berjurusan <?php echo $model->nama_jurusan;?> juga ikut terhapus')" title="Hapus data Kabupaten/Kota" class="btn btn-danger col-md-12" href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/jurusanPendidikan/delete/<?= $model->id_jurusan; ?>"><i class="fa fa-trash"></i> Hapus Data</a>
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
                                        <th scope="row">ID Jurusan Pendidikan</th>
                                        <td><?php echo $model->id_jurusan; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nama Jurusan Pendidikan</th>
                                        <td><?php echo $model->nama_jurusan; ?></td>
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
// $this->widget('zii.widgets.CDetailView', array(
// 	'data'=>$model,
// 	'attributes'=>array(
// 		'id_jurusan',
// 		'_jurusan_jurusan',
// 	),
// ));
 ?>
