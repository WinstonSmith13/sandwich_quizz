


window.onload = () => {


    /*if (data.success === true) {*/
        let i = 0;
        let counterQuestion = 1;

        const answerButton = document.querySelectorAll('.answer');
        let selectionQuestion = document.querySelector('#container_questions' + i);
        let counterQuestionAff = document.querySelector('.title');

        selectionQuestion.classList.remove('d-none');


        let score = 0;

        answerButton.forEach(answer => {
            answer.addEventListener('click', () => {

                if (i < 5) {
                    document.querySelector('#container_questions' + i).classList.add("d-none");
                    i++;
                    counterQuestion++;
                    counterQuestionAff.innerHTML = ` <span>${counterQuestion} sur 6 Questions</span>`;
                    document.querySelector('#container_questions' + i).classList.remove('d-none');

                    console.log("wesh");


                   /* for (const element of data.content) {
                        for (const answers of element.answers) {
*/
                            /*let id_answer = answers.id
                            let answer_check = answers.answer_check
                            if (answer.dataset.id == id_answer && answer_check == 1) {
                                score++
                                let affichageScore = `<div class="affichage_score">Taux de réussite: ${Math.round(score * 100 / 6)} %</div>`
                                document.querySelector('.answer').classList.add("questioncorrect");

                                selectionScore.innerHTML = affichageScore;

                            }
                        }*/
                   /* }*/
                }
                else {
                    window.location.replace("/?resultat")

                }

            })
        })
    /*}*/
}

