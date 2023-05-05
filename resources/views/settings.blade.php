<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/settings.css') }}">
    <title>Settings</title>

    <style>
        /* Set the video to cover the entire screen and play on loop */
        #video-background {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #DCDCDC;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            max-width: 400px;
            margin-top: 300px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>

</head>
<body>

    <video Autoplay muted playsinline loop id="video-background">
        <source src="{{ asset('img/play_bg.mp4') }}" type="video/mp4">
    </video>
    @if (auth()->check())
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('authenticate') }}">
                <img src="{{ asset('img/user.png') }}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                {{ auth()->user()->username }}
            </a>
        </div>
    </nav>
    @endif
    </div>
    <div class="banner">
        <form method="post" action="{{ route('settings.save') }}">
            <h1>Moputa Game Settings</h1>
            @if(session('success'))
                <div class="alert success">{{ session('success') }}</div>
            @endif

            @csrf
            <label for="numPlayers">Number of Players:</label>
            <input type="number" id="numPlayers" name="numPlayers" min="2" max="6">
            <br><br>
            <label for="playerColor">Player Color:</label>
            <select id="playerColor" name="playerColor">
                <option value="red">Red</option>
                <option value="green">Green</option>
                <option value="blue">Blue</option>
                <option value="yellow">Yellow</option>
                <option value="purple">Purple</option>
                <option value="orange">Orange</option>
            </select>
            <br><br>
            <label for="specialRules">Special Rules:</label>
            <textarea id="specialRules" name="specialRules" rows="4" cols="50"></textarea>
            <br><br>
            <input type="submit" value="Save Settings">
        </form>
    </div>

    <script src="{{ asset('js/settings.js') }}"></script>

</body>
</html>