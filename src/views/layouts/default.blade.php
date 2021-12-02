@include('Agency.partials.meta')
@include('Agency.partials.header')

<div class="container">
  <div class="block">
    @yield('content')
  </div>
</div>


{{-- <main class="main-content">
    @yield('content')
</main> --}}

@include('Agency.partials.footer')
