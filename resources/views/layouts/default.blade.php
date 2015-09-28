@include('includes.bizz-data')
<!doctype html>
<html lang="">
  <head>
    @include('includes.head')
  </head>
    <body>
    @include('includes.header')

    @yield('headerBlock')

  <!-- Content -->
    <main>
    @yield('content')
    </main>

    <!-- Footer -->
    <footer>
    @include('includes.footer')
    </footer>

    <script src="{{url()}}{{ elixir('js/app.js') }}"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID -->
    <!-- <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-XXXXX-X', 'auto');
      ga('send', 'pageview');
    </script> -->
    <!-- Built with love using Web Starter Kit -->
  </body>
</html>
