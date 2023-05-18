var places = [];
var speed = 300;
var playerTurnIndex = 1;

function CreateBox(index, name, level, value, owner, currentValue) {
    this.index = index;
    this.name = name; // property name
    this.level = level; // property level (0 = not property)
    this.value = value; // (property value)
    this.owner = owner; // (property owner)
    this.currentValue = value;
    if (this.level != 0) {
        //add property name to html
        this.node = document.querySelector(".div" + index);
        this.node.firstElementChild.append(name);
    }
    places.push(this);
}

var players = [];
function CreatePlayer(
    name,
    index,
    money,
    state,
    stop,
    position,
    color,
    propValue,
    ownedProp
) {
    this.name = name; //名字
    this.index = index; //index
    this.money = money; //目前持有金錢
    this.state = state; // active / jail / bankrupt
    this.stop = stop; //隔離天數
    this.position = position; //當前位置
    this.color = color;
    this.propValue = propValue;
    this.ownedProp = ownedProp;
    players.push(this);
}

function startGame() {
    var player1Name = document.getElementById("typePlayer1Name").value;
    var player2Name = document.getElementById("typePlayer2Name").value;
    var player3Name = document.getElementById("typePlayer3Name").value;
    var player4Name = document.getElementById("typePlayer4Name").value;
    //default name
    if (player1Name == "") {
        player1Name = "Player 1";
    }
    if (player2Name == "") {
        player2Name = "Player 2";
    }
    if (player3Name == "") {
        player3Name = "Player 3";
    }
    if (player4Name == "") {
        player4Name = "Player 4";
    }

    new CreatePlayer(player1Name, 1, 15000, "active", 0, 0, "#EF847C", 0, []);
    new CreatePlayer(player2Name, 2, 15000, "active", 0, 0, "#DDD05B", 0, []);
    new CreatePlayer(player3Name, 3, 15000, "active", 0, 0, "#97BC9A", 0, []);
    new CreatePlayer(player4Name, 4, 15000, "active", 0, 0, "#75C3D8", 0, []);
    document.querySelector(`#player1Money`).innerText = `$${players[0].money}`;
    document.querySelector(`#player2Money`).innerText = `$${players[1].money}`;
    document.querySelector(`#player3Money`).innerText = `$${players[2].money}`;
    document.querySelector(`#player4Money`).innerText = `$${players[3].money}`;
    document.querySelector("#player1Name").innerText = player1Name;
    document.querySelector("#player2Name").innerText = player2Name;
    document.querySelector("#player3Name").innerText = player3Name;
    document.querySelector("#player4Name").innerText = player4Name;
    document.querySelector(".startPage").classList.add("hide");
    document.getElementById("playernow").innerText = players[0].name;
    //Add Current Player Border (Right Bottom)
    document
        .getElementById("player" + playerTurnIndex + "Info")
        .classList.add("currentPlayerBorder");
    for (i = 1; i <= players.length; i++) {
        const node = document.createElement("div");
        node.setAttribute("id", `player${i}Chess`);
        const img = document.createElement("img");
        img.src = `img/player${i}.png`;
        node.classList.add("playerIcon", "chess");
        node.appendChild(img);
        document.querySelector(".div0").appendChild(node);
    }
    // Player 1 Chess on Top
    document
        .getElementById(`player1Chess`)
        .classList.add("currentPlayerZIndex");
    addPropInfo();
}

