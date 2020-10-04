const kalkulator = {
  displayNumber: '0',
  firstNumber: null, //deklarasi angka pertamanya 0
  operator: null,
  waitingForSecondNumber: false //menunggu angka kedua
}
function updateDisplay(){
  document.querySelector("#displayNumber").innerText = kalkulator.displayNumber;
}
function clearAll(){
  kalkulator.displayNumber = '0';
  kalkulator.operator = null;
  kalkulator.firstNumber = null;
  kalkulator.waitingForSecondNumber = false;
}
function inputDigit(digit){
  if(kalkulator.displayNumber === '0'){
    kalkulator.displayNumber = digit;
  }
  else{
    kalkulator.displayNumber += digit;
  }
}
const buttons = document.querySelectorAll(".button");
for(let button of buttons){
  button.addEventListener('click', function(even){
    const target = event.target;
    if(target.classList.contains('clearAlls')) {
      clearAll();
      updateDisplay();
      return;
    }
    inputDigit(target.innerText);
    updateDisplay();
  });
}
