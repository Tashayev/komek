<div class="foot-menu">
    <h4>Меню</h4>
    @php
        $footerMenuItems = [
            'Афиша',
            'Сеансы',
            'Пушкинская карта',
            'Кинотеатр',
            'Контакты',
        ]
    @endphp    
    @foreach($footerMenuItems as $item)
        <a href="#">{{ $item }}</a>
    @endforeach
</div>