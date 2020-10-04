const tombol = document.querySelector(".container");
const display = document.querySelector("#display");
let resetDisplay = false;
let hitung = false;
let tempVal = '';
let operator = '';

tombol.addEventListener("click", operation);

function operation(e){
  const tombolClick = e.target;
  const nilaiTombol = tombolClick.innerHTML;

  if (nilaiTombol == "C") {
    display.value = "";
  }else if (nilaiTombol == "&lt;") {
    display.value = display.value.slice(0, -1);
  }else if (nilaiTombol == "=") {
    if (hitung == true) {
      display.value = eval(tempVal + operator + display.value);
      hitung = false;
    }
  }else if (tombolClick.classList.contains('operator')) {
    if (hitung == true) {
      display.value = eval(tempVal + operator + display.value);
      hitung = false;
    }
    tempVal = display.value;
    operator = nilaiTombol;
    resetDisplay = true;
  }else {
    if (resetDisplay == true) {
      display.value = nilaiTombol;
      resetDisplay = false;
      hitung = true;
    }else {
      display.value = display.value + nilaiTombol;
    }
  }
  //console.log(nilaiTombol);
}
