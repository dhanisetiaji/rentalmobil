<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Update Mobil</h1>
        </div>
        <div class="card">
            <div class="card-body">
            <?php foreach($mobil as $mb): ?>

            <form action="<?php echo base_url('admin/data_mobil/update_mobil_aksi')?>" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                            <input type="hidden" name="id_mobil" value="<?php echo $mb->id_mobil;?>">
                            <label>Type Mobil</label>
                            <select name="kode_type" id="" class="form-control">
                                <option value="<?php echo $mb->kode_type;?>">--<?php echo $mb->nama_type;?>--</option>
                                <?php foreach($type as $tp) :?>
                                    <option value="<?php echo $tp->kode_type?>"><?php echo $tp->nama_type?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php echo form_error('kode_type', '<div class="text-small text-danger">','</div>');?>
                        </div>
                        <div class="form-group">
                            <label for="">Merk</label>
                            <input type="text" name="merk" class="form-control" value="<?php echo $mb->merk;?>">
                            <?php echo form_error('merk', '<div class="text-small text-danger">','</div>');?>
                        </div>
                        <div class="form-group">
                            <label for="">No. Plat</label>
                            <input type="text" name="no_plat" class="form-control" value="<?php echo $mb->no_plat;?>">
                            <?php echo form_error('no_plat', '<div class="text-small text-danger">','</div>');?>
                        </div>
                        <div class="form-group">        
                            <label for="">Warna</label>
                            <input type="text" name="warna" class="form-control" value="<?php echo $mb->warna;?>">
                            <?php echo form_error('warna', '<div class="text-small text-danger">','</div>');?>
                        </div>
                        <div class="form-group">        
                            <label for="">AC</label>
                            <select name="ac" id="" class="form-control">
                                <option value="<?php echo $mb->ac;?>">--<?php if($mb->ac == '1'){echo "Tersedia";}else{echo "Tidak Tersedia";}?>--</option>
                                <option value="1">Tersedia</option>
                                <option value="0">Tidak Tersedia</option>
                            </select>
                            <?php echo form_error('ac', '<div class="text-small text-danger">','</div>');?>
                        </div>
                        <div class="form-group">        
                            <label for="">Supir</label>
                            <select name="supir" id="" class="form-control">
                                <option value="<?php echo $mb->supir;?>">--<?php if($mb->supir == '1'){echo "Tersedia";}else{echo "Tidak Tersedia";}?>--</option>
                                <option value="1">Tersedia</option>
                                <option value="0">Tidak Tersedia</option>
                            </select>
                            <?php echo form_error('supir', '<div class="text-small text-danger">','</div>');?>
                        </div>
                        <div class="form-group">        
                            <label for="">Transmisi</label>
                            <select name="auto" id="" class="form-control">
                                <option value="<?php echo $mb->auto;?>">--<?php if($mb->auto == '1'){echo "Auto";}else{echo "Manual";}?>--</option>
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
                                <option value="<?php echo $mb->diesel?>">--<?php if($mb->diesel == '1'){echo "Ya";}else{echo "Tidak";}?>--</option>
                                <option value="1">Ya</option>
                                <option value="0">Bukan</option>
                            </select>
                            <?php echo form_error('diesel', '<div class="text-small text-danger">','</div>');?>
                        </div>
                        <div class="form-group">
                            <label for="">Tahun</label>
                            <input type="text" name="tahun" class="form-control" value="<?php echo $mb->tahun;?>">
                            <?php echo form_error('tahun', '<div class="text-small text-danger">','</div>');?>
                        </div>
                        <div class="form-group">
                            <label for="">Harga</label>
                            <input type="number" name="harga" class="form-control" value="<?php echo $mb->harga;?>">
                            <?php echo form_error('harga', '<div class="text-small text-danger">','</div>');?>
                        </div>
                        <div class="form-group">
                            <label for="">Denda</label>
                            <input type="number" name="denda" class="form-control" value="<?php echo $mb->denda;?>">
                            <?php echo form_error('denda', '<div class="text-small text-danger">','</div>');?>
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                            <select name="status" id="" class="form-control">
                                <option value="<?php echo $mb->status;?>">--<?php if($mb->status == '1'){echo "Tersedia";}else{echo "Tidak Tersedia";}?>--</option>
                                <option value="1">Tersedia</option>
                                <option value="0">Tidak Tersedia</option>
                            </select>
                            <?php echo form_error('status', '<div class="text-small text-danger">','</div>');?>
                        </div>
                        <div class="form-group">
                            <label for="">Gambar</label>
                            <input type="file" name="gambar" class="form-control">
                        </div>
                            <button Type="submit" class="btn btn-primary mt-4">Update</button>
                            <button Type="reset" class="btn btn-warning mt-4">Reset</button>
                            <a href="<?php echo base_url('admin/data_mobil')?>" class="btn btn-danger mt-4">Kembali</a>
                    </div>
                </div>
            </form>
            <?php endforeach;?>
            </div>
        </div>
    </section>
</div>