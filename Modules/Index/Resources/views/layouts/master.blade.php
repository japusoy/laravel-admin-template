<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="name">
        <meta name="description" content="description here">
        <meta name="keywords" content="keywords,here">
        <title>Module Index</title>

        {{-- Laravel Mix - CSS File --}}
       <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        {{-- TEMPLATE ASSETS --}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
        <link rel="stylesheet" href="{{ asset('css/template.css') }}">

    </head>
    <body>
        {{-- Start of header --}}
            @include('index::inc.header')
        {{-- End of header --}}

        {{-- Start of main --}}
            <main>
                <div class="mainDiv">
                    {{-- Start of nav --}}
                        @include('index::inc.nav')
                    {{-- End of nav --}}

                    {{-- Start of section --}}
                        <section>
                            <div class="mainWrapper">
                                @yield('content')
                            </div>
                        </section>
                    {{-- End of section --}}
                </div>
            </main>
        {{-- End of main --}}

        <script src="{{ asset('js/index.js') }}"></script>
        {{-- Laravel Mix - JS File --}}
        <script src="{{ mix('js/app.js') }}"></script>
        
    </body>
</html>
