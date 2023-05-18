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
                {{-- <div class="community-chest-deck">
                    <h2 class="label rotate_atas">Community Chest</h2>
                    <div class="deck"></div>
                </div> --}}
                <img class="bg" src="{{ asset('img/moputa.png') }}" alt="mopta">
                {{-- <div class="chance-deck">
                    <h2 class="label">Chance</h2>
                    <div class="deck"></div>
                </div> --}}
            </div>

            <div class="space corner go" id="1">
                <div class="container">
                    <div class="instructions">As You Pass</div>
                    <div class="go-word">HOME</div>
                </div>
                <div class="arrow fa fa-long-arrow-left"></div>
            </div>

            <div class="row horizontal-row bottom-row">
                <div class="space property" id="10">
                    <div class="container">
                        <div class="color-bar light-blue"></div>
                        <div class="name">Kerja Keras</div>
                        {{-- <div class="price">£120</div> --}}
                    </div>
                </div>
                <div class="space property" id="9">
                    <div class="container">
                        <div class="color-bar light-blue"></div>
                        <div class="name">Eksplorasi</div>
                        {{-- <div class="price">£100</div> --}}
                    </div>
                </div>
                <div class="space chance" id="8">
                    <div class="container">
                        <div class="name">Interaksi Sosial</div>
                        <i class="drawing fa fa-question"></i>
                    </div>
                </div>
                <div class="space property" id="7">
                    <div class="container">
                        <div class="color-bar light-blue"></div>
                        <div class="name" style="padding-bottom: 60px;">Implusif</div>
                        {{-- <div class="price">£100</div> --}}
                    </div>
                </div>
                <div class="space railroad" id="6">
                    <div class="container">
                        <div class="name long-railroad" style="padding-top: 40px; margin-left:5px;">Emosional</div>
                        <i class="drawing fa fa-building"></i>
                        {{-- <div class="price">£200</div> --}}
                    </div>
                </div>
                <div class="space railroad" id="5">
                    <div class="container">
                        <div class="name" style="padding-top: 40px;">Ekspresi Diri</div>
                        <div class="diamond"></div>
                        {{-- <div class="instructions">Pay $200</div> --}}
                    </div>
                </div>
                <div class="space property" id='4'>
                    <div class="container">
                        <div class="color-bar dark-purple"></div>
                        <div class="name" style="padding-bottom: 60px;">Komunikasi </div>
                        {{-- <div class="price">£60</div> --}}
                    </div>
                </div>
                <div class="space community-chest" id="3">
                    <div class="container">
                        <div class="name" style="padding-top: 30px;">Moral</div>
                        <i class="drawing fa fa-key"></i>
                    </div>
                </div>
                <div class="space property" id='2'>
                    <div class="container">
                        <div class="color-bar dark-purple"></div>
                        <div class="name">Percaya Diri</div>
                        {{-- <div class="price">£60</div> --}}
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
                        <div class="name rotate_kiri">Public Speaking</div>
                        {{-- <div class="price rotate_kiri">£200</div> --}}
                    </div>
                </div>
                <div class="space property" id="19">
                    <div class="container">
                        <div class="color-bar orange"></div>
                        <div class="name rotate_kiri">Kesempatan</div>
                        {{-- <div class="price rotate_kiri">£180</div> --}}
                    </div>
                </div>
                <div class="space community-chest" id="18">
                    <div class="container">
                        <div class="name rotate_kiri" style="margin-top: 30px;">Stress dan Tekanan</div>
                        <i class="drawing fa fa-key"></i>
                    </div>
                </div>
                <div class="space property" id="17">
                    <div class="container">
                        <div class="color-bar orange"></div>
                        <div class="name rotate_kiri">Manajemen Waktu</div>
                        {{-- <div class="price rotate_kiri">£180</div> --}}
                    </div>
                </div>
                <div class="space property" id="16">
                    <div class="container">
                        <div class="name rotate_kiri" style="margin-top: 40px;">Komunikasi</div>
                        <i class="drawing fa fa-building"></i>
                        {{-- <div class="price rotate_kiri">£200</div> --}}
                    </div>
                </div>
                <div class="space property" id="15">
                    <div class="container">
                        <div class="color-bar purple"></div>
                        <div class="name rotate_kiri">Menjalin Hubungan Baik</div>
                        {{-- <div class="price rotate_kiri">£160</div> --}}
                    </div>
                </div>
                <div class="space property" id="14">
                    <div class="container">
                        <div class="color-bar purple"></div>
                        <div class="name rotate_kiri">Jadwal Kegiatan</div>
                        {{-- <div class="price rotate_kiri">£140</div> --}}
                    </div>
                </div>

                <!-- <div class="space fee luxury-tax property" id="39">
                    <div class="container">
                        <div class="name rotate_kanan">GST</div>
                        <div class="drawing fa fa-database"></div>
                        <div class="price rotate_kanan">Pay £200</div>
                    </div>
                </div> -->

                <div class="space utility electric-company property" id="13">
                    <div class="container">
                        <div class="name rotate_kiri" style="margin-top:40px;">Terampil</div>
                        <i class="drawing fa fa-university"></i>
                        {{-- <div class="price rotate_kiri">£150</div> --}}
                    </div>
                </div>
                <div class="space property" id="12">
                    <div class="container">
                        <div class="color-bar purple"></div>
                        <div class="name rotate_kiri">Mandiri</div>
                        {{-- <div class="price rotate_kiri">£140</div> --}}
                    </div>
                </div>
            </div>

            <div class="space corner free-parking" id="21">
                <div class="container">
                    <div class="name rotate_atas">Free</div>
                    <i class="drawing fa fa-car"></i>
                    <div class="name rotate_atas">Parking</div>
                </div>
            </div>

            <div class="row horizontal-row top-row">
                <div class="space property" id="22">
                    <div class="container">
                        <div class="color-bar red"></div>
                        <div class="name rotate_atas">Hidup Sehat</div>
                        {{-- <div class="price rotate_atas">£220</div> --}}
                    </div>
                </div>
                <div class="space chance" id="23">
                    <div class="container">
                        <div class="name rotate_atas">Kelola Emosi dan konflik</div>
                        <i class="drawing fa fa-question blue"></i>
                    </div>
                </div>
                <div class="space property" id="24">
                    <div class="container">
                        <div class="color-bar red"></div>
                        <div class="name rotate_atas">Eksplorasi Seni</div>
                        {{-- <div class="price rotate_atas">£220</div> --}}
                    </div>
                </div>
                <div class="space property" id="25">
                    <div class="container">
                        <div class="color-bar red"></div>
                        <div class="name long-name rotate_atas">Kerja Sama</div>
                        {{-- <div class="price rotate_atas">£240</div> --}}
                    </div>
                </div>
                <div class="space railroad" id="26">
                    <div class="container">
                        <div class="name rotate_atas" style="margin-top: 30px;">Pemecahan Masalah</div>
                        <i class="drawing fa fa-building"></i>
                        {{-- <div class="price rotate_atas">£200</div> --}}
                    </div>
                </div>
                <div class="space property" id="27">
                    <div class="container">
                        <div class="color-bar yellow"></div>
                        <div class="name rotate_atas">Hobi dan Minat</div>
                        {{-- <div class="price rotate_atas">£260</div> --}}
                    </div>
                </div>
                <div class="space property" id="28">
                    <div class="container">
                        <div class="color-bar yellow"></div>
                        <div class="name rotate_atas">Finansial</div>
                        {{-- <div class="price rotate_atas">£260</div> --}}
                    </div>
                </div>
                <div class="space utility waterworks" id="29">
                    <div class="container">
                        <div class="name rotate_atas" style="margin-top: 30px;">Kegiatan Sosial</div>
                        <i class="drawing fa fa-university"></i>
                        {{-- <div class="price rotate_atas">£150</div> --}}
                    </div>
                </div>
                <div class="space property" id="30">
                    <div class="container">
                        <div class="color-bar yellow"></div>
                        <div class="name long-name rotate_atas">Harapan</div>
                        {{-- <div class="price rotate_atas">£280</div> --}}
                    </div>
                </div>
            </div>

            <div class="space corner go-to-jail" id="31">
                <div class="container">
                    <div class="name rotate_atas">Jail</div>
                    <i class="drawing fa fa-gavel"></i>
                    <div class="name rotate_atas">Go To</div>
                </div>
            </div>
            <div class="row vertical-row right-row">
                <div class="space property" id="32">
                    <div class="container">
                        <div class="color-bar green"></div>
                        <div class="name rotate_kanan">Nilai Moral yang Baik</div>
                        {{-- <div class="price rotate_kanan">£300</div> --}}
                    </div>
                </div>
                <div class="space property" id="33">
                    <div class="container">
                        <div class="color-bar green"></div>
                        <div class="name rotate_kanan">Pergaulan</div>
                        {{-- <div class="price rotate_kanan">£300</div> --}}
                    </div>
                </div>
                <div class="space community-chest" id="34">
                    <div class="container">
                        <div class="name rotate_kanan" style="margin-top: 30px;">Toleransi</div>
                        <i class="drawing fa fa-key"></i>
                    </div>
                </div>
                <div class="space property" id="35">
                    <div class="container">
                        <div class="color-bar green"></div>
                        <div class="name rotate_kanan two-line-name rotate_kanan">Etika dan Norma</div>
                        {{-- <div class="price rotate_kanan">£320</div> --}}
                    </div>
                </div>

                <!-- <div class="space property" id="32">
                    <div class="container">
                        <div class="color-bar green"></div>
                        <div class="name rotate_kanan">Menteng</div>
                        <div class="price rotate_kanan">£300</div>
                    </div>
                </div> -->

                <div class="space property" id="36">
                    <div class="container">
                        <div class="name rotate_kanan" style="margin-top: 50px;">Etika Sosial </div>
                        <i class="drawing fa fa-building"></i>
                        {{-- <div class="price rotate_kanan">£200</div> --}}
                    </div>
                </div>
                <div class="space chance" id="37">
                    <div class="container">
                        <div class="name rotate_kanan">Inter personal</div>
                        <i class="drawing fa fa-question"></i>
                    </div>
                </div>
                <div class="space property" id="38">
                    <div class="container">
                        <div class="color-bar dark-blue"></div>
                        <div class="name rotate_kanan">Empati</div>
                        {{-- <div class="price rotate_kanan">£350</div> --}}
                    </div>
                </div>
                <div class="space fee luxury-tax property" id="39">
                    <div class="container">
                        <div class="name rotate_kanan" style="margin-top: 30px; font-size:10px;">Tanggung Jawab</div>
                        <div class="drawing fa fa-database"></div>
                        {{-- <div class="price rotate_kanan">Pay £200</div> --}}
                    </div>
                </div>
                <div class="space property" id="40">
                    <div class="container">
                        <div class="color-bar dark-blue"></div>
                        <div class="name rotate_kanan">Pemimpin</div>
                        {{-- <div class="price rotate_kanan">£400</div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="answers">
        <div class="answer" id="answer-1">1</div>
    </div>

    <div class="dice">
        <button class="roll-dice">Roll Dice</button>
        <span class="dice-result"></span>
        <br />
        <img src="https://bit.ly/dice-unknown" id="dice">
    </div>
    @include('layouts.footer')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/dice.js') }}"></script>
</body>

</html>
