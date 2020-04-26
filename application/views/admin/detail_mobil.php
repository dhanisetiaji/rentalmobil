<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Mobil</h1>
        </div>
    </section>
    <?php foreach($detail as $dt) :?>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p><h3><?php echo $dt->merk; ?></h3></p>
                        <img width="100%" src="<?php echo base_url('assets/upload/'). $dt->gambar ?>">
                        
                    </div>
                    <div class="col-md-6">
                        <table class="table table-border ml-5">
                            <tr>
                                <td>Kode Mobil</td>
                                <td><?php echo $dt->kode_type; ?></td>
                            </tr>
                            <tr>
                                <td>Merk</td>
                                <td><?php echo $dt->merk; ?></td>
                            </tr>
                            <tr>
                                <td>No. Plat</td>
                                <td><?php echo $dt->no_plat; ?></td>
                            </tr>
                            <tr>
                                <td>Warna</td>
                                <td><?php echo $dt->warna; ?></td>
                            </tr>
                            <tr>
                                <td>Tahun</td>
                                <td><?php echo $dt->tahun; ?></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td>Rp. <?php echo number_format($dt->harga,0,',','.') ?></td>
                            </tr>
                            <tr>
                                <td>Denda</td>
                                <td>Rp. <?php echo number_format($dt->denda,0,',','.') ?></td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td><?php if($dt->status == "0"){
                                        echo "<span class='badge badge-danger'> Tidak Tersedia</span>";
                                    }else {
                                        echo "<span class='badge badge-primary'> Tersedia</span>";
                                    } 
                                ?></td>
                            </tr>
                            <tr>
                                <td>AC</td>
                                <td><?php if($dt->ac == "0"){
                                        echo "<span class='badge badge-danger'> Tidak Tersedia</span>";
                                    }else {
                                        echo "<span class='badge badge-primary'> Tersedia</span>";
                                    } 
                                ?></td>
                            </tr>
                            <tr>
                                <td>Supir</td>
                                <td><?php if($dt->supir == "0"){
                                        echo "<span class='badge badge-danger'> Tidak Tersedia</span>";
                                    }else {
                                        echo "<span class='badge badge-primary'> Tersedia</span>";
                                    } 
                                ?></td>
                            </tr>
                            <tr>
                                <td>Transmisi</td>
                                <td><?php if($dt->auto == "0"){
                                        echo "<span class='badge badge-primary'>Manual</span>";
                                    }else {
                                        echo "<span class='badge badge-primary'> Auto</span>";
                                    } 
                                ?></td>
                            </tr>
                            <tr>
                                <td>Diesel</td>
                                <td><?php if($dt->diesel == "0"){
                                        echo "<span class='badge badge-danger'> Tidak</span>";
                                    }else {
                                        echo "<span class='badge badge-primary'> Ya</span>";
                                    } 
                                ?></td>
                            </tr>
                        </table>
                        <a href="<?php echo base_url('admin/data_mobil')?>" class="btn btn-sm btn-danger mt-5">Kembali</a>
                        <a href="<?php echo base_url('admin/data_mobil/update_mobil/').$dt->id_mobil;?>" class="btn btn-sm btn-primary mt-5">Update</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach;?>
</div>