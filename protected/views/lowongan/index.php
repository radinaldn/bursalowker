<?php
/* @var $this LowonganController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lowongans',
);

$this->menu=array(
	// array('label'=>'Create Lowongan', 'url'=>array('create')),
	// array('label'=>'Manage Lowongan', 'url'=>array('admin')),
);
?>

<h3><i class="fa fa-table"></i> Lowongan Terbaru <small> Bursa-Lowker </small></h3>
<div class="x_title"></div>

<div class="x_content">
                  <ul class="list-unstyled timeline">
                  <?php 
                  foreach ($model as $data) {
                  	# code...
                  
                  ?>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <span><?= $data['nama_kategori']; ?></span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                                          <a href="viewPelamar/<?= $data['id_lowongan'];?>" class="blue"><?= $data['pekerjaan']; ?></a>
                                      </h2>
                          <div class="byline">
                            <span>
                            <?php
                    $date = date_create($data['tgl_buat']); 
                    echo date_format($date, 'j F Y');
                     ?>

                            </span> oleh <a class="purple" target = "_blank" href="../perusahaan/<?= $data['id_perusahaan']; ?>"><?= $data['nama_perusahaan']; ?></a> <a><?= $data['nama_kota']; ?></a>
                          </div>
                          <p class="excerpt">Tipe pekerjaan : <?= $data['tipe_pekerjaan']?>.
                          	<br>Gaji : <span><?= $data['tawaran_gaji']; ?></span>
                          	<br>Usia max : <?= $data['usia_max']; ?>
                          	<br>Jenis Kelamin : <?= $data['jenis_kelamin']; ?>
                          	<br>Deadline : <a class="red">
                            <?php
                             $date = date_create($data['batas_lamaran']); 
                            echo date_format($date, 'j F Y');
                            ?> <!-- (xx hari lagi)->unwork --></a>
                          	<br><?= $data['deskripsi']; ?>...
                          <a class="blue" href="viewPelamar/<?= $data['id_lowongan'];?>">Read&nbsp;More</a>
                          </p>
                        </div>
                      </div>
                    </li>
                    <?php } ?>
                  </ul>

                </div>
              </div>
            </div>

<?php
//  $this->widget('zii.widgets.CListView', array(
// 	'dataProvider'=>$dataProvider,
// 	'itemView'=>'_view',
// ));
 ?>
