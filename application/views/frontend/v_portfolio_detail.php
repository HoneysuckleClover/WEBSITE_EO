<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- ================= INTRO SECTION ================= -->
<div class="intro intro-single route bg-image" 
     style="background-image: url('<?= base_url(); ?>assets_frontend/img/background.jpg');">

  <div class="intro-overlay"></div>

  <div class="intro-content d-flex align-items-center">
    <div class="container text-center">

      <h2 class="intro-title mb-3">Detail Portofolio</h2>

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center">
          <li class="breadcrumb-item">
            <a href="<?= base_url(); ?>">Home</a>
          </li>
          <li class="breadcrumb-item">
            <a href="<?= base_url(); ?>">Portofolio</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Detail</li>
        </ol>
      </nav>

    </div>
  </div>
</div>
<!-- ================= END INTRO ================= -->

<!-- ================= PORTFOLIO DETAIL ================= -->
<section class="page-section py-5" id="portfolio-detail">
  <div class="container">
    <div class="row justify-content-center">

      <div class="col-md-10 col-lg-8">

        <?php if (!empty($portfolio)): 
            $p = $portfolio[0];
        ?>

        <!-- ALERT JIKA DRAFT -->
        <?php if(strtolower($p->portfolio_status) != 'publish'): ?>
          <div class="alert alert-warning text-center">
            Portofolio belum dipublikasikan.
          </div>
        <?php endif; ?>

        <article class="page-article text-center">

          <!-- Gambar Portofolio -->
          <?php
          if (!empty($p->portfolio_gambar) && file_exists(FCPATH.'gambar/portfolio/'.$p->portfolio_gambar)) {
              $foto = base_url('gambar/portfolio/'.$p->portfolio_gambar);
          } else {
              $foto = base_url('assets_frontend/img/user-default.png');
          }
          ?>
          <img src="<?= $foto ?>" 
               class="portfolio-gambar mb-3" 
               alt="<?= $p->portfolio_judul ?>">

          <!-- Judul Portofolio -->
          <h2 class="page-title mb-2"><?= $p->portfolio_judul ?></h2>
          <div class="title-line mb-3"></div>

          <!-- Kategori -->
          <p class="text-muted mb-4" style="font-size:15px;">
            <?= $p->kategori_nama ?: 'Uncategorized'; ?>
          </p>

          <!-- Deskripsi -->
          <div class="article-content portfolio-text">
            <?= nl2br($p->portfolio_deskripsi); ?>
          </div>

        </article>

        <?php else: ?>
          <div class="text-center py-5">
            <h4 class="text-muted">Portofolio tidak ditemukan.</h4>
          </div>
        <?php endif; ?>

      </div>

    </div>
  </div>
</section>
<!-- ================= END PORTFOLIO DETAIL ================= -->

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
    background: rgba(0,0,0,0.65);
}

.intro-content { position: relative; z-index: 2; }
.intro-title { font-size: 42px; font-weight: 700; color: #fff; }

/* Breadcrumb */
.breadcrumb { background: transparent; margin:0; font-size:15px; }
.breadcrumb a { color: #ddd; transition:0.25s; }
.breadcrumb a:hover { color: #00aaff; }
.breadcrumb-item.active { color:#fff; }

/* PAGE SECTION */
.page-section { background: #f7f7f7; }

/* CONTENT BOX */
.page-article {
    background: #fff;
    padding: 40px 35px;
    border-radius: 10px;
    box-shadow: 0 6px 25px rgba(0,0,0,0.08);
    text-align: center;
}

/* PORTFOLIO IMAGE */
.portfolio-gambar {
    width: 100%;
    max-width: 500px;
    height: auto;
    display: block;
    margin: 0 auto 20px auto;
    border-radius: 5px; /* opsional, bisa dihapus jika mau kotak murni */
}

/* TITLE */
.page-title { font-size: 28px; font-weight: 700; color: #111; }

/* GARIS BIRU */
.title-line {
    width: 70px;
    height: 4px;
    background: #00aaff;
    margin: 0 auto 15px auto;
    border-radius: 3px;
}

/* TEXT */
.portfolio-text { font-size: 18px; line-height: 1.8; color: #444; }

/* RESPONSIVE */
@media (max-width: 768px) {
    .intro-title { font-size: 34px; }
    .page-title { font-size: 24px; }
}
</style>
<!-- ================= END STYLE ================= -->
