<?php
/* @var $this KotaController */
/* @var $model Kota */

$this->breadcrumbs=array(
	'Kotas'=>array('index'),
	$model->id_kota,
);

$this->menu=array(
	// array('label'=>'List Kota', 'url'=>array('index')),
	// array('label'=>'Create Kota', 'url'=>array('create')),
	// array('label'=>'Update Kota', 'url'=>array('update', 'id'=>$model->id_kota)),
	// array('label'=>'Delete Kota', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_kota),'confirm'=>'Are you sure you want to delete this item?')),
	// array('label'=>'Manage Kota', 'url'=>array('admin')),
);
?>

<h2><i class="fa fa-map-marker"></i> Lihat Kota #<?php echo $model->id_kota; ?></h2>
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
                                    <img class="img-responsive avatar-view" src="<?php echo Yii::app()->request->baseUrl; ?>/images/<?php echo $model->nama_kota; ?>" alt="Avatar" title="<?php ?>">
                                </div>
                            </div>
                            <h3><?php ?></h3>

                            <ul class="list-unstyled user_data">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <th scope="row">ID Kota</th>
                                        <td><?php echo $model->id_kota; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nama Kota</th>
                                        <td><?php echo $model->nama_kota; ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </ul>

                        <a title="Edit Kota" class="btn btn-warning col-md-12" href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/kota/update/<?= $model->id_kota; ?>"><i class="fa fa-pencil"></i> Update Data</a>
                        <a onclick="return confirm('Anda yakin ingin menghapus <?php echo $model->nama_kota;?>? Semua Perusahaan, Lowongan dan Pelamar di <?php echo $model->nama_kota;?> juga ikut terhapus')" title="Hapus Kategori" class="btn btn-danger col-md-12" href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/kota/delete/<?= $model->id_kota; ?>"><i class="fa fa-trash"></i> Hapus Data</a>
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
                                        <th scope="row">ID Kota</th>
                                        <td><?php echo $model->id_kota; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nama Kota</th>
                                        <td><?php echo $model->nama_kota; ?></td>
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
// 		'id_kota',
// 		'nama_kota',
// 	),
// )); 
?>
