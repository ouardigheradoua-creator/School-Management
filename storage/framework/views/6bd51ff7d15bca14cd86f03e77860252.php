

<?php $__env->startSection('content'); ?>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<h3> Add Student </h3>

<form method="POST" action="<?php echo e(route('students.store')); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" required />
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" required />
    </div>
    <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" class="form-control" name="phone" required />
    </div>
    <div class="form-group">
        <label for="section">Section:</label>
        <input type="text" class="form-control" name="section" required />
    </div>
    <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" class="form-control" name="image" required />
    </div>
    <button type="submit" class="btn btn-primary">Add Student</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\School\resources\views/create.blade.php ENDPATH**/ ?>