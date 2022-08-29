@if(class_exists('ACF'))
  @php
    $i = 1;
  @endphp

  @if(have_rows('components'))
    @while(have_rows('components')) @php the_row() @endphp
      @php
        // Component Type
        $component = get_sub_field('component') ?? null;

        // Component Data
        $intro_content = get_sub_field('intro_content') ?? null;
        $intro_image = get_sub_field('intro_image') ?? null;

        $scrolling_image_1 = get_sub_field('scrolling_image_1') ?? null;
        $scrolling_image_2 = get_sub_field('scrolling_image_2') ?? null;
        $scrolling_image_3 = get_sub_field('scrolling_image_3') ?? null;
        $scrolling_image_4 = get_sub_field('scrolling_image_4') ?? null;
        $scrolling_images = [
          $scrolling_image_1,
          $scrolling_image_2,
          $scrolling_image_3,
          $scrolling_image_4
        ];
        $scrolling_content = get_sub_field('scrolling_content') ?? null;

        $video_testimonial_content = get_sub_field('video_testimonial_content') ?? null;
      @endphp
      @switch($component)
        @case('intro')
          @include('components.intro', ['content' => $intro_content, 'image' => $intro_image])
        @break
        @case('scrolling-images')
          @include('components.scrolling-images', ['images' => $scrolling_images, 'content' => $scrolling_content])
        @break
        @case('video-testimonial')
          @include('components.video-testimonial', ['content' => $video_testimonial_content])
        @break
        @case('two-columns')
          @if(have_rows('two_columns'))
            @while(have_rows('two_columns')) @php the_row() @endphp
              @php
                // Component Data
                $column_1_image = get_sub_field('column_1_image') ?? null;
                $column_1_content = get_sub_field('column_1_content') ?? null;
                $column_2_image = get_sub_field('column_2_image') ?? null;
                $column_2_content = get_sub_field('column_2_content') ?? null;

                $images = [
                  $column_1_image,
                  $column_2_image
                ];
                $content = [
                  $column_1_content,
                  $column_2_content
                ];
              @endphp
              @include('components.two-columns', ['images' => $images, 'content' => $content])
            @endwhile
          @endif
        @break
      @endswitch
      @php $i++ @endphp
    @endwhile
  @endif
@endif
