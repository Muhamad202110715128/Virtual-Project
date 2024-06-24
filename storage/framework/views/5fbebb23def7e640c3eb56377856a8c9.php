<!-- resources/views/components/preference.blade.php -->
<?php
    $checkboxes = $ids ?? [];
?>

<?php $__currentLoopData = $checkboxes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="prefence">
        <input type="checkbox" id="<?php echo e($id); ?>">
        <label for="<?php echo e($id); ?>" class="buttons"></label>
        <p><?php echo e($slot); ?></p>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\xampp\htdocs\VI\resources\views/components/prefence.blade.php ENDPATH**/ ?>