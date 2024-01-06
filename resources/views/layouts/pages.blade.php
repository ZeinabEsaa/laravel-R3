<!doctype html>
<html class="no-js" lang="zxx">
    <head>
    @include('includes.head')
		
    </head>
    <body>
	
    @include('includes.preloader')
		
    @include('includes.header')
	
    @yield('content')

    @stack('row')
		
    @include('includes.footer')

    @include('includes.footerJs')

    </body>
</html>