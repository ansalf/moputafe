var diceFaces = [
    "https://bit.ly/dice-unknown",
    "https://bit.ly/dice-one",
    "https://bit.ly/dice-two",
    "https://bit.ly/dice-three",
    "https://bit.ly/dice-four",
    "https://bit.ly/dice-five",
    "https://bit.ly/dice-six",
];

// Cleans up code later
var image = document.getElementById("dice");
var audio = document.getElementById("audio");

// Gets a random integer, min & max inclusive
function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

let playerIndex = 5
let playerDice = []
let currPos = 1
let numPlayer = localStorage.getItem('numPlayers')

for(let i=0;i<numPlayer;i++){
    let player = document.createElement('div')
    player.style.backgroundColor = localStorage.getItem('playerColor')
    player.classList.add('user')
    player.setAttribute("id", `user-${i}`)
    player.innerText = i+1
    playerDice.push(0)
    document.getElementById(1).appendChild(player)
}

function rollThatDice() {
    // audio.currentTime = 0;
    image.style.display = 'none';
    i = document.getElementsByClassName('dice-result')[0].innerHTML;
    image.style.display = 'block';
    image.setAttribute("src", diceFaces[i]);
    handleMovement()
    // audio.play();
}

// document.getElementsByClassName('roll-dice')[0].addEventListener("click", function (event) {
//     if (playerIndex === 0) {
//         rollThatDice();
//     } else {
//         setTimeout(function() {
//             let diceResult = getRandomInt(1, 6);
//             document.getElementsByClassName('dice-result')[0].innerHTML = diceResult;
//             playerIndex = (playerIndex + 1) % numPlayer;
//             if (playerIndex === 0) {
//                 rollThatDice();
//             } else if (playerIndex === 5) {
//                 // stop automatic movement
//             } else {
//                 handleMovement();
//             }
//         }, 1000);
//     }
// });

document.getElementsByClassName('roll-dice')[0].addEventListener("click", function (event) {
    if (playerIndex = 0) {
        rollThatDice();
    } else {
        setTimeout(function() {
            let diceResult = getRandomInt(1, 6);
            document.getElementsByClassName('dice-result')[0].innerHTML = diceResult;
            rollThatDice();
        }, 1000);
    }
});

function handleMovement() {
    playerDice[playerIndex] += parseInt(document.getElementsByClassName('dice-result')[0].innerHTML);
    let newPos = document.getElementById((playerDice[playerIndex] % 40) + 1);
    newPos.appendChild(document.getElementById(`user-${playerIndex}`));
    
    if (playerIndex !== 0) {
        setTimeout(function() {
            let diceResult = getRandomInt(1, 6);
            document.getElementsByClassName('dice-result')[0].innerHTML = diceResult;
            playerIndex = (playerIndex + 1) % numPlayer;
            if (playerIndex === 0) {
                rollThatDice();
            } else {
                if (playerIndex === 5) {
                    rollThatDice();
                } else {
                    handleMovement();
                }
            }
        }, 1000);
    } else {
        playerIndex = (playerIndex + 1) % numPlayer;
    }
}

// function handleMovement() {
//     playerDice[playerIndex] += parseInt(document.getElementsByClassName('dice-result')[0].innerHTML);
//     let newPos = document.getElementById((playerDice[playerIndex] % 40) + 1);
//     newPos.appendChild(document.getElementById(`user-${playerIndex}`));
    
//     if (playerIndex !== 0) {
//         setTimeout(function() {
//             let diceResult = getRandomInt(1, 6);
//             document.getElementsByClassName('dice-result')[0].innerHTML = diceResult;
//             playerIndex = (playerIndex + 1) % numPlayer;
//             if (playerIndex === 0) {
//                 rollThatDice();
//             } else {
//                 handleMovement();
//             }
//         }, 1000);
//     } else {
//         playerIndex = (playerIndex + 1) % numPlayer;
//     }
// }

// function handleMovement() {
//     playerDice[playerIndex] += parseInt(document.getElementsByClassName('dice-result')[0].innerHTML);
//     let newPos = document.getElementById((playerDice[playerIndex] % 40) + 1);
//     newPos.appendChild(document.getElementById(`user-${playerIndex}`));
    
//     if (playerIndex !== 0) {
//         if (playerIndex === 5) {
//             playerIndex = 0;
//         } else {
//             setTimeout(function() {
//                 let diceResult = getRandomInt(1, 6);
//                 document.getElementsByClassName('dice-result')[0].innerHTML = diceResult;
//                 playerIndex = (playerIndex + 1) % numPlayer;
//                 rollThatDice();
//             }, 2000);
//         }
//     } else {
//         playerIndex = (playerIndex + 1) % numPlayer;
//     }
// }

// function handleMovement() {
//     playerDice[playerIndex] += parseInt(document.getElementsByClassName('dice-result')[0].innerHTML);
//     let newPos = document.getElementById((playerDice[playerIndex] % 40) + 1);
//     newPos.appendChild(document.getElementById(`user-${playerIndex}`));
    
//     if (playerIndex !== 0) {
//         setTimeout(function() {
//             let diceResult = getRandomInt(1, 6);
//             document.getElementsByClassName('dice-result')[0].innerHTML = diceResult;
//             playerIndex = (playerIndex + 1) % numPlayer;
//             rollThatDice();
//         }, 2000);
//     } else {
//         playerIndex = (playerIndex + 1) % numPlayer;
//     }
// }

// function handleMovement() {
//     playerDice[playerIndex] += parseInt(document.getElementsByClassName('dice-result')[0].innerHTML)
//     let newPos = document.getElementById((playerDice[playerIndex] % 40) + 1)
//     newPos.appendChild(document.getElementById(`user-${playerIndex}`))
//     playerIndex = (playerIndex + 1) % numPlayer
// }

document.getElementsByClassName('roll-dice')[0].addEventListener("click", function (event) {
    rollThatDice();
});
