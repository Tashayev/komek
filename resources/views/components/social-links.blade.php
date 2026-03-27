@php
    $socialNetworks = [
        ['icon' => 'Facebook.svg', 'alt' => 'Facebook', 'class' => 'facebook'],
        ['icon' => 'Instagram.svg', 'alt' => 'Instagram', 'class' => 'instagram'],
        ['icon' => 'YouTube.svg', 'alt' => 'YouTube', 'class' => 'youtube'],
        ['icon' => 'vk.svg', 'alt' => 'vk', 'class' => 'vk'],
    ]
@endphp
@foreach($socialNetworks as $social)
    <a href="#" class="social-link">
        <img src="{{ asset('images/' . $social['icon']) }}" 
             alt="{{ $social['alt'] }}" 
             class="{{ $social['class'] }}">
    </a>
@endforeach