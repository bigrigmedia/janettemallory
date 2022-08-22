<section class='lg:pt-[123px] lg:pb-[93px]'>
    <div class='lg:flex lg:items-center lg:justify-between px-4 lg:pl-[472px] lg:pr-[240px]'>
        <div class='lg:pr-[120px]'>
            {!! $content !!}
        </div>
        <div>
            <img
                srcset='{{ $intro_image['sizes']['w390x391'] }} 390w, {{ $intro_image['sizes']['w589x697'] }} 589w'
                sizes='(max-width: 390px) 390px, (min-width: 736px) 589px, 390px'
                src='{{ $intro_image['sizes']['w589x697'] }}'
                alt='{{ $intro_image['alt'] }}'
                loading='lazy'
            />
        </div>
    </div>
</section>