<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="send-email" method="POST"> -->
    <form action="{{route('contact')}}" method="POST">
        <!-- {{csrf_field()}} -->
        @csrf
        <!-- {{method_field('PUT')}} -->
        @method('PUT')
        <input type="text" name="name">
        <input type="email" name="email">
        <button type="submit">Submit</button>
    </form>
</body>
</html>