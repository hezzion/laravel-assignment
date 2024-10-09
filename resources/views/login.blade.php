<!-- <h1>Login page</h1>

<x-greetings source="Login"/>

     -->

     <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@php
    $num1 = 10;
    $num2 = 50;
@endphp

{{ $num1 > $num2 ? 'num1 is bigger' : 'num2 is bigger'}}

</body>
</html>

