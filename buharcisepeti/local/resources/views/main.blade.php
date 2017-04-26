<!DOCTYPE html>
<html>
    <head>
        <script>
              (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
              })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

              ga('create', 'UA-97222358-1', 'auto');
              ga('send', 'pageview');

        </script>
        @include('partials._head')
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
          (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-3751835441448347",
            enable_page_level_ads: true
          });
        </script>
    </head>
    <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12"><div class="text-center"><img src="img/sepet.png" alt=""></div></div>
      </div>
    </div>
    
            @yield('message')
        
            @yield('content')
        
            @yield('script')
            
    </body>
</html>
