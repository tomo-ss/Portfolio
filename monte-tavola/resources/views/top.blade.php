@extends('layouts.app')

@section('title', 'Monte Tavola - トップページ')
@section('description', '自然に囲まれた隠れ家レストラン Monte Tavola の公式サイトです。')
@section('body_class', 'top-page')

@section('content')
    {{-- About Usセクション --}}
    <section id="about" class="bg-[#EFF1F5] py-16 px-6">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-2xl md:text-3xl font-bold text-[#233758] mb-4">About Us</h2>
            <p class="text-lg text-gray-700 font-semibold mb-6">私たちについて</p>

            <p class="text-gray-700 leading-relaxed mb-4">
                長野県の山あいにひっそりと佇む、夫婦で営む小さなイタリアンレストラン。<br>
                澄んだ空気、木々のざわめき、季節のうつろい——そんな自然の豊かさに包まれながら、<br>
                肩ひじ張らずに楽しめるカジュアルなイタリアンをご提供しています。
            </p>

            <p class="text-gray-700 leading-relaxed mb-4">
                私たちが目指すのは、日常からふっと離れて、心がほどけるようなひととき。<br>
                地元の食材を活かした料理と、温かみのある空間で、<br>
                訪れる方が「また帰ってきたくなる場所」になれたら嬉しいです。
            </p>

            <p class="text-gray-700 leading-relaxed mb-6">
                自然とともに、静かに、親しみ深く。<br>
                ここでしか味わえない時間を、どうぞごゆっくりお楽しみください。
            </p>

            <div class="flex flex-col md:flex-row justify-center gap-4">
                <a href="#reservation" class="bg-[#233758] text-white px-6 py-3 rounded hover:bg-[#1c2e4e] transition">
                    ご予約はこちら
                </a>
                <a href="#contact" class="text-[#233758] underline hover:text-green-700">
                    ご予約以外のお問い合わせはこちらから
                </a>
            </div>
        </div>
    </section>

{{-- Newsセクション --}}
<section id="news" class="py-16 px-6 bg-white">
    <div class="max-w-3xl mx-auto">
        <h2 class="text-2xl md:text-3xl font-bold text-center text-[#233758] mb-2">News</h2>
        <p class="text-center text-gray-700 mb-8">おしらせ</p>

        <ul class="space-y-6">
            <li class="border-b pb-4">
                <h3 class="text-lg text-[#233758] font-semibold">秋限定メニュー販売開始</h3>
                <p class="text-sm text-gray-500 mb-1">2025.10.21</p>
            </li>
            <li class="border-b pb-4">
                <h3 class="text-lg text-[#233758] font-semibold">11月の臨時休業のおしらせ</h3>
                <p class="text-sm text-gray-500 mb-1">2025.10.01</p>
            </li>
            <li class="border-b pb-4">
                <h3 class="text-lg text-[#233758] font-semibold">10月の臨時休業のおしらせ</h3>
                <p class="text-sm text-gray-500 mb-1">2025.09.01</p>
            </li>
        </ul>

        <div class="mt-8 text-center">
            <a href="/news" class="inline-block bg-[#233758] text-white px-6 py-3 rounded hover:bg-[#1c2e4e] transition">
                View All
            </a>
        </div>
    </div>
</section>

{{-- Menuセクション --}}
<section id="menu" class="py-16 px-6 bg-[#EFF1F5]">
    <div class="max-w-5xl mx-auto">
        <h2 class="text-2xl md:text-3xl font-bold text-center text-[#233758] mb-2">Menu</h2>
        <p class="text-center text-gray-700 mb-8">メニュー</p>

        <div class="grid md:grid-cols-3 gap-6">
            {{-- Food --}}
            <a href="/menu#food" class="relative block group rounded overflow-hidden shadow hover:shadow-md transition">
                <img src="/images/menu_food.jpg" alt="Food" class="w-full h-48 object-cover group-hover:scale-105 transition">
                <div class="absolute inset-0 bg-black/30 flex items-center justify-center">
                    <span class="text-white text-xl font-semibold">Food</span>
                </div>
            </a>

            {{-- Drink --}}
            <a href="/menu#drink" class="relative block group rounded overflow-hidden shadow hover:shadow-md transition">
                <img src="/images/menu_drink.jpg" alt="Drink" class="w-full h-48 object-cover group-hover:scale-105 transition">
                <div class="absolute inset-0 bg-black/30 flex items-center justify-center">
                    <span class="text-white text-xl font-semibold">Drink</span>
                </div>
            </a>

            {{-- Seasonal（Dessertの代わりに季節感を出す） --}}
            <a href="/menu#seasonal" class="relative block group rounded overflow-hidden shadow hover:shadow-md transition">
                <img src="/images/menu_seasonal.jpg" alt="Seasonal" class="w-full h-48 object-cover group-hover:scale-105 transition">
                <div class="absolute inset-0 bg-black/30 flex items-center justify-center">
                    <span class="text-white text-xl font-semibold">Seasonal</span>
                </div>
            </a>
        </div>
    </div>
</section>

{{-- Accessセクション（TOP用） --}}
<section id="access" class="py-16 px-6 bg-white">
    <div class="max-w-3xl mx-auto text-center">
        <h2 class="text-2xl md:text-3xl font-bold text-[#233758] mb-2">Access</h2>
        <p class="text-gray-700 mb-8">アクセス</p>

        {{-- Googleマップ埋め込み --}}
        <div class="mb-8">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3242.000000000000!2d138.000000000000!3d36.000000000000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x0000000000000000!2sMonte%20Tavola!5e0!3m2!1sja!2sjp!4v0000000000000"
                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

        {{-- 詳細ページへのボタン --}}
        <a href="/access" class="inline-block bg-[#233758] text-white px-6 py-3 rounded hover:bg-[#1c2e4e] transition">
            View Details
        </a>
    </div>
</section>

@endsection