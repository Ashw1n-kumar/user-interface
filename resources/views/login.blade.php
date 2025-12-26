<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<div class="form-box login-box">

    <h1 class="main-title">LOGIN</h1>

    @if(session('error'))
        <p style="color:red; text-align:center; margin-bottom:15px;">
            {{ session('error') }}
        </p>
    @endif

    <form method="POST" action="/login">
        @csrf
        <input type="text" name="phone" placeholder="Phone Number" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>

</div>


</body>
</html>