//Updated by Aqua 02.28 7:00pm
new CreateBox(0, "A", 0, 2000, null);
new CreateBox(1, "B", 1, 2000, null);
new CreateBox(2, "C", 0, 0, null);
new CreateBox(3, "D", 1, 4000, null);
new CreateBox(4, "E", 1, 2500, null);
new CreateBox(5, "F", 1, 2500, null);
new CreateBox(6, "G", 1, 1500, null);
new CreateBox(7, "H", 0, 600, null);
new CreateBox(8, "I", 1, 1500, null);
new CreateBox(9, "J", 1, 1500, null);
new CreateBox(10, "K", 0, 0, null);
new CreateBox(11, "L", 1, 2500, null);
new CreateBox(12, "M", 0, 800, null);
new CreateBox(13, "N", 1, 1500, null);
new CreateBox(14, "O", 1, 2500, null);
new CreateBox(15, "P", 1, 1500, null);
new CreateBox(16, "Q", 1, 4000, null);
new CreateBox(17, "R", 0, 0, null);
new CreateBox(18, "S", 1, 2000, null);
new CreateBox(19, "T", 1, 2500, null);
new CreateBox(20, "U", 0, 0, null);
new CreateBox(21, "V", 1, 3000, null);
new CreateBox(22, "W", 1, 3000, null);
new CreateBox(23, "X", 1, 3200, null);
new CreateBox(24, "Y", 1, 3500, null);
new CreateBox(25, "Z", 0, 0, null);
new CreateBox(26, "AS", 1, 3000, null);
new CreateBox(27, "FG", 0, 600, null);
new CreateBox(28, "UT", 1, 2500, null);
new CreateBox(29, "RF", 1, 2000, null);
new CreateBox(30, "BG", 0, 0, null);
new CreateBox(31, "EE", 1, 3900, null);
new CreateBox(32, "KU", 0, 500, null);
new CreateBox(33, "QW", 1, 4000, null);
new CreateBox(34, "ED", 1, 4200, null);
new CreateBox(35, "CV", 1, 4200, null);
new CreateBox(36, "AP", 1, 4500, null);
new CreateBox(37, "LK", 0, 0, null);
new CreateBox(38, "GW", 1, 5000, null);
new CreateBox(39, "FR", 1, 6000, null);

var fates = [];
function CreateFate(text, value) {
    this.text = text;
    this.value = value;
    fates.push(this);
}

new CreateFate("Dapatkan kupon $2000.", 2000);
new CreateFate("Cinta online ditipu sebesar $1000.", -1000);
new CreateFate("Nana menikah, dan bantuannya adalah $1000.", -1000);
new CreateFate("Berpartisipasi dalam membuat bintang di kota dan membayar biaya pendaftaran sebesar $500.", -500);
new CreateFate("Memenangkan lotere Mark Six $1000.", 1000);
new CreateFate("Jika Anda keluar tanpa masker, Anda akan didenda $2000.", -2000);
new CreateFate("Dia tiba-tiba dicari oleh massa dan memperoleh $1.000 untuk menerima iklan.", 1000);
new CreateFate("Lotere vaksin, memenangkan $500.", 500);
new CreateFate(
    "Selama epidemi, ada kekurangan bahan anti-epidemi, tetapi ada cinta di dunia, dan seseorang akan mensubsidi Anda $1000 untuk bahan.",
    1000
);
new CreateFate("Diundang oleh perusahaan untuk menghadiri acara luar negeri dan mendapatkan $3.000.", 3000);
new CreateFate("Menerima posisi sebagai juru bicara sebuah perusahaan kecantikan dan memperoleh $2.000.", 2000);
new CreateFate("Baru-baru ini, popularitasnya meningkat tajam, dan dia diundang untuk menjadi peran pendukung dalam sebuah film, mendapatkan gaji sebesar $5.000.", 5000);
new CreateFate("Karena penampilannya yang luar biasa di taman, dia menerima amplop merah sebesar $2000.", 2000);
new CreateFate("Jumlah penggemar di platform sosial mencapai puluhan ribu, dan menerima sponsor sebesar $1.000 dari perusahaan.", 1000);
new CreateFate("Berhasil menurunkan berat badan bulan ini dan memenangkan bonus perusahaan sebesar $1000.", 1000);
new CreateFate("Pelanggaran perintah pembatasan akan didenda $1000.", -1000);
new CreateFate("Kata-kata yang tidak bermoral, mengakibatkan kerugian sebesar $1500 sebagai kompensasi pengesahan.", -1500);
new CreateFate("Indeks Hang Seng anjlok, dan investasi kehilangan $2000.", -2000);
new CreateFate("Bepergian ke negara asing, bertemu pencuri, dan kehilangan $3000.", -3000);
new CreateFate("Jika Anda secara tidak sengaja kehilangan pakaian dari perusahaan sponsor, Anda akan diberi kompensasi $2000.", -2000);
new CreateFate("Jika kelainan ditemukan dalam pemeriksaan fisik tahunan, pemeriksaan tambahan akan menelan biaya $1000.", -1000);
new CreateFate("Terjebak dalam perangkap berburu pekerjaan dan kehilangan $3000.", -3000);

