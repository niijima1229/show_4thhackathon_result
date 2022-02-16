let sound2 = new Audio('https://soundeffect-lab.info/sound/button/mp3/decision25.mp3');
function sound() {
    sound2.play();
}
document.getElementById('target').onclick = sound;
