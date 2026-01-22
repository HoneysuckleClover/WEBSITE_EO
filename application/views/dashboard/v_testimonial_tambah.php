<div class="content-wrapper">

  <!-- Header -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><b>Data Testimonial</b> <small>Manajemen Testimonial</small></h1>
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
          <a href="<?= base_url('dashboard/testimonial'); ?>" class="btn btn-sm btn-success mb-3">
            <i class="fas fa-arrow-left"></i> Kembali
          </a>

          <!-- Card -->
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fas fa-comments"></i> Tambah Testimonial
              </h3>
            </div>

            <div class="card-body">

              <!-- FORM -->
              <form method="post"
                    action="<?= base_url('dashboard/testimonial_tambah_aksi'); ?>"
                    enctype="multipart/form-data">

                <div class="row">

                  <!-- KIRI -->
                  <div class="col-lg-9">

                    <!-- Nama -->
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text"
                             name="nama"
                             class="form-control"
                             placeholder="Masukkan Nama..."
                             value="<?= set_value('nama'); ?>">
                      <?= form_error('nama'); ?>
                    </div>

                    <!-- Isi Testimonial -->
                    <div class="form-group">
                      <label>Isi Testimonial</label>
                      <?= form_error('isi'); ?>
                      <textarea name="isi"
                                rows="6"
                                class="form-control"
                                placeholder="Masukkan isi testimonial..."><?= set_value('isi'); ?></textarea>
                    </div>

                  </div>

                  <!-- KANAN -->
                  <div class="col-lg-3">

                    <!-- FOTO -->
                    <div class="form-group">
                      <label>Foto</label>
                      <input type="file"
                             name="foto"
                             class="form-control">
                      <?= form_error('foto'); ?>
                      <small class="text-muted">
                        JPG / PNG / WEBP
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