//Roll two dices area
function rollDice() {
    // Generate a random number between 1 and 6 for each die
    const die1 = Math.floor(Math.random() * 6) + 1;
    const die2 = Math.floor(Math.random() * 6) + 1;

    // Calculate the total value of both dice
    const total = die1 + die2;
    let i = 1;

    // PlayerMove
    document.getElementById("rolldice").disabled = true;
    playerMove(playerTurnIndex);

    function playerMove(index) {
        setTimeout(function () {
            if (players[index - 1].position < 39) {
                players[index - 1].position += 1;
            } else {
                players[index - 1].position = 0;
            }
            console.log(players[index - 1].position);
            document.getElementById(`player${index}Chess`).remove();
            const node = document.createElement("div");
            node.setAttribute("id", `player${index}Chess`);
            const img = document.createElement("img");
            img.src = `img/player${index}.png`;
            node.classList.add("playerIcon", "chess");
            node.appendChild(img);
            document
                .querySelector(`.div${players[index - 1].position}`)
                .appendChild(node);
            i++;
            checkPassGo();
            if (i <= total) {
                // FOR DEV
                playerMove(index);
            } else if ((i = total)) {
                // FOR DEV
                //put all the event here;
                let currentPlace =
                    places[players[playerTurnIndex - 1].position];
                // if place is property and no one owns it
                if (currentPlace.level != 0 && currentPlace.owner == null) {
                    // if player has enough money to buy the property
                    if (
                        players[playerTurnIndex - 1].money >= currentPlace.value
                    ) {
                        askBuyProperty(currentPlace);
                    }
                    // if player does not have enough money to buy the property
                    else if (
                        players[playerTurnIndex - 1].money < currentPlace.value
                    ) {
                        noMoneyBuyProperty(currentPlace);
                    }
                }
                // if place is property and someone owns it
                else if (
                    currentPlace.level != 0 &&
                    currentPlace.owner != null &&
                    currentPlace.owner != playerTurnIndex
                ) {
                    let rentReceiver = currentPlace.owner;
                    // if rent receiver is not himself
                    if (rentReceiver != playerTurnIndex) {
                        // if rent receiver is active
                        if (players[rentReceiver - 1].state == "active") {
                            payRent(rentReceiver, currentPlace);
                        }
                        // if rent receiver is in jail
                        else if (players[rentReceiver - 1].state == "jail") {
                            showNoPayRent(rentReceiver);
                        }
                    }
                }
                // if player owns the property
                else if (playerTurnIndex == currentPlace.owner) {
                    let tolvl2price = currentPlace.value * (1 / 5);
                    let tolvl3price = currentPlace.value * (3 / 5);
                    let tolvl4price = currentPlace.value;
                    // if property level max already
                    if (currentPlace.level == 4) {
                        proplevelmaxed(currentPlace);
                    } // if player have no money to upgrade
                    else if (
                        (currentPlace.level == 1 &&
                            players[playerTurnIndex - 1].money < tolvl2price) ||
                        (currentPlace.level == 2 &&
                            players[playerTurnIndex - 1].money < tolvl3price) ||
                        (currentPlace.level == 3 &&
                            players[playerTurnIndex - 1].money < tolvl4price)
                    ) {
                        nomoneylevelupprop(currentPlace);
                    } else {
                        asklevelupprop(
                            currentPlace,
                            tolvl2price,
                            tolvl3price,
                            tolvl4price
                        );
                    }
                }
                // if player in go to jail box
                else if (
                    currentPlace.index == 30 &&
                    players[playerTurnIndex - 1].state == "active"
                ) {
                    goToJail();
                }
                // if free parking
                else if (currentPlace.index == 10) {
                    nothingHappen(currentPlace);
                }
                // if place is tax-related
                else if (
                    currentPlace.index == 7 ||
                    currentPlace.index == 12 ||
                    currentPlace.index == 27 ||
                    currentPlace.index == 32
                ) {
                    players[playerTurnIndex - 1].money -= currentPlace.value;
                    document.querySelector(
                        `#player${playerTurnIndex}Money`
                    ).innerText = `$${players[playerTurnIndex - 1].money}`;
                    document.querySelector(
                        `#player${playerTurnIndex}TotalValue`
                    ).innerText = `$${
                        players[playerTurnIndex - 1].money +
                        players[playerTurnIndex - 1].propValue
                    }`;
                    document.querySelector(".messageBox").classList.add("show");
                    document.querySelector(
                        ".messageBoxMiddle"
                    ).innerText = `Anda telah membayar$${currentPlace.value}${currentPlace.name}。`;
                    confirmBtn(nextPlayer);
                }
                // if place is chance-related
                else if (
                    currentPlace.index == 2 ||
                    currentPlace.index == 17 ||
                    currentPlace.index == 20 ||
                    currentPlace.index == 25 ||
                    currentPlace.index == 37
                ) {
                    Chances();
                }
                // if start (GO)
                else if (currentPlace.index == 0) {
                    standGo(currentPlace);
                }
            }
        }, speed);
    }

    // Return an object containing the values of both dice and their total
    return {
        die1: die1,
        die2: die2,
        total: total,
    };
}

