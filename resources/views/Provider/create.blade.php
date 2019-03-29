<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<form method="POST" action ="/Provider">
  {{ csrf_field() }}

  <div>
    <input type = "text" name="title" placeholder = "column name">
  </div>
  <div>
    <textarea name= "description" placeholder= "value"> </textarea>
  </div>
  <div>
    <button type="submit"> Submit</button>
  </div>
</form>




  </body>
</html>
