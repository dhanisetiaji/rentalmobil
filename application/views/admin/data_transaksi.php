<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Transaksi</h1>
        </div>
        <!-- <a href="<?php echo base_url('admin/data_type/tambah_type')?>" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah Type</a> -->
        <?php echo $this->session->flashdata('pesan')?>
        <div class="table-responsive">
        <table class="table table-striped table-border">
            <thead>
                <tr>
                    <th width="20px">No</th>
                    <th>Costumer</th>
                    <th>Telepon</th>
                    <th>Merk</th>
                    <th>Tgl. Rental</th>
                    <th>Tgl. Kembali</th>
                    <th>Harga/hari</th>
                    <th>Denda/hari</th>
                    <th>Tgl. Pengembalian</th>
                    <th>Status Pengembalian</th>
                    <th>Status Rental</th>
                    <th>Cek Pembayaran</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; foreach($transaksi as $tr):?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $tr->nama ?></td>
                        <td><?php echo $tr->no_telepon ?></td>
                        <td><?php echo $tr->merk ?></td>
                        <td><?php echo date('d/m/Y', strtotime($tr->tanggal_rental))  ?></td>
                        <td><?php echo date('d/m/Y', strtotime($tr->tanggal_kembali)) ?></td>
                        <td>Rp.<?php echo number_format($tr->harga,0,',','.')  ?></td>
                        <td>Rp.<?php echo number_format($tr->denda,0,',','.') ?></td>
                        <td> 
                            <?php 
                                if($tr->tanggal_pengembalian == "0000-00-00"){
                                    echo "-";
                                }else{
                                    echo date('d/m/Y', strtotime($tr->tanggal_pengembalian));
                                } 
                            ?>
                        </td>
                        <td>
                            <?php
                                if($tr->status == "0"){
                                    echo "Belum Kembali";
                                }else{
                                    echo "Sudah kembali";
                                }
                            ?>
                        </td>
                        <td>
                            <?php
                                if($tr->status == "0"){
                                    echo "Belum Kembali";
                                }else{
                                    echo "Sudah kembali";
                                }
                            ?>
                        </td>
                        <td>
                            <center>
                                <?php if(empty($tr->bukti_pembayaran)){?>
                                    <button class="btn btn-sm btn-danger"><i class="fas fa-times-circle"></i></button>    
                                <?php ;}else{?>
                                    <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/transaksi/pembayaran/').$tr->id_rental;?>">
                                    <i class="fas fa-check-circle"></i></a>
                                <?php ;} ?>
                            </center>
                        </td>
                        <td>
                            <?php
                                if($tr->status == "1"){
                                    echo "-";
                                }else {?>
                                    <div class="row">
                                    <a href="<?php echo base_url('admin/data_transaksi/transaksi_selesai/').$tr->id_rental  ?>" class="btn btn-sm btn-success" style="margin-right:2px;"><i class="fas fa-check"></i></a>
                                    <a  href="<?php echo base_url('admin/data_transaksi/transaksi_batal/').$tr->id_rental  ?>" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></a>
                                    </div>  
                                <?php } ?>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
        </div>
    </section>
</div>