function checkPassGo() {
    if (players[playerTurnIndex - 1].position == 0) {
        players[playerTurnIndex - 1].money += 2000;
        document.querySelector(
            `#player${playerTurnIndex}Money`
        ).innerText = `$${players[playerTurnIndex - 1].money}`;
        document.querySelector(
            `#player${playerTurnIndex}TotalValue`
        ).innerText = `$${
            players[playerTurnIndex - 1].money +
            players[playerTurnIndex - 1].propValue
        }`;
    }
}

function asklevelupprop(property, tolvl2price, tolvl3price, tolvl4price) {
    document.querySelector(".messageBox").classList.add("show");
    if (property.level == 1) {
        document.querySelector(".messageBoxMiddle").innerText =
            "Apakah Anda akan menghabiskan $" +
            tolvl2price +
            "untuk meningkatkan" +
            property.name +
            "tiba" +
            (property.level + 1) +
            "Tunggu?";
        confirmBtn(function () {
            levelupprop(property, 2, tolvl2price);
        });
        cancelBtn(nextPlayer);
    } else if (property.level == 2) {
        document.querySelector(".messageBoxMiddle").innerText =
            "Apakah Anda akan menghabiskan $" +
            tolvl3price +
            "untuk meningkatkan" +
            property.name +
            "tiba" +
            (property.level + 1) +
            "Tunggu?";
        confirmBtn(function () {
            levelupprop(property, 3, tolvl3price);
        });
        cancelBtn(nextPlayer);
    } else if (property.level == 3) {
        document.querySelector(".messageBoxMiddle").innerText =
        "Apakah Anda akan menghabiskan $" +
            tolvl4price +
            "untuk meningkatkan" +
            property.name +
            "tiba" +
            (property.level + 1) +
            "Tunggu?";
        confirmBtn(function () {
            levelupprop(property, 4, tolvl4price);
        });
        cancelBtn(nextPlayer);
    }
}

function levelupprop(property, tolvl, lvlupprice) {
    // calculation
    players[playerTurnIndex - 1].money -= lvlupprice;
    players[playerTurnIndex - 1].propValue += lvlupprice;
    property.currentValue += lvlupprice;
    property.level += 1;
    // search div
    const parentnode = document.querySelector(`.div${property.index}`);
    // add img
    parentnode.querySelector(".levelup").innerHTML = `<img src='./img/l${
        tolvl - 1
    }.svg' />`;
    // correct hover box message
    parentnode.querySelector(
        ".property-value"
    ).innerText = `Nilai properti saat ini: $${property.currentValue}`;
    parentnode
        .querySelector(`.property-lv${tolvl - 1}-rent`)
        .classList.remove("current-lv-rent");
    parentnode
        .querySelector(`.property-lv${tolvl}-rent`)
        .classList.add("current-lv-rent");
    // update player info box
    document.querySelector(`#player${playerTurnIndex}Money`).innerText = `$${
        players[playerTurnIndex - 1].money
    }`;
    document.querySelector(
        `#player${playerTurnIndex}PropValue`
    ).innerText = `$${players[playerTurnIndex - 1].propValue}`;
    document.querySelector(
        `#player${playerTurnIndex}TotalValue`
    ).innerText = `$${
        players[playerTurnIndex - 1].money +
        players[playerTurnIndex - 1].propValue
    }`;
    showlevelupprop(property);
}

function showlevelupprop(property) {
    document.querySelector(".messageBoxMiddle").innerText =
        "Selamat" + property.name + "telah ditingkatkan menjadi" + property.level + "Tunggu.";
    confirmBtn(nextPlayer);
}

