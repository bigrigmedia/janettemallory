@if($video)
  <section class='w-full h-screen max-h-[715px] xl:max-h-[860px]'>
    @if($video)
      <video class='absolute pin w-full h-full object-cover' preload='auto' autoplay loop muted playsinline>
        <source src={{ $video }} type='video/mp4'/>
      </video>
    @endif
  </section>
@endif