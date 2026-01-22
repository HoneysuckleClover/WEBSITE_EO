<?php
// pastikan testimonial berupa array hasil result()
$testimonials = !empty($testimonial) ? $testimonial : [];
?>

<!-- INTRO SECTION -->
<div class="intro intro-single route bg-image"
     style="background-image: url('<?= base_url(); ?>assets_frontend/img/background.jpg');">
  <div class="intro-overlay"></div>

  <div class="intro-content d-flex align-items-center">
    <div class="container text-center">
      <!-- JUDUL PUTIH -->
      <h2 class="intro-title mb-3 text-white">Detail Testimonial</h2>

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center">
          <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
          <li class="breadcrumb-item active text-white">Testimonial</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END INTRO SECTION -->

<section class="page-section py-5">
  <div class="container">
    <div class="row justify-content-center">

      <?php if (!empty($testimonials)): ?>
        <?php foreach ($testimonials as $t): ?>

          <?php
          // foto aman
          if (!empty($t->testimonial_foto) &&
              file_exists(FCPATH.'gambar/testimonial/'.$t->testimonial_foto)) {
              $foto = base_url('gambar/testimonial/'.$t->testimonial_foto);
          } else {
              $foto = base_url('assets_frontend/img/user-default.png');
          }
          ?>

          <div class="col-md-10 col-lg-8 mb-4">
            <article class="page-article text-center">

              <!-- FOTO -->
              <img src="<?= $foto ?>"
                   alt="<?= htmlspecialchars($t->testimonial_nama); ?>"
                   class="rounded-circle mb-3"
                   style="width:100px;height:100px;object-fit:cover;">

              <!-- NAMA -->
              <h3 class="page-title mb-1">
                <?= htmlspecialchars($t->testimonial_nama); ?>
              </h3>

              <div class="title-line"></div>

              <!-- ISI -->
              <div class="article-content mt-3">
                “<?= nl2br(htmlspecialchars($t->testimonial_isi)); ?>”
              </div>

            </article>
          </div>

        <?php endforeach; ?>
      <?php else: ?>
        <div class="text-center py-5">
          <h4 class="text-muted">Belum ada testimonial.</h4>
        </div>
      <?php endif; ?>

    </div>
  </div>
</section>

<style>
/* INTRO */
.intro-single{
  position:relative;
  background-size:cover;
  background-position:center;
  padding:130px 0 110px;
  color:#fff;
}
.intro-overlay{
  position:absolute;
  inset:0;
  background:rgba(0,0,0,.65);
}
.intro-content{position:relative;z-index:2}
.intro-title{
  font-size:42px;
  font-weight:700;
  color:#fff !important; /* PAKSA PUTIH */
}

/* Breadcrumb */
.breadcrumb{
  background:transparent;
  font-size:15px;
}
.breadcrumb a{color:#ddd}
.breadcrumb-item.active{color:#fff}

/* CONTENT */
.page-section{background:#f7f7f7}
.page-article{
  background:#fff;
  padding:30px 25px;
  border-radius:10px;
  box-shadow:0 3px 18px rgba(0,0,0,.08);
}
.page-title{
  font-size:24px;
  font-weight:700;
  color:#111;
}
.title-line{
  width:60px;
  height:4px;
  background:#00aaff;
  margin:10px auto;
  border-radius:3px;
}
.article-content{
  font-size:17px;
  line-height:1.8;
  color:#444;
  font-style:italic;
}

/* RESPONSIVE */
@media(max-width:768px){
  .intro-title{font-size:34px}
  .page-title{font-size:22px}
}
</style>
