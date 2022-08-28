@if($images && $content)
  <section class='pb-[53px] xl:pb-[171px]'>
    <div class='xl:relative mb-8 lg:mb-0 px-4 lg:px-0 xl:pb-[5%] space-y-4 lg:space-y-0'>
      <img
        class='xl:transition-all xl:ease-in-out xl:will-change-transform xl:preserve-3d js-transform'
        srcset='{{ $images[0]['sizes']['w390x219'] }} 390w, {{ $images[0]['sizes']['w1089x726'] }} 1089w'
        sizes='(max-width: 390px) 390px, (min-width: 736px) 1089px, 390px'
        src='{{ $images[0]['sizes']['w1089x726'] }}'
        alt='{{ $images[0]['alt'] }}'
        loading='lazy'
      />
      <img
        class='xl:absolute xl:top-[20vw] xl:right-[10vw] xl:w-[35%] xl:transition-all xl:ease-in-out xl:will-change-transform xl:preserve-3d js-transform'
        srcset='{{ $images[1]['sizes']['w390x493'] }} 390w, {{ $images[1]['sizes']['w645x968'] }} 645w'
        sizes='(max-width: 390px) 390px, (min-width: 736px) 645px, 390px'
        src='{{ $images[1]['sizes']['w645x968'] }}'
        alt='{{ $images[1]['alt'] }}'
        loading='lazy'
      />
      <img
        class='xl:!mt-[5vw] xl:transition-all xl:ease-in-out xl:will-change-transform xl:preserve-3d js-transform'
        srcset='{{ $images[2]['sizes']['w390x219'] }} 390w, {{ $images[2]['sizes']['w845x591'] }} 845w'
        sizes='(max-width: 390px) 390px, (min-width: 736px) 845px, 390px'
        src='{{ $images[2]['sizes']['w845x591'] }}'
        alt='{{ $images[2]['alt'] }}'
        loading='lazy'
      />
    </div>
    <div class='xl:flex xl:items-center xl:justify-between px-4 xl:px-0'>
      <div class='xl:relative xl:pl-[25%] xl:pr-[5%] xl:before:content-[""] xl:before:absolute xl:before:top-[11%] xl:before:-left-0 xl:before:w-[38%] xl:before:h-px xl:before:bg-black'>
        {!! $content !!}
      </div>
      <div class='xl:w-[70%] xl:pr-[5%]'>
        <img
          class='xl:transition-all xl:ease-in-out xl:will-change-transform js-transform'
          srcset='{{ $images[3]['sizes']['w390x403'] }} 390w, {{ $images[3]['sizes']['w744x912'] }} 744w'
          sizes='(max-width: 390px) 390px, (min-width: 736px) 744px, 390px'
          src='{{ $images[3]['sizes']['w744x912'] }}'
          alt='{{ $images[3]['alt'] }}'
          loading='lazy'
        />
      </div>
    </div>
  </section>
@endif