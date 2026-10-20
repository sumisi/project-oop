<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
    <title>Создание Заявки</title>
</head>
<body>
    <a href="/reports" class="text-[40px] text-red-500">Посмотреть заявки</a>
    <form action="{{route('reports.store')}}" method = "POST">
        @csrf
        <input type="text" placeholder="Введите номер авто" required name="number"><br>
        <input type="text" placeholder="Описание" required name="des"><br>
        <input type="submit" value="Создать">
    </form>
</body>
</html>