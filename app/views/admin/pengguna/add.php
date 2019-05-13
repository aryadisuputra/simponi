<?php view('admin/partial/header', $data) ?>
    <section class="content-header">
        <h1>
            Pengguna
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('control-panel/pengguna') ?>"><i class="fa fa-users"></i> Pengguna</a></li>
            <li class="active">Tambah</li>
        </ol>
    </section>

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="box">
                    <div class="box-header">
                        <h1 class="box-title">Tambah</h1>
                    </div>
                    <div class="box-body">
                        <?php echo Session::flash('error'); ?>
                        <form action="<?php echo base_url('control-panel/pengguna/create') ?>" method="post">
                            <div class="form-group">
                                <label>Nama Depan</label>
                                <input type="text" name="nama_depan" class="form-control" value="<?php echo old('nama_depan') ?>">
                            </div>
                            <div class="form-group">
                                <label>Nama Belakang</label>
                                <input type="text" name="nama_belakang" class="form-control" value="<?php echo old('nama_belakang') ?>">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="">-- Pilih --</option>
                                    <?php $jk = old('jenis_kelamin') ?>
                                    <option value="l" <?php echo ($jk === 'l' ? 'selected' : '' ) ?>>Laki-laki</option>
                                    <option value="p" <?php echo ($jk === 'p' ? 'selected' : '' ) ?>>Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" class="form-control" value="<?php echo old('tgl_lahir') ?>">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" value="<?php echo old('email') ?>">
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" value="<?php echo old('username') ?>">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" value="<?php echo old('password') ?>">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- disini taruh kontennya anjing  -->
    </section>
<?php view('admin/partial/footer', $data) ?>