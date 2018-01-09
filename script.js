document.getElementById("rollDice").disabled = true;

document.getElementById("startGame").onclick = function(){
    document.getElementById("firstDice").innerHTML = "0";
    document.getElementById("secondDice").innerHTML = "0";
    document.getElementById("thirdDice").innerHTML = "0";
    document.getElementById("result").innerHTML = "Your Result:";
    document.getElementById("rollDice").disabled = false;
    document.getElementById('win').innerHTML = "";
    document.getElementById('gameOver').innerHTML = "";

    attempt=0;
    win = 0;

        document.getElementById("rollDice").onclick = function() {
            if (attempt < 4) {
                attempt++;
                console.log(attempt);
                diceSide1 = document.getElementById('firstDice');
                diceSide2 = document.getElementById('secondDice');
                diceSide3 = document.getElementById('thirdDice');
                result = document.getElementById('result');

                side1 = Math.floor(Math.random() * 6) + 1;
                side2 = Math.floor(Math.random() * 6) + 1;
                side3 = Math.floor(Math.random() * 6) + 1;
                finalScore = side1 + side2 + side3;

                diceSide1.innerHTML = side1;
                diceSide2.innerHTML = side2;
                diceSide3.innerHTML = side3;
                result.innerHTML = "Your Result:" + finalScore;

                if (side1 == side2) {
                    win += ((side1 + side2) * 0.1);
                    document.getElementById('win').innerHTML = "WINNER! You have won " + ((side1 + side2) * 0.1) + " Eur";
                } else if (side1 == side3) {
                    win += ((side1 + side3) * 0.1);
                    document.getElementById('win').innerHTML = "WINNER! You have won " + ((side1 + side3) * 0.1) + " Eur";
                } else if (side2 == side3) {
                    win += ((side2 + side3) * 0.1);
                    document.getElementById('win').innerHTML = "WINNER! You have won " + ((side2 + side3) * 0.1) + " Eur";
                } else {
                    document.getElementById('win').innerHTML = "";
                }

            } else {
                    document.getElementById("rollDice").disabled = true;
                    document.getElementById('gameOver').innerHTML = "Game Over";

                    console.log(win);
                    $.post("game.php",
                        {
                            result: win,
                        });
            }

    }
};