function proplevelmaxed(property) {
    document.querySelector(".messageBox").classList.add("show");
    document.querySelector(
        ".messageBoxMiddle"
    ).innerText = `${property.name}Sudah mencapai level 4 dan tidak bisa lagi ditingkatkan.`;
    confirmBtn(nextPlayer);
}

function nomoneylevelupprop(property) {
    document.querySelector(".messageBox").classList.add("show");
    document.querySelector(
        ".messageBoxMiddle"
    ).innerText = `Anda tidak punya cukup uang untuk meningkatkan${property.name}。`;
    confirmBtn(nextPlayer);
}

function standGo() {
    document.querySelector(".messageBox").classList.add("show");
    document.querySelector(".messageBoxMiddle").innerText = `Anda sekarang mulai.`;
    confirmBtn(nextPlayer);
}

function Chances() {
    const fateIndex = Math.floor(Math.random() * 22);
    players[playerTurnIndex - 1].money += fates[fateIndex].value;
    document.querySelector(`#player${playerTurnIndex}Money`).innerText = `$${
        players[playerTurnIndex - 1].money
    }`;
    document.querySelector(
        `#player${playerTurnIndex}TotalValue`
    ).innerText = `$${
        players[playerTurnIndex - 1].money +
        players[playerTurnIndex - 1].propValue
    }`;
    document.querySelector(".messageBox").classList.add("show");
    document.querySelector(
        ".messageBoxMiddle"
    ).innerText = `${fates[fateIndex].text}`;
    confirmBtn(nextPlayer);
}

function payRent(rentReceiver, currentPlace) {
    let rent = 0;
    if (currentPlace.level == 1) {
        rent = currentPlace.value * (1 / 5);
    } else if (currentPlace.level == 2) {
        rent = currentPlace.value * (1 / 2);
    } else if (currentPlace.level == 3) {
        rent = currentPlace.value * 1;
    } else if (currentPlace.level == 4) {
        rent = currentPlace.value * 2;
    }
    players[playerTurnIndex - 1].money -= rent;
    players[rentReceiver - 1].money += rent;
    document.querySelector(`#player${playerTurnIndex}Money`).innerText = `$${
        players[playerTurnIndex - 1].money
    }`;
    document.querySelector(
        `#player${playerTurnIndex}TotalValue`
    ).innerText = `$${
        players[playerTurnIndex - 1].money +
        players[playerTurnIndex - 1].propValue
    }`;
    document.querySelector(`#player${rentReceiver}Money`).innerText = `$${
        players[rentReceiver - 1].money
    }`;
    document.querySelector(`#player${rentReceiver}TotalValue`).innerText = `$${
        players[rentReceiver - 1].money + players[rentReceiver - 1].propValue
    }`;
    showPayRent(rentReceiver, rent);
}

function showPayRent(rentReceiver, rent) {
    document.querySelector(".messageBox").classList.add("show");
    document.querySelector(
        ".messageBoxMiddle"
    ).innerText = `Anda membayar $${rent}sewa ke${players[rentReceiver - 1].name}。`;
    confirmBtn(nextPlayer);
}

function showNoPayRent(rentReceiver) {
    document.querySelector(".messageBox").classList.add("show");
    document.querySelector(".messageBoxMiddle").innerText = `${
        players[rentReceiver - 1].name
    }Sedang dikarantina, tidak perlu membayar sewa.`;
    confirmBtn(nextPlayer);
}

function nothingHappen(currentPlace) {
    document.querySelector(".messageBox").classList.add("show");
    document.querySelector(
        ".messageBoxMiddle"
    ).innerText = `kamu sekarang${currentPlace.name}, tidak terjadi apa-apa.`;
    confirmBtn(nextPlayer);
}

function goToJail() {
    players[playerTurnIndex - 1].stop += 4;
    players[playerTurnIndex - 1].state = "jail";
    document.querySelector(".messageBox").classList.add("show");
    document.querySelector(
        ".messageBoxMiddle"
    ).innerText = `Anda telah didiagnosis dengan mahkota baru, harap tetap berada di tempat yang buruk untuk isolasi${
        players[playerTurnIndex - 1].stop - 1
    }langit.`;
    confirmBtn(nextPlayer);
}

