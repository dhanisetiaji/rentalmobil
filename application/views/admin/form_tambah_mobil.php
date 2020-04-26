<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Tambah Mobil</h1>
        </div>
        <div class="card">
            <div class="card-body">
            <form action="<?php echo base_url('admin/data_mobil/tambah_mobil_aksi')?>" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Type Mobil</label>
                            <select name="kode_type" id="" class="form-control">
                                <option value="">--Pilih Type Mobil--</option>
                                <?php foreach($type as $tp) :?>
                                    <option value="<?php echo $tp->kode_type?>"><?php echo $tp->nama_type?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php echo form_error('kode_type', '<div class="text-small text-danger">','</div>');?>
                        </div>
                        <div class="form-group">
                            <label for="">Merk</label>
                            <input type="text" name="merk" class="form-control">
                            <?php echo form_error('merk', '<div class="text-small text-danger">','</div>');?>
                        </div>
                        <div class="form-group">
                            <label for="">No. Plat</label>
                            <input type="text" name="no_plat" class="form-control">
                            <?php echo form_error('no_plat', '<div class="text-small text-danger">','</div>');?>
                        </div>
                        <div class="form-group">        
                            <label for="">Warna</label>
                            <input type="text" name="warna" class="form-control">
                            <?php echo form_error('warna', '<div class="text-small text-danger">','</div>');?>
                        </div>
                        <div class="form-group">        
                            <label for="">AC</label>
                            <select name="ac" id="" class="form-control">
                                <option value="">--AC--</option>
                                <option value="1">Tersedia</option>
                                <option value="0">Tidak Tersedia</option>
                            </select>
                            <?php echo form_error('ac', '<div class="text-small text-danger">','</div>');?>
                        </div>
                        <div class="form-group">        
                            <label for="">Supir</label>
                            <select name="supir" id="" class="form-control">
                                <option value="">--Supir--</option>
                                <option value="1">Tersedia</option>
                                <option value="0">Tidak Tersedia</option>
                            </select>
                            <?php echo form_error('supir', '<div class="text-small text-danger">','</div>');?>
                        </div>
                        <div class="form-group">        
                            <label for="">Transmisi</label>
                            <select name="auto" id="" class="form-control">
                                <option value="">--Transmisi--</option>
                                <option value="1">Auto</option>
                                <option value="0">Manual</option>
                            </select>
                            <?php echo form_error('auto', '<div class="text-small text-danger">','</div>');?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">        
                            <label for="">Diesel</label>
                            <select name="diesel" id="" class="form-control">
                                <option value="">--Mesin Diesel?--</option>
                                <option value="1">Ya</option>
                                <option value="0">Bukan</option>
                            </select>
                            <?php echo form_error('diesel', '<div class="text-small text-danger">','</div>');?>
                        </div>
                        <div class="form-group">
                            <label for="">Tahun</label>
                            <input type="text" name="tahun" class="form-control">
                            <?php echo form_error('tahun', '<div class="text-small text-danger">','</div>');?>
                        </div>
                        <div class="form-group">
                            <label for="">Harga</label>
                            <input type="number" name="harga" class="form-control">
                            <?php echo form_error('harga', '<div class="text-small text-danger">','</div>');?>
                        </div>
                        <div class="form-group">
                            <label for="">Denda</label>
                            <input type="number" name="denda" class="form-control">
                            <?php echo form_error('denda', '<div class="text-small text-danger">','</div>');?>
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                            <select name="status" id="" class="form-control">
                                <option value="">--Status--</option>
                                <option value="1">Tersedia</option>
                                <option value="0">Tidak Tersedia</option>
                            </select>
                            <?php echo form_error('status', '<div class="text-small text-danger">','</div>');?>
                        </div>
                        <div class="form-group">
                            <label for="">Gambar</label>
                            <input type="file" name="gambar" class="form-control">
                        </div>
                            <button Type="submit" class="btn btn-primary mt-4">Simpan</button>
                            <button Type="reset" class="btn btn-danger mt-4">Reset</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </section>
</div>