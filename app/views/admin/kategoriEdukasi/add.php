<?php view('admin/partial/header',$data) ?>
	 <section class="content-header">
        <h1>
            Pengguna
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('control-panel/kategori-edukasi') ?>"><i class="fa fa-tags"></i> Kategori Edukasi</a></li>
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
                        <form action="<?php echo base_url('control-panel/kategori-edukasi/create') ?>" method="post">
                            <div class="form-group">
                                <label>Nama Kategori Edukasi</label>
                                <input type="text" name="nama" class="form-control" value="<?php echo old('nama') ?>">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi Kategori</label>
                                <textarea name="deskripsi" class="form-control" rows ="3" value="<?php echo old('deskripsi') ?>"></textarea>
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
<?php view('admin/partial/footer',$data) ?>