@php
    $dates = [
        ['label' => 'Сегодня', 'active' => true],
        ['label' => 'Завтра', 'active' => false],
        ['label' => 'Воскресенье, 10 сент.', 'active' => false],
        ['label' => 'Понедельник, 11 сент.', 'active' => false],
        ['label' => 'Вторник, 12 сент.', 'active' => false],
        ['label' => 'Среда, 13 сент.', 'active' => false],
    ]
@endphp
@foreach($dates as $date)
    <button class="{{ $date['active'] ? 'red-btn' : 'white-btn' }}">
        {{ $date['label'] }}
    </button>
@endforeach