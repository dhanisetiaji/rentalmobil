

<!--== Page Title Area Start ==-->
<section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Details Car</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->
    <div class="card m-5">
        <div class="card-body">
            <?php foreach($detail as $dt) :?>
                <div class="row">
                    <div class="col-md-6">
                        <img style="width:90%;" src="<?php echo base_url('assets/upload/').$dt->gambar?>" alt="<?php echo $dt->gambar;?>">
                    </div>
                    <div class="col-md-6">
                        <table class="table">
                            <tr>
                                <th>Merk</th>
                                <td><?php echo $dt->merk;?></td>
                            </tr>
                            <tr>
                                <th>Nomor Plat</th>
                                <td><?php echo $dt->no_plat;?></td>
                                
                            </tr>
                            <tr>
                                <th>Warna</th>
                                <td><?php echo $dt->warna;?></td>
                            </tr>
                            <tr>
                                <th>Tahun Produksi Mobil</th>
                                <td><?php echo $dt->tahun;?></td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td><?php if($dt->status == "1"){
                                    echo "Tersedia"
                                ;}else{
                                    echo "Tidak Tersedia"
                                ;} ?></td>
                                
                            </tr>
                            <tr>
                                <th>AC</th>
                                <td><?php if($dt->ac == "1"){
                                    echo "Tersedia"
                                ;}else{
                                    echo "Tidak Tersedia"
                                ;} ?></td>
                                
                            </tr>
                            <tr>
                                <th>Supir</th>
                                <td><?php if($dt->supir == "1"){
                                    echo "Tersedia"
                                ;}else{
                                    echo "Tidak Tersedia"
                                ;} ?></td>
                                
                            </tr>
                            <tr>
                                <th>Transmisi</th>
                                <td><?php if($dt->auto == "1"){
                                    echo "Auto"
                                ;}else{
                                    echo "Manual"
                                ;} ?></td>
                                
                            </tr>
                            <tr>
                                <th>Diesel</th>
                                <td><?php if($dt->diesel == "1"){
                                    echo "Ya"
                                ;}else{
                                    echo "Tidak"
                                ;} ?></td>
                                
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                <?php if($dt->status == "0"){echo "<span class='btn btn-danger' disable>Telah di Rental</span>";} else{echo anchor('rental/tambah_rental/'.$dt->id_mobil,'<button class="btn btn-success">Rental</button>');}?>
                                <a href="<?php echo base_url('data_mobil') ?>" class="btn btn-warning">Kembali</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                
            <?php endforeach; ?>
        </div>
    </div>



                        </div>
                    </div>

                    <!-- Page Pagination Start -->
                    <!-- <div class="page-pagi">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div> -->
                    <!-- Page Pagination End -->
                </div>
                <!-- Car List Content End -->
            </div>
        </div>
    </section>
    <!--== Car List Area End ==-->