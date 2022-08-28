@include('sections.header')
@include('components.hero')

<main id="main" class="main">
  @yield('content')
</main>

@hasSection('sidebar')
  <aside class="sidebar">
    @yield('sidebar')
  </aside>
@endif

@include('sections.footer')
@include('sections.menus.off-canvas-nav')