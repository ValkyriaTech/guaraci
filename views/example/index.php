<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>It works!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
    <a href="//<?= $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] ?>example/test">Access the subview</a>
  </body>
</html>