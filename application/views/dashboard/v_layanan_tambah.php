<div class="content-wrapper">

  <!-- Header -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><b>Data Layanan</b> <small>Manajemen Layanan</small></h1>
        </div>
      </div>
    </div>
  </section>

  <!-- Main Content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">

          <!-- Tombol Kembali -->
          <a href="<?= base_url('dashboard/layanan'); ?>" class="btn btn-sm btn-success mb-3">
            <i class="fas fa-arrow-left"></i> Kembali
          </a>

          <!-- Card -->
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fas fa-cogs"></i> Tambah Layanan
              </h3>
            </div>

            <div class="card-body">

              <!-- FORM -->
              <form method="post"
                    action="<?= base_url('dashboard/layanan_tambah_aksi'); ?>"
                    enctype="multipart/form-data">

                <div class="row">

                  <!-- KIRI -->
                  <div class="col-lg-9">
                    <div class="form-group">
                      <label>Judul Layanan</label>
                      <input type="text"
                             name="judul"
                             class="form-control"
                             placeholder="Masukkan Judul Layanan..."
                             value="<?= set_value('judul'); ?>">
                      <?= form_error('judul'); ?>
                    </div>

                    <div class="form-group">
                      <label>Deskripsi Layanan</label>
                      <?= form_error('deskripsi'); ?>
                      <textarea name="deskripsi"
                                id="summernote"
                                class="form-control"><?= set_value('deskripsi'); ?></textarea>
                    </div>
                  </div>

                  <!-- KANAN -->
                  <div class="col-lg-3">

                    <!-- ICON GAMBAR -->
                    <div class="form-group">
                      <label>Icon Layanan (Gambar)</label>
                      <input type="file"
                             name="gambar"
                             class="form-control">
                      <?= form_error('gambar'); ?>
                      <small class="text-muted">
                        Format: JPG / PNG / WEBP
                      </small>
                    </div>

                    <!-- TOMBOL -->
                    <div class="form-group mt-4">
                      <button type="submit"
                              name="status"
                              value="draft"
                              class="btn btn-warning btn-sm btn-block">
                        Simpan Draft
                      </button>

                      <button type="submit"
                              name="status"
                              value="publish"
                              class="btn btn-success btn-sm btn-block">
                        Publish
                      </button>
                    </div>

                  </div>

                </div>
              </form>
              <!-- /FORM -->

            </div>
          </div>
          <!-- /.card -->

        </div>
      </div>
    </div>
  </section>
</div>
