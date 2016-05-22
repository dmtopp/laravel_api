<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
                width: 100%;
                margin: 0;
                padding: 0;
                font-family: 'Lato';
            }
        </style>
    </head>
    <body>
      <h1>Heyoo this is m'welcome.  Cheers!</h1>
      @if (!$people)
        There are no people.
      @endif

      @foreach ($people as $person)
        <li>{{ $person }}</li>
      @endforeach

    </body>
</html>
