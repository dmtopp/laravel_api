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

      <form action="/" method="post">
        <textarea name="postit" rows="8" cols="40"></textarea>
        <input placeholder="Your name" name="name" />
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit">Submit</button>
      </form>

      <form action="/update" method="post">
        <textarea placeholder="update your note" name="postit" rows="8" cols="40"></textarea>
        <input placeholder="Update your name" name="name" />
        <input placeholder="Note id" name="id" />
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit">Update!</button>
      </form>

    </body>
</html>
