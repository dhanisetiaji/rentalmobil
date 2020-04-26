<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Mobil</h1>
        </div>
        <a href="<?php echo base_url('admin/data_mobil/tambah_mobil')?>" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah Data</a>
        <?php echo $this->session->flashdata('pesan')?>
        <table class="table table-hover table-striped table-border">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Type</th>
                    <th>Merk</th>
                    <th>No. Plat</th>
                    <th>Status</th>
                    <th>Lainya</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; foreach($mobil as $mb) :?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><img width="60px" src="<?php echo base_url('assets/upload/'),$mb->gambar ?>" alt="<?php echo $mb->gambar ?>"></td>
                        <td><?php echo $mb->kode_type ?></td>
                        <td><?php echo $mb->merk ?></td>
                        <td><?php echo $mb->no_plat ?></td>
                        <td><?php
                        if($mb->status == "0"){
                            echo "<span class='badge badge-danger'> Tidak Tersedia</span>";
                        }else {
                            echo "<span class='badge badge-primary'> Tersedia</span>";
                        }
                        ?></td>
                        <td>
                            Modal
                        </td>
                        <td>
                            <a  href="<?php echo base_url('admin/data_mobil/detail_mobil/').$mb->id_mobil ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                            <a  href="<?php echo base_url('admin/data_mobil/delete_mobil/').$mb->id_mobil ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                            <a href="<?php echo base_url('admin/data_mobil/update_mobil/').$mb->id_mobil ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</div>

