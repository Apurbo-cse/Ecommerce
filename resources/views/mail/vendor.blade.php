<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ url('/') }}"><img src="{{ asset('uploads/logo/logo.png') }}" title="Your Store" alt="Your Store"></a>

    <h3>{{ $details['title'] }}</h3>
    <p>{{ $details['body'] }}</p>
    <b>Thank You</b>
</body>
</html>
