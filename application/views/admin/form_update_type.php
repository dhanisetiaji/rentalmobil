<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Update Mobil</h1>
        </div>
        <div class="card">
            <div class="card-body">
            <?php foreach($type as $ty): ?>

            <form action="<?php echo base_url('admin/data_type/update_type_aksi')?>" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id_type" value="<?php echo $ty->id_type ?>" class="form-control">
                            <label for="">Kode Type</label>
                            <input type="text" name="kode_type" value="<?php echo $ty->kode_type ?>" class="form-control">
                            <?php echo form_error('kode_type', '<div class="text-small text-danger">','</div>');?>
                            <label for="">Nama Type</label>
                            <input type="text" name="nama_type" value="<?php echo $ty->nama_type ?>" class="form-control">
                            <?php echo form_error('status', '<div class="text-small text-danger">','</div>');?>
                            <button Type="submit" class="btn btn-primary mt-4">Update</button>
                            <button Type="reset" class="btn btn-warning mt-4">Reset</button>
                            <a href="<?php echo base_url('admin/data_type')?>" class="btn btn-danger mt-4">Kembali</a>
            </form>
            <?php endforeach;?>
            </div>
        </div>
    </section>
</div>