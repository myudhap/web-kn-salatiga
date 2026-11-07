<nav class="navbar navbar-expand-lg navbar-kejari sticky-top py-3">
	<div class="container">
		<a class="navbar-brand d-flex align-items-center gap-3" href="<?= base_url('/') ?>">
			<img src="<?= base_url('assets/img/logo_kejaksaan.png') ?>" alt="Logo Kejaksaan" class="text-center"
				style="width: 40px;">
			<span class="d-flex flex-column">
				<small>Kejaksaan Republik Indonesia</small>
				<span>Kejaksaan Negeri Salatiga</span>
			</span>
		</a>
		<button class="navbar-toggler border-0 text-white" type="button" data-bs-toggle="collapse"
			data-bs-target="#navMain">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navMain">
			<ul class="navbar-nav mx-auto gap-lg-2 mt-3 mt-lg-0">
				<li class="nav-item"><a class="nav-link <?= current_url() == base_url('/') ? 'active' : '' ?>" href="<?= base_url('/') ?>">Beranda</a></li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle <?= strpos(uri_string(), 'profil') === 0 ? 'active' : '' ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profil</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="<?= base_url('profil/sejarah') ?>">Sejarah</a></li>
						<li><a class="dropdown-item" href="<?= base_url('profil/visi-misi') ?>">Visi &amp; Misi</a></li>
						<li><a class="dropdown-item" href="<?= base_url('profil/logo-kejaksaan') ?>">Logo Kejaksaan</a></li>
						<li><a class="dropdown-item" href="<?= base_url('profil/tri-krama-adhyaksa') ?>">Tri Krama Adhyaksa</a></li>
						<li><a class="dropdown-item" href="<?= base_url('profil/struktur-organisasi') ?>">Struktur Organisasi</a></li>
					</ul>
				</li>
				<li class="nav-item"><a class="nav-link <?= strpos(uri_string(), 'berita') === 0 ? 'active' : '' ?>" href="<?= base_url('berita') ?>">Berita</a></li>
				<li class="nav-item"><a class="nav-link <?= current_url() == base_url('/kegiatan') ? 'active' : '' ?>" href="<?= base_url('profil/sejarah') ?>">Kegiatan</a></li>
				<li class="nav-item"><a class="nav-link" href="#layanan">Layanan</a></li>
				<li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
			</ul>
			<a href="#layanan" class="btn btn-emas rounded-pill px-4 mt-3 mt-lg-0">Layanan Online</a>
		</div>
	</div>
</nav>