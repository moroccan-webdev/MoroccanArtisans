<!doctype html>
<html>
    @include('Layouts.user_partials.head')
        @yield('stylesheets')
    <body data-spy="scroll" data-target=".navbar-collapse">
      <!-- Preloader -->
      <div id="loading">
          <div id="loading-center">
              <div id="loading-center-absolute">
                  <div class="object" id="object_one"></div>
                  <div class="object" id="object_two"></div>
                  <div class="object" id="object_three"></div>
                  <div class="object" id="object_four"></div>
              </div>
          </div>
      </div><!--End off Preloader -->

      <div class="culmn">
        @include('Layouts.user_partials.navbar')
        @include('Layouts.user_partials.homesection')
            @yield('content')
        @include('Layouts.user_partials.footersection')
        </div>
        @include('Layouts.user_partials.script')
            @yield('scripts')
    </body>
</html>
