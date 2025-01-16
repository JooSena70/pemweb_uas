<!-- resources/views/admin/dashboard.blade.php -->
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
            font-family: Arial, sans-serif;
        }

        .header {
            background-color: #22b2a6;
            color: white;
            padding: 1rem;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 100;
            display: flex;
            justify-content: space-between;
            align-items: center;
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
            padding: 0.5rem;
            margin-right: 1rem;
        }

        /* User Profile Dropdown */
        .user-profile {
            position: relative;
            cursor: pointer;
        }

        .profile-button {
            background: none;
            border: none;
            color: white;
            padding: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .dropdown-menu {
            position: absolute;
            right: 0;
            top: 100%;
            background-color: white;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            min-width: 200px;
            display: none;
        }

        .dropdown-menu.active {
            display: block;
        }

        .dropdown-menu a {
            color: #333;
            padding: 0.75rem 1rem;
            text-decoration: none;
            display: block;
        }

        .dropdown-menu a:hover {
            background-color: #f3f4f6;
        }

        .sidebar {
            background-color: #34495e;
            color: white;
            width: 240px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: -250px;
            padding-top: 80px;
            transition: all 0.3s ease;
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
            background-color: #22b2a6;
            text-decoration: none;
            display: block;
            padding: 0.75rem 1rem;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .sidebar-menu a:hover {
            background-color: #2c3e50;
            transform: translateX(5px);
        }

        .main-content {
            margin-left: 0;
            padding: 5rem 1rem 1rem;
            transition: all 0.3s ease;
        }

        .main-content.active {
            margin-left: 250px;
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
            <span>User Dashboard</span>
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
            <li><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('profile.edit') }}">Profile</a></li>
            <li><a href="{{ route('admin.usermanagement.index') }}">Riwayat Tranksasi</a></li>
            <li><a href="{{ route('user.setorsampah.index') }}">Setor Sampah</a></li>
        </ul>
    </nav>

    <main class="main-content" id="main-content">
        <!-- Header section seperti di Breeze -->
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
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

        // Menutup dropdown saat mengklik di luar
        window.onclick = function(event) {
            if (!event.target.matches('.profile-button')) {
                const dropdowns = document.getElementsByClassName('dropdown-menu');
                for (let dropdown of dropdowns) {
                    if (dropdown.classList.contains('active')) {
                        dropdown.classList.remove('active');
                    }
                }
            }
        }
    </script>
</body>
</html>