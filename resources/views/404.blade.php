@extends('layouts.app')

@section('content')
  <section class='px-4 xl:px-edge lg:py-[32px] xl:py-[64px]'>
    @include('partials.page-header')

    @if (! have_posts())
      <p>{!! __('Sorry, but the page you are trying to view does not exist.', 'sage') !!}</p>
    @endif
  </section>
@endsection
