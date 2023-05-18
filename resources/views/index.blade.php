@extends('layouts.master')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;500;700;900&display=swap"
        rel="stylesheet" />
    <title>M O P U T A</title>
</head>

<body>
    <div class="gameArea">
        <div class="startPage">
            <div class="playerSettings">
                <br/><br/>
                <h1>Welcome to M O P U T A</h1>
                <div class="playerBar">
                    <div class="playerIcon startPagePlayer" style="width: 60px">
                        <img src="./img/player1.png" height="40px" />
                    </div>
                    <label for="player1Name">Player 1 Nama :</label><input id="typePlayer1Name" name="player"
                        type="text" placeholder="Player 1" maxlength="5" />
                </div>
                <br/>
                <div class="playerBar">
                    <div class="playerIcon startPagePlayer" style="width: 60px">
                        <img src="./img/player2.png" height="40px" />
                    </div>
                    <label for="player2Name">Player 2 Nama :</label><input id="typePlayer2Name" name="player2Name"
                        type="text" placeholder="Player 2" maxlength="8" />
                </div>
                <br/>
                <div class="playerBar">
                    <div class="playerIcon startPagePlayer" style="width: 60px">
                        <img src="./img/player3.png" height="40px" />
                    </div>
                    <label for="player3Name">Player 3 Nama :</label><input id="typePlayer3Name" name="player3Name"
                        type="text" placeholder="Player 3" maxlength="8" />
                </div>
                <br/>
                <div class="playerBar">
                    <div class="playerIcon startPagePlayer" style="width: 60px">
                        <img src="./img/player4.png" height="40px" />
                    </div>
                    <label for="player4Name">Player 4 Nama :</label><input id="typePlayer4Name" name="player4Name"
                        type="text" placeholder="Player 4" maxlength="8" />
                </div>
                <br/>
                <button class="startBtn" onclick="startGame()">Start Game</button>
            </div>
        </div>
        <div class="resultPage hide">
            <div class="resultBox">
                <div style="font-size: 24px">Hasil Permainan</div>
                <div class="longResult">Detail:</div>
                <div class="playerResultBigBox">
                    <div class="playercolbar">
                        <div class="playercol1">Player</div>
                        <div class="playercol2">Uang Tunai</div>
                        <div class="playercol3">Nilai Properti</div>
                        <div class="playercol4">Total Asset</div>
                    </div>
                    <div id="player1EndInfo" class="playerInfo">
                        <div class="playerIconBar">
                            <img src="./img/player1.png" height="40px" />
                            <div class="playerName">player 1</div>
                        </div>
                        <div class="playerMoney playerEndMoney">$15000</div>
                        <div class="playerMoney playerEndPropValue">$0</div>
                        <div class="playerMoney playerEndTotalValue">$15000</div>
                    </div>
                    <div id="player2EndInfo" class="playerInfo">
                        <div class="playerIconBar">
                            <img src="./img/player2.png" height="40px" />
                            <div class="playerName">Player 2</div>
                        </div>
                        <div class="playerMoney playerEndMoney">$15000</div>
                        <div class="playerMoney playerEndPropValue">$0</div>
                        <div class="playerMoney playerEndTotalValue">$15000</div>
                    </div>
                    <div id="player3EndInfo" class="playerInfo">
                        <div class="playerIconBar">
                            <img src="./img/player3.png" height="40px" />
                            <div class="playerName">Player 3</div>
                        </div>
                        <div class="playerMoney playerEndMoney">$15000</div>
                        <div class="playerMoney playerEndPropValue">$0</div>
                        <div class="playerMoney playerEndTotalValue">$15000</div>
                    </div>
                    <div id="player4EndInfo" class="playerInfo">
                        <div class="playerIconBar">
                            <img src="./img/player4.png" height="40px" />
                            <div class="playerName">Player 4</div>
                        </div>
                        <div class="playerMoney playerEndMoney">$15000</div>
                        <div class="playerMoney playerEndPropValue">$0</div>
                        <div class="playerMoney playerEndTotalValue">$15000</div>
                    </div>
                </div>
                <button class="restartBtn" onclick="window.location.reload()">
                    Ulang
                </button>
            </div>
        </div>

        <div class="board">
            <div class="parent">
                <div class="messageBox">
                    <div class="messageBoxTop">Pesan</div>
                    <div class="messageBoxMiddle">p</div>
                    <div class="messageBoxBottom">
                        <!-- <button class="messageBoxBtn">
                <div class="confirmBtn">Test</div></button
              ><button class="messageBoxBtn">Test</button> -->
                    </div>
                </div>
                <div class="div0 square corner">
                    <div id="gocontainer">
                        <img src="./img/GO.svg" />
                    </div>
                </div>
                <div class="div1 square horizontal firstRow">
                    <div id="prop1" class="prop propBottom"></div>
                    <div class="levelup"></div>
                    <div class="property-popup">
                        <div class="propertyheader">
                            <div class="property-name">Nama Tempat</div>
                        </div>
                        <div class="property-price">Harga Tanah:</div>
                        <div class="property-description">
                            <div class="property-owner">Pemilik: Tidak Ada</div>
                            <div class="property-value">Nilai properti saat ini:</div>
                            <div class="property-lv1-rent">sewa kelas 1:</div>
                            <div class="property-lv2-rent">sewa kelas 2:</div>
                            <div class="property-lv3-rent">sewa kelas 3:</div>
                            <div class="property-lv4-rent">sewa kelas 4:</div>
                        </div>
                    </div>
                </div>
                <div class="div2 squareh horizontal firstRow">
                    <div class="containerh">
                        <img src="./img/chances-h.svg" />
                    </div>
                </div>
                <div class="div3 square horizontal firstRow">
                    <div id="prop3" class="prop propBottom"></div>
                    <div class="levelup"></div>
                    <div class="property-popup">
                        <div class="propertyheader">
                            <div class="property-name">nama tempat</div>
                        </div>
                        <div class="property-price">harga tanah:</div>
                        <div class="property-description">
                            <div class="property-owner">Pemilik: Tidak ada</div>
                            <div class="property-value">Nilai properti saat ini:</div>
                            <div class="property-lv1-rent">sewa kelas 1:</div>
                            <div class="property-lv2-rent">sewa kelas 2:</div>
                            <div class="property-lv3-rent">sewa kelas 3:</div>
                            <div class="property-lv4-rent">sewa kelas 4:</div>
                        </div>
                    </div>
                </div>
                <div class="div4 square horizontal firstRow">
                    <div id="prop4" class="prop propBottom"></div>
                    <div class="levelup"></div>
                    <div class="property-popup">
                        <div class="propertyheader">
                            <div class="property-name">nama tempat</div>
                        </div>
                        <div class="property-price">harga tanah:</div>
                        <div class="property-description">
                            <div class="property-owner">Pemilik: Tidak ada</div>
                            <div class="property-value">Nilai properti saat ini:</div>
                            <div class="property-lv1-rent">sewa kelas 1:</div>
                            <div class="property-lv2-rent">sewa kelas 2:</div>
                            <div class="property-lv3-rent">sewa kelas 3:</div>
                            <div class="property-lv4-rent">sewa kelas 4:</div>
                        </div>
                    </div>
                </div>
                <div class="div5 square horizontal firstRow">
                    <div id="prop5" class="prop propBottom"></div>
                    <div class="levelup"></div>
                    <div class="property-popup">
                        <div class="propertyheader">
                            <div class="property-name">nama tempat</div>
                        </div>
                        <div class="property-price">harga tanah:</div>
                        <div class="property-description">
                            <div class="property-owner">Pemilik: Tidak ada</div>
                            <div class="property-value">Nilai properti saat ini:</div>
                            <div class="property-lv1-rent">sewa kelas 1:</div>
                            <div class="property-lv2-rent">sewa kelas 2:</div>
                            <div class="property-lv3-rent">sewa kelas 3:</div>
                            <div class="property-lv4-rent">sewa kelas 4:</div>
                        </div>
                    </div>
                </div>
                <div class="div6 square horizontal firstRow">
                    <div id="prop6" class="prop propBottom"></div>
                    <div class="levelup"></div>
                    <div class="property-popup">
                        <div class="propertyheader">
                            <div class="property-name">nama tempat</div>
                        </div>
                        <div class="property-price">harga tanah:</div>
                        <div class="property-description">
                            <div class="property-owner">Pemilik: Tidak ada</div>
                            <div class="property-value">Nilai properti saat ini:</div>
                            <div class="property-lv1-rent">sewa kelas 1:</div>
                            <div class="property-lv2-rent">sewa kelas 2:</div>
                            <div class="property-lv3-rent">sewa kelas 3:</div>
                            <div class="property-lv4-rent">sewa kelas 4:</div>
                        </div>
                    </div>
                </div>
                <div class="div7 squareh horizontal firstRow">
                    <div class="containerh">
                        <img src="./img/hke.svg" />
                    </div>
                </div>
                <div class="div8 square horizontal firstRow">
                    <div id="prop8" class="prop propBottom"></div>
                    <div class="levelup"></div>
                    <div class="property-popup">
                        <div class="propertyheader">
                            <div class="property-name">nama tempat</div>
                        </div>
                        <div class="property-price">harga tanah:</div>
                        <div class="property-description">
                            <div class="property-owner">Pemilik: Tidak ada</div>
                            <div class="property-value">Nilai properti saat ini:</div>
                            <div class="property-lv1-rent">sewa kelas 1:</div>
                            <div class="property-lv2-rent">sewa kelas 2:</div>
                            <div class="property-lv3-rent">sewa kelas 3:</div>
                            <div class="property-lv4-rent">sewa kelas 4:</div>
                        </div>
                    </div>
                </div>
                <div class="div9 square horizontal firstRow">
                    <div id="prop9" class="prop propBottom"></div>
                    <div class="levelup"></div>
                    <div class="property-popup">
                        <div class="propertyheader">
                            <div class="property-name">nama tempat</div>
                        </div>
                        <div class="property-price">harga tanah:</div>
                        <div class="property-description">
                            <div class="property-owner">Pemilik: Tidak ada</div>
                            <div class="property-value">Nilai properti saat ini:</div>
                            <div class="property-lv1-rent">sewa kelas 1:</div>
                            <div class="property-lv2-rent">sewa kelas 2:</div>
                            <div class="property-lv3-rent">sewa kelas 3:</div>
                            <div class="property-lv4-rent">sewa kelas 4:</div>
                        </div>
                    </div>
                </div>
                <div class="div10 squareb corner">
                    <div id="freeparkingcontainer">
                        <img src="./img/freeparking.svg" />
                    </div>
                </div>
                <div class="div11 square vertical secondRow">
                    <div id="prop11" class="prop propLeft"></div>
                    <div class="levelup"></div>
                    <div class="property-popup">
                        <div class="propertyheader">
                            <div class="property-name">nama tempat</div>
                        </div>
                        <div class="property-price">harga tanah:</div>
                        <div class="property-description">
                            <div class="property-owner">Pemilik: Tidak ada</div>
                            <div class="property-value">Nilai properti saat ini:</div>
                            <div class="property-lv1-rent">sewa kelas 1:</div>
                            <div class="property-lv2-rent">sewa kelas 2:</div>
                            <div class="property-lv3-rent">sewa kelas 3:</div>
                            <div class="property-lv4-rent">sewa kelas 4:</div>
                        </div>
                    </div>
                </div>
                <div class="div12 squarev vertical secondRow">
                    <div class="containerv">
                        <img src="./img/incometax.svg" />
                    </div>
                </div>
                <div class="div13 square vertical secondRow">
                    <div id="prop13" class="prop propLeft"></div>
                    <div class="levelup"></div>
                    <div class="property-popup">
                        <div class="propertyheader">
                            <div class="property-name">nama tempat</div>
                        </div>
                        <div class="property-price">harga tanah:</div>
                        <div class="property-description">
                            <div class="property-owner">Pemilik: Tidak ada</div>
                            <div class="property-value">Nilai properti saat ini:</div>
                            <div class="property-lv1-rent">sewa kelas 1:</div>
                            <div class="property-lv2-rent">sewa kelas 2:</div>
                            <div class="property-lv3-rent">sewa kelas 3:</div>
                            <div class="property-lv4-rent">sewa kelas 4:</div>
                        </div>
                    </div>
                </div>
                <div class="div14 square vertical secondRow">
                    <div id="prop14" class="prop propLeft"></div>
                    <div class="levelup"></div>
                    <div class="property-popup">
                        <div class="propertyheader">
                            <div class="property-name">nama tempat</div>
                        </div>
                        <div class="property-price">harga tanah:</div>
                        <div class="property-description">
                            <div class="property-owner">Pemilik: Tidak ada</div>
                            <div class="property-value">Nilai properti saat ini:</div>
                            <div class="property-lv1-rent">sewa kelas 1:</div>
                            <div class="property-lv2-rent">sewa kelas 2:</div>
                            <div class="property-lv3-rent">sewa kelas 3:</div>
                            <div class="property-lv4-rent">sewa kelas 4:</div>
                        </div>
                    </div>
                </div>
                <div class="div15 square vertical secondRow">
                    <div id="prop15" class="prop propLeft"></div>
                    <div class="levelup"></div>
                    <div class="property-popup">
                        <div class="propertyheader">
                            <div class="property-name">nama tempat</div>
                        </div>
                        <div class="property-price">harga tanah:</div>
                        <div class="property-description">
                            <div class="property-owner">Pemilik: Tidak ada</div>
                            <div class="property-value">Nilai properti saat ini:</div>
                            <div class="property-lv1-rent">sewa kelas 1:</div>
                            <div class="property-lv2-rent">sewa kelas 2:</div>
                            <div class="property-lv3-rent">sewa kelas 3:</div>
                            <div class="property-lv4-rent">sewa kelas 4:</div>
                        </div>
                    </div>
                </div>
                <div class="div16 square vertical secondRow">
                    <div id="prop16" class="prop propLeft"></div>
                    <div class="levelup"></div>
                    <div class="property-popup">
                        <div class="propertyheader">
                            <div class="property-name">nama tempat</div>
                        </div>
                        <div class="property-price">harga tanah:</div>
                        <div class="property-description">
                            <div class="property-owner">Pemilik: Tidak ada</div>
                            <div class="property-value">Nilai properti saat ini:</div>
                            <div class="property-lv1-rent">sewa kelas 1:</div>
                            <div class="property-lv2-rent">sewa kelas 2:</div>
                            <div class="property-lv3-rent">sewa kelas 3:</div>
                            <div class="property-lv4-rent">sewa kelas 4:</div>
                        </div>
                    </div>
                </div>
                <div class="div17 squarev vertical secondRow">
                    <div class="containerv">
                        <img src="./img/chances-v.svg" />
                    </div>
                </div>
                <div class="div18 square vertical secondRow">
                    <div id="prop18" class="prop propLeft"></div>
                    <div class="levelup"></div>
                    <div class="property-popup">
                        <div class="propertyheader">
                            <div class="property-name">nama tempat</div>
                        </div>
                        <div class="property-price">harga tanah:</div>
                        <div class="property-description">
                            <div class="property-owner">Pemilik: Tidak ada</div>
                            <div class="property-value">Nilai properti saat ini:</div>
                            <div class="property-lv1-rent">sewa kelas 1:</div>
                            <div class="property-lv2-rent">sewa kelas 2:</div>
                            <div class="property-lv3-rent">sewa kelas 3:</div>
                            <div class="property-lv4-rent">sewa kelas 4:</div>
                        </div>
                    </div>
                </div>
                <div class="div19 square vertical secondRow">
                    <div id="prop19" class="prop propLeft"></div>
                    <div class="levelup"></div>
                    <div class="property-popup">
                        <div class="propertyheader">
                            <div class="property-name">nama tempat</div>
                        </div>
                        <div class="property-price">harga tanah:</div>
                        <div class="property-description">
                            <div class="property-owner">Pemilik: Tidak ada</div>
                            <div class="property-value">Nilai properti saat ini:</div>
                            <div class="property-lv1-rent">sewa kelas 1:</div>
                            <div class="property-lv2-rent">sewa kelas 2:</div>
                            <div class="property-lv3-rent">sewa kelas 3:</div>
                            <div class="property-lv4-rent">sewa kelas 4:</div>
                        </div>
                    </div>
                </div>
                <div class="div20 square corner">
                    <div id="wheelcontainer">
                        <img src="./img/wheel.svg" />
                    </div>
                </div>
                <div class="div21 square horizontal thirdRow">
                    <div id="prop21" class="prop propTop"></div>
                    <div class="levelup"></div>
                    <div class="property-popup">
                        <div class="propertyheader">
                            <div class="property-name">nama tempat</div>
                        </div>
                        <div class="property-price">harga tanah:</div>
                        <div class="property-description">
                            <div class="property-owner">Pemilik: Tidak ada</div>
                            <div class="property-value">Nilai properti saat ini:</div>
                            <div class="property-lv1-rent">sewa kelas 1:</div>
                            <div class="property-lv2-rent">sewa kelas 2:</div>
                            <div class="property-lv3-rent">sewa kelas 3:</div>
                            <div class="property-lv4-rent">sewa kelas 4:</div>
                        </div>
                    </div>>
                </div>
                <div class="div22 square horizontal thirdRow">
                    <div id="prop22" class="prop propTop"></div>
                    <div class="levelup"></div>
                    <div class="property-popup">
                        <div class="propertyheader">
                            <div class="property-name">nama tempat</div>
                        </div>
                        <div class="property-price">harga tanah:</div>
                        <div class="property-description">
                            <div class="property-owner">Pemilik: Tidak ada</div>
                            <div class="property-value">Nilai properti saat ini:</div>
                            <div class="property-lv1-rent">sewa kelas 1:</div>
                            <div class="property-lv2-rent">sewa kelas 2:</div>
                            <div class="property-lv3-rent">sewa kelas 3:</div>
                            <div class="property-lv4-rent">sewa kelas 4:</div>
                        </div>
                    </div>
                </div>
                <div class="div23 square horizontal thirdRow">
                    <div id="prop23" class="prop propTop"></div>
                    <div class="levelup"></div>
                    <div class="property-popup">
                        <div class="propertyheader">
                            <div class="property-name">nama tempat</div>
                        </div>
                        <div class="property-price">harga tanah:</div>
                        <div class="property-description">
                            <div class="property-owner">Pemilik: Tidak ada</div>
                            <div class="property-value">Nilai properti saat ini:</div>
                            <div class="property-lv1-rent">sewa kelas 1:</div>
                            <div class="property-lv2-rent">sewa kelas 2:</div>
                            <div class="property-lv3-rent">sewa kelas 3:</div>
                            <div class="property-lv4-rent">sewa kelas 4:</div>
                        </div>
                    </div>
                </div>
                <div class="div24 square horizontal thirdRow">
                    <div id="prop24" class="prop propTop"></div>
                    <div class="levelup"></div>
                    <div class="property-popup">
                        <div class="propertyheader">
                            <div class="property-name">nama tempat</div>
                        </div>
                        <div class="property-price">harga tanah:</div>
                        <div class="property-description">
                            <div class="property-owner">Pemilik: Tidak ada</div>
                            <div class="property-value">Nilai properti saat ini:</div>
                            <div class="property-lv1-rent">sewa kelas 1:</div>
                            <div class="property-lv2-rent">sewa kelas 2:</div>
                            <div class="property-lv3-rent">sewa kelas 3:</div>
                            <div class="property-lv4-rent">sewa kelas 4:</div>
                        </div>
                    </div>
                </div>
                <div class="div25 squareh horizontal thirdRow">
                    <div class="containerh">
                        <img src="./img/chances-h.svg" />
                    </div>
                </div>
                <div class="div26 square horizontal thirdRow">
                    <div id="prop26" class="prop propTop"></div>
                    <div class="levelup"></div>
                    <div class="property-popup">
                        <div class="propertyheader">
                            <div class="property-name">nama tempat</div>
                        </div>
                        <div class="property-price">harga tanah:</div>
                        <div class="property-description">
                            <div class="property-owner">Pemilik: Tidak ada</div>
                            <div class="property-value">Nilai properti saat ini:</div>
                            <div class="property-lv1-rent">sewa kelas 1:</div>
                            <div class="property-lv2-rent">sewa kelas 2:</div>
                            <div class="property-lv3-rent">sewa kelas 3:</div>
                            <div class="property-lv4-rent">sewa kelas 4:</div>
                        </div>
                    </div>
                </div>
                <div class="div27 squareh horizontal thirdRow">
                    <div class="containerh">
                        <img src="./img/stampduty.svg" />
                    </div>
                </div>
                <div class="div28 square horizontal thirdRow">
                    <div id="prop28" class="prop propTop"></div>
                    <div class="levelup"></div>
                    <div class="property-popup">
                        <div class="propertyheader">
                            <div class="property-name">nama tempat</div>
                        </div>
                        <div class="property-price">harga tanah:</div>
                        <div class="property-description">
                            <div class="property-owner">Pemilik: Tidak ada</div>
                            <div class="property-value">Nilai properti saat ini:</div>
                            <div class="property-lv1-rent">sewa kelas 1:</div>
                            <div class="property-lv2-rent">sewa kelas 2:</div>
                            <div class="property-lv3-rent">sewa kelas 3:</div>
                            <div class="property-lv4-rent">sewa kelas 4:</div>
                        </div>
                    </div>
                </div>
                <div class="div29 square horizontal thirdRow">
                    <div id="prop29" class="prop propTop"></div>
                    <div class="levelup"></div>
                    <div class="property-popup">
                        <div class="propertyheader">
                            <div class="property-name">nama tempat</div>
                        </div>
                        <div class="property-price">harga tanah:</div>
                        <div class="property-description">
                            <div class="property-owner">Pemilik: Tidak ada</div>
                            <div class="property-value">Nilai properti saat ini:</div>
                            <div class="property-lv1-rent">sewa kelas 1:</div>
                            <div class="property-lv2-rent">sewa kelas 2:</div>
                            <div class="property-lv3-rent">sewa kelas 3:</div>
                            <div class="property-lv4-rent">sewa kelas 4:</div>
                        </div>
                    </div>
                </div>
                <div class="div30 squareb corner">
                    <div id="jailcontainer">
                        <img src="./img/jail.svg" />
                    </div>
                </div>
                <div class="div31 square vertical fourthRow">
                    <div id="prop31" class="prop propRight"></div>
                    <div class="levelup"></div>
                    <div class="property-popup">
                        <div class="propertyheader">
                            <div class="property-name">nama tempat</div>
                        </div>
                        <div class="property-price">harga tanah:</div>
                        <div class="property-description">
                            <div class="property-owner">Pemilik: Tidak ada</div>
                            <div class="property-value">Nilai properti saat ini:</div>
                            <div class="property-lv1-rent">sewa kelas 1:</div>
                            <div class="property-lv2-rent">sewa kelas 2:</div>
                            <div class="property-lv3-rent">sewa kelas 3:</div>
                            <div class="property-lv4-rent">sewa kelas 4:</div>
                        </div>
                    </div>
                </div>
                <div class="div32 squarev vertical fourthRow">
                    <div id="prop32" class="containerv">
                        <img src="./img/luxurytax.svg" />
                    </div>
                </div>
                <div class="div33 square vertical fourthRow">
                    <div id="prop33" class="prop propRight"></div>
                    <div class="levelup"></div>
                    <div class="property-popup">
                        <div class="propertyheader">
                            <div class="property-name">nama tempat</div>
                        </div>
                        <div class="property-price">harga tanah:</div>
                        <div class="property-description">
                            <div class="property-owner">Pemilik: Tidak ada</div>
                            <div class="property-value">Nilai properti saat ini:</div>
                            <div class="property-lv1-rent">sewa kelas 1:</div>
                            <div class="property-lv2-rent">sewa kelas 2:</div>
                            <div class="property-lv3-rent">sewa kelas 3:</div>
                            <div class="property-lv4-rent">sewa kelas 4:</div>
                        </div>
                    </div>
                </div>
                <div class="div34 square vertical fourthRow">
                    <div id="prop34" class="prop propRight"></div>
                    <div class="levelup"></div>
                    <div class="property-popup">
                        <div class="propertyheader">
                            <div class="property-name">nama tempat</div>
                        </div>
                        <div class="property-price">harga tanah:</div>
                        <div class="property-description">
                            <div class="property-owner">Pemilik: Tidak ada</div>
                            <div class="property-value">Nilai properti saat ini:</div>
                            <div class="property-lv1-rent">sewa kelas 1:</div>
                            <div class="property-lv2-rent">sewa kelas 2:</div>
                            <div class="property-lv3-rent">sewa kelas 3:</div>
                            <div class="property-lv4-rent">sewa kelas 4:</div>
                        </div>
                    </div>
                </div>
                <div class="div35 square vertical fourthRow">
                    <div id="prop35" class="prop propRight"></div>
                    <div class="levelup"></div>
                    <div class="property-popup">
                        <div class="propertyheader">
                            <div class="property-name">nama tempat</div>
                        </div>
                        <div class="property-price">harga tanah:</div>
                        <div class="property-description">
                            <div class="property-owner">Pemilik: Tidak ada</div>
                            <div class="property-value">Nilai properti saat ini:</div>
                            <div class="property-lv1-rent">sewa kelas 1:</div>
                            <div class="property-lv2-rent">sewa kelas 2:</div>
                            <div class="property-lv3-rent">sewa kelas 3:</div>
                            <div class="property-lv4-rent">sewa kelas 4:</div>
                        </div>
                    </div>
                </div>
                <div class="div36 square vertical fourthRow">
                    <div id="prop36" class="prop propRight"></div>
                    <div class="levelup"></div>
                    <div class="property-popup">
                        <div class="propertyheader">
                            <div class="property-name">nama tempat</div>
                        </div>
                        <div class="property-price">harga tanah:</div>
                        <div class="property-description">
                            <div class="property-owner">Pemilik: Tidak ada</div>
                            <div class="property-value">Nilai properti saat ini:</div>
                            <div class="property-lv1-rent">sewa kelas 1:</div>
                            <div class="property-lv2-rent">sewa kelas 2:</div>
                            <div class="property-lv3-rent">sewa kelas 3:</div>
                            <div class="property-lv4-rent">sewa kelas 4:</div>
                        </div>
                    </div>
                </div>
                <div class="div37 squarev vertical fourthRow">
                    <div class="containerv">
                        <img src="./img/chances-v.svg" />
                    </div>
                </div>
                <div class="div38 square vertical fourthRow">
                    <div id="prop38" class="prop propRight"></div>
                    <div class="levelup"></div>
                    <div class="property-popup">
                        <div class="propertyheader">
                            <div class="property-name">nama tempat</div>
                        </div>
                        <div class="property-price">harga tanah:</div>
                        <div class="property-description">
                            <div class="property-owner">Pemilik: Tidak ada</div>
                            <div class="property-value">Nilai properti saat ini:</div>
                            <div class="property-lv1-rent">sewa kelas 1:</div>
                            <div class="property-lv2-rent">sewa kelas 2:</div>
                            <div class="property-lv3-rent">sewa kelas 3:</div>
                            <div class="property-lv4-rent">sewa kelas 4:</div>
                        </div>
                    </div>
                </div>
                <div class="div39 square vertical fourthRow">
                    <div id="prop39" class="prop propRight"></div>
                    <div class="levelup"></div>
                    <div class="property-popup">
                        <div class="propertyheader">
                            <div class="property-name">nama tempat</div>
                        </div>
                        <div class="property-price">harga tanah:</div>
                        <div class="property-description">
                            <div class="property-owner">Pemilik: Tidak ada</div>
                            <div class="property-value">Nilai properti saat ini:</div>
                            <div class="property-lv1-rent">sewa kelas 1:</div>
                            <div class="property-lv2-rent">sewa kelas 2:</div>
                            <div class="property-lv3-rent">sewa kelas 3:</div>
                            <div class="property-lv4-rent">sewa kelas 4:</div>
                        </div>
                    </div>
                </div>
                <div class="div40">
                    <div>
                        <h1 style="font-weight: bold">pemain saat ini</h1>
                        <p id="playernow">player 1</p>
                        <div id="logo"><img src="img/logo.svg" /></div>
                        <div id="dice-container"></div>
                        <button id="rolldice" onclick="rollAndDisplayDice()">
                            Dadu
                        </button>
                    </div>
                </div>
            </div>

            <div class="side">
                <div class="controlBar">
                    <button id="speedControlBtn" onclick="speedControl()">
                        Kecepatan permainan: normal
                    </button>
                    <button id="instructionBtn">Pengantar Aturan</button>
                </div>

                <div id="instructionBox">
                    <ul>
                        <li>Jumlah awal untuk setiap pemain adalah $15.000.</li>
                        <li>Setiap kali Anda melewati titik awal, Anda akan mendapatkan $2000.</li>
                        <li>Ketuk tombol boost untuk mempercepat game, atau kembali normal.</li>
                        <li>Klik pada dadu untuk memainkan permainan, dan komputer akan secara otomatis melempar dadu untuk Anda.</li>
                        <li>
                            Tujuan permainan: Ketika seorang pemain bangkrut, permainan berakhir, dan pemain dengan aset terbanyak adalah pemenangnya.
                        </li>
                        <li>Setiap petak catur akan memicu peristiwa yang sesuai, yang dibagi menjadi beberapa jenis berikut:</li>
                        <li>
                            Real estat biasa: Pemain bebas membeli dan meningkatkan untuk membangun rumah. Pemain lain akan membayar Anda sewa saat mereka melewati real estat Anda. Informasi detail real estat akan ditampilkan saat mouse diletakkan di papan catur.
                        </li>
                        <li>Peluang: Secara acak memicu Keberuntungan atau Kesialan.</li>
                        <li>Membayar pajak: Membayar berbagai jenis pajak akan memiliki harga yang berbeda.</li>
                        <li></li>
                        <li></li>
                        <li>Bad Bay: Hentikan aksi selama 3 giliran.</li>
                        <li>
                            Mekanisme peningkatan: Pemain dapat meningkatkan propertinya saat menginjakkan kaki di atasnya. Ada empat tingkat properti, yaitu ruang terbuka, rumah (tingkat 2), vila (tingkat 3), hotel (tingkat 4), dan kebutuhan untuk meningkatkan ke tingkat 2 Seperlima harga tanah, tiga per lima harga tanah kelas 3, dan tiga per lima harga awal kelas 4.
                        </li>
                        <li>
                            Mekanisme sewa tanah: Sewa properti kelas satu adalah seperlima dari harga tanah, kelas kedua adalah setengah, kelas ketiga adalah harga asli, dan kelas keempat adalah dua kali lipat harga.
                        </li>
                        <li>
                            Mekanisme kebangkrutan: Setelah uang tunai pemain turun di bawah 0, dia harus menjual propertinya sendiri dengan harga 80% dari total nilai properti tersebut. Ketika uang tunai pemain masih di bawah 0 tanpa properti apa pun, mereka secara otomatis akan mengajukan kebangkrutan dan permainan berakhir.
                        </li>
                    </ul>
                </div>

                <div class="playerBigBox">
                    <div class="playercolbar">
                        <div class="playercol1">pemain</div>
                        <div class="playercol2">uang tunai</div>
                        <div class="playercol3">Nilai properti kotor</div>
                        <div class="playercol4">Total aset</div>
                    </div>
                    <div id="player1Info" class="playerInfo">
                        <div class="playerIconBar">
                            <img src="./img/player1.png" height="40px" />
                            <div id="player1Name" class="playerName">player 1</div>
                        </div>
                        <div id="player1Money" class="playerMoney">$15000</div>
                        <div id="player1PropValue" class="playerMoney">$0</div>
                        <div id="player1TotalValue" class="playerMoney">$15000</div>
                    </div>
                    <div id="player2Info" class="playerInfo">
                        <div class="playerIconBar">
                            <img src="./img/player2.png" height="40px" />
                            <div id="player2Name" class="playerName">Player 2</div>
                        </div>
                        <div id="player2Money" class="playerMoney">$15000</div>
                        <div id="player2PropValue" class="playerMoney">$0</div>
                        <div id="player2TotalValue" class="playerMoney">$15000</div>
                    </div>
                    <div id="player3Info" class="playerInfo">
                        <div class="playerIconBar">
                            <img src="./img/player3.png" height="40px" />
                            <div id="player3Name" class="playerName">Player 3</div>
                        </div>
                        <div id="player3Money" class="playerMoney">$15000</div>
                        <div id="player3PropValue" class="playerMoney">$0</div>
                        <div id="player3TotalValue" class="playerMoney">$15000</div>
                    </div>
                    <div id="player4Info" class="playerInfo">
                        <div class="playerIconBar">
                            <img src="./img/player4.png" height="40px" />
                            <div id="player4Name" class="playerName">Player 4</div>
                        </div>
                        <div id="player4Money" class="playerMoney">$15000</div>
                        <div id="player4PropValue" class="playerMoney">$0</div>
                        <div id="player4TotalValue" class="playerMoney">$15000</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
@stop