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

            <div class="space corner go" id="1">
                <div class="container">
                    <div class="instructions">Collect £200 as you pass</div>
                    <div class="go-word">HOME</div>
                </div>
                <div class="arrow fa fa-long-arrow-left"></div>
            </div>

            <div class="row horizontal-row bottom-row">
                <div class="space property" id="10">
                    <div class="container">
                        <div class="color-bar light-blue"></div>
                        <div class="name">Club House The Chofa</div>
                        <div class="price">£120</div>
                    </div>
                </div>
                <div class="space property" id="9">
                    <div class="container">
                        <div class="color-bar light-blue"></div>
                        <div class="name">Royal Residence</div>
                        <div class="price">£100</div>
                    </div>
                </div>
                <div class="space chance" id="8">
                    <div class="container">
                        <div class="name">Chance</div>
                        <i class="drawing fa fa-question"></i>
                    </div>
                </div>
                <div class="space property" id="7">
                    <div class="container">
                        <div class="color-bar light-blue"></div>
                        <div class="name">Citra Garden</div>
                        <div class="price">£100</div>
                    </div>
                </div>
                <div class="space railroad" id="6">
                    <div class="container">
                        <div class="name long-railroad">Jal Darshan</div>
                        <i class="drawing fa fa-building"></i>
                        <div class="price">£200</div>
                    </div>
                </div>
                <div class="space fee income-tax" id="5">
                    <div class="container">
                        <div class="name">Income Tax</div>
                        <div class="diamond"></div>
                        <div class="instructions">Pay $200</div>
                    </div>
                </div>
                <div class="space property" id='4'>
                    <div class="container">
                        <div class="color-bar dark-purple"></div>
                        <div class="name">Permata Jingga</div>
                        <div class="price">£60</div>
                    </div>
                </div>
                <div class="space community-chest" id="3">
                    <div class="container">
                        <div class="name">Community Chest</div>
                        <i class="drawing fa fa-key"></i>
                    </div>
                </div>
                <div class="space property" id='2'>
                    <div class="container">
                        <div class="color-bar dark-purple"></div>
                        <div class="name">Sulfat Indah</div>
                        <div class="price">£60</div>
                    </div>
                </div>
            </div>

            <div class="space corner jail" id="11">
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
                <div class="space property" id="20">
                    <div class="container">
                        <div class="color-bar orange"></div>
                        <div class="name">Jl. Marioboro</div>
                        <div class="price">£200</div>
                    </div>
                </div>
                <div class="space property" id="19">
                    <div class="container">
                        <div class="color-bar orange"></div>
                        <div class="name">Ambarukmo Green Hills</div>
                        <div class="price">£180</div>
                    </div>
                </div>
                <div class="space community-chest" id="18">
                    <div class="container">
                        <div class="name">Community Chest</div>
                        <i class="drawing fa fa-key"></i>
                    </div>
                </div>
                <div class="space property" id="17">
                    <div class="container">
                        <div class="color-bar orange"></div>
                        <div class="name">Royal Maguwo</div>
                        <div class="price">£180</div>
                    </div>
                </div>
                <div class="space railroad" id="16">
                    <div class="container">
                        <div class="name">Landmark</div>
                        <i class="drawing fa fa-building"></i>
                        <div class="price">£200</div>
                    </div>
                </div>
                <div class="space property" id="15">
                    <div class="container">
                        <div class="color-bar purple"></div>
                        <div class="name">Bukit Wahid Regency</div>
                        <div class="price">£160</div>
                    </div>
                </div>
                <div class="space property" id="14">
                    <div class="container">
                        <div class="color-bar purple"></div>
                        <div class="name">BSB City</div>
                        <div class="price">£140</div>
                    </div>
                </div>
                <div class="space utility electric-company" id="13">
                    <div class="container">
                        <div class="name">JP Morgan</div>
                        <i class="drawing fa fa-university"></i>
                        <div class="price">£150</div>
                    </div>
                </div>
                <div class="space property" id="12">
                    <div class="container">
                        <div class="color-bar purple"></div>
                        <div class="name">Pandanaran Hills</div>
                        <div class="price">£140</div>
                    </div>
                </div>
            </div>

            <div class="space corner free-parking" id="21">
                <div class="container">
                    <div class="name">Free</div>
                    <i class="drawing fa fa-car"></i>
                    <div class="name">Parking</div>
                </div>
            </div>

            <div class="row horizontal-row top-row">
                <div class="space property" id="22">
                    <div class="container">
                        <div class="color-bar red"></div>
                        <div class="name">Naira Residence</div>
                        <div class="price">£220</div>
                    </div>
                </div>
                <div class="space chance" id="23">
                    <div class="container">
                        <div class="name">Chance</div>
                        <i class="drawing fa fa-question blue"></i>
                    </div>
                </div>
                <div class="space property" id="24">
                    <div class="container">
                        <div class="color-bar red"></div>
                        <div class="name">The Faradila Townhouse</div>
                        <div class="price">£220</div>
                    </div>
                </div>
                <div class="space property" id="25">
                    <div class="container">
                        <div class="color-bar red"></div>
                        <div class="name long-name">Brentwood Reisdence</div>
                        <div class="price">£240</div>
                    </div>
                </div>
                <div class="space railroad" id="26">
                    <div class="container">
                        <div class="name"id="show-popup">Kalpataru</div>
                        <i class="drawing fa fa-building"></i>
                        <div class="price">£200</div>
                        <div id="my-popup" style="display:none">
                            <h2>Ini adalah judul popup</h2>
                            <p>Ini adalah konten popup</p>
                        </div>
                    </div>
                </div>
                <div class="space property" id="27">
                    <div class="container">
                        <div class="color-bar yellow"></div>
                        <div class="name">Calistha Dago</div>
                        <div class="price">£260</div>
                    </div>
                </div>
                <div class="space property" id="28">
                    <div class="container">
                        <div class="color-bar yellow"></div>
                        <div class="name">Dago Village</div>
                        <div class="price">£260</div>
                    </div>
                </div>
                <div class="space utility waterworks" id="29">
                    <div class="container">
                        <div class="name">Stan C</div>
                        <i class="drawing fa fa-university"></i>
                        <div class="price">£150</div>
                    </div>
                </div>
                <div class="space property" id="30">
                    <div class="container">
                        <div class="color-bar yellow"></div>
                        <div class="name long-name">Summarecon</div>
                        <div class="price">£280</div>
                    </div>
                </div>
            </div>

            <div class="space corner go-to-jail" id="31">
                <div class="container">
                    <div class="name">Go To</div>
                    <i class="drawing fa fa-gavel"></i>
                    <div class="name">Jail</div>
                </div>
            </div>
            <div class="row vertical-row right-row">
                <div class="space property" id="32">
                    <div class="container">
                        <div class="color-bar green"></div>
                        <div class="name">Menteng</div>
                        <div class="price">£300</div>
                    </div>
                </div>
                <div class="space property" id="33">
                    <div class="container">
                        <div class="color-bar green"></div>
                        <div class="name">Senopati</div>
                        <div class="price">£300</div>
                    </div>
                </div>
                <div class="space community-chest" id="34">
                    <div class="container">
                        <div class="name">Community Chest</div>
                        <i class="drawing fa fa-key"></i>
                    </div>
                </div>
                <div class="space property" id="35">
                    <div class="container">
                        <div class="color-bar green"></div>
                        <div class="name two-line-name">Kemang</div>
                        <div class="price">£320</div>
                    </div>
                </div>
                <div class="space railroad" id="36">
                    <div class="container">
                        <div class="name">Sunteck </div>
                        <i class="drawing fa fa-building"></i>
                        <div class="price">£200</div>
                    </div>
                </div>
                <div class="space chance" id="37">
                    <div class="container">
                        <div class="name">Chance</div>
                        <i class="drawing fa fa-question"></i>
                    </div>
                </div>
                <div class="space property" id="38">
                    <div class="container">
                        <div class="color-bar dark-blue"></div>
                        <div class="name">Bintaro</div>
                        <div class="price">£350</div>
                    </div>
                </div>
                <div class="space fee luxury-tax" id="39">
                    <div class="container">
                        <div class="name">GST</div>
                        <div class="drawing fa fa-database"></div>
                        <div class="instructions">Pay £200</div>
                    </div>
                </div>
                <div class="space property" id="40">
                    <div class="container">
                        <div class="color-bar dark-blue"></div>
                        <div class="name">Andara</div>
                        <div class="price">£400</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dice">
        <button class="roll-dice">Roll Dice</button>
        <span class="dice-result"></span>
        <br/>
        <img src="https://bit.ly/dice-unknown" id="dice">
    </div>
    @include('layouts.footer')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/dice.js') }}"></script>
</body>
</html>