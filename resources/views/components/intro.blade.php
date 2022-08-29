@if($image && $content)
  <section class='pt-[56px] pb-4 xl:pt-[123px] xl:pb-[93px]'>
    <div class='xl:flex xl:items-center xl:justify-between xl:flex-grow px-4 xl:px-0'>
      <div class='relative xl:max-w-[1078px] xl:pl-[25%] xl:pr-[5%] xl:before:content-[""] xl:before:absolute xl:before:top-[19%] xl:before:-left-0 xl:before:w-[38%] xl:before:h-px xl:before:bg-black'>
        {!! $content !!}
      </div>
      <div class='xl:w-[60%] xl:pr-[5%]'>
        <img
          class='xl:transition-all xl:ease-in-out xl:will-change-transform xl:preserve-3d js-transform'
          srcset='{{ $image['sizes']['w390x391'] }} 390w, {{ $image['sizes']['w589x697'] }} 589w'
          sizes='(max-width: 390px) 390px, (min-width: 736px) 589px, 390px'
          src='{{ $image['sizes']['w589x697'] }}'
          alt='{{ $image['alt'] }}'
          loading='lazy'
        />
      </div>
    </div>
  </section>
@endif