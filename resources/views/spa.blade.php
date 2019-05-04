<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.min.css') }}">
    <title>Document</title>
</head>

<body>
    <div id="app"></div>
         <script src="{{ asset('plugins/slick/slick.min.js') }}"></script>
      <script src="{{ asset('js/app.js') }}"></script>
      
      <script src="{{ asset('js/common.js') }}"></script>

    <script>
        WebFontConfig = {
          google: { families: [ 'Aleo:400' ] }
        };
        (function() {
          var wf = document.createElement('script');
          wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
          wf.type = 'text/javascript';
          wf.async = 'true';
          var s = document.getElementsByTagName('script')[0];
          s.parentNode.insertBefore(wf, s);
        })(); 
    </script>

</body>
</html>
