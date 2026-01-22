<!-- v_homepage.php -->
<section id="home" class="intro" 
style="position:relative; min-height:100vh; display:flex; align-items:center; justify-content:center; text-align:center; color:#fff; overflow:hidden;">

    <!-- Background -->
    <div style="position:absolute; top:0; left:0; width:100%; height:120%; 
        background: url('<?= base_url("assets_frontend/img/home.jpg") ?>') center/cover no-repeat fixed; 
        transform: translateY(-10%); z-index:1;"></div>

    <!-- Dark overlay -->
    <div style="position:absolute; top:0; left:0; width:100%; height:100%; 
        background: linear-gradient(to bottom, rgba(0,0,0,0.7), rgba(0,0,0,0.5), rgba(0,0,0,0.7)); 
        z-index:2;"></div>

    <!-- Content -->
    <div style="position:relative; z-index:3; padding:20px;">

        <h2 class="hero-text">Selamat Datang</h2>
        <h3 class="hero-sub">Di Website</h3>
        <h1 class="hero-title"><?= $pengaturan->nama; ?></h1>

        <div class="ticker-wrap">
            <div id="ticker"></div>
        </div>

    </div>
</section>


<style>
/* Hero Text */
.hero-text {
    font-size: 3rem;
    margin-bottom: 10px;
    color: #fff;
    font-weight: 500;
    letter-spacing: 1px;
    opacity: 0;
    animation: fadeUp 2s ease forwards;
}

.hero-sub {
    font-size: 1.8rem;
    margin-bottom: 25px;
    color: #ccc;
    letter-spacing: 1px;
    opacity: 0;
    animation: fadeUp 2s ease forwards;
    animation-delay: 0.5s;
}

.hero-title {
    font-size: 4rem;
    margin-bottom: 70px;
    font-weight: 700;
    color: #fff;
    letter-spacing: 2px;
    opacity: 0;
    animation: fadeUp 2s ease forwards;
    animation-delay: 1s;
}

/* Fade cinematic */
@keyframes fadeUp {
    from { opacity: 0; transform: translateY(40px); }
    to { opacity: 1; transform: translateY(0); }
}

/* Ticker Cinematic */

.ticker-wrap {
    width: 100%;
    overflow: hidden;
    position: relative;
    height: 3em;
}

#ticker {
    display: flex;
    width: max-content;
    animation: scroll 90s linear infinite; /* SANGAT PELAN */
}

.ticker-item {
    display: inline-flex;
    align-items: center;
    margin-right: 100px;
    font-size: 1.5rem;
    font-weight: 400;
    white-space: nowrap;
    color: #ffffff;
    letter-spacing: 1.5px;
    opacity: 0.8;
}

/* Minimal separator */
.ticker-item::before {
    content: "—";
    margin-right: 20px;
    color: #ffffff;
    opacity: 0.4;
}

/* Slow cinematic movement */
@keyframes scroll {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}
</style>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const texts = [
        "Creating Moments, Delivering Experiences",
        "Turning Ideas Into Unforgettable Events",
        "Your Event, Perfectly Crafted",
        "Where Every Event Becomes a Story",
        "Mewujudkan Acara Berkesan dan Profesional",
        "Excellence in Every Detail",
        "Innovation Meets Celebration"
    ];

    const ticker = document.getElementById("ticker");

    const items = texts.map(t => `<div class="ticker-item">${t}</div>`).join("");

    // Duplikat supaya jalan terus tanpa jeda
    ticker.innerHTML = items + items;
});
</script>

<!-- Services Section -->
<section id="services" style="padding:80px 20px; background:#f9f9f9; text-align:center;">
    <h3 style="font-size:2rem; margin-bottom:10px;">Layanan</h3>
    <p style="margin-bottom:40px;">Layanan Yang Kami Tawarkan</p>

    <div style="display:flex; flex-wrap:wrap; justify-content:center; gap:30px;">

        <?php if(!empty($layanan)): ?>
            <?php foreach($layanan as $l): ?>

            <?php
            // gambar aman
            if (!empty($l->layanan_gambar) && file_exists(FCPATH.'gambar/layanan/'.$l->layanan_gambar)) {
                $gambar = base_url('gambar/layanan/'.$l->layanan_gambar);
            } else {
                $gambar = base_url('assets_frontend/img/no-image.png');
            }
            ?>

            <div style="
                flex:1 1 260px;
                max-width:260px;
                background:#fff;
                border-radius:15px;
                overflow:hidden;
                box-shadow:0 5px 15px rgba(0,0,0,0.1);
                transition:transform .3s, box-shadow .3s;
            "
            onmouseover="this.style.transform='translateY(-8px)';this.style.boxShadow='0 12px 25px rgba(0,0,0,.15)'"
            onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 5px 15px rgba(0,0,0,.1)'"
            >

                <!-- Gambar layanan -->
                <div style="width:100%; height:170px; overflow:hidden;">
                    <img src="<?= $gambar ?>"
                         alt="<?= $l->layanan_judul ?>"
                         style="width:100%; height:100%; object-fit:cover;">
                </div>

                <!-- Konten -->
                <div style="padding:20px;">
                    <h4 style="margin-bottom:10px; font-weight:600;">
                        <?= $l->layanan_judul ?>
                    </h4>

                    <p style="font-size:.9rem; color:#555;">
                        <?= word_limiter(strip_tags($l->layanan_deskripsi), 18) ?>
                    </p>

                    <a href="<?= base_url('layanan/'.$l->layanan_slug) ?>"
                       style="
                         display:inline-block;
                         margin-top:12px;
                         font-size:.85rem;
                         color:#007bff;
                         text-decoration:none;
                         font-weight:500;
                       ">
                        Selengkapnya →
                    </a>
                </div>

            </div>

            <?php endforeach; ?>
        <?php else: ?>
            <p>Layanan belum tersedia.</p>
        <?php endif; ?>

    </div>
