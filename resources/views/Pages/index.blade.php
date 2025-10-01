@extends('layouts.app') 

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="bg-white rounded-lg shadow-xl p-8 mb-8 text-center" style="background-image: url('https://via.placeholder.com/1200x400'); background-size: cover; background-position: center;">
        <h1 class="text-4xl font-extrabold text-white mb-4 shadow-lg" style="text-shadow: 2px 2px 4px #000;">اكتشف أحدث المسلسلات التركية</h1>
        <p class="text-lg text-white mb-6 shadow-lg" style="text-shadow: 1px 1px 2px #000;">شاهد حلقاتك المفضلة بجودة عالية ومترجمة.</p>
        <a href="#" class="inline-block bg-red-600 text-white font-bold py-3 px-8 rounded-full hover:bg-red-700 transition duration-300">بدء المشاهدة</a>
    </div>

    <h2 class="text-3xl font-bold text-gray-800 mb-6 border-b-2 border-red-500 pb-2">أحدث المسلسلات المضافة</h2>

    @if(count($series) > 0)
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">
            @foreach ($series as $item)
                <a href="{{ route('series.show', $item->slug) }}" class="block bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                    <img src="{{ $item->poster_url ?: 'https://via.placeholder.com/400x600?text=Poster' }}" 
                         alt="{{ $item->title }}" 
                         class="w-full h-auto object-cover aspect-[2/3]">

                    <div class="p-3 text-center">
                        <h3 class="text-base font-semibold text-gray-900 truncate">{{ $item->title }}</h3>
                        <p class="text-sm text-gray-500">{{ $item->release_year }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    @else
        <p class="text-center text-gray-600 p-10">لا يوجد مسلسلات لعرضها حالياً. الرجاء إضافة مسلسلات جديدة من لوحة التحكم.</p>
    @endif

</div>
@endsection