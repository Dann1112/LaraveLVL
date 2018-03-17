<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    @include('..\partials\head')
    @include('..\partials\header')
    <body>
        <!-- Div que permite desplazar el contenido debido al header flotante-->
        <div class="container" style="height:120px; background-color:black;">
        </div>
        @yield('content')
    </body>
    @include('..\partials\footer')
</html>