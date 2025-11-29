@php
    $sections = View::getSections();
    $isWideHeader = isset($sections['header_style']) && trim($sections['header_style']) === 'wide';
@endphp

 <header class="absolute top-0 left-0 w-full px-6 py-4 flex items-center z-50 text-[#F9F9F9]">
  {{-- ロゴ --}}
  <h1 class="text-xl font-serif font-bold">
    <a href="/" class="text-[#F9F9F9] hover:text-[#A6AEC1]">Monte Tavola</a>
  </h1>

  {{-- ナビゲーション（右寄せ） --}}
   <nav class="flex ml-auto pr-[100px] text-sm font-light tracking-wide">
    <a href="#about" class="text-inherit hover:text-[#A6AEC1] mr-[36px]">About Us</a>
    <a href="#news" class="text-inherit hover:text-[#A6AEC1] mr-[36px]">News</a>
    <a href="#menu" class="text-inherit hover:text-[#A6AEC1] mr-[36px]">Menu</a>
    <a href="#reservation" class="text-inherit hover:text-[#A6AEC1] mr-[36px]">Reservation</a>
    <a href="#contact" class="text-inherit hover:text-[#A6AEC1]">Contact</a>
  </nav>
</header>