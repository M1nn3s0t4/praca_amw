function submitAnswers() {
    const correctAnswers = 
    [
      "d", "d", "a", "d", "d", "b", "c", "b", "c", "a",
      "c", "d", "c", "a", "c", "d", "c", "d", "a", "b",
      "b", "d", "d", "c", "a", "d", "d", "b", "d", "d",
      "b", "b", "b", "b", "b", "d", "a", "d", "c", "b"
    ];
    let score = 0;
  
    for (let i = 0; i < correctAnswers.length; i++) {
      const selectedAnswer = document.querySelector(`input[name=question${i}]:checked`);
      if (selectedAnswer) {
        if (selectedAnswer.value === correctAnswers[i]) {
          score++;
        }
      }
    }
  
    const totalQuestions = correctAnswers.length;
    const percentage = (score / totalQuestions) * 100;
  
    const resultsContainer = document.getElementById('results');
    resultsContainer.innerHTML = `Twój wynik: ${score} / ${totalQuestions} (${percentage.toFixed(2)}%)`;
  }

  function resetQuiz() {
    const answerContainers = document.querySelectorAll('input[type="radio"]:checked');
    answerContainers.forEach(answerContainer => {
      answerContainer.checked = false;
    });
  
    const resultsContainer = document.getElementById('results');
    resultsContainer.innerText = ""; // Wyczyść wynik
  }


  function submitAnswers_2() {
    const correctAnswers = 
    [
      "c", "d", "d", "a", "c", "a", "a", "b", "c", "a",
      "c", "d", "d", "a", "c", "a", "a", "b", "c", "a",
      "c", "d", "d", "a", "c", "a", "a", "b", "c", "a",
      "c", "d", "d", "a", "c", "a", "a", "b", "c", "a"
    ];
    let score = 0;
  
    for (let i = 0; i < correctAnswers.length; i++) {
      const selectedAnswer = document.querySelector(`input[name=question${i}]:checked`);
      if (selectedAnswer) {
        if (selectedAnswer.value === correctAnswers[i]) {
          score++;
        }
      }
    }
  
    const totalQuestions = correctAnswers.length;
    const percentage = (score / totalQuestions) * 100;
  
    const resultsContainer = document.getElementById('results');
    resultsContainer.innerHTML = `Twój wynik: ${score} / ${totalQuestions} (${percentage.toFixed(2)}%)`;
  }

  function resetQuiz_2() {
    const answerContainers = document.querySelectorAll('input[type="radio"]:checked');
    answerContainers.forEach(answerContainer => {
      answerContainer.checked = false;
    });
  
    const resultsContainer = document.getElementById('results');
    resultsContainer.innerText = ""; // Wyczyść wynik
  }
  