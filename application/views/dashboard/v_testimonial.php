<div class="content-wrapper">

    <!-- Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><b>Testimonial</b> <small>Kelola data testimonial</small></h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">

            <!-- Button Tambah -->
            <a href="<?= base_url('dashboard/testimonial_tambah'); ?>">
                <button class="btn btn-sm btn-success mb-3">
                    <i class="fas fa-plus"></i> Tambah Testimonial
                </button>
            </a>

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-comments"></i> Data Testimonial
                    </h3>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th width="1%">No</th>
                                <th>Nama</th>
                                <th>Isi Testimonial</th>
                                <th width="10%">Foto</th>
                                <th>Status</th>
                                <th width="15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        if (isset($testimonial) && is_array($testimonial) && count($testimonial) > 0):
                            $no = 1;
                            foreach ($testimonial as $t):
                                $id     = $t->testimonial_id ?? '';
                                $nama   = $t->testimonial_nama ?? '-';
                                $isi    = $t->testimonial_isi ?? '';
                                $foto   = $t->testimonial_foto ?? '';
                                $status = $t->testimonial_status ?? 'draft';

                                $nama_html = htmlspecialchars($nama, ENT_QUOTES, 'UTF-8');
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>

                                <td><?= $nama_html; ?></td>

                                <td><?= word_limiter(strip_tags($isi), 20); ?></td>

                                <td>
                                    <?php if (!empty($foto) && file_exists(FCPATH."gambar/testimonial/".$foto)): ?>
                                        <img src="<?= base_url('gambar/testimonial/'.$foto); ?>" style="width:100%; height:auto;">
                                    <?php elseif(!empty($foto)): ?>
                                        <span class="text-warning">Foto tidak ditemukan</span>
                                    <?php else: ?>
                                        <span class="text-muted">Tidak ada foto</span>
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
                                    <a target="_blank" href="<?= base_url('testimonial/'.$id); ?>" class="btn btn-sm btn-success">
                                        <i class="fa fa-eye"></i>
                                    </a>

                                    <?php if ($id !== ''): ?>
                                        <a href="<?= base_url('dashboard/testimonial_edit/'.$id); ?>" class="btn btn-sm btn-warning">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                        <a href="<?= base_url('dashboard/testimonial_hapus/'.$id); ?>"
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
                                <td colspan="6" class="text-center">Belum ada data testimonial.</td>
                            </tr>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>

</div>
