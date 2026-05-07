<?php $__env->startSection('title', 'Tambah Berita'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h5>Tambah Berita</h5>
    </div>
    <div class="card-body">
        <form action="<?php echo e(route('admin.berita.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            
            <div class="mb-3">
                <label>Judul</label>
                <input type="text" name="judul" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label>Penulis</label>
                <input type="text" name="penulis" class="form-control" value="Admin">
            </div>
            
            <div class="mb-3">
                <label>Konten</label>
                <textarea name="konten" class="form-control" rows="10" required></textarea>
            </div>
            
            <div class="mb-3">
                <label>Gambar</label>
                <input type="file" name="gambar" class="form-control" accept="image/*">
            </div>
            
            <div class="mb-3">
                <input type="checkbox" name="status" value="1" checked> Aktifkan
            </div>
            
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?php echo e(route('admin.berita.index')); ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\PA-1-\resources\views/admin/berita/create.blade.php ENDPATH**/ ?>