

<?php $__env->startSection('title', 'Daftar Galeri'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">
            <i class="fas fa-image me-2" style="color: #c6a43b;"></i>
            Daftar Galeri
        </h5>
        <a href="<?php echo e(route('admin.galeri.create')); ?>" class="btn btn-sm" style="background: #c6a43b; color: white;">
            <i class="fas fa-plus me-1"></i> Tambah Galeri
        </a>
    </div>
    <div class="card-body">
        <?php if(session('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(session('success')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-light">
                    <tr>
                        <th width="50">No</th>
                        <th width="100">Gambar</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Lokasi</th>
                        <th width="100">Status</th>
                        <th width="150">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $galeris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $galeri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($galeris->firstItem() + $key); ?></td>
                        <td>
                            <?php if($galeri->gambar): ?>
                                <img src="data:image/jpeg;base64,<?php echo e(base64_encode($galeri->gambar)); ?>" 
                                     style="width: 60px; height: 60px; object-fit: cover; border-radius: 5px;">
                            <?php else: ?>
                                <div class="bg-secondary text-white text-center" 
                                     style="width: 60px; height: 60px; line-height: 60px; border-radius: 5px;">
                                    <i class="fas fa-image"></i>
                                </div>
                            <?php endif; ?>
                        </td>
                        <td><?php echo e($galeri->judul); ?></td>
                        <td>
                            <span class="badge" style="background: #c6a43b;">
                                <?php echo e($galeri->kategori); ?>

                            </span>
                        </td>
                        <td><?php echo e($galeri->lokasi ?: '-'); ?></td>
                        <td>
                            <?php if($galeri->status): ?>
                                <span class="badge bg-success">Aktif</span>
                            <?php else: ?>
                                <span class="badge bg-danger">Tidak Aktif</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <div class="btn-group">
                                <a href="<?php echo e(route('admin.galeri.edit', $galeri->id)); ?>" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="<?php echo e(route('admin.galeri.destroy', $galeri->id)); ?>" method="POST" onsubmit="return confirm('Yakin?')">
                                    <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr><td colspan="7" class="text-center">Tidak ada data</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-end mt-3">
            <?php echo e($galeris->links()); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Semester 2\pa real 1\Proyek akhir 1 Real\resources\views/admin/galeri/index.blade.php ENDPATH**/ ?>