<section class='xl:pt-[64px] px-4 xl:px-0'>
  <div class='flex flex-col xl:space-y-24'>
    @php $i = 0; @endphp
    @foreach($getPortfoliio as $portfolio)
      @php
        if ($i === 0) {
          $horizontal_moilbe = wp_get_attachment_image_src( get_post_thumbnail_id($portfolio->ID), 'w390x219' )[0] ?? null;
          $horizontal_desktop = wp_get_attachment_image_src( get_post_thumbnail_id($portfolio->ID), 'w1089x726' )[0] ?? null;
        } else {
          $vertical_mobile = wp_get_attachment_image_src( get_post_thumbnail_id($portfolio->ID), 'w390x403' )[0] ?? null;
          $vertical_desktop = wp_get_attachment_image_src( get_post_thumbnail_id($portfolio->ID), 'w744x912' )[0] ?? null;
        }
      @endphp
      <div class='portfolio portfolio--{{ $i }}'>
        <div class='portfolio-detail'>
          <h1>{{ $portfolio->post_title }}</h1>
        </div>
        <div class='portfolio-image'>
          @if($i === 0)
            <img
              class='js-transform'
              srcset='{{ $horizontal_moilbe }} 390w, {{ $horizontal_desktop }} 1089w'
              sizes='(max-width: 390px) 390px, (min-width: 736px) 1089px, 390px'
              src='{{ $horizontal_desktop }}'
              alt='{{ $portfolio->post_title }}'
              loading='lazy'
            />
          @else
            <img
              class='js-transform'
              srcset='{{ $vertical_mobile }} 390w, {{ $vertical_desktop }} 589w'
              sizes='(max-width: 390px) 390px, (min-width: 736px) 589px, 390px'
              src='{{ $vertical_desktop }}'
              alt='{{ $portfolio->post_title }}'
              loading='lazy'
            />
          @endif
        </div>
      </div>
      @php $i++ @endphp
    @endforeach
  </div>
</section>