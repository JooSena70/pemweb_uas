<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Sampah - Solusi Sampah Modern</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    @vite('resources/css/app.css')
    <style>
        .gradient-primary {
            background: linear-gradient(90deg, #20B2AA 0%, #3CB371 100%);
        }
        .gradient-card {
            background: linear-gradient(225deg, rgba(255,255,255,0.9) 0%, rgba(255,255,255,0.7) 100%);
            backdrop-filter: blur(10px);
        }
        .nav-link {
            position: relative;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background-color: white;
            transition: width 0.3s ease;
        }
        .nav-link:hover::after {
            width: 100%;
        }
        .service-card {
            transition: all 0.3s ease;
        }
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
    </style>
</head>
<body class="font-sans antialiased bg-gray-50">
    <!-- Navigation -->
    <header class="gradient-primary text-white fixed w-full z-50">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <a href="{{ url('/') }}" class="flex items-center space-x-2">
                    <i class="fas fa-recycle text-2xl"></i>
                    <h1 class="text-2xl font-bold">Bank Sampah</h1>
                </a>
                <!-- Navigation Links -->
                <nav class="hidden md:flex space-x-8">
                    <a href="#tentang" class="nav-link">Tentang Kami</a>
                    <a href="#layanan" class="nav-link">Layanan</a>
                    <a href="#lokasi" class="nav-link">Lokasi</a>
                    <a href="#hubungi" class="nav-link">Kontak</a>
                </nav>
<!-- Auth Buttons -->
<div class="flex space-x-4">
    @auth
        <div class="relative">
            <button 
                onclick="toggleDropdown()"
                class="flex items-center space-x-2 bg-white text-teal-600 px-6 py-2 rounded-full hover:bg-gray-100 transition duration-300">
                <span>{{ Auth::user()->name }}</span>
                <i class="fas fa-chevron-down text-sm"></i>
            </button>
            <!-- Dropdown Menu -->
            <div id="userDropdown" class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 hidden">
                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Profile</a>
                <form method="POST" action="{{ route('logout') }}" class="block">
                    @csrf
                    <button type="submit" class="w-full text-left px-4 py-2 text-gray-800 hover:bg-gray-100">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    @else
        <a href="{{ route('register') }}" class="bg-white text-teal-600 px-6 py-2 rounded-full hover:bg-gray-100 transition duration-300">Daftar</a>
        <a href="{{ route('login') }}" class="border-2 border-white text-white px-6 py-2 rounded-full hover:bg-white hover:text-teal-600 transition duration-300">Masuk</a>
    @endauth
</div>

<script>
    function toggleDropdown() {
        const dropdown = document.getElementById('userDropdown');
        dropdown.classList.toggle('hidden');
    }
</script>
            </div>
        </div>
    </header>
    <!-- Hero Section -->
    <section class="pt-32 pb-20 gradient-primary text-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="md:w-1/2" data-aos="fade-right">
                    <h2 class="text-5xl font-bold mb-6">Ubah Sampah Jadi Berkah</h2>
                    <p class="text-xl mb-8 opacity-90">Bergabung dengan Bank Sampah dan jadilah bagian dari solusi untuk lingkungan yang lebih baik.</p>
                    <div class="flex space-x-4">
                        <a href="#layanan" class="bg-white text-teal-600 px-8 py-3 rounded-full hover:bg-gray-100 transition duration-300">Mulai Sekarang</a>
                        <a href="#tentang" class="border-2 border-white px-8 py-3 rounded-full hover:bg-white hover:text-teal-600 transition duration-300">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
                <div class="md:w-1/2 mt-10 md:mt-0" data-aos="fade-left">
                    <img src="{{ asset('images/hero-illustration.svg') }}" alt="Hero Illustration" class="w-full">
                </div>
            </div>
        </div>
    </section>
    <!-- Tentang Section -->
    <section id="tentang" class="py-20 bg-gray-100">
        <div class="container mx-auto px-4">
            <h3 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">Tentang Kami</h3>
            <div class="md:flex md:space-x-8">
                <div class="md:w-1/2" data-aos="fade-right">
                    <img src="{{ asset('images/hero-illustration.svg') }}" alt="Tentang Kami" class="w-full rounded-lg shadow-lg">
                </div>
                <div class="md:w-1/2 mt-8 md:mt-0" data-aos="fade-left">
                    <p class="text-lg text-gray-700 mb-6">Bank Sampah adalah inisiatif yang bertujuan untuk mengubah sampah menjadi sumber daya yang berharga. Kami menyediakan solusi pengelolaan sampah yang ramah lingkungan dan dapat memberikan manfaat langsung kepada masyarakat.</p>
                    <p class="text-lg text-gray-700">Dengan sistem yang mudah diakses, Anda dapat menukar sampah yang telah dipilah dengan berbagai keuntungan, serta berkontribusi pada pengurangan dampak lingkungan. Kami juga menawarkan layanan edukasi untuk meningkatkan kesadaran masyarakat tentang pentingnya pengelolaan sampah secara bertanggung jawab.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Layanan Section -->
    <section id="layanan" class="py-20">
        <div class="container mx-auto px-4">
            <h3 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">Layanan Kami</h3>
            <div class="grid md:grid-cols-3 lg:grid-cols-5 gap-8">
                <!-- Card 1 -->
                 @guest
                <a href="{{ route('login') }}" class="service-card gradient-card p-6 rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 gradient-primary rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-wallet text-white text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-4">Tukar Sampah</h4>
                </a>
                @else 
                <a href={{ route('login') }} class="service-card gradient-card p-6 rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 gradient-primary rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-wallet text-white text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-4">Tukar Sampah</h4>
                </a>
                @endguest

                <!-- Card 2 -->
                 @guest
                <a href="{{ route('login') }}" class="service-card gradient-card p-6 rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 gradient-primary rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-list text-white text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-4">Riwayat Penukaran</h4>
                </a>
                @else
                <a href="{{ route('login') }}" class="service-card gradient-card p-6 rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 gradient-primary rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-list text-white text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-4">Riwayat Penukaran</h4>
                </a>
                @endguest
                
                <!-- Card 3 -->
                @guest
                <a href="{{ route('login') }}" class="service-card gradient-card p-6 rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 gradient-primary rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-calendar text-white text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-4">Jadwal Pengambilan Sampah</h4>
                </a>
                @else
                <a href="{{ route('jadwal') }}" class="service-card gradient-card p-6 rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 gradient-primary rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-calendar text-white text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-4">Jadwal Pengambilan Sampah</h4>
                </a>
                @endguest

                <!-- Card 4 -->
                 @guest
                <a href="{{ route('login') }}" class="service-card gradient-card p-6 rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="500">
                    <div class="w-16 h-16 gradient-primary rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-lightbulb text-white text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-4">Edukasi dan Tips</h4>
                </a>
                @else
                <a href="{{ route('login') }}" class="service-card gradient-card p-6 rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="500">
                    <div class="w-16 h-16 gradient-primary rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-lightbulb text-white text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-4">Edukasi dan Tips</h4>
                </a>
                @endguest
            </div>
        </div>
    </section>
    <!-- Lokasi Section -->
    <section id="lokasi" class="py-20 bg-gray-100">
        <div class="container mx-auto px-4">
            <h3 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">Lokasi Kami</h3>
            <div class="gradient-card rounded-xl overflow-hidden shadow-lg" data-aos="zoom-in">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2!2d106.8!3d-6.2!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTInMDAuMCJTIDEwNsKwNDgnMDAuMCJF!5e0!3m2!1sen!2sid!4v1234567890"
                    width="100%" 
                    height="450" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </section>
    <!-- Kontak Section -->
    <section id="hubungi" class="py-20">
        <div class="container mx-auto px-4">
            <h3 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">Hubungi Kami</h3>
            <div class="max-w-2xl mx-auto">
                <form action="{{ route('login') }}" method="GET" class="gradient-card p-8 rounded-xl shadow-lg" data-aos="fade-up">
                    <div class="mb-6">
                        <label class="block text-gray-700 mb-2" for="name">Nama Lengkap</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-teal-500" required>
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 mb-2" for="email">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-teal-500" required>
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 mb-2" for="message">Pesan</label>
                        <textarea id="message" name="message" rows="5" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-teal-500" required></textarea>
                    </div>
                    <button type="submit" class="w-full gradient-primary text-white py-3 rounded-lg hover:opacity-90 transition duration-300">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </section>

    
    <!-- Footer -->
    <footer class="gradient-primary text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h4 class="text-xl font-bold mb-4">Bank Sampah</h4>
                    <p class="opacity-80">Solusi modern untuk pengelolaan sampah yang berkelanjutan.</p>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-4">Tautan</h4>
                    <ul class="space-y-2 opacity-80">
                        <li><a href="#tentang" class="hover:text-gray-300">Tentang Kami</a></li>
                        <li><a href="#layanan" class="hover:text-gray-300">Layanan</a></li>
                        <li><a href="#lokasi" class="hover:text-gray-300">Lokasi</a></li>
                        <li><a href="#hubungi" class="hover:text-gray-300">Kontak</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-4">Kontak</h4>
                    <ul class="space-y-2 opacity-80">
                        <li><i class="fas fa-phone mr-2"></i> +62 123 4567 890</li>
                        <li><i class="fas fa-envelope mr-2"></i> info@banksampah.com</li>
                        <li><i class="fas fa-map-marker-alt mr-2"></i> Jl. Contoh No. 123</li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-4">Sosial Media</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="hover:text-gray-300"><i class="fab fa-facebook text-2xl"></i></a>
                        <a href="#" class="hover:text-gray-300"><i class="fab fa-twitter text-2xl"></i></a>
                        <a href="#" class="hover:text-gray-300"><i class="fab fa-instagram text-2xl"></i></a>
                        <a href="#" class="hover:text-gray-300"><i class="fab fa-youtube text-2xl"></i></a>
                    </div>
                </div>
            </div>
            <div class="border-t border-white/20 pt-8 text-center opacity-80">
                <p>&copy; {{ date('Y') }} Bank Sampah. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
        });
    </script>
</body>
</html>