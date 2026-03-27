<nav class="nav">
    @php
        $navItems = [
            ['url' => '#', 'label' => 'Афиша', 'active' => true],
            ['url' => '#', 'label' => 'Сеансы', 'active' => false],
            ['url' => '#', 'label' => 'Пушкинская карта', 'active' => false],
            ['url' => '#', 'label' => 'Кинотеатр', 'active' => false],
            ['url' => '#', 'label' => 'Контакты', 'active' => false],
        ]
    @endphp    
    @foreach($navItems as $item)
        <a href="{{ $item['url'] }}" 
           class="{{ $item['active'] ? 'active' : 'inActive' }}">
            {{ $item['label'] }}
        </a>
    @endforeach
</nav>