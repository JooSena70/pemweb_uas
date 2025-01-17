<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6;
            color: #1f2937;
        }

        .header {
            background: linear-gradient(90deg, #22b2a6, #20c997);
            color: white;
            padding: 1rem;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 100;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .header-left {
            display: flex;
            align-items: center;
        }

        .menu-toggle {
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            margin-right: 1rem;
        }

        .user-profile {
            position: relative;
            cursor: pointer;
        }

        .profile-button {
            background: none;
            border: none;
            color: white;
            padding: 0.5rem 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            border-radius: 9999px;
            transition: background-color 0.3s ease;
        }

        .profile-button:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .dropdown-menu {
            position: absolute;
            right: 0;
            top: calc(100% + 0.5rem);
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            display: none;
            width: 200px;
        }

        .dropdown-menu.active {
            display: block;
        }

        .dropdown-menu a {
            color: #374151;
            padding: 0.75rem 1rem;
            text-decoration: none;
            display: block;
            transition: background-color 0.2s ease;
        }

        .dropdown-menu a:hover {
            background-color: #f3f4f6;
        }

        .sidebar {
            background: linear-gradient(180deg, #34495e, #2c3e50);
            color: white;
            width: 260px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: -260px;
            padding-top: 80px;
            transition: left 0.3s ease;
            box-shadow: 2px 0 6px rgba(0, 0, 0, 0.1);
        }

        .sidebar.active {
            left: 0;
        }

        .sidebar-menu {
            list-style: none;
            padding: 1rem;
        }

        .sidebar-menu li {
            margin-bottom: 1rem;
        }

        .sidebar-menu a {
            color: white;
            background-color: rgba(255, 255, 255, 0.1);
            text-decoration: none;
            display: block;
            padding: 0.75rem 1.25rem;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
        }

        .sidebar-menu a:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: translateX(5px);
        }

        .main-content {
            margin-left: 0;
            padding: 6rem 1rem 2rem;
            transition: margin-left 0.3s ease;
        }

        .main-content.active {
            margin-left: 260px;
        }

        @media (max-width: 768px) {
            .main-content.active {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="header-left">
            <button class="menu-toggle" onclick="toggleSidebar()">☰</button>
            <span class="font-bold">Admin Dashboard</span>
        </div>

        <div class="user-profile">
            <button onclick="toggleDropdown()" class="profile-button">
                {{ Auth::user()->name }}
                ▼
            </button>
            <div class="dropdown-menu" id="userDropdown">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                       this.closest('form').submit();">
                        Log Out
                    </a>
                </form>
            </div>
        </div>
    </header>

    <nav class="sidebar" id="sidebar">
        <ul class="sidebar-menu">
            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('profile.edit') }}">Profile</a></li>
            <li><a href="{{ route('admin.usermanagement.index') }}">User Management</a></li>
            <li><a href="{{ route('admin.informasisampah.index') }}">Informasi Sampah</a></li>
            <li><a href="{{ route('admin.riwayattranksasi.index') }}">Riwayat Transaksi</a></li>
        </ul>
    </nav>

    <main class="main-content" id="main-content">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-700">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('main-content');
            sidebar.classList.toggle('active');
            mainContent.classList.toggle('active');
        }

        function toggleDropdown() {
            const dropdown = document.getElementById('userDropdown');
            dropdown.classList.toggle('active');
        }

        window.onclick = function(event) {
            if (!event.target.matches('.profile-button')) {
                const dropdowns = document.getElementsByClassName('dropdown-menu');
                for (let dropdown of dropdowns) {
                    if (dropdown.classList.contains('active')) {
                        dropdown.classList.remove('active');
                    }
                }
            }
        };
    </script>
</body>
</html>
