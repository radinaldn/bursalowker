<?php
/* @var $this LamaranController */
/* @var $model Lamaran */

$this->breadcrumbs=array(
	'Lamarans'=>array('index'),
	$model->id_lamaran,
);

$this->menu=array(
	// array('label'=>'List Lamaran', 'url'=>array('index')),
	// array('label'=>'Create Lamaran', 'url'=>array('create')),
	// array('label'=>'Update Lamaran', 'url'=>array('update', 'id'=>$model->id_lamaran)),
	// array('label'=>'Delete Lamaran', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_lamaran),'confirm'=>'Are you sure you want to delete this item?')),
	// array('label'=>'Manage Lamaran', 'url'=>array('admin')),
);
?>

<h2><i class="fa fa-map-marker"></i> Lihat Lamaran #<?php echo $model->id_lamaran; ?></h2>
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
                                    <img class="img-responsive avatar-view" src="<?php echo Yii::app()->request->baseUrl; ?>/images/<?php echo $model->id_lamaran; ?>" alt="Avatar" title="<?php ?>">
                                </div>
                            </div>
                            <h3><?php ?></h3>

                            <ul class="list-unstyled user_data">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <th scope="row">ID Lamaran</th>
                                        <td><?php echo $model->id_lamaran; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">ID Pelamar</th>
                                        <td><?php echo $model->id_pelamar; ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </ul>

                        <!-- <a title="Edit Kabupaten/Kota" class="btn btn-warning col-md-12" href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/kabkota/update/<?= $model->id_lamaran; ?>"><i class="fa fa-pencil"></i> Update Data</a> -->
                        <a onclick="return confirm('Anda yakin ingin menghapus lamaran #<?php echo $model->id_lamaran;?> ?')" title="Hapus data lamaran" class="btn btn-danger col-md-12" href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/lamaran/delete/<?= $model->id_lamaran; ?>"><i class="fa fa-trash"></i> Hapus Data</a>
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
                                        <th scope="row">ID Lamaran</th>
                                        <td><?php echo $model->id_lamaran; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">ID Pelamar</th>
                                        <td><?php echo $model->id_pelamar; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">ID Lowongan</th>
                                        <td><?php echo $model->id_lowongan; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tanggal Lamar</th>
                                        <td><?php echo $model->tgl_lamar; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Lampiran</th>
                                        <td><a title="unduh lampiran" href="#"><?php echo $model->lampiran; ?></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Status</th>
                                        <td>  
                                        <?php
                                        if($model->status == "Proses"){
                                            echo "<span class='label label-warning'><i class='fa fa-refresh'>";
                                        } else if ($model->status == "Diterima"){
                                            echo "<span class='label label-success'><i class='fa fa-check'>";
                                        } else if ($model->status == "Ditolak"){
                                            echo "<span class='label label-danger'><i class='fa fa-times'>";
                                        } else {
                                            echo "status not defined.";
                                        }
                                        ?>
                                        </i> <?php echo $model->status; ?></span>
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
// $this->widget('zii.widgets.CDetailView', array(
// 	'data'=>$model,
// 	'attributes'=>array(
// 		'id_lamaran',
// 		'id_pelamar',
// 		'id_lowongan',
// 		'tgl_lamar',
// 		'lampiran',
// 		'status',
// 	),
// )); 
?>
