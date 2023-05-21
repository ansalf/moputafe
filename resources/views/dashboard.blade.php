@extends('layouts.master')

@section('content')

    <body>
        <style>
            .button {
                display: block;
                width: 200px;
                height: 50px;
                margin: 0 auto;
                margin-top: 50px;
                border: none;
                border-radius: 5px;
                background-color: #f0f5f0;
                font-size: 24px;
                font-weight: bold;
                text-align: center;
                line-height: 50px;
                cursor: pointer;
                box-shadow: 0px 0px 10px #000000;
                transition: all 0.2s ease-in-out;
            }

            .button:hover {
                transform: scale(1.1);
                box-shadow: 0px 0px 20px #000000;
            }

            .button:active {
                transform: scale(0.9);
                box-shadow: 0px 0px 5px #000000;
            }
        </style>

        <div class="container">
            <button class="button"><a href="/board" style="text-decoration: none; color:black;">Start
                    Game</button>
        </div>
        {{-- <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/> --}}

    </body>

    </html>
@stop
