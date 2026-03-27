@extends('app')
@section('title', 'Комек by Ticket')
@section('content')
    @php
        $movies = [
            [
                'title' => 'Праздник',
                'image' => 'pradnik.png',
                'genres' => ['комедия'],
                'is_premiere' => false,
                'sessions' => [
                    ['time' => '15:35', 'format' => '2D', 'price' => '1233', 'hall' => 'Зал 3'],
                    ['time' => '17:40', 'format' => '2D', 'price' => '3080', 'hall' => 'Зал 6 VIP'],
                    ['time' => '19:15', 'format' => '2D', 'price' => '1700', 'hall' => 'Зал 4'],
                    ['time' => '21:05', 'format' => '2D', 'price' => '1700', 'hall' => 'Зал 3'],
                    ['time' => '21:40', 'format' => '2D', 'price' => '4030', 'hall' => 'Зал 6 VIP'],
                    ['time' => '22:45', 'format' => '2D', 'price' => '1700', 'hall' => 'Зал 3'],
                ]
            ],
            [
                'title' => 'Мег 2: Бездна',
                'image' => 'meg.png',
                'genres' => ['экшен', 'триллер'],
                'is_premiere' => false,
                'sessions' => [
                    ['time' => '15:35', 'format' => '2D', 'price' => '4030', 'hall' => 'Зал 6 VIP'],
                    ['time' => '17:40', 'format' => '2D', 'price' => '3080', 'hall' => 'Зал 6 VIP'],
                    ['time' => '19:15', 'format' => '2D', 'price' => '1700', 'hall' => 'Зал 4'],
                ]
            ],
            [
                'title' => 'Заложники',
                'image' => 'express.png',
                'genres' => ['экшен', 'триллер'],
                'is_premiere' => false,
                'sessions' => [
                    ['time' => '16:10', 'format' => '2D', 'price' => '4030', 'hall' => 'Зал 1'],
                    ['time' => '21:30', 'format' => '2D', 'price' => '3080', 'hall' => 'Зал 1'],
                ]
            ],
            [
                'title' => 'Леди Баг и Супер-Кот: Пробуждение силы',
                'image' => 'lady.png',
                'genres' => ['фентази', 'боевик', 'мелодрама', 'мультфильм', 'комедия'],
                'is_premiere' => false,
                'sessions' => [
                    ['time' => '16:10', 'format' => '2D', 'price' => '4030', 'hall' => 'Зал 1'],
                    ['time' => '21:30', 'format' => '2D', 'price' => '3080', 'hall' => 'Зал 1'],
                ]
            ],
            [
                'title' => 'Когда не загрузилась афиша',
                'image' => null,
                'image_missing' => true,
                'genres' => ['комедия'],
                'is_premiere' => true,
                'sessions' => [
                    ['time' => '15:35', 'format' => '2D', 'price' => '1233', 'hall' => 'Зал 3'],
                    ['time' => '17:40', 'format' => '2D', 'price' => '3080', 'hall' => 'Зал 6 VIP'],
                ]
            ],
            [
                'title' => 'Руслан и Людмила. Больше, чем сказка',
                'image' => 'ruslan.png',
                'genres' => ['анимационое приключение'],
                'is_premiere' => true,
                'sessions' => []
            ],
        ];
    @endphp
    @foreach($movies as $movie)
        <x-movie-card :movie="$movie" />
    @endforeach
@endsection