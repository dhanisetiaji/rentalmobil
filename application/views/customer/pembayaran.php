  <!--== Page Title Area Start ==-->
  <section id="page-title-area" class="section-padding overlay">
        <div class="container">
        
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Pembayaran</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Silahkan selesaikan pembayaran anda</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

<section class="section-padding">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header alert-success">
                        Invoice Pembayaran Anda
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <?php foreach($transaksi as $tr):?>
                                <tr>
                                    <th>Merk Mobil</th>
                                    <td>:</td>
                                    <td><?php echo $tr->merk?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Rental</th>
                                    <td>:</td>
                                    <td><?php echo $tr->tanggal_rental?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Kembali</th>
                                    <td>:</td>
                                    <td><?php echo $tr->tanggal_kembali?></td>
                                </tr>
                                <tr>
                                    <th>Biaya Sewa Perhari</th>
                                    <td>:</td>
                                    <td>Rp.<?php echo number_format($tr->harga,0,',','.')?></td>
                                </tr>
                                <tr>
                                    <th>Jumlah hari</th>
                                    <td>:</td>
                                    <td>
                                        <?php 
                                            $x=strtotime($tr->tanggal_rental);
                                            $y=strtotime($tr->tanggal_kembali);
                                            $jumlah_hari = abs(($y-$x)/(60*60*24));
                                            echo $jumlah_hari;
                                        ?> Hari
                                    </td>
                                </tr>
                                <tr class="text-success">
                                    <th>Jumlah Pembayaran</th>
                                    <td>:</td>
                                    <td>
                                        <buttton class="btn btn-sm btn-success">
                                        Rp.
                                        <?php 
                                            echo number_format($tr->harga * $jumlah_hari,0,',','.') 
                                        ?>
                                        </buttton>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a href="<?php echo base_url('transaksi/cetak_invoice/'.$tr->id_rental)?>" class="btn btn-sm btn-secondary">Print Invoice</a>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header alert-primary">
                        Informasi Pembayaran
                    </div>
                    <div class="card-body">
                        <p class="text-success  mb-3">Silahkan Melakukan Pembayaran Melalui Form Dibawah ini:</p>
                         <!--FORM UNTUK CHECKOUT MIDTRANS  -->

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Bank BRI 231123311212 a/n PT.Transcorp</li>
                            <li class="list-group-item">Bank BCA 231123311212 a/n PT.Transcorp</li>
                            <li class="list-group-item">Bank Mandiri 231123311212 a/n PT.Transcorp</li>
                            <li class="list-group-item">Gopay 0823211233 a/n PT.Transcorp</li>
                            <li class="list-group-item">Ovo 0823211233 a/n PT.Transcorp</li>
                        </ul>


                        <?php if(empty($tr->bukti_pembayaran)){?>
                            <button style="width:100%" type="button" class="btn btn-sm btn-danger mt-3" data-toggle="modal" data-target="#bukti_modal">
                                <i class="fa fa-upload"></i> Upload Bukti Pembayaran
                            </button>
                        <?php ;}elseif($tr->status_pembayaran == '0'){?>
                            <button style="width:100%" type="button" class="btn btn-sm btn-warning mt-3">
                                <i class="fa fa-clock-o"></i> Menunggu Konfirmasi
                            </button>
                        <?php ;}elseif($tr->status_pembayaran == '1'){?>
                            <button style="width:100%" type="button" class="btn btn-sm btn-success mt-3">
                                <i class="fas fa-check"></i> Pembayaran Selesai
                            </button>
                        <?php ;}?>
                    </div>  
                </div>        
            </div>
        </div>
    </div>
</section>

<!-- Modal Upload Pembayaran -->
<div class="modal fade" id="bukti_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Form Upload Bukti Pembayaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="<?php echo base_url('transaksi/pembayaran_aksi')?>" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group">
            <input type="hidden" name="id_rental" value="<?php echo $tr->id_rental?>">
            <label for="">Upload Bukti Pembayaran :</label>
            <input type="file" name="bukti_pembayaran" class="form-control">
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-sm btn-success">Upload</button>
      </div>
    </div>
    </form>
  </div>
</div>