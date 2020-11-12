{{--Main header--}}
@include('layouts.headerMain')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    @yield('content')
</div>

@include('layouts.footer')

@include('layouts.footerMainScripts')
