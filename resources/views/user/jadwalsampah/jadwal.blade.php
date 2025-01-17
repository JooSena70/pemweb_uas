<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Harian Setoran Sampah</title>
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
        .schedule-card {
            transition: all 0.3s ease;
        }
        .schedule-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
    </style>
</head>
<body class="font-sans antialiased bg-gray-50">
    <!-- Include your header navigation here -->
    @include('layouts.navigation')
    <!-- Main Content -->
    <section class="pt-32 pb-20">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold text-center mb-6" data-aos="fade-up">JADWAL HARIAN SETORAN SAMPAH</h1>
            <p class="text-gray-600 text-center mb-12 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Berikut merupakan jenis sampah yang dapat disetorkan berdasarkan harinya. Jadwal penyerahan dapat dilakukan pada hari-hari sesuai dengan keterangan di bawah.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Senin -->
                <div class="schedule-card gradient-card p-6 rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-12 h-12 gradient-primary rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-calendar-day text-white text-xl"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-center mb-4 text-gray-800">SENIN</h2>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center"><i class="fas fa-check text-teal-500 mr-2"></i>Sampah Hasil Masak</li>
                        <li class="flex items-center"><i class="fas fa-check text-teal-500 mr-2"></i>Dedauan</li>
                        <li class="flex items-center"><i class="fas fa-check text-teal-500 mr-2"></i>Kresek</li>
                        <li class="flex items-center"><i class="fas fa-check text-teal-500 mr-2"></i>Plastik</li>
                    </ul>
                </div>
                <!-- Selasa -->
                <div class="schedule-card gradient-card p-6 rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-12 h-12 gradient-primary rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-calendar-day text-white text-xl"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-center mb-4 text-gray-800">SELASA</h2>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center"><i class="fas fa-check text-teal-500 mr-2"></i>Sampah Hasil Masak</li>
                        <li class="flex items-center"><i class="fas fa-check text-teal-500 mr-2"></i>Botol Mineral Plastik</li>
                        <li class="flex items-center"><i class="fas fa-check text-teal-500 mr-2"></i>Botol Mineral Kaca</li>
                        <li class="flex items-center"><i class="fas fa-check text-teal-500 mr-2"></i>Sepatu/Sandal</li>
                    </ul>
                </div>
                <!-- Rabu -->
                <div class="schedule-card gradient-card p-6 rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-12 h-12 gradient-primary rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-calendar-day text-white text-xl"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-center mb-4 text-gray-800">RABU</h2>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center"><i class="fas fa-check text-teal-500 mr-2"></i>Sampah Hasil Masak</li>
                        <li class="flex items-center"><i class="fas fa-check text-teal-500 mr-2"></i>Dedauan</li>
                        <li class="flex items-center"><i class="fas fa-check text-teal-500 mr-2"></i>Gelas Mineral Plastik</li>
                        <li class="flex items-center"><i class="fas fa-check text-teal-500 mr-2"></i>Karah Warna</li>
                    </ul>
                </div>
                <!-- Kamis -->
                <div class="schedule-card gradient-card p-6 rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-12 h-12 gradient-primary rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-calendar-day text-white text-xl"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-center mb-4 text-gray-800">KAMIS</h2>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center"><i class="fas fa-check text-teal-500 mr-2"></i>Sampah Hasil Masak</li>
                        <li class="flex items-center"><i class="fas fa-check text-teal-500 mr-2"></i>Keleng</li>
                        <li class="flex items-center"><i class="fas fa-check text-teal-500 mr-2"></i>Kardus/Karton</li>
                        <li class="flex items-center"><i class="fas fa-check text-teal-500 mr-2"></i>Kain</li>
                    </ul>
                </div>
                <!-- Jumat -->
                <div class="schedule-card gradient-card p-6 rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="500">
                    <div class="w-12 h-12 gradient-primary rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-calendar-day text-white text-xl"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-center mb-4 text-gray-800">JUMAT</h2>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center"><i class="fas fa-check text-teal-500 mr-2"></i>Sampah Hasil Masak</li>
                        <li class="flex items-center"><i class="fas fa-check text-teal-500 mr-2"></i>Dedauan</li>
                        <li class="flex items-center"><i class="fas fa-check text-teal-500 mr-2"></i>Besi</li>
                        <li class="flex items-center"><i class="fas fa-check text-teal-500 mr-2"></i>Baja</li>
                    </ul>
                </div>
                <!-- Sabtu -->
                <div class="schedule-card gradient-card p-6 rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="600">
                    <div class="w-12 h-12 gradient-primary rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-calendar-day text-white text-xl"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-center mb-4 text-gray-800">SABTU</h2>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center"><i class="fas fa-check text-teal-500 mr-2"></i>Sampah Hasil Masak</li>
                        <li class="flex items-center"><i class="fas fa-check text-teal-500 mr-2"></i>Zeng</li>
                        <li class="flex items-center"><i class="fas fa-check text-teal-500 mr-2"></i>Aluminium</li>
                        <li class="flex items-center"><i class="fas fa-check text-teal-500 mr-2"></i>Tembaga</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Include your footer here -->
    @include('layouts.footer')
    <script>
        AOS.init({
            duration: 1000,
            once: true,
        });
    </script>
</body>
</html>