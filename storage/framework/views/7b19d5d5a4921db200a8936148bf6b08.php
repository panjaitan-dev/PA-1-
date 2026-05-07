<?php $__env->startSection('title', 'Edit Berita'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h5>Edit Berita</h5>
    </div>
    <div class="card-body">
        <form action="<?php echo e(route('admin.berita.update', $berita->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            
            <div class="mb-3">
                <label>Judul</label>
                <input type="text" name="judul" class="form-control" value="<?php echo e($berita->judul); ?>" required>
            </div>
            
            <div class="mb-3">
                <label>Penulis</label>
                <input type="text" name="penulis" class="form-control" value="<?php echo e($berita->penulis); ?>">
            </div>
            
            <div class="mb-3">
                <label>Konten</label>
                <textarea name="konten" class="form-control" rows="10" required><?php echo e($berita->konten); ?></textarea>
            </div>
            
            <div class="mb-3">
                <label>Gambar Saat Ini</label><br>
                <?php if($berita->gambar): ?>
                    <img src="<?php echo e($berita->gambar); ?>" width="100">
                <?php else: ?>
                    <span class="text-muted">Tidak ada gambar</span>
                <?php endif; ?>
                <input type="file" name="gambar" class="form-control mt-2" accept="image/*">
            </div>
            
            <div class="mb-3">
                <input type="checkbox" name="status" value="1" <?php echo e($berita->status ? 'checked' : ''); ?>> Aktifkan
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="<?php echo e(route('admin.berita.index')); ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\PA-1-\resources\views/admin/berita/edit.blade.php ENDPATH**/ ?>