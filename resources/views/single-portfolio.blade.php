@extends('layouts.app')

@section('content')
  @php
    global $post;

    $locations = get_the_terms($post, 'location');
    $location = $locations[0]->name;
    $types = get_the_terms($post, 'type');
    $type = $types[0]->name;
    $content = apply_filters('the_content', $post->post_content);
  @endphp
  <section class='py-[49px] lg:py-[98px]'>
    <div class='px-4 lg:px-edge space-y-20 lg:space-y-44'>
      <div class='relative before:content-[""] before:block before:absolute lg:before:top-[50%] before:right-0 lg:before:-right-edge lg:before:w-10/12 before:h-px before:bg-black'>@include('partials.page-header')</div>
      <div class='lg:grid lg:grid-cols-12 lg:gap-8'>
        <div class='lg:col-span-4 space-y-8'>
          @if($location)
            <div class='space-y-3'>
              <h5>Location:</h5>
              <p>{{ $location }}</p>
            </div>
          @endif
          @if($type)
            <div class='space-y-3'>
              <h5>Project Type:</h5>
              <p>{{ $type }}</p>
            </div>
          @endif
          <div class='space-y-3'>
            <h5>Design Scope:</h5>
            {!! $content !!}
          </div>
        </div>
        <div class='grid lg:col-span-8 gap-4 lg:gap-8'>
          @if(class_exists('ACF'))
            @if(have_rows('gallery_items'))
              @while(have_rows('gallery_items')) @php the_row() @endphp
                @php
                  // Layout
                  $layout = get_sub_field('layout') ?? null;
                @endphp
                @switch($layout)
                  @case('full')
                    @php
                      // Layout Data
                      $full_width = get_sub_field('full_width') ?? null;
                    @endphp
                    <div class='flex bg-black'>
                      <img
                        class='w-full'
                        srcset='{{ $full_width['sizes']['w390x219'] }} 390w, {{ $full_width['sizes']['w1089x726'] }} 1089w'
                        sizes='(max-width: 390px) 390px, (min-width: 736px) 1089px, 390px'
                        src='{{ $full_width['sizes']['w1089x726'] }}'
                        alt='{{ $full_width['alt'] }}'
                        loading='lazy'
                      />
                    </div>
                  @break
                  @case('two-column')
                    @if(have_rows('two_column'))
                      @while(have_rows('two_column')) @php the_row() @endphp
                        @php
                          // Layout Data
                          $two_column_image_1 = get_sub_field('two_column_image_1') ?? null;
                          $two_column_image_2 = get_sub_field('two_column_image_2') ?? null;
                        @endphp
                        <div class='flex flex-col lg:flex-row gap-4 lg:gap-8'>
                          <div class='lg:w-1/2 bg-black'>
                            <img
                              class='w-full'
                              srcset='{{ $two_column_image_1['sizes']['w390x493'] }} 390w, {{ $two_column_image_1['sizes']['w645x968'] }} 645w'
                              sizes='(max-width: 390px) 390px, (min-width: 736px) 645px, 390px'
                              src='{{ $two_column_image_1['sizes']['w645x968'] }}'
                              alt='{{ $two_column_image_1['alt'] }}'
                              loading='lazy'
                            />
                          </div>
                          <div class='lg:w-1/2 bg-black'>
                            <img
                              class='w-full'
                              srcset='{{ $two_column_image_2['sizes']['w390x493'] }} 390w, {{ $two_column_image_2['sizes']['w645x968'] }} 645w'
                              sizes='(max-width: 390px) 390px, (min-width: 736px) 645px, 390px'
                              src='{{ $two_column_image_2['sizes']['w645x968'] }}'
                              alt='{{ $two_column_image_2['alt'] }}'
                              loading='lazy'
                            />
                          </div>
                        </div>
                      @endwhile
                    @endif
                  @break
                @endswitch
              @endwhile
            @endif
          @endif
        </div>
      </div>
    </div>
  </section>
@endsection
