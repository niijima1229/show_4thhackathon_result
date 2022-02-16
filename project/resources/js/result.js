document.getElementById('show_result_btn').addEventListener('click', function () {
    document.getElementById('show_result_btn').style.display = 'none';
    let delay = 1000;
    let score_boards = document.getElementsByName('score_board');
    for (let i = 0; i < score_boards.length; i++) {
        setTimeout(() => {
            is_show(score_boards[i]);
        }, delay);
        delay += 2000;
    }
    setTimeout(() => {
        is_show(document.getElementById('total_score_board'));
    }, delay + 4000);
});

let sound1 = new Audio('https://soundeffect-lab.info/sound/button/mp3/decision16.mp3');
let sound2 = new Audio('https://soundeffect-lab.info/sound/button/mp3/decision25.mp3');

function is_show(element) {
    element.classList.add('is_show');
    if (element == document.getElementById('total_score_board')) {
        sound2.play();
    } else {
        sound1.play();
    }
    element.animate([{ opacity: '0' }, { opacity: '1' }], 2000);
}
