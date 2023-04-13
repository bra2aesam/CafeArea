<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('userLayout.head')
</head>
<body class="index-page bg-gray-200">
    
<!-- header section starts  -->

@include('userLayout.navbar')

<!-- header section ends -->
{{-- showCase --}}
@yield('showCase')

<!-- home section starts  -->
<div class="card card-body blur shadow-xl mx-3 mx-md-4 mt-n6">
    <div class="container">
      <div class="section text-center">
        @yield('contant')
      </div>
    </div>
  </div>

<!-- home section starts  -->

<!-- footer section  -->
@include('userLayout.footer')

</body>
</html>