<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <title>Ruby - Jewelry Store</title>
     
    @include('frontend.includes.style')
   
</head>

<body>

    @include('frontend.includes.header')

    @include('frontend.includes.search')
   <main>
      @yield('content')
   </main>

      @include('frontend.includes.footer')

      @include('frontend.includes.script')
</body>

</html>