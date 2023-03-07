<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>今天要幹嘛</h1>
    <a href="{{route('hi_f1')}}">F1</a>
    <br>
    <a href="{{route('hi_f2')}}">F2</a>
    <br>
    <a href="{{route('hi_f3')}}">F3</a>
    <br>
    <a href="{{route('hi_f4')}}">F4</a>



    <?php for($i = 0; $i <= 4; $i++):?>
    <h3>神奇海螺在哪裡</h3>
    <?php endfor;?>
</body>
</html>