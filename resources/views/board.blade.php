<!DOCTYPE html>
<html>

<head>
    <title>Monopoly Game</title>
    <link rel="stylesheet" href="{{ asset('css/board.css') }}">
</head>

<body>
    <div class="table">
        <div class="board">
            <div class="center">
                <div class="community-chest-deck">
                    <h2 class="label">Community Chest</h2>
                    <div class="deck"></div>
                </div>
                <img class="bg" src="{{ asset('img/moputa.png') }}" alt="mopta">
                <div class="chance-deck">
                    <h2 class="label">Chance</h2>
                    <div class="deck"></div>
                </div>
            </div>

            <div class="space corner go">
                <div class="container">
                    <div class="instructions">Collect £200 as you pass</div>
                    <div class="go-word">HOME</div>
                </div>
                <div class="arrow fa fa-long-arrow-left"></div>
            </div>


            <div class="row horizontal-row bottom-row">
                <div class="space property">
                    <div class="container">
                        <div class="color-bar light-blue"></div>
                        <div class="name">Club House The Chofa</div>
                        <div class="price">£120</div>
                    </div>
                </div>
                <div class="space property">
                    <div class="container">
                        <div class="color-bar light-blue"></div>
                        <div class="name">Royal Residence</div>
                        <div class="price">£100</div>
                    </div>
                </div>
                <div class="space chance">
                    <div class="container">
                        <div class="name">Chance</div>
                        <i class="drawing fa fa-question"></i>
                    </div>
                </div>
                <div class="space property">
                    <div class="container">
                        <div class="color-bar light-blue"></div>
                        <div class="name">Citra Garden</div>
                        <div class="price">£100</div>
                    </div>
                </div>
                <div class="space railroad">
                    <div class="container">
                        <div class="name long-railroad">Jal Darshan</div>
                        <i class="drawing fa fa-building"></i>
                        <div class="price">£200</div>
                    </div>
                </div>
                <div class="space fee income-tax">
                    <div class="container">
                        <div class="name">Income Tax</div>
                        <div class="diamond"></div>
                        <div class="instructions">Pay $200</div>
                    </div>
                </div>
                <div class="space property">
                    <div class="container">
                        <div class="color-bar dark-purple"></div>
                        <div class="name">Permata Jingga</div>
                        <div class="price">£60</div>
                    </div>
                </div>
                <div class="space community-chest">
                    <div class="container">
                        <div class="name">Community Chest</div>
                        <i class="drawing fa fa-key"></i>
                    </div>
                </div>
                <div class="space property">
                    <div class="container">
                        <div class="color-bar dark-purple"></div>
                        <div class="name">Sulfat Indah</div>
                        <div class="price">£60</div>
                    </div>
                </div>
            </div>

            <div class="space corner jail">
                <div class="just">Just</div>
                <div class="drawing">
                    <div class="container">
                        <div class="name">In</div>
                        <div class="window">
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <i class="person fa fa-frown-o"></i>
                        </div>
                        <div class="name">Jail</div>
                    </div>
                </div>
                <div class="visiting">Visiting</div>
            </div>

            <div class="row vertical-row left-row">
                <div class="space property">
                    <div class="container">
                        <div class="color-bar orange"></div>
                        <div class="name">Jl. Marioboro</div>
                        <div class="price">£200</div>
                    </div>
                </div>
                <div class="space property">
                    <div class="container">
                        <div class="color-bar orange"></div>
                        <div class="name">Ambarukmo Green Hills</div>
                        <div class="price">£180</div>
                    </div>
                </div>
                <div class="space community-chest">
                    <div class="container">
                        <div class="name">Community Chest</div>
                        <i class="drawing fa fa-key"></i>
                    </div>
                </div>
                <div class="space property">
                    <div class="container">
                        <div class="color-bar orange"></div>
                        <div class="name">Royal Maguwo</div>
                        <div class="price">£180</div>
                    </div>
                </div>
                <div class="space railroad">
                    <div class="container">
                        <div class="name">Landmark</div>
                        <i class="drawing fa fa-building"></i>
                        <div class="price">£200</div>
                    </div>
                </div>
                <div class="space property">
                    <div class="container">
                        <div class="color-bar purple"></div>
                        <div class="name">Bukit Wahid Regency</div>
                        <div class="price">£160</div>
                    </div>
                </div>
                <div class="space property">
                    <div class="container">
                        <div class="color-bar purple"></div>
                        <div class="name">BSB City</div>
                        <div class="price">£140</div>
                    </div>
                </div>
                <div class="space utility electric-company">
                    <div class="container">
                        <div class="name">JP Morgan</div>
                        <i class="drawing fa fa-university"></i>
                        <div class="price">£150</div>
                    </div>
                </div>
                <div class="space property">
                    <div class="container">
                        <div class="color-bar purple"></div>
                        <div class="name">Pandanaran Hills</div>
                        <div class="price">£140</div>
                    </div>
                </div>
            </div>

            <div class="space corner free-parking">
                <div class="container">
                    <div class="name">Free</div>
                    <i class="drawing fa fa-car"></i>
                    <div class="name">Parking</div>
                </div>
            </div>

            <div class="row horizontal-row top-row">
                <div class="space property">
                    <div class="container">
                        <div class="color-bar red"></div>
                        <div class="name">Naira Residence</div>
                        <div class="price">£220</div>
                    </div>
                </div>
                <div class="space chance">
                    <div class="container">
                        <div class="name">Chance</div>
                        <i class="drawing fa fa-question blue"></i>
                    </div>
                </div>
                <div class="space property">
                    <div class="container">
                        <div class="color-bar red"></div>
                        <div class="name">The Faradila Townhouse</div>
                        <div class="price">£220</div>
                    </div>
                </div>
                <div class="space property">
                    <div class="container">
                        <div class="color-bar red"></div>
                        <div class="name long-name">Brentwood Reisdence</div>
                        <div class="price">£240</div>
                    </div>
                </div>
                <div class="space railroad">
                    <div class="container">
                        <div class="name">Kalpataru</div>
                        <i class="drawing fa fa-building"></i>
                        <div class="price">£200</div>
                    </div>
                </div>
                <div class="space property">
                    <div class="container">
                        <div class="color-bar yellow"></div>
                        <div class="name">Calistha Dago</div>
                        <div class="price">£260</div>
                    </div>
                </div>
                <div class="space property">
                    <div class="container">
                        <div class="color-bar yellow"></div>
                        <div class="name">Dago Village</div>
                        <div class="price">£260</div>
                    </div>
                </div>
                <div class="space utility waterworks">
                    <div class="container">
                        <div class="name">Stan C</div>
                        <i class="drawing fa fa-university"></i>
                        <div class="price">£150</div>
                    </div>
                </div>
                <div class="space property">
                    <div class="container">
                        <div class="color-bar yellow"></div>
                        <div class="name long-name">Summarecon</div>
                        <div class="price">£280</div>
                    </div>
                </div>
            </div>

            <div class="space corner go-to-jail">
                <div class="container">
                    <div class="name">Go To</div>
                    <i class="drawing fa fa-gavel"></i>
                    <div class="name">Jail</div>
                </div>
            </div>
            <div class="row vertical-row right-row">
                <div class="space property">
                    <div class="container">
                        <div class="color-bar green"></div>
                        <div class="name">Menteng</div>
                        <div class="price">£300</div>
                    </div>
                </div>
                <div class="space property">
                    <div class="container">
                        <div class="color-bar green"></div>
                        <div class="name">Senopati</div>
                        <div class="price">£300</div>
                    </div>
                </div>
                <div class="space community-chest">
                    <div class="container">
                        <div class="name">Community Chest</div>
                        <i class="drawing fa fa-key"></i>
                    </div>
                </div>
                <div class="space property">
                    <div class="container">
                        <div class="color-bar green"></div>
                        <div class="name two-line-name">Kemang</div>
                        <div class="price">£320</div>
                    </div>
                </div>
                <div class="space railroad">
                    <div class="container">
                        <div class="name">Sunteck </div>
                        <i class="drawing fa fa-building"></i>
                        <div class="price">£200</div>
                    </div>
                </div>
                <div class="space chance">
                    <div class="container">
                        <div class="name">Chance</div>
                        <i class="drawing fa fa-question"></i>
                    </div>
                </div>
                <div class="space property">
                    <div class="container">
                        <div class="color-bar dark-blue"></div>
                        <div class="name">Bintaro</div>
                        <div class="price">£350</div>
                    </div>
                </div>
                <div class="space fee luxury-tax">
                    <div class="container">
                        <div class="name">GST</div>
                        <div class="drawing fa fa-database"></div>
                        <div class="instructions">Pay £200</div>
                    </div>
                </div>
                <div class="space property">
                    <div class="container">
                        <div class="color-bar dark-blue"></div>
                        <div class="name">Andara</div>
                        <div class="price">£400</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="players">
        <div class="player player-1"></div>
        <div class="player player-2"></div>
        <div class="player player-3"></div>
        <div class="player player-4"></div>
    </div>
    <div class="dice">
        <button class="roll-dice">Roll Dice</button>
        <span class="dice-result"></span>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    @include('layouts.footer')

</body>

</html>
