<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-size: 24px;
            font-weight: bolder;
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>
    <?php
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $c = $a * $b;
    echo "$a * $b = $c";
    $fp = fopen('calc.txt', 'a+');
    fwrite($fp, "$a * $b = $c". "\r\n");
    fclose($fp);
    ?>
</body>

</html>