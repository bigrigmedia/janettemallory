@php
  $type = get_field('hero_type') ?? null;
  $mobile = get_field('hero_image')['sizes']['w640x715'] ?? null;
  $desktop = get_field('hero_image')['sizes']['w1920x860'] ?? null;
  $video = get_field('hero_video') ?? null;
  $content = get_field('hero_content') ?? null;
  $images = get_field('hero_carousel') ?? null;
@endphp

@switch($type)
  @case('image')
    @include('partials.hero-image', [
      'mobile' => $mobile,
      'desktop' => $desktop
    ])
  @break
  @case('carousel')
    @include('partials.hero-carousel', [
      'images' => $images,
    ])
  @break
  @case('video')
    @include('partials.hero-video', [
      'video' => $video,
    ])
  @break
@endswitch
