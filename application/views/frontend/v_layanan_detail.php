<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- ================= INTRO SECTION ================= -->
<div class="intro intro-single route bg-image"
     style="background-image: url('<?= base_url(); ?>assets_frontend/img/background.jpg');">

  <div class="intro-overlay"></div>

  <div class="intro-content d-flex align-items-center">
    <div class="container text-center">

      <h2 class="intro-title mb-3">Detail Layanan</h2>

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center">
          <li class="breadcrumb-item">
            <a href="<?= base_url(); ?>">Home</a>
          </li>
          <li class="breadcrumb-item">
            <a href="<?= base_url(); ?>">Layanan</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Detail</li>
        </ol>
      </nav>

    </div>
  </div>
</div>
<!-- ================= END INTRO ================= -->

<!-- ================= DETAIL Layanan ================= -->
<section class="page-section py-5" id="layanan-detail">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10 col-lg-8">

        <?php if (!empty($layanan)):
              $t = $layanan[0];
        ?>

        <article class="page-article text-center">

          <?php
          // Cek gambar layanan
          if (!empty($t->layanan_gambar) &&
              file_exists(FCPATH.'gambar/layanan/'.$t->layanan_gambar)) {
              $foto = base_url('gambar/layanan/'.$t->layanan_gambar);
          } else {
              $foto = base_url('assets_frontend/img/user-default.png');
          }
          ?>

          <!-- FOTO -->
          <img src="<?= $foto ?>"
               class="layanan-gambar mb-3"
               alt="<?= $t->layanan_judul ?>">

          <!-- JUDUL LAYANAN -->
          <h2 class="page-title mb-2"><?= $t->layanan_judul ?></h2>
          <div class="title-line mb-4"></div>

          <!-- DESKRIPSI -->
          <div class="article-content layanan-text">
            <?= nl2br($t->layanan_deskripsi); ?>
          </div>

        </article>

        <?php else: ?>
          <div class="text-center py-5">
            <h4 class="text-muted">Layanan tidak ditemukan.</h4>
          </div>
        <?php endif; ?>

      </div>
    </div>
  </div>
</section>
<!-- ================= END DETAIL ================= -->

<!-- ================= STYLE ================= -->
<style>
/* INTRO */
.intro-single {
    position: relative;
    background-size: cover;
    background-position: center;
    padding: 130px 0 110px;
}

.intro-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.65); 
}

.intro-content {
    position: relative;
    z-index: 2;
}

/* FIX WARNA JUDUL (OVERRIDE THEME) */
.intro-single .intro-title {
    font-size: 42px;
    font-weight: 700;
    color: #fff !important;
}

/* BREADCRUMB */
.breadcrumb {
    background: transparent;
    margin: 0;
    font-size: 15px;
}
.breadcrumb a {
    color: #ddd;
    transition: 0.25s;
}
.breadcrumb a:hover {
    color: #00aaff;
}
.breadcrumb-item.active {
    color: #fff;
}

/* PAGE */
.page-section {
    background: #f7f7f7;
}

/* CARD */
.page-article {
    background: #fff;
    padding: 40px 35px;
    border-radius: 10px;
    box-shadow: 0 6px 25px rgba(0,0,0,0.08);
}

/* FOTO LAYANAN */
.layanan-gambar {
    width: 100%;         /* mengikuti lebar kontainer */
    max-width: 500px;    /* ukuran maksimal */
    height: auto;        /* proporsional */
    display: block;
    margin: 0 auto 20px auto;
    border-radius: 5px;  /* opsional, sedikit membulat */
}

/* TITLE */
.page-title {
    font-size: 28px;
    font-weight: 700;
    color: #111;
}

/* LINE */
.title-line {
    width: 70px;
    height: 4px;
    background: #00aaff;
    margin: 0 auto;
    border-radius: 3px;
}

/* TEXT */
.layanan-text {
    font-size: 18px;
    line-height: 1.8;
    color: #444;
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .intro-single .intro-title {
        font-size: 34px;
    }
    .page-title {
        font-size: 24px;
    }
}
</style>
<!-- ================= END STYLE ================= -->
