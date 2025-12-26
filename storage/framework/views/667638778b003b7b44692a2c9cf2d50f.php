<!DOCTYPE html>
<html>
<head>
    <title>Page 2</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>

<!-- TOP BAR -->
<div style="padding:15px; background:#4a90e2; color:white;">
    <strong><?php echo e($user->name); ?></strong>
</div>

<!-- CONTENT -->
<div style="padding:20px; max-width:500px; margin:auto;">

    <h3>Add Task</h3>

    <form method="POST" action="/add-task">
        <?php echo csrf_field(); ?>
        <input type="text" name="task" placeholder="Enter your task" required>
        <button type="submit">Add</button>
    </form>

    <hr>

    <h3>Your Tasks</h3>

    <?php if(count($tasks) == 0): ?>
        <p>No tasks yet</p>
    <?php else: ?>
        <ul>
            <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($t->task); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>

</div>

</body>
</html>
<?php /**PATH C:\laragons\www\mvcdemo\demo\resources\views/page2.blade.php ENDPATH**/ ?>