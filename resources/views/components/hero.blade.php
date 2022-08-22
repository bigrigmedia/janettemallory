@php
  $type = get_field('hero_type') ?? null;
  $mobile = get_field('hero_image')['sizes']['w640x715'] ?? null;
  $desktop = get_field('hero_image')['sizes']['w1920x860'] ?? null;
  $video = get_field('hero_video') ?? null;
  $content = get_field('hero_content') ?? null;
@endphp
@if($mobile && $desktop)
  <section class='w-full h-screen max-h-[715px] lg:max-h-[860px] js-hero' data-mobile='{{ $mobile }}' data-desktop='{{ $desktop }}'>
    @if($content)
      <div class='hero-content'>
        {!! $content !!}
      </div>
    @endif
    @if($video)
    @endif
  </section>
@endif
