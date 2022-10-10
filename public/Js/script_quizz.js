window.onload = () => {

    function answer_check(idAnswer) {
        fetch("/", {
            method: 'POST',
            body: JSON.stringify({idAnswer: idAnswer})
        })
            .then((response) => {

                return response.json();
            }).then(data => {
            console.log(data.content.answer_check);
            if (data.content.answer_check === 1) {
                console.log("YES")
                score++
                selectionScore.innerHTML = `<div class="score_aff"> ${Math.round(score * 100 / 6)}</div>`;
                console.log(Math.round(score * 100 / 6));
            }

        })
    }

    let score = 0;
    let i = 0;
    let counterQuestion = 1;

    const answerButton = document.querySelectorAll('.answer');
    let selectionQuestion = document.querySelector('#container_questions' + i);
    let counterQuestionAff = document.querySelector('.title');
    let selectionScore = document.querySelector('.score_aff');
    selectionQuestion.classList.remove('d-none');


    answerButton.forEach(answer => {


        answer.addEventListener('click', () => {

            if (i < 5) {

                console.log(answer.id)
                answer_check(answer.id);

                document.querySelector('#container_questions' + i).classList.add("d-none");
                i++;
                counterQuestion++;
                counterQuestionAff.innerHTML = `<span>${counterQuestion} / 6</span>`;
                document.querySelector('#container_questions' + i).classList.remove('d-none');

            } else {
                window.location.replace("/?resultat")
            }

        })
    })
}

