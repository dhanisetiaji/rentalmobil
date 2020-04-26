  <!--== Page Title Area Start ==-->
  <section id="page-title-area" class="section-padding overlay">
        <div class="container">
        
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Transaksi</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p></p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

<section class="section-padding">
    <div class="container">
        <?php echo $this->session->flashdata('pesan')?>
        <div class="card mx-auto" style="width:80%;">
            <div class="card-header">
                Data Transaksi Anda
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>No</th>
                        <th>Nama Customer</th>
                        <th>Merk Mobil</th>
                        <th>Nomor Plat</th>
                        <th>Harga Sewa</th>
                        <th>Action</th>
                    </tr>
                    <?php $no=1; foreach($transaksi as $tr):?>
                        <td><?php echo $no++?></td>
                        <td><?php echo $tr->nama?></td>
                        <td><?php echo $tr->merk?></td> 
                        <td><?php echo $tr->no_plat?></td>
                        <td>Rp.<?php echo number_format($tr->harga,0,',','.')?></td>
                        <td>
                            <?php if($tr->status_rental == "selesai"){?>
                                <button class="btn btn-sm btn-danger">Rental Selesai</button>
                            <?php }else{ ?>
                                <a href="<?php echo base_url('transaksi/pembayaran/').$tr->id_rental?>" class="btn btn-sm btn-success">Cek Pembayaran</a>
                            <?php }?>
                        </td>        
                    <?php endforeach;?>
                </table>
            </div>
        </div>
    </div>
</section>

