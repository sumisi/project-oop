<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
    <title>Заявки</title>
</head>
<body>
    <h1 class="text-[40px]">Заявки</h1>
    <a href="/reports/create" class="text-[40px] text-red-500">Создать заявку</a>
    <div class="container mx-auto">
        <div class="grid grid-cols-4 gap-2">
            @foreach($reports as $report)
            <div class="bg-amber-300">
                {{$report->number}}<br>
                {{$report->des}}<br>
                <a href="{{route('reports.edit', $report->id)}}">
                    Изменить заявку
                </a><br>
                <form action="{{route('reports.destroy', $report->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Удалить заявку" class="text-red-500 text-[20px] font-bold">
                </form>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>