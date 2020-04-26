

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
        
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Our Cars</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Menampilkan hasil dari mobil yang siap dirental</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Car List Area Start ==-->
    <section id="car-list-area" class="section-padding">
        <div class="container">
        <?php echo $this->session->flashdata('pesan')?>
            <div class="row">
                <!-- Car List Content Start -->
                <div class="col-lg-12">
                    <div class="car-list-content">
                        <div class="row">
                            <!-- Single Car Start -->
                            <?php foreach($mobil as $mb):?>
                            <div class="col-lg-6 col-md-6">
                                <div class="single-car-wrap">
                                    <img class="car-list-thumb" src="<?php echo base_url('assets/upload/').$mb->gambar?>" alt="">
                                    <div class="car-list-info without-bar">
                                        <h2><?php echo $mb->merk;?></h2>
                                        <h5>Rp. <?php echo number_format($mb->harga,0,',','.') ;?> /hari</h5>
                                        <ul class="car-info-list">
                                            <li>
                                                <?php 
                                                    if($mb->ac == "1"){
                                                    echo "<i class='fas fa-check-circle text-success'></i>"
                                                ;}else{
                                                    echo "<i class='fas fa-times-circle text-danger'></i>"
                                                ;}?> AC
                                            </li>
                                            <li>
                                                <?php 
                                                    if($mb->supir == "1"){
                                                        echo "<i class='fas fa-check-circle text-success'></i>"
                                                        ;}else{
                                                            echo "<i class='fas fa-times-circle text-danger'></i>"
                                                ;}?> Supir
                                            </li>
                                            <li>
                                                <?php 
                                                    if($mb->diesel == "1"){
                                                        echo "<i class='fas fa-check-circle text-success'></i>"
                                                        ;}else{
                                                            echo "<i class='fas fa-times-circle text-danger'></i>"
                                                ;}?> Diesel
                                            </li>
                                            <li>
                                                <?php 
                                                    if($mb->auto == "1"){
                                                        echo "<i class='fas fa-check-circle text-success'></i>"
                                                        ;}else{
                                                            echo "<i class='fas fa-times-circle text-danger'></i>"
                                                ;}?> Auto
                                            </li>
                                            
                                        </ul>
                                        <p class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star unmark"></i>
                                        </p>
                                        
                                        <?php if($mb->status == "1"){
                                                echo anchor('rental/tambah_rental/'.$mb->id_mobil,'<span class="rent-btn">Rental</span>');    
                                            }else{
                                                echo "<span class='rent-btn'>Tidak Tersedia</span>";
                                            }
                                        ?>
                                        <a href="<?php echo base_url('data_mobil/detail_mobil/').$mb->id_mobil?>" class="rent-btn">Detail</a>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach;?>
                            <!-- Single Car End -->

                            
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