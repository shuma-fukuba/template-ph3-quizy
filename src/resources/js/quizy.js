const checkAnswer = (questionNum, choiceNum, valid) => {

}


const validateAnswer = (valid) => {
 if (valid === 1) return true
 return false
}

const appearAnswerbox = (questionNum, choiceNum, valid) => {
    let answerBox= document.getElementById(`quiz-result-${questionNum}`)
    if (validateAnswer(valid)) {
        answerBox.querySelector('quiz-result-title')
    }
}
