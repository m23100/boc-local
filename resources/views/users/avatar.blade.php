<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>avatar</title>
    </head>
    <body>
        <form method="POST" enctype="multipart/form-data">
            <input type="file" name="avatar" value="">
            <button type="submit"> 提交 </button>
            {!! csrf_field() !!}
        </form>
    </body>
</html>
