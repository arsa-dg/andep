<!DOCTYPE html>
<html>
    <head>
        <title>Technology</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amaranth:400">
		<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
        <style>
            body{
                background: #f4f4f4;
                margin: 10px;

            }
            ol.direction{
	            position: relative;
	            justify-content: center;
	            width: 100%;
	            top: 0px;
	            display:flex;
	            left:0px;
				background-color: #545454;
            }
            #n4_8 {
	            font-family: Amaranth;
	            font-size: 24px;
	            font-weight: bold;
	            letter-spacing: 0px;
	            color:rgb(255, 255, 255);
	            vertical-align: middle;
	            text-align: center;
	            justify-content: center;
	            width: 235px;
	            align-items: center;
	            line-height: 28.125px;
	            height: 46px;
	            left: 925px;
	            top: 151px;
            }
            #n3_0 {
	            width: 100%;
	            height: 100%;
	            overflow: visible;
            }
            #n4_5 {
	            font-family: Amaranth;
	            font-size: 24px;
	            font-weight: bold;
	            letter-spacing: 0px;
	            color:rgb(255, 255, 255);
	            vertical-align: middle;
	            text-align: center;
	            justify-content: center;
	            width: 142px;
	            align-items: center;
	            line-height: 28.125px;
	            height: 46px;
	            left: 386px;
	            top: 1px;
            }

            /* Bantuan */
            #n4_6 {
	            font-family: Amaranth;
	            font-size: 24px;
	            font-weight: bold;
	            letter-spacing: 0px;
	            color:rgb(255, 255, 255);
	            vertical-align: middle;
	            text-align: center;
	            justify-content: center;
	            width: 183px;
	            align-items: center;
	            line-height: 28.125px;
	            height: 46px;
	            left: 635px;
	            top: 151px;
            }
            /*footer*/
            #n4_0 {
	            position: relative;
	            width: 100%;
	            bottom: 0px;
	            height: 200px;
            }

        </style>
    </head>
    <body>
        <header id="n3_0">
             <ol class="direction">
                <!-- Home -->
                <div class="left top text" id="n4_5"><a href="/">Home</a></div>
                <!-- Bantuan -->
                <div class="left top text" id="n4_6"><a href="#">Bantuan</a></div>
                <!-- Hubungi Kami -->
                <div class="left top text" id="n4_8"><a href="#">Hubungi Kami</a></div>
            </ol>
            <img src="{{ asset('/img/top.png') }}" width="100%" height="100%">
        </header>
        <main>
			@yield("content")
        </main>
        <footer id="n4_0">
            <img src="{{ asset('/img/bottom.png') }}" width="100%" height="100%">
        </footer>
    </body>
</html>
