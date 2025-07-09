{{-- resources/views/auth/login.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Inspo</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        .gradient-bg {
            background: linear-gradient(180deg, #B2FFE3 0%, #FFE0FF 100%);
        }
        .input-custom {
            height: 48px; 
            font-size: 16px; 
        }
        .btn-custom {
            height: 48px; 
            font-size: 16px; 
            background-color: #19B999; 
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen flex items-center justify-center p-6">
        <div class="max-w-6xl w-full flex rounded-2xl shadow-lg bg-white overflow-hidden">

            <!-- Left Side - Illustration -->
            <div class="w-1/2 gradient-bg p-8 hidden md:block">
                <div class="h-full flex items-center justify-center">
                    <img src="{{ asset('images/inspo.svg') }}" alt="Coffee Shop Illustration" class="w-full max-w-md">
                </div>
            </div>

            <!-- Right Side - Login Form -->
            <div class="w-full md:w-1/2 p-8 md:p-12">
                <div class="mb-8">
                    <div class="flex items-center gap-2 mb-6">
                        <img src="{{ asset('images/logo-inspo.svg') }}" alt="Optima Logo" class="h-8 ml-48">
                    </div>
                    <h2 class="text-gray-500">Welcome back!</h2>
                </div>
                @if (Session::has('success'))
                <div class="alert alert-success bg-green-400 text-white p-4 rounded mb-4">{{ Session::get('success') }}</div>   
                @endif
                @if (Session::has('error'))
                <div class="alert alert-danger bg-red-400 text-white p-4 rounded mb-4">{{ Session::get('error') }}</div>   
                @endif
                
                <form action="{{ route('admin.authenticate') }}" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email*</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
                            </div>
                            <input type="email" name="email" id="email" 
                                class="input-custom pl-10 block w-full rounded-md border-gray-300 shadow-sm focus:border-teal-500 focus:ring-teal-500"
                                value="{{ old('email') }}" required>
                        </div>
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password*</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="password" name="password" id="password" 
                                class="input-custom pl-10 block w-full rounded-md border-gray-300 shadow-sm focus:border-teal-500 focus:ring-teal-500"
                                required>
                            <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                </svg>
                            </button>

                        </div>
                        @error('password')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input type="checkbox" name="remember" id="remember" 
                                class="h-4 w-4 text-teal-500 focus:ring-teal-500 border-gray-300 rounded">
                            <label for="remember" class="ml-2 block text-sm text-gray-700">Remember me</label>
                        </div>
                        <a href="" class="text-sm text-teal-500 hover:text-teal-600">
                            Forgot Password?
                        </a>
                    </div>

                    <button type="submit" 
                        class="btn-custom w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500">
                        Login
                    </button>

                    <div class="text-center mt-6">
                        <p class="text-sm text-gray-600">
                            Don't have an account? 
                            <a href="{{ route('account.register') }}" class="font-medium text-teal-500 hover:text-teal-600">
                                Register
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
