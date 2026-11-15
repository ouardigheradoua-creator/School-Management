

<?php $__env->startSection('content'); ?>
<h3> Students List </h3>
<a href="<?php echo e(route('students.create')); ?>" class="btn btn-success" style="margin-bottom: 15px;">Add Student</a>

<div class="table-wrapper">
    <table class="fl-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Section</th>
                <th>Image</th>
                <th>Show</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($student->id); ?></td>
                <td><?php echo e($student->name); ?></td>
                <td><?php echo e($student->email); ?></td>
                <td><?php echo e($student->phone); ?></td>
                <td><?php echo e($student->section); ?></td>
                <td><img src="/image/<?php echo e($student->image); ?>" width="96" height="96" /></td>
                <td>
                    <a class="btn btn-info" href="<?php echo e(route('students.show', $student->id)); ?>">Show</a>
                </td>
                <td>
                    <a class="btn btn-primary" href="<?php echo e(route('students.edit', $student->id)); ?>">Edit</a>
                </td>
                <td>
                    <form action="<?php echo e(route('students.destroy', $student->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\School\resources\views/index.blade.php ENDPATH**/ ?>