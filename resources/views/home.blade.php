<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    <div class="header flex w-full justify-between">
        <img src="{{ Vite::asset('resources/images/41_m.jpg') }}" alt="logo" class="w-[50px]">
        <p>Главная</p>
        <a href="/arrya">Массивы</a>
    </div>
    <div class="main align-middle text-center">
        <img src="{{ Vite::asset('resources/images/pngtree-picture-of-a-blue-bird-on-a-black-background-image_2937385.jpg') }}" alt="logo" class="w-[1000px]">
        <p class="">Повседневная практика показывает, что постоянный количественный рост и сфера нашей активности влечёт за собой интересный процесс внедрения модернизации системы обучения кадров, соответствующей насущным потребностям. Разнообразный и богатый опыт высокотехнологичная концепция общественной системы обеспечивает широкому кругу специалистов дальнейших направлений развития. С другой стороны выбранный нами инновационный путь в значительной степени обуславливает создание системы массового участия.</p>
    </div>
    <div class="footer flex gap-4 text-red-950">
        <p>©</p>
        <p>Ибрагимов Айнур Альбертович</p>
        <p>2026</p>
    </div>
</body>
</html>