function askBuyProperty(currentPlace) {
    document.querySelector(".messageBox").classList.add("show");
    document.querySelector(".messageBoxMiddle").innerText =
        "Apakah Anda akan menghabiskan $" +
        currentPlace.value +
        "untuk membeli" +
        currentPlace.name +
        "Apakah itu?";
    confirmBtn(function () {
        buyProperty(currentPlace);
    });
    cancelBtn(nextPlayer);
}

function addPropInfo() {
    for (i = 0; i < places.length; i++) {
        if (places[i].level == 1) {
            const parent = document.querySelector(`.div${i}`);
            parent.querySelector(`.property-name`).innerText = places[i].name;
            parent.querySelector(
                `.property-price`
            ).innerText = `harga tanah:$${places[i].value}`;
            parent.querySelector(`.property-owner`).innerText = `Pemilik: Tidak ada`;
            parent.querySelector(
                `.property-value`
            ).innerText = `Nilai properti saat ini:$${places[i].value}`;
            parent.querySelector(`.property-lv1-rent`).innerText = `sewa kelas 1:$${
                places[i].value * (1 / 10)
            }`;
            parent.querySelector(`.property-lv2-rent`).innerText = `sewa kelas 2:$${
                places[i].value * (1 / 5)
            }`;
            parent.querySelector(`.property-lv3-rent`).innerText = `sewa kelas 3:$${
                places[i].value * (1 / 2)
            }`;
            parent.querySelector(
                `.property-lv4-rent`
            ).innerText = `sewa kelas 4:$${places[i].value}`;
        }
    }
}

function buyProperty(property) {
    property.owner = players[playerTurnIndex - 1].index;
    players[playerTurnIndex - 1].money -= property.value;
    players[playerTurnIndex - 1].propValue += property.value;
    players[playerTurnIndex - 1].ownedProp.push(property);
    // change hover box
    const parentnode = document.querySelector(`.div${property.index}`);
    parentnode.querySelector(`.property-owner`).innerText = `${
        players[playerTurnIndex - 1].name
    }`;
    parentnode
        .querySelector(`.property-lv1-rent`)
        .classList.add("current-lv-rent");
    // change player box info
    document.querySelector(`#player${playerTurnIndex}Money`).innerText = `Tuan Rumah:$${
        players[playerTurnIndex - 1].money
    }`;
    document.querySelector(
        `#player${playerTurnIndex}PropValue`
    ).innerText = `$${players[playerTurnIndex - 1].propValue}`;
    document.querySelector(
        `#player${playerTurnIndex}TotalValue`
    ).innerText = `$${
        players[playerTurnIndex - 1].money +
        players[playerTurnIndex - 1].propValue
    }`;
    document.querySelector(`#prop${property.index}`).style.backgroundColor =
        players[playerTurnIndex - 1].color;
    parentnode.querySelector(`.propertyheader`).style.backgroundColor =
        players[playerTurnIndex - 1].color;
    buyPropertySuccess(property);
}

function buyPropertySuccess(property) {
    document.querySelector(".messageBoxMiddle").innerText =
        "selamat mendapatkan" + property.name + "。";
    confirmBtn(nextPlayer);
}

function noMoneyBuyProperty(property) {
    document.querySelector(".messageBox").classList.add("show");
    document.querySelector(".messageBoxMiddle").innerText =
        "Anda tidak punya cukup uang untuk membeli" + property.name + "。";
    confirmBtn(nextPlayer);
}

function confirmBtn(func) {
    // clear all buttons
    document.querySelector(".messageBoxBottom").innerHTML = "";
    // confirm button
    const confirmBtn = document.createElement("button");
    confirmBtn.classList.add("messageBoxBtn");
    confirmBtn.addEventListener("click", func); // confirm function
    const confirmBtnDiv = document.createElement("div");
    confirmBtnDiv.classList.add("confirmBtn");
    confirmBtnDiv.innerText = "Tentu";
    confirmBtn.appendChild(confirmBtnDiv);
    document.querySelector(".messageBoxBottom").appendChild(confirmBtn);
}

function cancelBtn(func) {
    const cancelBtn = document.createElement("button");
    cancelBtn.classList.add("messageBoxBtn");
    cancelBtn.addEventListener("click", func); // cancel function
    cancelBtn.innerText = "Melompati";
    document.querySelector(".messageBoxBottom").appendChild(cancelBtn);
}

