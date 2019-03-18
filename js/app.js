let userScore = 0;
let computerScore = 0;
let drawScore = 0;
let userScore_span = document.getElementById('user-score');
let computerScore_span = document.getElementById('computer-score');
let drawScore_span = document.getElementById('draw-score');
const scoreBoard_div = document.querySelector('.score-board');
let result_div = document.querySelector('.result > h3');
const rock_div = document.getElementById('r');
const paper_div = document.getElementById('p');
const scissor_div = document.getElementById('s');


const getComputerChoice = () => {
  const choices = ['r', 'p', 's'];
  let choiceIndex = Math.floor(Math.random() * 3);
  return choices[choiceIndex];
};

const convertToWord = letter => {
  if(letter === 'r'){
    return 'Piedra';
  } else if(letter === 's'){
    return 'Tijera';
  } else if(letter === 'p'){
    return 'Papel';
  }
};

const win = (user, computer)=>{
  userScore++;
  userScore_span.innerHTML = userScore;
  computerScore_span.innerHTML = computerScore;
  const smallUserWord = '(Vos)'.fontsize(2).sup();
  const smallCompWord = '(Compu)'.fontsize(2).sup();
  result_div.innerHTML = `${convertToWord(user)}${smallUserWord} le gana a ${convertToWord(computer)}${smallCompWord}`;
}
const lose = (user, computer)=>{
  computerScore++;
  computerScore.innerHTML = computerScore;
  computerScore_span.innerHTML = computerScore;
  const smallUserWord = '(Vos)'.fontsize(2).sup();
  const smallCompWord = '(Compu)'.fontsize(2).sup();
  result_div.innerHTML = `${convertToWord(user)}${smallUserWord} pierde con ${convertToWord(computer)}${smallCompWord}`;
}
const draw = (user, computer)=>{
  drawScore++;
  drawScore_span.innerHTML = drawScore;
  const smallUserWord = '(Vos)'.fontsize(2).sup();
  const smallCompWord = '(Compu)'.fontsize(2).sup();
  result_div.innerHTML = `${convertToWord(user)}${smallUserWord} empata con ${convertToWord(computer)}${smallCompWord}`;
}

const game = (userChoice) =>{
  const computerChoice = getComputerChoice();
  switch (userChoice + computerChoice) {
    case 'rs':
    case 'sp':
    case 'pr':
      win(userChoice, computerChoice);
      break;
    case 'ps':
    case 'sr':
    case 'rp':
      lose(userChoice, computerChoice);
      break;
    case 'ss':
    case 'rr':
    case 'pp':
      draw(userChoice, computerChoice);
      break;
  }
};


const main = () => {
  rock_div.addEventListener('click', ()=>{
    game('r');
  })
  paper_div.addEventListener('click', ()=>{
    game('p');
  })
  scissor_div.addEventListener('click', ()=>{
    game('s');
  })
};
main();
