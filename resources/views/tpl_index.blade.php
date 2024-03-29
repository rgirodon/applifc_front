<!DOCTYPE html>
<html lang=en>
   <head>
      <meta charset=utf-8>
      <meta http-equiv=X-UA-Compatible content="IE=edge">
      <meta name=viewport content="width=device-width,initial-scale=1">
      <!--[if IE]>
      <link rel="icon" href="/favicon.ico">
      <![endif]-->
      <title>{{ $club->name }}</title>
          
      <link href=/css/app.7fdef80b.css rel=preload as=style>
      <link href=/css/chunk-vendors.4d9c9b27.css rel=preload as=style>
      <link href=/js/app.8801ec86.js rel=preload as=script>
      <link href=/js/chunk-vendors.d7632941.js rel=preload as=script>
      <link href=/css/chunk-vendors.4d9c9b27.css rel=stylesheet>
      <link href=/css/app.7fdef80b.css rel=stylesheet>         
          
      <link rel=icon type=image/png sizes=32x32 href=/img/icons/{{ $club->server }}/favicon-32x32.png>
      <link rel=icon type=image/png sizes=16x16 href=/img/icons/{{ $club->server }}/favicon-16x16.png>
      <link rel=manifest href=/manifest.json>
      <meta name=theme-color content="{{ $club->color }}">
      <meta name=apple-mobile-web-app-capable content=no>
      <meta name=apple-mobile-web-app-status-bar-style content=default>
      <meta name=apple-mobile-web-app-title content="{{ $club->name }}">
      <link rel=apple-touch-icon href=/img/icons/{{ $club->server }}/icon-152x152.png>
      <link rel=mask-icon href=/img/icons/{{ $club->server }}/safari-pinned-tab.svg color="{{ $club->color }}">
      <meta name=msapplication-TileImage content=/img/icons/{{ $club->server }}/icon-144x144.png>
      <meta name=msapplication-TileColor content=#000000>
   </head>
   <body>
      <noscript><strong>We're sorry but firstpwa doesn't work properly without JavaScript enabled. Please enable it to continue.</strong></noscript>
      <div id=app></div>
       
      <script src=/js/chunk-vendors.d7632941.js></script><script src=/js/app.8801ec86.js></script>
       
   </body>
</html>