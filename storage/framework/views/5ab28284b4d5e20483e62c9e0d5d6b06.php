<?php $__env->startSection('title', 'Manajemen Berita'); ?>

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="mb-0">📰 Daftar Berita</h5>
    <a href="<?php echo e(route('admin.berita.create')); ?>" class="btn btn-primary">
        <i class="fas fa-plus"></i> Tambah Berita
    </a>
</div>

<div class="card">
    <div class="card-body">
        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td>
                        <?php if($item->gambar): ?>
                            <img src="<?php echo e($item->gambar); ?>" width="50" height="50" style="object-fit: cover;">
                        <?php else: ?>
                            <span class="text-muted">-</span>
                        <?php endif; ?>
                    </td>
                    <td><?php echo e($item->judul); ?></td>
                    <td><?php echo e($item->penulis ?? '-'); ?></td>
                    <td>
                        <span class="badge <?php echo e($item->status ? 'bg-success' : 'bg-danger'); ?>">
                            <?php echo e($item->status ? 'Aktif' : 'Tidak'); ?>

                        </span>
                    </td>
                    <td>
                        <a href="<?php echo e(route('admin.berita.edit', $item->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <form action="<?php echo e(route('admin.berita.destroy', $item->id)); ?>" method="POST" class="d-inline">
                            <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr><td colspan="6" class="text-center">Belum ada berita</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
        <?php echo e($berita->links()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\PA-1-\resources\views/admin/berita/index.blade.php ENDPATH**/ ?>