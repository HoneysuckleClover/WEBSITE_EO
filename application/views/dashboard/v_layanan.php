<div class="content-wrapper">

    <!-- Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><b>Layanan</b> <small>Kelola data layanan</small></h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">

            <!-- Button Tambah -->
            <a href="<?= base_url('dashboard/layanan_tambah'); ?>">
                <button class="btn btn-sm btn-success mb-3">
                    <i class="fas fa-plus"></i> Tambah Layanan Baru
                </button>
            </a>

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-cogs"></i> Data Layanan
                    </h3>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th width="1%">No</th>
                                <th>Judul Layanan</th>
                                <th width="10%">Gambar</th>
                                <th>Status</th>
                                <th width="15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        if (isset($layanan) && is_array($layanan) && count($layanan) > 0):
                            $no = 1;
                            foreach ($layanan as $l):
                                $id     = $l->layanan_id ?? '';
                                $judul  = $l->layanan_judul ?? '-';
                                $slug   = $l->layanan_slug ?? '';
                                $gambar = $l->layanan_gambar ?? '';
                                $status = $l->layanan_status ?? 'draft';
                                $judul_html = htmlspecialchars($judul, ENT_QUOTES, 'UTF-8');
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td>
                                    <?= $judul_html; ?><br>
                                    <small class="text-muted"><?= base_url('layanan/'.$slug); ?></small>
                                </td>

                                <td>
                                    <?php if (!empty($gambar) && file_exists(FCPATH."gambar/layanan/".$gambar)): ?>
                                        <img src="<?= base_url('gambar/layanan/'.$gambar); ?>" alt="<?= $judul_html; ?>" style="width:100%; height:auto;">
                                    <?php elseif(!empty($gambar)): ?>
                                        <span class="text-warning">Gambar tidak ditemukan</span>
                                    <?php else: ?>
                                        <span class="text-muted">Tidak ada gambar</span>
                                    <?php endif; ?>
                                </td>

                                <td>
                                    <?php if (strtolower($status) === 'publish'): ?>
                                        <span class="badge badge-success">Publish</span>
                                    <?php else: ?>
                                        <span class="badge badge-danger">Draft</span>
                                    <?php endif; ?>
                                </td>

                                <td>
                                    <a target="_blank" href="<?= base_url('layanan/'.$slug); ?>" class="btn btn-sm btn-success">
                                        <i class="fa fa-eye"></i>
                                    </a>

                                    <?php if ($id !== ''): ?>
                                        <a href="<?= base_url('dashboard/layanan_edit/'.$id); ?>" class="btn btn-sm btn-warning">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="<?= base_url('dashboard/layanan_hapus/'.$id); ?>"
                                           onclick="return confirm('Yakin ingin menghapus data ini?')"
                                           class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php
                            endforeach;
                        else:
                        ?>
                            <tr>
                                <td colspan="5" class="text-center">Belum ada data layanan.</td>
                            </tr>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>

</div>
