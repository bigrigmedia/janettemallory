<section class='py-[71px] xl:py-[142px]'>
  <div class='flex flex-col lg:space-y-12 xl:space-y-24'>
    @php $i = 0; @endphp
    @foreach($pages as $page)
      @php
        $title = $page->post_title;
        $image_mobile = wp_get_attachment_image_src( get_post_thumbnail_id($page->ID), 'w390x403' )[0] ?? null;
        $image_desktop = wp_get_attachment_image_src( get_post_thumbnail_id($page->ID), 'w744x912' )[0] ?? null;
      @endphp
      <div class='row row--{{ $i }}'>
        <div class='row-detail'>
          <h2 class='mb-6'>{{ $title }}</h2>
          <a href={{ get_permalink($page->ID) }}>View More</a>
        </div>
        <div class='row-image'>
          <a href={{ get_permalink($page->ID) }}>
            <img
              srcset='{{ $image_mobile }} 390w, {{ $image_desktop }} 744w'
              sizes='(max-width: 390px) 390px, (min-width: 736px) 744px, 390px'
              src='{{ $image_desktop }}'
              alt='{{ $title }}'
              loading='lazy'
            />
          </a>
        </div>
      </div>
      @php $i++ @endphp
    @endforeach
  </div>
</section>