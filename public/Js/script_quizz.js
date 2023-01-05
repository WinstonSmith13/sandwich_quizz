window.onload = () => {

    //Compteur Score.
    let score;
    //Compteur pour affichage des fiches.
    let i = 0;
    //Compteur pour le compteur de question dans le header de la fiche.
    let counterQuestion = 1;


    const answerButton = document.querySelectorAll('.answer');
    let selectionQuestion = document.querySelector('#container_questions' + i);
    let counterQuestionAff = document.querySelector('.title');
    let selectionScore = document.querySelector('.score_aff');


    //Vérification de la réponse (faux ou vrai) du côté serveur.

    function answer_check(idAnswer) {
        fetch("/", {
            method: 'POST',
            body: JSON.stringify({idAnswer: idAnswer})
        })
            .then((response) => {
                return response.json();
            }).then(data => {

                score =  data ;
                console.log(score);


                //Récupération de la valeur de la table "answer_check" dans la base de donnée (soit 0 ou 1) et ajout dans
            //la variable score.

            //score += data.content;

            //Affiche du score à la suite de la réponse.
            //selectionScore.innerHTML = `<div class="score_aff"> ${Math.round(score * 100 / 6)} %</div>`;
            //Récupération et affichage du score pour le résultat.
            //document.querySelector('.affFinal').innerHTML = `<h3 class="affFinal">SCORE<h1>${Math.round(score * 100 / 6)} %</h1></h3>`;

        })


    }

    //Affichage de la première question.
    selectionQuestion.classList.remove('d-none');


    //Ajout du dynamisme.
    answerButton.forEach(answer => {
        answer.addEventListener('click', () => {

            if (i <= 4) {
                //Vérification de la réponse.
                answer_check(answer.id);
                //Passage à la fiche de question suivante.
                document.querySelector('#container_questions' + i).classList.add("d-none");
                i++;

                counterQuestion++;
                counterQuestionAff.innerHTML = `<span>${counterQuestion} / 6</span>`;
                document.querySelector('#container_questions' + i).classList.remove('d-none');
            } else {
                answer_check(answer.id);

                //Ajout de la class "d-none" pour cacher le header des fiches.
                /*document.querySelector('#container_questions' + i).classList.add('d-none');
                document.querySelector('.header_fiche').classList.add('d-none');
                document.querySelector('.title').classList.add('d-none');
                document.querySelector('#result').classList.remove('d-none');*/
                window.location.replace("/?score");

            }
        })
    })
}


