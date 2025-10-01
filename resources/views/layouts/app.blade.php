<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <title>موقع المسلسلات التركية - كرمزي</title> -->
    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans antialiased">
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ url('/') }}" class="text-2xl font-bold text-red-600">
                        KR MZY
                    </a>
                </div>

                <div class="hidden sm:ml-6 sm:flex sm:space-x-8 sm:items-center">
                    <a href="{{ route('home') }}" class="text-gray-900 hover:text-red-600 px-3 py-2 rounded-md text-sm font-medium">الرئيسية</a>
                    <a href="#" class="text-gray-500 hover:text-red-600 px-3 py-2 rounded-md text-sm font-medium">الأفلام</a>
                    <a href="#" class="text-gray-500 hover:text-red-600 px-3 py-2 rounded-md text-sm font-medium">التصنيفات</a>
                    
                    @auth
                        <a href="{{ route('dashboard') }}" class="text-gray-500 hover:text-red-600 px-3 py-2 rounded-md text-sm font-medium">لوحة التحكم</a>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-500 hover:text-red-600 px-3 py-2 rounded-md text-sm font-medium">دخول</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
    
    <main class="py-6">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white p-4 mt-8">
        <div class="max-w-7xl mx-auto text-center text-sm">
            &copy; {{ date('Y') }} موقع المسلسلات التركية. جميع الحقوق محفوظة.
        </div>
    </footer>
</body>
</html>