<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'CampGo Admin')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: #f5f7f6;
        }

        /* SIDEBAR */
        .sidebar {
            width: 260px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: linear-gradient(180deg, #1f7a4d, #145c39);
            color: white;
            padding: 20px;
            transition: 0.3s;
            overflow: hidden;
        }

        .sidebar.collapsed {
            width: 80px;
        }

        .sidebar-brand {
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 30px;
        }

        .text-label {
            transition: 0.2s;
        }

        .sidebar.collapsed .text-label {
            display: none;
        }

        .nav-link-custom {
            display: flex;
            align-items: center;
            gap: 10px;
            color: white;
            text-decoration: none;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 6px;
            transition: 0.2s;
        }

        .nav-link-custom:hover {
            background: rgba(255,255,255,0.15);
        }

        .nav-link-custom.active {
            background: rgba(255,255,255,0.25);
        }

        /* CONTENT */
        .content {
            margin-left: 260px;
            padding: 20px;
            transition: 0.3s;
        }

        .content.expanded {
            margin-left: 80px;
        }

        /* TOP NAVBAR */
        .topbar {
            background: white;
            padding: 12px 20px;
            border-radius: 12px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .toggle-btn {
            cursor: pointer;
            font-size: 22px;
            color: #1f7a4d;
        }

        .user-dropdown {
            cursor: pointer;
        }
    </style>

</head>

<body>

<!-- SIDEBAR -->
<div id="sidebar" class="sidebar">

    <div class="sidebar-brand">
        🌲 <span class="text-label">CampGo</span>
    </div>

    <a href="{{ route('dashboard') ?? '#' }}"
       class="nav-link-custom {{ request()->routeIs('dashboard') ? 'active' : '' }}">
        <i class="bi bi-speedometer2"></i>
        <span class="text-label">Dashboard</span>
    </a>

    <a href="{{ route('destinasi.index') }}"
       class="nav-link-custom {{ request()->routeIs('destinasi.*') ? 'active' : '' }}">
        <i class="bi bi-pin-map"></i>
        <span class="text-label">Destinasi</span>
    </a>

    <hr>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button class="btn btn-danger w-100">
            <i class="bi bi-box-arrow-right"></i>
            <span class="text-label">Logout</span>
        </button>
    </form>

</div>

<!-- CONTENT -->
<div id="content" class="content">

    <!-- TOPBAR -->
    <div class="topbar">

        <!-- LEFT -->
        <div class="d-flex align-items-center gap-3">

            <div class="toggle-btn" onclick="toggleSidebar()">
                <i class="bi bi-list"></i>
            </div>

            {{-- <h5 class="mb-0">@yield('title', 'Dashboard')</h5> --}}

        </div>

        <!-- RIGHT USER DROPDOWN -->
        <div class="dropdown">

            <div class="d-flex align-items-center gap-2 user-dropdown" data-bs-toggle="dropdown">
                <i class="bi bi-person-circle fs-4 text-success"></i>
                <span class="fw-semibold">Admin</span>
                <i class="bi bi-chevron-down"></i>
            </div>

            <ul class="dropdown-menu dropdown-menu-end shadow">


                <li><hr class="dropdown-divider"></li>

                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="dropdown-item text-danger">
                            <i class="bi bi-box-arrow-right me-2"></i> Logout
                        </button>
                    </form>
                </li>

            </ul>

        </div>

    </div>

    @yield('content')

</div>

<!-- BOOTSTRAP JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- SIDEBAR TOGGLE -->
<script>
    function toggleSidebar() {
        document.getElementById('sidebar').classList.toggle('collapsed');
        document.getElementById('content').classList.toggle('expanded');
    }
</script>

</body>
</html>