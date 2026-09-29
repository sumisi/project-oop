<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    <div  class = "flex gap-2 justify-center pt-100">
        @foreach ($array as $item)
        <div>
            <img src="{{ Vite::asset('resources/images/'.$item['path']) }}" alt="logo" alt="{{$item['title']}}}" class="w-[250px] h-[250px]">
            <h3>{{$item['title']}}</h3>
            <p>{{$item['price']}}</p>
        </div>
        @endforeach
    </div>
</body>
</html>