<section class='lg:py-[32px] xl:py-[64px] px-4 xl:px-0'>
  <div class='flex flex-col lg:space-y-12 xl:space-y-24'>
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
      <div class='row row--{{ $i }}'>
        <div class='row-detail'>
          <h2 class='mb-6'>{{ $portfolio->post_title }}</h2>
          <a href={{ get_permalink($portfolio->ID) }}>View Project</a>
        </div>
        <div class='row-image'>
          <a href={{ get_permalink($portfolio->ID) }}>
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
          </a>
        </div>
      </div>
      @php $i++ @endphp
    @endforeach
  </div>
</section>