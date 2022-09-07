@extends('layouts.app')

@section('content')
  @php
    global $post;

    $locations = get_the_terms($post, 'location');
    $location = $locations[0]->name ?? null;
    $types = get_the_terms($post, 'type');
    $type = $types[0]->name ?? null;
    $content = apply_filters('the_content', $post->post_content);

    $next_post = get_next_post();
    $prev_post = get_previous_post();
  @endphp
  <section class='py-[49px] lg:py-[98px]'>
    <div class='px-4 xl:px-edge space-y-20 lg:space-y-44'>
      <div class='xl:relative xl:before:content-[""] xl:before:block xl:before:absolute xl:before:top-[50%] xl:before:-right-edge xl:before:w-10/12 xl:before:h-px xl:before:bg-black'>
        @include('partials.page-header')
      </div>
      <div class='lg:grid lg:grid-cols-12 lg:gap-8'>
        <div class='lg:col-span-4 lg:self-start lg:sticky lg:top-0 space-y-8'>
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
          @if($content)
            <div class='space-y-3'>
              <h5>Design Scope:</h5>
              {!! $content !!}
            </div>
          @endif
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
                    @if($full_width)
                      <div class='flex bg-black'>
                        <a href={{ $full_width['url'] }} data-fancybox="gallery">
                          <img
                            class='w-full'
                            srcset='{{ $full_width['sizes']['w390x219'] }} 390w, {{ $full_width['sizes']['w1089x726'] }} 1089w'
                            sizes='(max-width: 390px) 390px, (min-width: 736px) 1089px, 390px'
                            src='{{ $full_width['sizes']['w1089x726'] }}'
                            alt='{{ $full_width['alt'] }}'
                            loading='lazy'
                          />
                        </a>
                      </div>
                    @endif
                  @break
                  @case('two-column')
                    @if(have_rows('two_column'))
                      @while(have_rows('two_column')) @php the_row() @endphp
                        @php
                          // Layout Data
                          $two_column_image_1 = get_sub_field('two_column_image_1') ?? null;
                          $two_column_image_2 = get_sub_field('two_column_image_2') ?? null;
                        @endphp
                        @if($two_column_image_1 && $two_column_image_2)
                          <div class='flex flex-col lg:flex-row gap-4 lg:gap-8'>
                            <div class='lg:w-1/2 bg-black'>
                              <a href={{ $two_column_image_1['url'] }} data-fancybox="gallery">
                                <img
                                  class='w-full'
                                  srcset='{{ $two_column_image_1['sizes']['w390x493'] }} 390w, {{ $two_column_image_1['sizes']['w645x968'] }} 645w'
                                  sizes='(max-width: 390px) 390px, (min-width: 736px) 645px, 390px'
                                  src='{{ $two_column_image_1['sizes']['w645x968'] }}'
                                  alt='{{ $two_column_image_1['alt'] }}'
                                  loading='lazy'
                                />
                              </a>
                            </div>
                            <div class='lg:w-1/2 bg-black'>
                              <a href={{ $two_column_image_2['url'] }} data-fancybox="gallery">
                                <img
                                  class='w-full'
                                  srcset='{{ $two_column_image_2['sizes']['w390x493'] }} 390w, {{ $two_column_image_2['sizes']['w645x968'] }} 645w'
                                  sizes='(max-width: 390px) 390px, (min-width: 736px) 645px, 390px'
                                  src='{{ $two_column_image_2['sizes']['w645x968'] }}'
                                  alt='{{ $two_column_image_2['alt'] }}'
                                  loading='lazy'
                                />
                              </a>
                            </div>
                          </div>
                        @endif
                      @endwhile
                    @endif
                  @break
                @endswitch
              @endwhile
            @endif
          @endif
        </div>
      </div>
      <nav>
        <ul class='flex items-center justify-between'>
          @if($prev_post)
            <li>
              <a href={{ get_permalink($prev_post->ID) }}>Previous Project</a>
            </li>
          @endif
          @if($next_post)
            <li>
              <a href={{ get_permalink($next_post->ID) }}>Next Project</a>
            </li>
          @endif
        </ul>
      </nav>
    </div>
  </section>
@endsection