function askCompulsorySale() {
    document.querySelector(".messageBox").classList.add("show");
    document.querySelector(".messageBoxMiddle").innerText =
        "Uang tunai Anda kurang dari 0, Anda harus memilih salah satu properti berikut untuk dijual kepada pemerintah, harganya 80% dari total nilai properti.";
    const propertyBox = document.createElement("div");
    propertyBox.classList.add("sellPropertyBox");
    document.querySelector(".messageBoxBottom").innerHTML = "";
    document.querySelector(".messageBoxBottom").appendChild(propertyBox);
    const titleLine = document.createElement("div");
    titleLine.classList.add("sellItemTitleBig");
    const boxTitleProp = document.createElement("div");
    boxTitleProp.classList.add("sellItemTitle");
    boxTitleProp.innerText = "Properti";
    const boxTitleLevel = document.createElement("div");
    boxTitleLevel.classList.add("sellItemTitle");
    boxTitleLevel.innerText = "nilai";
    const boxTitleSale = document.createElement("div");
    boxTitleSale.classList.add("sellItemTitle");
    boxTitleSale.innerText = "tunai dari penjualan";
    titleLine.appendChild(boxTitleProp);
    titleLine.appendChild(boxTitleLevel);
    titleLine.appendChild(boxTitleSale);
    propertyBox.appendChild(titleLine);
    let propName;
    let propLevel;
    let propSale;
    for (i = 0; i < players[playerTurnIndex - 1].ownedProp.length; i++) {
        propLine = document.createElement("div");
        propLine.classList.add("sellItemBtn");
        let property = players[playerTurnIndex - 1].ownedProp[i];
        propLine.addEventListener("click", function () {
            confirmSell(property);
        });
        propName = document.createElement("div");
        propName.innerText = players[playerTurnIndex - 1].ownedProp[i].name;
        propLine.appendChild(propName);
        propLevel = document.createElement("div");
        propLevel.innerText = players[playerTurnIndex - 1].ownedProp[i].level;
        propLine.appendChild(propLevel);
        propSale = document.createElement("div");
        propSale.innerText =
            players[playerTurnIndex - 1].ownedProp[i].currentValue * 0.8;
        propLine.appendChild(propSale);
        propertyBox.appendChild(propLine);
    }
}

function confirmSell(property) {
    document.querySelector(".messageBoxMiddle").innerText = `Apakah Anda yakin ingin$${
        property.currentValue * 0.8
    }terjual${property.name}?`;
    confirmBtn(function () {
        sold(property);
    });
    cancelBtn(askCompulsorySale);
}

function sold(property) {
    let gain = property.currentValue * 0.8;
    //add money to player
    players[playerTurnIndex - 1].money += gain;
    players[playerTurnIndex - 1].propValue -= property.currentValue;
    if (players[playerTurnIndex - 1].propValue <= 0) {
        players[playerTurnIndex - 1].propValue = 0;
    }
    //reset right bottom player info
    document.querySelector(`#player${playerTurnIndex}Money`).innerText = `$${
        players[playerTurnIndex - 1].money
    }`;
    document.querySelector(
        `#player${playerTurnIndex}PropValue`
    ).innerText = `$${players[playerTurnIndex - 1].propValue}`;
    document.querySelector(
        `#player${playerTurnIndex}TotalValue`
    ).innerText = `$${
        players[playerTurnIndex - 1].money +
        players[playerTurnIndex - 1].propValue
    }`;
    // reset map change hover box
    const parentnode = document.querySelector(`.div${property.index}`);
    parentnode.querySelector(`.property-owner`).innerText = `Pemilik: Tidak ada`;
    parentnode
        .querySelector(`.property-lv${property.level}-rent`)
        .classList.remove("current-lv-rent");
    //reset map prop box
    document.querySelector(`#prop${property.index}`).style.backgroundColor =
        "#0072bc";
    parentnode.querySelector(`.propertyheader`).style.backgroundColor =
        "#0072bc";
    //reset map prop level photo
    parentnode.querySelector(".levelup").innerHTML = "";
    //remove property from players array
    let ownedProp = players[playerTurnIndex - 1].ownedProp;
    let index = ownedProp.indexOf(property);
    ownedProp.splice(index, 1);
    //change owner and level in places array
    places[property.index].owner = null;
    places[property.index].propValue = places[property.index].value;
    places[property.index].level = 1;
    document.querySelector(
        ".messageBoxMiddle"
    ).innerText = `Anda telah menjual${property.name},mendapatkan$${gain}。`;
    confirmBtn(nextPlayer);
}

