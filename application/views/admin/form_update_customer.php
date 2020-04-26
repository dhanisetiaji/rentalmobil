<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Update Customer</h1>
        </div>
        <div class="card">
            <div class="card-body">
            <?php foreach($customer as $cs): ?>

            <form action="<?php echo base_url('admin/data_customer/update_customer_aksi')?>" method="POST">
            <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="hidden" name="id_customer" value="<?php echo $cs->id_customer ?>">
                            <label for="">Nama</label>
                            <input type="text" name="nama" class="form-control" value="<?php echo $cs->nama ?>">
                            <?php echo form_error('nama', '<div class="text-small text-danger">','</div>');?>
                            <label for="">Username</label>
                            <input type="text" name="username" class="form-control" value="<?php echo $cs->username ?>">
                            <?php echo form_error('username', '<div class="text-small text-danger">','</div>');?>
                            <label for="">Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="<?php echo $cs->alamat ?>">
                            <?php echo form_error('alamat', '<div class="text-small text-danger">','</div>');?>
                            <label for="">Gender</label>
                            <select name="gender" id="" class="form-control">
                                <option value="<?php echo $cs->gender ?>"><?php echo $cs->gender ?></option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            <?php echo form_error('gender', '<div class="text-small text-danger">','</div>');?>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                            <label for="">No. Telepon</label>
                            <input type="number" name="no_telepon" class="form-control" value="<?php echo $cs->no_telepon ?>">
                            <?php echo form_error('no_telepon', '<div class="text-small text-danger">','</div>');?>
                            <label for="">No. KTP</label>
                            <input type="number" maxlength="16" name="no_ktp" class="form-control" value="<?php echo $cs->no_ktp ?>">
                            <?php echo form_error('no_ktp', '<div class="text-small text-danger">','</div>');?>
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" value="<?php echo $cs->password ?>">
                            <?php echo form_error('password', '<div class="text-small text-danger">','</div>');?>
                            <button Type="submit" class="btn btn-primary mt-4">Simpan</button>
                            <button Type="reset" class="btn btn-danger mt-4">Reset</button>
                    </div>    
                </div>
            </form>
            <?php endforeach;?>
            </div>
        </div>
    </section>
</div>