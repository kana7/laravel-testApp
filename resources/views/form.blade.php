<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>This is a from</h1>
    <form action="/formsubmit" method="post">
        {{csrf_field()}}
        First name:<br/>
        <input type="text" name="firstname"><br/>
        Last name:<br>
        <input type="text" name="lastname">
        <input type="submit" value="Submit">
    </form>
</body>
</html>