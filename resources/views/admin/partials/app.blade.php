<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->

    <!-- BEGIN CONTENT STYLE -->
    @include('admin.partials.htmlheader')
    @section('htmlheader')
    @stack('functions-css')
    @show
    <!-- END CONTENT STYLE -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">

        @include('admin.partials.topbar')

        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->

        <!-- BEGIN CONTAINER -->
        <div class="page-container">
          @include('admin.partials.sidebar')
          <!-- BEGIN CONTENT -->
          <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">
                <div class="page-content-body">
                  @yield('content')
                </div>
            </div>
            <!-- END CONTENT BODY -->
          </div>
          <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTAINER -->

      @include('admin.partials.footer')

      <!-- BEGIN CONTENT SCRIPT -->
      @include('admin.partials.scripts')
      {{-- BEGIN CUSTOM FUNCTIONS --}}
      @stack('functions')
      {{-- END CUSTOM FUNCTIONS --}}
      @section('scripts')
      @show
      <!-- END CONTENT SRIPT -->

    </body>

</html>
