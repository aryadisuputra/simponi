<?php view('partial/header', $data) ?>
<section id="hero" class="no-pad">
	<a href="#" class="btn btn-primary btn-sign-up content-center">lihat cara kerja</a>
</section>
<section id="feature" class="bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<a href="#">
					<div class="feature-card">
						<h3 class="feature-card-title">belajar</h3>
						<img src="<?php echo base_url('img/1.jpg') ?>" style="img-fluid" alt="">
					</div>
				</a>
			</div>
			<div class="col-md-3">
				<a href="#">
					<div class="feature-card">
						<h3 class="feature-card-title">jual/beli</h3>
						<img src="<?php echo base_url('img/2.jpg') ?>" style="img-fluid" alt="">
					</div>
				</a>
			</div>
			<div class="col-md-3">
				<a href="#">
					<div class="feature-card">
						<h3 class="feature-card-title">diskusi</h3>
						<img src="<?php echo base_url('img/3.jpg') ?>" style="img-fluid" alt="">
					</div>
				</a>
			</div>
			<div class="col-md-3">
				<a href="#">
					<div class="feature-card">
						<h3 class="feature-card-title">tips n trik</h3>
						<img src="<?php echo base_url('img/4.jpg') ?>" style="img-fluid" alt="">
					</div>
				</a>
			</div>
		</div>
	</div>
</section>
<section id="blog">
	<h1 class="title">Berita</h1>
</section>

<section id="footer">
    <center style="color: #ffffff">simponi. dibuat dengan <span style="color: #ff7066">❤</span> oleh kelompok 5</center>
</section>

<?php view('partial/footer') ?>