<section class='py-[65px] xl:py-[118px] bg-accent'>
  <div class='grid lg:grid-cols-2 gap-8 px-4 lg:px-edge'>
    <div class='text-center space-y-6'>
      <img
        srcset='{{ $images[0]['sizes']['w390x526'] }} 390w, {{ $images[0]['sizes']['w701x526'] }} 701w'
        sizes='(max-width: 390px) 390px, (min-width: 736px) 701px, 390px'
        src='{{ $images[0]['sizes']['w701x526'] }}'
        alt='{{ $images[0]['alt'] }}'
        loading='lazy'
      />
      {!! $content[0] !!}
    </div>
    <div class='text-center space-y-6'>
      <img
        srcset='{{ $images[1]['sizes']['w390x526'] }} 390w, {{ $images[1]['sizes']['w701x526'] }} 701w'
        sizes='(max-width: 390px) 390px, (min-width: 736px) 701px, 390px'
        src='{{ $images[1]['sizes']['w701x526'] }}'
        alt='{{ $images[1]['alt'] }}'
        loading='lazy'
      />
      {!! $content[1] !!}
    </div>
  </div>
</section>