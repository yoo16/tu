<!DOCTYPE html>
<html lang="ja">

@include('components.head', ['title' => 'My Shop'])

<body>
    @include('components.nav')
    <div class="container">
        @yield('content')
    </div>
</body>

</html>
