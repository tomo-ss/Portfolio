@extends('layouts.app')

@section('title', 'Monte Tavola - トップページ')
@section('description', '自然に囲まれた隠れ家レストラン Monte Tavola の公式サイトです。')
@section('body_class', 'top-page')
@section('header_style', 'wide')

@section('content')

{{-- ========================================= --}}
{{-- Hero / Main Visual --}}
{{-- ========================================= --}}
<section class="relative aspect-[1440/704] w-full overflow-hidden">

    {{-- 背景画像 --}}
    <img src="{{ asset('images/main-visual.jpg') }}" alt="Monte Tavola メインビジュアル"
         class="main-visual w-full h-full object-cover brightness-75">

    {{-- ヘッダー（重ねる） --}}
    <div class="absolute top-0 left-0 w-full z-50">
        @include('partials.header')
    </div>
</section>


{{-- ========================================= --}}
{{-- About Us --}}
{{-- ========================================= --}}
<section id="about" class="bg-[#F8F8F8] pt-16 pb-40 px-6 md:px-12">
  <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-10 items-center">

    {{-- 左：文章 --}}
    <div class="text-left flex flex-col items-start">
      <h2 class="text-5xl font-bold text-[#363427] mb-4">About Us</h2>
      <p class="text-[#363427] leading-relaxed max-w-2xl mb-10">私たちについて</p>

      <div class="space-y-4 text-[#363427] leading-relaxed text-[16px]">
        <p>
          長野県の山あいにひっそりと佇む、夫婦で営む小さなイタリアンレストラン。<br>
          澄んだ空気、木々のざわめき、季節のうつろい——そんな自然の豊かさに包まれながら、<br>
          肩ひじ張らずに楽しめるカジュアルなイタリアンをご提供しています。
        </p>
        <p>
          私たちが目指すのは、日常からふっと離れて、心がほどけるようなひととき。<br>
          地元の食材を活かした料理と、温かみのある空間で、<br>
          訪れる方が「また帰ってきたくなる場所」になれたら嬉しいです。
        </p>
        <p>
          自然とともに、静かに、親しみ深く。<br>
          ここでしか味わえない時間を、どうぞごゆっくりお楽しみください。
        </p>
      </div>

      {{-- ボタン --}}
      <a href="#reservation"
        class="inline-flex w-full md:w-[300px] h-[56px] md:h-[64px]
              px-6 justify-center items-center
              rounded-[10px] border border-[#363427]
              text-[#363427] font-semibold text-lg
              hover:bg-[#363427] hover:text-white transition mt-6">
        ご予約はこちら
      </a>
      <br>

      <a href="#contact" class="mt-3 inline-block text-[#363427] underline hover:text-green-700 font-medium">
        ご予約以外のお問い合わせはこちらから
      </a>
    </div>

{{-- 右：画像（左下にスタッフを重ねる） --}}
<div class="relative w-full flex justify-center mt-6">

  {{-- パスタ（大） --}}
  <div class="w-[560px] h-[380px] overflow-hidden shadow-md relative z-10">
      <img src="{{ asset('images/about_pasta.jpg') }}" 
           alt="シーフードパスタ" 
           class="w-full h-full object-cover">
  </div>

  {{-- スタッフ（小） 少し下に重ねる --}}
  <div class="w-[320px] h-[210px] overflow-hidden shadow-md absolute bottom-[-180px] left-[-40px] z-20">
      <img src="{{ asset('images/about_staff.jpg') }}" 
           alt="スタッフの写真" 
           class="w-full h-full object-cover">
  </div>

</div>
</section>



{{-- ========================================= --}}
{{-- News --}}
{{-- ========================================= --}}
<section id="news" class="py-16 px-6 md:px-12 bg-[#F1ECEB]">
  <div class="max-w-7xl mx-auto">

    <h2 class="text-5xl font-bold text-center text-[#363427] mb-2">News</h2>
    <p class="text-center text-[#363427] mb-8">おしらせ</p>

    <div class="flex flex-col md:flex-row gap-6 justify-center">
      <div class="border rounded p-4 shadow-sm flex-1">
        <h3 class="text-lg text-[#363427] font-semibold">秋限定メニュー販売開始</h3>
        <p class="text-sm text-gray-500">2025.10.21</p>
      </div>

      <div class="border rounded p-4 shadow-sm flex-1">
        <h3 class="text-lg text-[#363427] font-semibold">11月の臨時休業のおしらせ</h3>
        <p class="text-sm text-gray-500">2025.10.01</p>
      </div>

      <div class="border rounded p-4 shadow-sm flex-1">
        <h3 class="text-lg text-[#363427] font-semibold">10月の臨時休業のおしらせ</h3>
        <p class="text-sm text-gray-500">2025.09.01</p>
      </div>
    </div>

    <div class="mt-8 text-center">
      <a href="/news" class="inline-block bg-[#363427] text-white px-6 py-3 rounded hover:bg-[#F1ECEB] transition">
        View All
      </a>
    </div>
  </div>
</section>


{{-- ========================================= --}}
{{-- Menu --}}
{{-- ========================================= --}}
<section id="menu" class="py-14 px-6">
  <div class="max-w-6xl mx-auto">

    <h2 class="text-5xl font-bold text-center text-[#363427] mb-2">Menu</h2>
    <p class="text-center text-[#363427] mb-6">メニュー</p>

    {{-- 横並び調整済み --}}
    <div class="flex flex-wrap justify-center gap-6">

      {{-- Food --}}
      <div class="relative w-[340px] h-[390px] overflow-hidden rounded">
        <img src="/images/menu_food.png" class="w-full h-full object-cover">

        <span class="absolute inset-0 flex items-center justify-center
                     text-white text-2xl font-semibold">
          Food
        </span>

        <a href="/menu#food"
           class="absolute bottom-16 left-1/2 -translate-x-1/2
                  px-5 py-2 rounded-[10px]
                  bg-[#F8F8F8]/90 text-[#363427] 
                  text-sm font-medium
                  hover:bg-[#363427] hover:text-white transition">
          View Menu
        </a>
      </div>

      {{-- Drink --}}
      <div class="relative w-[340px] h-[390px] overflow-hidden rounded">
        <img src="/images/menu_drink.png" class="w-full h-full object-cover">

        <span class="absolute inset-0 flex items-center justify-center
                     text-white text-2xl font-semibold">
          Drink
        </span>

        <a href="/menu#drink"
           class="absolute bottom-16 left-1/2 -translate-x-1/2
                  px-5 py-2 rounded-[10px]
                  bg-[#F8F8F8]/90 text-[#363427] 
                  text-sm font-medium
                  hover:bg-[#363427] hover:text-white transition">
          View Menu
        </a>
      </div>

      {{-- Seasonal --}}
      <div class="relative w-[340px] h-[390px] overflow-hidden rounded">
        <img src="/images/menu_seasonal.png" class="w-full h-full object-cover">

        <span class="absolute inset-0 flex items-center justify-center
                     text-white text-2xl font-semibold">
          Seasonal
        </span>

        <a href="/menu#seasonal"
           class="absolute bottom-16 left-1/2 -translate-x-1/2
                  px-5 py-2 rounded-[10px]
                  bg-[#F8F8F8]/90 text-[#363427] 
                  text-sm font-medium
                  hover:bg-[#363427] hover:text-white transition">
          View Menu
        </a>
      </div>

    </div>
  </div>
</section>





{{-- ========================================= --}}
{{-- Access --}}
{{-- ========================================= --}}
<section id="access" class="py-16 px-6 md:px-12 bg-[#F1ECEB]">
    <div class="max-w-7xl mx-auto text-center">

        <h2 class="text-5xl font-bold text-[#363427] mb-2">Access</h2>
        <p class="text-[#363427] mb-8">アクセス</p>

        <div class="mb-8">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.521870216447!2d139.81070087611593!3d35.71003467258079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018894ec7c244b7%3A0x6a11145892556277!2z5p2x5Lqs6aeF!5e0!3m2!1sja!2sjp!4v1636592400000!5m2!1sja!2sjp"
                width="100%" height="350" style="border:0;" allowfullscreen loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

        <a href="/access" class="inline-block bg-[#363427] text-white px-6 py-3 rounded hover:bg-[#1c2e4e] transition">
            View Details
        </a>
    </div>
</section>


<script>
    window.addEventListener('load', () => {
        document.querySelector('.main-visual').classList.add('loaded');
    });
    
</script>




@endsection
