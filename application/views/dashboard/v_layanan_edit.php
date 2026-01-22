<div class="content-wrapper">

    <!-- Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>
                        <b>Layanan</b>
                        <small class="text-muted">Edit Data Layanan</small>
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
                    <a href="<?= base_url('dashboard/layanan'); ?>" class="btn btn-success btn-sm mb-3">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>

                    <!-- Card -->
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-cogs"></i> Edit Layanan
                            </h3>
                        </div>

                        <div class="card-body">

                            <form action="<?= base_url('dashboard/layanan_update'); ?>"
                                  method="post"
                                  enctype="multipart/form-data">

                                <input type="hidden" name="id" value="<?= $layanan->layanan_id; ?>">

                                <div class="row">

                                    <!-- KIRI -->
                                    <div class="col-lg-9">

                                        <div class="form-group">
                                            <label><b>Judul Layanan</b></label>
                                            <input type="text"
                                                   name="judul"
                                                   class="form-control"
                                                   value="<?= htmlspecialchars($layanan->layanan_judul, ENT_QUOTES, 'UTF-8'); ?>"
                                                   required>
                                        </div>

                                        <div class="form-group">
                                            <label><b>Deskripsi</b></label>
                                            <textarea name="deskripsi"
                                                      id="summernote"
                                                      class="form-control"
                                                      rows="10"
                                                      required><?= htmlspecialchars($layanan->layanan_deskripsi, ENT_QUOTES, 'UTF-8'); ?></textarea>
                                        </div>

                                    </div>

                                    <!-- KANAN -->
                                    <div class="col-lg-3">

                                        <div class="form-group">
                                            <label><b>Status</b></label>
                                            <select name="status" class="form-control">
                                                <option value="publish" <?= ($layanan->layanan_status == 'publish') ? 'selected' : ''; ?>>
                                                    Publish
                                                </option>
                                                <option value="draft" <?= ($layanan->layanan_status == 'draft') ? 'selected' : ''; ?>>
                                                    Draft
                                                </option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label><b>Gambar Saat Ini</b></label><br>
                                            <?php if (!empty($layanan->layanan_gambar) && file_exists(FCPATH.'gambar/layanan/'.$layanan->layanan_gambar)): ?>
                                                <img src="<?= base_url('gambar/layanan/'.$layanan->layanan_gambar); ?>"
                                                     class="img-thumbnail mb-2"
                                                     width="120">
                                            <?php else: ?>
                                                <small class="text-muted"><i>Tidak ada gambar</i></small>
                                            <?php endif; ?>
                                        </div>

                                        <div class="form-group">
                                            <label><b>Ganti Gambar (Opsional)</b></label>
                                            <input type="file" name="gambar" class="form-control">
                                        </div>

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
