<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - CampGo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            height: 100vh;
            margin: 0;
            background: url('assets/img/login.jpg') no-repeat center center/cover;
            font-family: 'Segoe UI', sans-serif;
        }

        .overlay {
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.55);
        }

        .login-card {
            background: rgba(255,255,255,0.93);
            backdrop-filter: blur(12px);
            border-radius: 18px;
            border: none;
        }

        .brand-title {
            color: #1f7a4d;
            font-weight: 700;
        }

        .btn-campgo {
            background: #1f7a4d;
            border: none;
            color: white;
            transition: .3s;
        }

        .btn-campgo:hover {
            background: #16603b;
        }

        label {
            font-size: 14px;
            font-weight: 600;
        }

        /* Demo Account */
        .demo-box{
            background:#f3fcf7;
            border:1px solid #cfeedd;
            border-radius:12px;
            padding:15px;
        }

        .demo-title{
            font-size:15px;
            font-weight:700;
            color:#1f7a4d;
            margin-bottom:10px;
        }

        .demo-item{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:8px;
            font-size:14px;
        }

        .demo-item:last-child{
            margin-bottom:0;
        }

        .demo-item code{
            background:#1f7a4d;
            color:white;
            padding:3px 10px;
            border-radius:6px;
            font-size:13px;
        }

        .form-control{
            border-radius:10px;
            padding:10px 14px;
        }

        .btn{
            border-radius:10px;
            font-weight:600;
        }

        a{
            font-size:14px;
        }
    </style>
</head>

<body>

<div class="overlay"></div>

<div class="container position-relative d-flex justify-content-center align-items-center" style="height:100vh;">

    <div class="col-lg-4 col-md-6">

        <div class="card shadow-lg p-4 login-card">

            <h2 class="text-center brand-title mb-1">
                🌲 CampGo
            </h2>

            <p class="text-center text-muted mb-4">
                Explore Nature. Book Camps Easily.
            </p>

            <!-- Demo Account -->
            <div class="demo-box mb-4">
                <div class="demo-title">
                    Demo Account
                </div>

                <div class="demo-item">
                    <span>Username</span>
                    <code>admin</code>
                </div>

                <div class="demo-item">
                    <span>Password</span>
                    <code>admin123</code>
                </div>
            </div>

            @if($errors->any())
                <div class="alert alert-danger py-2">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('login') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label>Username</label>
                    <input
                        type="text"
                        name="username"
                        class="form-control"
                        value="{{ old('username') }}"
                        placeholder="Enter your username"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label>Password</label>
                    <input
                        type="password"
                        name="password"
                        class="form-control"
                        placeholder="Enter your password"
                        required
                    >
                </div>

                <button type="submit" class="btn btn-campgo w-100 py-2">
                    Sign In
                </button>
            </form>

            <div class="text-center mt-4">
                <a href="{{ route('public.index') }}" class="text-decoration-none text-success fw-semibold">
                    ← Back to Home
                </a>
            </div>

        </div>

    </div>

</div>

</body>
</html>