</section>


<!-- ================= COUNTER SECTION ================= -->
<section id="counter" style="
    position: relative;
    padding: 100px 20px;
    background: url('<?= base_url("assets_frontend/img/homepage.jpg") ?>') center/cover no-repeat;
    color:#fff;
    text-align:center;
    overflow:hidden;
">

    <!-- Overlay cinematic gelap + warm -->
    <div style="
        position:absolute;
        top:0;
        left:0;
        width:100%;
        height:100%;
        background: linear-gradient(
            rgba(0,0,0,0.65),
            rgba(0,0,0,0.45),
            rgba(0,0,0,0.65)
        );
        z-index:1;
    "></div>

    <!-- Konten -->
    <div style="
        position: relative;
        z-index:2;
        display:flex;
        flex-wrap:wrap;
        justify-content:center;
        gap:50px;
        max-width:1200px;
        margin:0 auto;
    ">

        <?php 
        $counter = [
            ["ion-checkmark-round", "450", "Works Completed"],
            ["ion-ios-calendar-outline", "15", "Years of Experience"],
            ["ion-ios-people", "550", "Total Clients"],
            ["ion-ribbon-a", "36", "Awards Won"]
        ];
        foreach ($counter as $c): ?>
        
        <div style="
            flex:1 1 200px; 
            max-width:200px; 
            text-align:center;
            backdrop-filter: blur(6px);
            background: rgba(0,0,0,0.35);
            padding:30px 20px;
            border-radius:16px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.4);
        ">
            <div style="
                font-size:3rem; 
                margin-bottom:15px; 
                color:#d4af37;
            ">
                <i class="<?= $c[0] ?>"></i>
            </div>
            <h2 style="
                margin:0; 
                font-size:2.5rem; 
                font-weight:700;
                color:#fff;
            ">
                <?= $c[1] ?>
            </h2>
            <p style="
                margin:8px 0 0; 
                font-size:1rem; 
                letter-spacing:1px;
                color:rgba(255,255,255,0.8);
                text-transform:uppercase;
            ">
                <?= $c[2] ?>
            </p>
        </div>

        <?php endforeach; ?>

    </div>
</section>

<!-- ================= COUNTER STYLE ================= -->
<style>
@media (max-width: 768px) {
    #counter div[style*="flex:1 1 200px"] {
        flex: 1 1 45%;
        max-width: 45%;
        margin-bottom: 30px;
    }
}

@media (max-width: 480px) {
    #counter div[style*="flex:1 1 200px"] {
        flex: 1 1 100%;
        max-width: 100%;
    }
}
</style>


<!-- Portfolio Section -->
<section id="portfolio" style="padding:80px 20px; text-align:center;">
    <h3 style="font-size:2rem; margin-bottom:10px;">Portfolio</h3>
    <p style="margin-bottom:40px;">Proyek-proyek Terbaru Kami</p>
    <div style="display:flex; flex-wrap:wrap; justify-content:center; gap:20px;">
        <?php if(!empty($portfolio)): ?>
            <?php foreach($portfolio as $p): ?>
            <div style="flex:1 1 300px; max-width:300px; border-radius:12px; overflow:hidden; position:relative; cursor:pointer; transition:transform 0.3s, box-shadow 0.3s; box-shadow:0 5px 15px rgba(0,0,0,0.1);">
                <a href="<?= base_url('portfolio/'.$p->portfolio_slug) ?>" style="display:block; text-decoration:none; color:inherit;">
                    <div style="width:100%; height:200px; overflow:hiddens;">
                        <img src="<?= base_url("gambar/portfolio/".$p->portfolio_gambar) ?>" 
                             alt="<?= $p->portfolio_judul ?>" 
                             style="width:100%; height:100%; object-fit:cover; display:block; transition:transform 0.3s;">
                    </div>
                    <div style="position:absolute; bottom:0; width:100%; background:rgba(0,0,0,0.65); padding:15px; text-align:left;">
                        <h4 style="margin:0; font-size:1.2rem; font-weight:bold; color:#fff;"><?= $p->portfolio_judul ?></h4>
                        <p style="margin:5px 0 0; font-size:0.9rem; color:#ddd;"><?= $p->kategori_nama ?></p>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Portfolio belum tersedia.</p>
        <?php endif; ?>
    </div>
