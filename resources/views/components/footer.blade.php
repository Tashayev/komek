<footer>
    <div class="foot-header">
        <img src="{{ asset('images/logo.svg') }}" alt="Logo" class="logo">
        
        <div class="header-info">
            <span class="head-text-main">admin@example.com</span>
            <span class="head-text-main">ticket@example.com</span>
            <span class="head-text-second">улица Тестовая 1</span>
        </div>
        
        <div class="header-info">
            <div>
                <span class="head-text-main">+7 (775) 000 00 01</span>
                <img src="{{ asset('images/down.svg') }}" alt="down" class="down">
            </div>
            <span class="head-text-second">Касса</span>
        </div>
        
        <div class="header-info">
            <div>
                <span class="head-text-main">08:00 - 22:00 с пн.-пт.</span>
            </div>
            <span class="head-text-second">График работы</span>
        </div>
    </div>
    <div class="footer">
        <div class="foot-content">
            @include('components.footer-menu')
            @include('components.payment-methods')
        </div>
        <div class="divider"></div>
        <div class="foot-bottom">
            <div class="head-btns-container">
                @include('components.social-links')
            </div>
            <p>© 2022 Казахстан. Все права защищены.</p>
        </div>
    </div>
</footer>