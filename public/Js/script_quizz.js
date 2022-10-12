window.onload = () => {
    let score = 0;

    function answer_check(idAnswer) {
        fetch("/", {
            method: 'POST',
            body: JSON.stringify({idAnswer: idAnswer})
        })
            .then((response) => {
                return response.json();
            }).then(data => {
            score += data.content;
            selectionScore.innerHTML = `<div class="score_aff"> ${Math.round(score * 100 / 6)} %</div>`;
            document.querySelector('.affFinal').innerHTML = `<span class="affFinal"><p>${Math.round(score * 100 / 6)}</p> %</span>`;
        })
        return score;
    }


    let i = 0;
    let counterQuestion = 1;


    const answerButton = document.querySelectorAll('.answer');
    let selectionQuestion = document.querySelector('#container_questions' + i);
    let counterQuestionAff = document.querySelector('.title');
    let selectionScore = document.querySelector('.score_aff');


    selectionQuestion.classList.remove('d-none');

    answerButton.forEach(answer => {
        answer.addEventListener('click', () => {
            if (i <= 4) {
                answer_check(answer.id);
                document.querySelector('#container_questions' + i).classList.add("d-none");
                i++;
                counterQuestion++;
                counterQuestionAff.innerHTML = `<span>${counterQuestion} / 6</span>`;
                document.querySelector('#container_questions' + i).classList.remove('d-none');
                setTimeout(console.log, 1000, score);
            } else {
                answer_check(answer.id);
                document.querySelector('#container_questions' + i).classList.add('d-none');
                document.querySelector('.header_fiche').classList.add('d-none');
                document.querySelector('.title').classList.add('d-none');
                document.querySelector('#result').classList.remove('d-none');
            }
        })
    })
}

