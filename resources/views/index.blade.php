@extends('layouts.app')

@section('content')
  <section class='px-4 xl:px-edge lg:py-[32px] xl:py-[64px]'>
    @include('partials.page-header')

    @if (! have_posts())
      <p>{!! __('Sorry, no results were found.', 'sage') !!}</p>
    @endif

    @while(have_posts()) @php(the_post())
      @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
    @endwhile

    {!! get_the_posts_navigation() !!}
  </div>
@endsection

@section('sidebar')
  @include('sections.sidebar')
@endsection
