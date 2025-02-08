<!-- filepath: /resources/views/result.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Diagnosis Result</title>
</head>
<body>
    <h1>Diagnosis Result</h1>
    <?php if(is_array($diagnosis)): ?>
        <ul>
            <?php $__currentLoopData = $diagnosis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $diag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($diag['disease']); ?>: <?php echo e(number_format($diag['probability'] * 100, 2)); ?>%</li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php else: ?>
        <p><?php echo e($diagnosis); ?></p>
    <?php endif; ?>
</body>
</html><?php /**PATH C:\Users\User\SDSCapstone - Copy\resources\views/result.blade.php ENDPATH**/ ?>