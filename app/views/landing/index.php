<?php view('partial/header') ?>
<section id="navbar" class="no-pad">
	<nav id="sticky-navbar" class="navbar navbar-expand-lg navbar-light navbar-fixed-top">
		<a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="#">beranda</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">cara kerja</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">kenapa simponi?</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">produk kami</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">blog</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">kontak kami</a>
				</li>
			</ul>
		</div>
	</nav>
</section>
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
	Copyright ®2019
</section>

<?php view('partial/header') ?>