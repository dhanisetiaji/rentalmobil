<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Tambah Type</h1>
        </div>
        <div class="card">
            <div class="card-body">
            <form action="<?php echo base_url('admin/data_type/tambah_type_aksi')?>" method="POST">
                
                            <label for="">Kode Type</label>
                            <input type="text" name="kode_type" class="form-control">
                            <?php echo form_error('kode_type', '<div class="text-small text-danger">','</div>');?>
                            <label for="">Nama Type</label>
                            <input type="text" name="nama_type" class="form-control">
                            <?php echo form_error('status', '<div class="text-small text-danger">','</div>');?>
                            <button Type="submit" class="btn btn-primary mt-4">Simpan</button>
                            <button Type="reset" class="btn btn-danger mt-4">Reset</button>
                        
            </form>
            </div>
        </div>
    </section>
</div>