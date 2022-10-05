
window.onload = () => {

    /* Maintenant que l'on a les informations du site il faut pouvoir savoir où l'on clique et comparer */


    if (data.success === true) {
        for (const element of data.content) {
            for (const answers of element.answers) {
                console.log(answers)
            }
        }
    }

    const questionsAffichage = document.querySelectorAll('#container_questions');
    const answerButton = document.querySelectorAll('.answer');

    debut_jeu()
    function debut_jeu(){
        answerButton.forEach(answer)=>


        questionsAffichage.classList.remove('d-none');

    }


}

