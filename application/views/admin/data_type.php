<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Type</h1>
        </div>
        <a href="<?php echo base_url('admin/data_type/tambah_type')?>" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah Type</a>
        <?php echo $this->session->flashdata('pesan')?>
        <table class="table table-hover table-striped table-border">
            <thead>
                <tr>
                    <th width="20px">No</th>
                    <th>Kode Type</th>
                    <th>Nama Type</th>
                    <th width="180px">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; foreach($type as $ty):?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $ty->kode_type ?></td>
                        <td><?php echo $ty->nama_type ?></td>
                        <td>
                            <a href="<?php echo base_url('admin/data_type/update_type/').$ty->id_type  ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                            <a  href="<?php echo base_url('admin/data_type/delete_type/').$ty->id_type  ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                            
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </section>
</div>