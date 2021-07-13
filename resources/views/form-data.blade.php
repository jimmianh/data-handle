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
<div class="col-6">
    <form action="/data-handle/form" method="post">
        @csrf
        <div class="col-12">
            <input name="eventName" type="text" placeholder="Nhập eventName">
        </div>
        <div class="col-12">
            <input name="bandNames" type="text" placeholder="Nhập bandNames">
        </div>
        <div class="col-12"><input name="startDate" type="text" placeholder="Nhập startDate">
        </div>
        <div class="col-12"><input name="endDate" type="text" placeholder="Nhập endDate">
        </div>
        <div class="col-12"><input name="portfolio" type="text" placeholder="Nhập  portfolio">
        </div>
        <div class="col-12"><input name="ticketPrice" type="text" placeholder="Nhập ticketPrice">
        </div>
        <div class="col-12"><input name="status" type="text" placeholder="Nhập status"></div>
        <button type="submit">submit</button>
    </form>
</div>
</body>
</html>
