<!DOCTYPE html>
<html lang="en">
<head>
    <!-- assets  -->
  @include('layouts.meta')
</head>
<body>
    <!-- This is the header -->
    @include('layouts.header')

    <!-- This is the content of the page -->
    @yield('content')
    
    <!-- This is Footer -->
    @include('layouts.footer')
</body>
</html>