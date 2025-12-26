<!DOCTYPE html>
<html>
<head>
    <title>User Form</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body>

<div class="form-box">

    <h1 class="main-title">CREATING USER ID</h1>
    <h2>User Details</h2>

<form method="POST" action="/add">
    <?php echo csrf_field(); ?>

    <input type="text" name="name" placeholder="Name">
    <input type="number" name="age" placeholder="Age" required>
    <input type="text" name="phone" placeholder="Phone Number" required>

    <select name="role" required>
        <option value="">Select Role</option>
        <option value="HR">HR</option>
        <option value="Developer">Developer</option>
        <option value="Tester">Tester</option>
        <option value="Manager">Manager</option>
        <option value="Other">Other</option>
    </select>

    <input type="password" name="password" placeholder="Password" required>

    <button type="submit">Save</button>
</form>


</div>

</body>
</html>
<?php /**PATH C:\laragons\www\mvcdemo\demo\resources\views/welcome.blade.php ENDPATH**/ ?>