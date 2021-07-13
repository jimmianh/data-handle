<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>eventName:{{$eventName}}</h1>
<h1>bandNames:{{$bandNames}}</h1>
<h1>startDate:{{$startDate}}</h1>
<h1>endDate:{{$endDate}}</h1>
<h1>portfolio:{{$portfolio}}</h1>
<h1>ticketPrice:{{$ticketPrice}}</h1>
<h1>status:
    @switch($status)
        @case(1)
        đang diễn ra
        @break;
        @case(2)
        sắp diễn ra
        @break;
        @case(3)
        đã diễn ra
        @break;
        @case(0)
        Tạm hoãn
        @break;
    @endswitch</h1>
</body>
</html>
