<?= $this->extend("guest/layout/index") ?>

<?= $this->section("content") ?>
<section class="hero" id="beranda">
  <div class="hero-glow"></div>
</section>

<section class="py-5 py-lg-6">
  <div class="container py-4">
    <div class="mb-5"><span class="eyebrow d-block mb-2">LOKASI</span>
      <h2 class="fs-2">TEMUKAN KAMI</h2>
    </div>
    <div class="row g-0 border rounded-4 overflow-hidden">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12223.393283829211!2d110.51047208526191!3d-7.369289100957497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a79e0f91ad6eb%3A0x4a0307f17c28145f!2sKejaksaan%20negeri%20salatiga!5e0!3m2!1sen!2sid!4v1789545239802!5m2!1sen!2sid"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="strict-origin-when-cross-origin"></iframe>
    </div>
  </div>
</section>
<?= $this->endSection() ?>