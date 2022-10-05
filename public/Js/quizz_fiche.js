
window.onload = () => {

    /* Maintenant que l'on a les informations du site il faut pouvoir savoir où l'on clique et comparer */


 if (data.success === true) {
     let i = 0;
    let questionsAffichage = document.querySelector('[data-id = "' + i +'"]');
    const answerButton = document.querySelectorAll('.answer');
    const selectionScore = document.querySelector('#affichage_score');
    const selectionQuestionCard = document.querySelector('.question')


     questionsAffichage.classList.remove("d-none")


    function nextQuestion(){

        /*for (let i=0; i < 6; i++) { }*/


            questionsAffichage.classList.add('d-none');
            i++;
        questionsAffichage.classList.remove('d-none');
            console.log(questionsAffichage);
            /*questionsAffichage.classList.remove("d-none");*/


    }







let score = 0;



    answerButton.forEach(answer => {
        answer.addEventListener('click', () =>{
            for (const element of data.content) {
                for (const answers of element.answers) {

                    id_answer= answers.id
                    answer_check= answers.answer_check
                    if( answer.dataset.id == id_answer && answer_check == 1 ) {
                        score++
                        let affichageScore = `<div class="affichage_score">Taux de réussite: ${Math.round(score*100/6)} %</div>`
                        selectionScore.innerHTML = affichageScore;

                        nextQuestion()


                    }

                }
            }


        })
        })

}}

