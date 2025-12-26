<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body>

<div class="form-box login-box">

    <h1 class="main-title">LOGIN</h1>

    <?php if(session('error')): ?>
        <p style="color:red; text-align:center; margin-bottom:15px;">
            <?php echo e(session('error')); ?>

        </p>
    <?php endif; ?>

    <form method="POST" action="/login">
        <?php echo csrf_field(); ?>
        <input type="text" name="phone" placeholder="Phone Number" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>

</div>


</body>
</html>
<?php /**PATH C:\laragons\www\mvcdemo\demo\resources\views/login.blade.php ENDPATH**/ ?>