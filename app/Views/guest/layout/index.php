<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title ?? 'Kejaksaan Negeri Salatiga — Portal Resmi' ?></title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link
		href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=IBM+Plex+Mono:wght@400;500&display=swap"
		rel="stylesheet">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

	<script src="https://kit.fontawesome.com/570bda8e30.js" crossorigin="anonymous"></script>
</head>

<body>
	<div class="util-bar py-1">
		<div class="container d-flex justify-content-between align-items-center">
			<div class="d-none d-sm-flex gap-3">
				<span>Portal Resmi Kejaksaan Negeri Salatiga</span>
			</div>
			<span>Senin–Jumat, 08.00–16.00 WIB</span>
		</div>
	</div>
	<?= $this->include('guest/layout/navbar') ?>
	<main id="konten">
		<?= $this->renderSection("content") ?>
        <?= $this->include('guest/layout/footer') ?>
	</main>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
	</script>
</body>

</html>