@if($images)
  <section class='w-full h-screen max-h-[715px] xl:max-h-[860px] siema'>
    @foreach($images as $image)
      <div class='w-full h-screen bg-center bg-cover bg-no-repeat' style='background-image:url("{{ $image['sizes']['w1920x860'] }}")'></div>
    @endforeach
  </section>
@endif