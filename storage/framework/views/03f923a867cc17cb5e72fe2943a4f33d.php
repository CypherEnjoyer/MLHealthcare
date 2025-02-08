<!-- filepath: /resources/views/result.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Diagnosis Result</title>
</head>
<body>
    <h1>Diagnosis Result</h1>
    
    <h2>Selected Symptoms</h2>
    <ul>
        <?php $__currentLoopData = $symptoms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $symptom): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($symptom); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Diagnosis</h2>
    <?php if(is_array($diagnosis)): ?>
        <ul>
            <?php $__currentLoopData = $diagnosis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $diag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($diag['disease']); ?>: <?php echo e(number_format($diag['probability'] * 100, 2)); ?>%</li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php else: ?>
        <p><?php echo e($diagnosis); ?></p>
    <?php endif; ?>

    <form action="<?php echo e(url('/')); ?>" method="get">
        <button type="submit">Make Another Diagnosis</button>
    </form>
</body>
</html><?php /**PATH C:\Users\User\SDSCapstone\resources\views/result.blade.php ENDPATH**/ ?>