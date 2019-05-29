<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css" integrity="sha256-ujE/ZUB6CMZmyJSgQjXGCF4sRRneOimQplBVLu8OU5w=" crossorigin="anonymous" />
        <style>
            .shorten-url-button{
                width: 90%;
                border-color: white;
                color: white;
            }

            .input-container{
                background-color: #2A5BD7;
        
            }

            .space-left{
                margin-left: 10px;
            }

        </style>
    </head>
    <body>
        <h1 class="title has-text-centered">URL Shortner</h1>
        <div class="app-wrapper">
            
            <div class="input-container">
                <div class="columns is-mobile">
                    <div class="column is-four-fifths">
                        <input type="text" name="url-to-shorten" class="space-left input is-medium" placeholder="Enter URL to Shorten">
                    </div>
                    <div class="column is-one-fifth">
                        <a class="button is-outlined is-white shorten-url-button space-right is-medium">Shorten</a>
                    </div>
                </div>
               
                <div class="shortened-url-div">
                        <input type="text" name="shortened-url"  class="input  is-medium" placeholder="Shortened URL">
                </div>
            </div>
            
        </div>
    </body>
</html>
