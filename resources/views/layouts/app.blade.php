<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   
    @include('layouts.meta')
</head>
<body>
    <!-- This is the header -->
    @include('layouts.header')
  
    @yield('content')
    
    <!-- This is Footer -->
    @include('layouts.footer')
    </div>
</body>
</html>
