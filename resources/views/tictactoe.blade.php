<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tic Tac Toe</title>
    <link rel="stylesheet" href="css/app.css" type="text/css">
   
</head>
<body>
    <h1>Tic Tac Toe</h1>
    <h2>It's X's turn</h2>
    <div class="flex-container flex-column">
        <div class="flex-container flex-wrap" id='board'>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
        </div>
        <button id="reset-button">reset</button>
    </div>
    
    <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
    </body>
    </html>
   






