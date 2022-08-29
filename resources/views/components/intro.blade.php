@if($image && $content)
  <section class='pt-[56px] pb-4 lg:pt-[61px] xl:pt-[123px] lg:pb-[46px] xl:pb-[93px]'>
    <div class='lg:flex lg:items-center lg:justify-between lg:flex-grow px-4 lg:px-0'>
      <div class='xl:relative lg:max-w-[539px] xl:max-w-[1078px] lg:pl-[12%] xl:pl-[25%] lg:pr-[3%] xl:pr-[5%] xl:before:content-[""] xl:before:absolute xl:before:top-[19%] xl:before:-left-0 xl:before:w-[38%] xl:before:h-px xl:before:bg-black'>
        {!! $content !!}
      </div>
      <div class='lg:w-[60%] xl:w-[60%] lg:pr-[3%] xl:pr-[5%]'>
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