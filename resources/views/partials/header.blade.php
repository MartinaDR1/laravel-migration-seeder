<nav class="nav nav-tabs nav-stacked bg-dark">
    <a class="nav-link text-muted {{ Route::currentRouteName() === 'home' ? 'bg-white text-dark' : ''}}" href="{{route('home')}}">Home</a>
    <a class="nav-link text-muted {{ Route::currentRouteName() === 'trains' ? 'bg-white text-dark' : ''}}" href="{{route('trains')}}">Viaggia con noi</a>
</nav>
