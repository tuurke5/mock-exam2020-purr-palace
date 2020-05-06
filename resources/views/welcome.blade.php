<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/reset.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/stylesheet.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Purr-palace</title>
</head>
<body>
    <header>
        <img src="{{ asset('/images/logo.png') }}"/>
        <h1>purr-palace</h1>
        
    </header>

    <main>
        <section>
        <p>Choose you're arangement today!</p>
        <img src=" {{ asset('/images/theme_image.jpg') }}"/>
        <p>Kittens enjoying a furry weekend</p>
        </section>
        <section>
        @yield("main")
        </section>
    </main>
    <footer>
        &copy; Arthur De Groote
    </footer>

    
</body>
</html>