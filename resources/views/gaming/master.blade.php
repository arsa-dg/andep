<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amaranth:400"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Krub:700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bungee:400">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/gaming.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
    <body>
        <div class="frame" id="n3_0">
            <ol class="direction">
                <!-- Home -->
                <div class="left top text" id="n4_5"><a href="#">Home</a></div>
                <!-- Bantuan -->
                <div class="left top text" id="n4_6"><a href="#">Bantuan</a></div>
                <!-- Hubungi Kami -->
                <div class="left top text" id="n4_8"><a href="#">Hubungi Kami</a></div>
            </ol>
            <!-- Rectangle 4 -->
            <div class="left top rectangle" id="n4_17"></div>
            <p>
            <!-- image 1 -->
            <img id="n4_3" src="{{ asset('/img/Gaming Atas.png') }}" height="230" ></img>
            </p>
            
            @yield("content")
            <div>
            <!-- image 2 -->
            <img id="n4_4" src="{{ asset('/img/Gaming Bawah.png') }}" height="230" ></img>
            </div>
        </div>
        <!-- Rectangle 1 -->
        <div class="left top rectangle" id="n4_0"> Hak Cipta Andep Team 2020</div>

        <!-- Hak Cipta Andep Team 2020 -->
        <!-- <div class="left top text" id="n4_22">Hak Cipta Andep Team 2020</div> ga dipake-->
    </body>
</html>