<header>
    <img src="{{ asset('images/head.png') }}" alt="head image" class="head-img">
    <div class="first-header">
        <img src="{{ asset('images/logo.svg') }}" alt="Logo" class="logo">
        
        <div class="header-info">
            <span class="head-text-main">Казахстан</span>
            <span class="head-text-second">улица Тестовая 1</span>
        </div>
        <
        <div class="header-info">
            <div>
                <span class="head-text-main">+7 (775) 000 00 01</span>
                <img src="{{ asset('images/down.svg') }}" alt="down" class="down">
            </div>
            <span class="head-text-second">Касса</span>
        </div>        
        <div class="head-btns-container">
            @include('components.social-links')
            <button class="red-btn">Мне пришёл билет</button>
        </div>
    </div>
    <div class="second-header">
         <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Toggle menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
        @include('components.navigation')
        <button class="red-btn">Войти</button>
        <button class="red-btn">Написать отзыв</button>
    </div>
    <div class="third-header">
        @include('components.date-selector')
    </div>
</header>