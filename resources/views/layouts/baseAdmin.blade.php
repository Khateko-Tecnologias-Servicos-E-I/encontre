{{--Main header--}}
@include('layouts.headerMainAdmin')

<div class="content-wrapper">
    <div class="content">

        {{-- Conteudos principais--}}
            @yield('contentAdmin')
        {{-- FIM DOS Conteudos principais--}}

    </div>

@include('layouts.footerAdmin')

@include('layouts.footerMainScriptsAdmin')