</section>


<!-- Testimonial Section -->
<section id="testimonials" style="padding:70px 20px;background:#f5f7fa;">
  <div style="max-width:1200px;margin:auto;">

    <div style="text-align:center;margin-bottom:40px;">
      <h3 style="font-size:2.2rem;margin-bottom:10px;">Apa Kata Mereka?</h3>
      <p style="color:#777;">Testimoni asli dari klien kami</p>
    </div>

    <?php if (!empty($testimonial)): ?>
      <div style="
        display:grid;
        grid-template-columns:repeat(auto-fill,minmax(240px,1fr));
        gap:20px;
      ">

        <?php foreach ($testimonial as $t): ?>
          <?php
          $foto = (!empty($t->testimonial_foto) && file_exists(FCPATH.'gambar/testimonial/'.$t->testimonial_foto))
            ? base_url('gambar/testimonial/'.$t->testimonial_foto)
            : base_url('assets_frontend/img/user-default.png');
          ?>

          <div style="
            background:#fff;
            padding:18px;
            border-radius:12px;
            box-shadow:0 4px 10px rgba(0,0,0,.07);
            font-size:.85rem;
            transition:.2s;
          ">

            <div style="display:flex;align-items:center;gap:12px;margin-bottom:12px;">
              <img src="<?= $foto ?>"
                   style="width:46px;height:46px;border-radius:50%;object-fit:cover;">

              <div>
                <strong style="display:block;font-size:.9rem;">
                  <?= htmlspecialchars($t->testimonial_nama) ?>
                </strong>
                <span style="font-size:.75rem;color:#999;">Klien</span>
              </div>
            </div>

            <p style="color:#555;line-height:1.6;margin:0;">
              “<?= word_limiter(strip_tags($t->testimonial_isi), 20) ?>”
            </p>

          </div>
        <?php endforeach; ?>

      </div>

      <div style="text-align:center;margin-top:35px;">
        <a href="<?= base_url('testimonial'); ?>"
           style="font-size:.85rem;color:#007bff;text-decoration:none;font-weight:500;">
          Lihat semua testimonial →
        </a>
      </div>

    <?php else: ?>
      <p style="text-align:center;color:#777;">Belum ada testimonial.</p>
    <?php endif; ?>

  </div>
</section>


<!-- Blog Section -->
<section id="blog" style="padding:80px 20px; text-align:center;">
    <h3 style="font-size:2rem; margin-bottom:10px;">Berita</h3>
    <p style="margin-bottom:40px;">Artikel Terbaru Dari Kami</p>
    <div style="display:flex; flex-wrap:wrap; justify-content:center; gap:20px;">
        <?php if(!empty($artikel)): ?>
            <?php foreach($artikel as $a): ?>
            <div style="flex:1 1 300px; max-width:300px; background:#fff; border-radius:12px; overflow:hidden; text-align:left; display:flex; flex-direction:column; box-shadow:0 5px 15px rgba(0,0,0,0.1); transition:transform 0.3s;">
                <?php if(!empty($a->artikel_sampul)): ?>
                <div style="width:100%; height:180px; overflow:hidden;">
                    <img src="<?= base_url("gambar/artikel/$a->artikel_sampul") ?>" 
                         alt="<?= $a->artikel_judul ?>" 
                         style="width:100%; height:100%; object-fit:cover; display:block;">
                </div>
                <?php else: ?>
                <div style="width:100%; height:180px; background:#ddd;"></div>
                <?php endif; ?>
                <div style="padding:15px; flex:1; display:flex; flex-direction:column; justify-content:space-between;">
                    <div>
                        <h4 style="margin-bottom:10px; font-size:1.1rem;">
                            <a href="<?= base_url($a->artikel_slug) ?>" style="color:#007bff; text-decoration:none;">
                                <?= $a->artikel_judul ?>
                            </a>
                        </h4>
                        <p style="font-size:0.85rem; color:#555;"><?= substr(strip_tags($a->artikel_isi ?? ''),0,80) ?>...</p>
                    </div>
                    <span style="font-size:0.8rem; color:#999;">By <?= $a->pengguna_nama ?> | <?= date('d M Y', strtotime($a->artikel_tanggal)) ?></span>
                </div>
            </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Tidak ada artikel terbaru.</p>
        <?php endif; ?>
    </div>
</section>
