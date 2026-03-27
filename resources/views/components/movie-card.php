@props(['movie'])
<div class="card">
    @if($movie['is_premiere'] ?? false)
        <span class="premiere">Премьера</span>
    @endif

    @if(!($movie['image_missing'] ?? false))
        <img src="{{ asset('images/' . $movie['image']) }}" alt="{{ $movie['title'] }}">
    @else
        <div class="not-found">
            <img src="{{ asset('images/not-found.svg') }}" alt="image not found">
        </div>
    @endif

    <span class="movie-name">{{ $movie['title'] }}</span>
    <div class="genre-container">
        @foreach($movie['genres'] as $genre)
            <span class="genre">{{ $genre }}</span>
        @endforeach
    </div>
    @if(!empty($movie['sessions']))
        <div class="hall-container">
            @foreach($movie['sessions'] as $session)
                <div>
                    <div class="hall-holder">
                        <div class="time">{{ $session['time'] }}</div>
                        <div class="hall-info">
                            <span>{{ $session['format'] ?? '2D' }}</span>
                            <span>{{ $session['price'] }} ₸</span>
                        </div>
                    </div>
                    <span class="hall-name">{{ $session['hall'] }}</span>
                </div>
            @endforeach
        </div>
    @else
        <button class="session-btn">Сеансы на Завтра</button>
    @endif
</div>