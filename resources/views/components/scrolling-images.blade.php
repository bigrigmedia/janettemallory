<section class='lg:pb-[171px]'>
    <div class='lg:relative'>
        <img
            srcset='{{ $images[0]['sizes']['w390x219'] }} 390w, {{ $images[0]['sizes']['w1089x726'] }} 1089w'
            sizes='(max-width: 390px) 390px, (min-width: 736px) 1089px, 390px'
            src='{{ $images[0]['sizes']['w1089x726'] }}'
            alt='{{ $images[0]['alt'] }}'
            loading='lazy'
        />
        <img
            class='lg:absolute lg:top-[20vw] lg:right-[6vw]'
            srcset='{{ $images[1]['sizes']['w390x493'] }} 390w, {{ $images[1]['sizes']['w645x968'] }} 645w'
            sizes='(max-width: 390px) 390px, (min-width: 736px) 645px, 390px'
            src='{{ $images[1]['sizes']['w645x968'] }}'
            alt='{{ $images[1]['alt'] }}'
            loading='lazy'
        />
        <img
            class='lg:mt-[6vw]'
            srcset='{{ $images[2]['sizes']['w390x219'] }} 390w, {{ $images[2]['sizes']['w845x591'] }} 845w'
            sizes='(max-width: 390px) 390px, (min-width: 736px) 845px, 390px'
            src='{{ $images[2]['sizes']['w845x591'] }}'
            alt='{{ $images[2]['alt'] }}'
            loading='lazy'
        />
    </div>
    <div class='lg:flex lg:items-center lg:justify-between px-4 lg:pr-[73px]'>
        <div class='lg:pl-[472px] lg:pr-[120px]'>
            {!! $content !!}
        </div>
        <div>
            <img
                srcset='{{ $images[3]['sizes']['w390x403'] }} 390w, {{ $images[3]['sizes']['w744x912'] }} 744w'
                sizes='(max-width: 390px) 390px, (min-width: 736px) 744px, 390px'
                src='{{ $images[3]['sizes']['w744x912'] }}'
                alt='{{ $images[3]['alt'] }}'
                loading='lazy'
            />
        </div>
    </div>
</section>