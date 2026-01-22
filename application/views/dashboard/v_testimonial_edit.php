<div class="content-wrapper">

    <!-- Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>
                        <b>Testimonial</b>
                        <small class="text-muted">Edit Data Testimonial</small>
                    </h1>
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
                    <a href="<?= base_url('dashboard/testimonial'); ?>" class="btn btn-success btn-sm mb-3">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>

                    <!-- Card -->
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-comments"></i> Edit Testimonial
                            </h3>
                        </div>

                        <div class="card-body">

                            <form action="<?= base_url('dashboard/testimonial_update'); ?>"
                                  method="post"
                                  enctype="multipart/form-data">

                                <input type="hidden"
                                       name="id"
                                       value="<?= $testimonial->testimonial_id; ?>">

                                <div class="row">

                                    <!-- KIRI -->
                                    <div class="col-lg-9">

                                        <!-- Nama -->
                                        <div class="form-group">
                                            <label><b>Nama</b></label>
                                            <input type="text"
                                                   name="nama"
                                                   class="form-control"
                                                   value="<?= htmlspecialchars($testimonial->testimonial_nama, ENT_QUOTES, 'UTF-8'); ?>"
                                                   required>
                                        </div>

                                        <!-- Isi -->
                                        <div class="form-group">
                                            <label><b>Isi Testimonial</b></label>
                                            <textarea name="isi"
                                                      class="form-control"
                                                      rows="8"
                                                      required><?= htmlspecialchars($testimonial->testimonial_isi, ENT_QUOTES, 'UTF-8'); ?></textarea>
                                        </div>

                                    </div>

                                    <!-- KANAN -->
                                    <div class="col-lg-3">

                                        <!-- Status -->
                                        <div class="form-group">
                                            <label><b>Status</b></label>
                                            <select name="status" class="form-control">
                                                <option value="publish" <?= ($testimonial->testimonial_status == 'publish') ? 'selected' : ''; ?>>
                                                    Publish
                                                </option>
                                                <option value="draft" <?= ($testimonial->testimonial_status == 'draft') ? 'selected' : ''; ?>>
                                                    Draft
                                                </option>
                                            </select>
                                        </div>

                                        <!-- Foto Saat Ini -->
                                        <div class="form-group">
                                            <label><b>Foto Saat Ini</b></label><br>
                                            <?php if (!empty($testimonial->testimonial_foto) && file_exists(FCPATH.'gambar/testimonial/'.$testimonial->testimonial_foto)): ?>
                                                <img src="<?= base_url('gambar/testimonial/'.$testimonial->testimonial_foto); ?>"
                                                     class="img-thumbnail mb-2"
                                                     width="120">
                                            <?php else: ?>
                                                <small class="text-muted"><i>Tidak ada foto</i></small>
                                            <?php endif; ?>
                                        </div>

                                        <!-- Ganti Foto -->
                                        <div class="form-group">
                                            <label><b>Ganti Foto (Opsional)</b></label>
                                            <input type="file" name="foto" class="form-control">
                                        </div>

                                        <!-- Tombol -->
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-warning btn-block">
                                                <i class="fas fa-save"></i> Update
                                            </button>
                                        </div>

                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                    <!-- /.card -->

                </div>
            </div>
        </div>
    </section>

</div>
