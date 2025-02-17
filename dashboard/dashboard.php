<?php

include './koneksi.php';

$sql1 = "SELECT * FROM article ORDER BY tanggal DESC";
$sql2 = "SELECT * FROM gallery ORDER BY tanggal DESC";
$hasil1 = $conn->query($sql1);
$hasil2 = $conn->query($sql2);

$jumlah_article = $hasil1->num_rows;
$jumlah_gallery = $hasil2->num_rows;

?>
<hr>
<div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center pt-4 text">
    <div class="col">
        <div class="card border border-white mb-3 shadow" style="max-width: 18rem;">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="p-3">
                        <h5 class="card-title"><i class="bi bi-newspaper"></i> Article</h5> 
                    </div>
                    <div class="p-3">
                        <span class="badge rounded-pill fs-2" style="color:black"><?php echo $jumlah_article; ?></span>
                    </div> 
                </div>
            </div>
        </div>
    </div> 
    <div class="col">
        <div class="card border border-white mb-3 shadow" style="max-width: 18rem;">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="p-3">
                        <h5 class="card-title"><i class="bi bi-camera"></i> Gallery</h5> 
                    </div>
                    <div class="p-3">
                        <span class="badge rounded-pill text fs-2" style="color:black"><?php echo $jumlah_gallery; ?></span>
                    </div> 
                </div>
            </div>
        </div>
    </div> 
</div>