function bankrupt() {
    document.querySelector(
        ".messageBoxMiddle"
    ).innerText = `Anda memiliki kurang dari 0 uang tunai, tidak memiliki properti, dan secara otomatis mengajukan kebangkrutan, permainan berakhir!`;
    confirmBtn(function () {
        showResult();
    });
}

function nextPlayer() {
    // check bankrupt
    if (
        players[playerTurnIndex - 1].money < 0 &&
        players[playerTurnIndex - 1].ownedProp.length > 0
    ) {
        askCompulsorySale();
    } else if (
        players[playerTurnIndex - 1].money < 0 &&
        players[playerTurnIndex - 1].ownedProp.length == 0
    ) {
        bankrupt();
    } else {
        document.querySelector(".messageBox").classList.remove("show");
        document
            .getElementById("player" + playerTurnIndex + "Info")
            .classList.remove("currentPlayerBorder");
        document
            .getElementById(`player${playerTurnIndex}Chess`)
            .classList.remove("currentPlayerZIndex");
        // Start from here: playerTurnIndex = next player
        if (playerTurnIndex < players.length) {
            playerTurnIndex += 1;
        } else {
            playerTurnIndex = 1;
        }
        // change 目前玩家 and right bottom border
        document.getElementById("playernow").innerText =
            players[playerTurnIndex - 1].name;
        document
            .getElementById("player" + playerTurnIndex + "Info")
            .classList.add("currentPlayerBorder");
        document
            .getElementById(`player${playerTurnIndex}Chess`)
            .classList.add("currentPlayerZIndex");
        document.getElementById("rolldice").disabled = false; // enable rolldice button
        if (
            players[playerTurnIndex - 1].state == "jail" &&
            players[playerTurnIndex - 1].stop != 1
        ) {
            document.getElementById("rolldice").disabled = true;
            players[playerTurnIndex - 1].stop -= 1;
            showJail();
        } else if (players[playerTurnIndex - 1].stop == 1) {
            players[playerTurnIndex - 1].stop -= 1;
            players[playerTurnIndex - 1].state = "active";
        }
    }
}

function showJail() {
    document.querySelector(".messageBox").classList.add("show");
    document.querySelector(".messageBoxMiddle").innerText = `langit.${
        players[playerTurnIndex - 1].name
    }Masih perlu diisolasi${players[playerTurnIndex - 1].stop}`;
    confirmBtn(nextPlayer);
}

function rollAndDisplayDice() {
    const result = rollDice();
    const diceContainer = document.getElementById("dice-container");

    // Clear any existing dice from the container
    diceContainer.innerHTML = "";

    // Create an image for each die and add it to the container
    const die1Img = document.createElement("div");
    die1Img.classList.add("die");
    die1Img.style.backgroundImage = `url('img/${result.die1}.svg')`;
    diceContainer.appendChild(die1Img);

    const die2Img = document.createElement("div");
    die2Img.classList.add("die");
    die2Img.style.backgroundImage = `url('img/${result.die2}.svg')`;
    diceContainer.appendChild(die2Img);
}

//Controlling Speed
function speedControl() {
    if (speed == 300) {
        speed = 1;
        document.getElementById("speedControlBtn").innerText = "Kecepatan permainan: sangat cepat";
    } else {
        speed = 300;
        document.getElementById("speedControlBtn").innerText = "Kecepatan permainan: normal";
    }
}

function showResult() {
    document.querySelector(".resultPage").classList.remove("hide");
    for (i = 1; i < players.length + 1; i++) {
        const playerinfo = document.querySelector(`#player${i}EndInfo`);
        playerinfo.querySelector(".playerName").innerText = `${
            players[i - 1].name
        }`;
        playerinfo.querySelector(".playerEndMoney").innerText = `$${
            players[i - 1].money
        }`;
        playerinfo.querySelector(".playerEndPropValue").innerText = `$${
            players[i - 1].propValue
        }`;
        playerinfo.querySelector(".playerEndTotalValue").innerText = `$${
            players[i - 1].propValue + players[i - 1].money
        }`;
    }
}
