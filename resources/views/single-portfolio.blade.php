@extends('layouts.app')

@section('content')
  <section class='lg:py-[98px]'>
    <div class='px-4 lg:px-edge space-y-20 lg:space-y-44'>
      <div class='relative before:content-[""] before:block before:absolute lg:before:top-[50%] before:right-0 lg:before:-right-edge lg:before:w-10/12 before:h-px before:bg-black'>@include('partials.page-header')</div>
      <div class='lg:grid lg:grid-cols-12 lg:gap-8'>
        <div class='lg:col-span-4 space-y-8'>
          <div class='space-y-3'>
            <h5>Location:</h5>
            <p>Text</p>
          </div>
          <div class='space-y-3'>
            <h5>Project Type:</h5>
            <p>Text</p>
          </div>
          <div class='space-y-3'>
            <h5>Design Scope:</h5>
            <p>Text</p>
          </div>
        </div>
        <div class='lg:col-span-8'>
          Image Grid
        </div>
      </div>
    </div>
  </section>
@endsection
