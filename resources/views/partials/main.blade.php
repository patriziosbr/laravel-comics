<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href={{ asset("css/app.css") }}>
        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <div class="comics">
                
                @foreach ($comicsArr as $comic)
                    
                <div class="comic">
                    <div class="img-cont">
                        <img src=" {{ $comic['thumb'] }}" alt="">
                    </div>
                    <p>{{ $comic['title'] }}</p>
                </div>

                @endforeach
                
                <div class="button"> 
                    <p>
                        load more
                    </p>
                </div>
            </div>
        </div>
        <div class="bg-blue">
            <div class="center">
                <div class="icon">
                    <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="icon">
                    <p class="icon-txt">digital comics</p>
                </div>
                <div class="icon">
                    <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="icon">
                    <p class="icon-txt">dc Mercandise</p>
                </div>
                <div class="icon">
                    <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="icon">
                    <p class="icon-txt">subscription</p>
                </div>
                <div class="icon">
                    <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="icon">
                    <p class="icon-txt">shop locator</p>
                </div>
                <div class="icon">
                    <img  class="svg" src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="icon">
                    <p class="icon-txt">dc power visa</p>
                </div>
            </div>
        </div>
    </body>
</html>