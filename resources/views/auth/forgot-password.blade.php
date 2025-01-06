<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Sampah - Forgot Password</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        .backdrop-blur-lg {
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
        }
    </style>
</head>
<body>
    <div class="min-h-screen flex bg-gradient-to-br from-gray-50 to-gray-100">
        <!-- Left Panel - Decorative -->
        <div class="hidden lg:flex lg:w-1/2 bg-gradient-to-br from-teal-500 to-emerald-600 items-center justify-center relative overflow-hidden">
            <!-- Decorative circles -->
            <div class="absolute top-0 left-0 w-96 h-96 bg-white/10 rounded-full -translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-white/10 rounded-full translate-x-1/2 translate-y-1/2"></div>
            
            <div class="max-w-2xl px-8 text-white text-center relative z-10">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/hero-illustration.svg') }}" 
                        alt="Bank Sampah Illustration" 
                        class="w-full max-w-md mx-auto mb-8 animate-float">
                </a>
                <h2 class="text-4xl font-bold mb-6 leading-tight">
                    Selamat Datang di Bank Sampah
                </h2>
                <p class="text-xl text-white/90 leading-relaxed">
                    Ubah sampahmu menjadi berkah dan jadilah bagian dari solusi lingkungan yang lebih baik.
                </p>
            </div>
        </div>

        <!-- Right Panel - Forgot Password Form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-6 sm:p-8">
            <div class="w-full max-w-lg">
                <!-- Mobile Logo -->
                <div class="text-center mb-8 lg:hidden">
                    <img src="{{ asset('images/placeholder.svg') }}" 
                         alt="Bank Sampah Logo" 
                         class="h-20 mx-auto mb-4 animate-float">
                </div>

                <!-- Forgot Password Card -->
                <div class="bg-white/80 backdrop-blur-lg p-8 rounded-2xl shadow-xl border border-white/20">
                    <h3 class="text-2xl font-bold text-center text-gray-800 mb-8">
                        Lupa Password
                    </h3>

                    <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
                        @csrf
                        
                        <!-- Email Address -->
                        <div class="space-y-2">
                            <label for="email" class="text-sm font-medium text-gray-700">
                                Email
                            </label>
                            <input
                                id="email"
                                type="email"
                                name="email"
                                class="w-full pl-4 pr-4 py-3 rounded-xl border border-gray-300 focus:outline-none focus:border-teal-500 focus:ring-2 focus:ring-teal-500/20 transition-all duration-200"
                                value="{{ old('email') }}"
                                required
                                autofocus
                            >
                            @error('email')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Reset Password Button -->
                        <button
                            type="submit"
                            class="w-full bg-gradient-to-r from-teal-500 to-emerald-600 text-white py-6 rounded-xl hover:opacity-90 transition-all duration-200 transform hover:scale-[0.99] active:scale-[0.97] font-medium shadow-lg shadow-teal-500/25"
                        >
                            Kirim Tautan Reset Password
                        </button>

                        <!-- Back to Login Link -->
                        <div class="text-center">
                            <span class="text-gray-600">Ingat password?</span>
                            <a href="{{ route('login') }}" 
                               class="ml-1 text-teal-600 hover:text-teal-700 font-medium transition-colors duration-200">
                                Masuk sekarang
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>