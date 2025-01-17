<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Sampah - Login</title>
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

        <!-- Right Panel - Login Form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-6 sm:p-8">
            <div class="w-full max-w-lg">
                <!-- Mobile Logo -->
                <div class="text-center mb-8 lg:hidden">
                    <img src="{{ asset('images/placeholder.svg') }}" 
                         alt="Bank Sampah Logo" 
                         class="h-20 mx-auto mb-4 animate-float">
                </div>

                <!-- Login Card -->
                <div class="bg-white/80 backdrop-blur-lg p-8 rounded-2xl shadow-xl border border-white/20">
                    <h3 class="text-2xl font-bold text-center text-gray-800 mb-8">
                        Masuk ke Akun Anda
                    </h3>
                    
                    <!-- Flash Message -->
                    @if (session('status'))
                        <div class="alert alert-success text-green-500 bg-green-100 p-4 rounded-md mb-4">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}" class="space-y-6">
                        @csrf
                        
                        <!-- Email Address -->
                        <div class="space-y-2">
                            <label for="email" class="text-sm font-medium text-gray-700">
                                Email
                            </label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                              d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                    </svg>
                                </span>
                                <input
                                    id="email"
                                    type="email"
                                    name="email"
                                    class="w-full pl-10 pr-4 py-3 rounded-xl border border-gray-300 focus:outline-none focus:border-teal-500 focus:ring-2 focus:ring-teal-500/20 transition-all duration-200"
                                    value="{{ old('email') }}"
                                    required
                                    autocomplete="username"
                                >
                            </div>
                            @error('email')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="space-y-2">
                            <label for="password" class="text-sm font-medium text-gray-700">
                                Password
                            </label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                              d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                </span>
                                <input
                                    id="password"
                                    type="password"
                                    name="password"
                                    class="w-full pl-10 pr-12 py-3 rounded-xl border border-gray-300 focus:outline-none focus:border-teal-500 focus:ring-2 focus:ring-teal-500/20 transition-all duration-200"
                                    required
                                    autocomplete="current-password"
                                >
                                <!-- Password Toggle Button -->
                                <button 
                                    type="button"
                                    onclick="togglePassword()"
                                    class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-500 hover:text-gray-700 cursor-pointer"
                                >
                                    <!-- Eye Icon (Visible) -->
                                    <svg id="eye-show" class="w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                    <!-- Eye Icon (Hidden) -->
                                    <svg id="eye-hide" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                                    </svg>
                                </button>
                            </div>
                            @error('password')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Remember Me & Forgot Password -->
                        <div class="flex items-center justify-between">
                            <label for="remember_me" class="inline-flex items-center">
                                <input
                                    id="remember_me"
                                    type="checkbox"
                                    name="remember"
                                    class="rounded-md border-gray-300 text-teal-600 focus:ring-teal-500"
                                >
                                <span class="ml-2 text-sm text-gray-600">Remember me</span>
                            </label>

                            @if (Route::has('password.request'))
                                <a class="text-sm text-teal-600 hover:text-teal-700 transition-colors duration-200" 
                                   href="{{ route('password.request') }}">
                                    Forgot your password?
                                </a>
                            @endif
                        </div>

                        <!-- Login Button -->
                        <button
                            type="submit"
                            class="w-full bg-gradient-to-r from-teal-500 to-emerald-600 text-white py-6 rounded-xl hover:opacity-90 transition-all duration-200 transform hover:scale-[0.99] active:scale-[0.97] font-medium shadow-lg shadow-teal-500/25"
                        >
                            Log in
                        </button>

                        <!-- Register Link -->
                        <div class="text-center">
                            <span class="text-gray-600">Belum punya akun?</span>
                            <a href="{{ route('register') }}" 
                               class="ml-1 text-teal-600 hover:text-teal-700 font-medium transition-colors duration-200">
                                Daftar sekarang
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Password Toggle Script -->
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeShow = document.getElementById('eye-show');
            const eyeHide = document.getElementById('eye-hide');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeShow.classList.remove('hidden');
                eyeHide.classList.add('hidden');
            } else {
                passwordInput.type = 'password';
                eyeShow.classList.add('hidden');
                eyeHide.classList.remove('hidden');
            }
        }
    </script>
</body>
</html>