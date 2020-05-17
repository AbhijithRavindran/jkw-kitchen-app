<!DOCTYPE html>
<html lang="en">
@include('layouts.partials.main.head')
  <body>
  	@include('layouts.partials.main.nav_home')
    <!-- END nav -->


        @yield('content')



        
        {{-- category wise menu --}}
        {{-- @include('layouts.partials.main.menu-category-wise') --}}

        {{--Contact form  --}}
        {{-- @include('layouts.partials.main.contact') --}}

    @include('layouts.partials.main.footer')
    @include('layouts.partials.main.loader')
    @include('layouts.partials.main.scripts')
    
  </body>
</html>