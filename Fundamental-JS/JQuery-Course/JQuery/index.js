
$(document).ready(function(){
  btnHide();
  btnShow();
  tampilkan();
  animationBox();
  prependAppend();
  htmlJquery();
  //abc();
  outputRadio();
  addClass();
  removeClass();
  addAttr();
  removeAttr();
  ambilValAttr();
  sibling();
  panggilAjax();
});
//function show hide
function btnHide() {
  $(".btn-hide").click(function(){
    $(".element-spesial").hide();
  })
}
function btnShow() {
  $(".btn-show").click(function(){
    $(".element-spesial").show();
  })
}
//function show and hide effect ul and li
function tampilkan(){
  $(".li").first().fadeIn(500, function callback_tampil(){
    if ($(this).is(":last-child")) {
      hide();
    }else{
      $(this).next().fadeIn(500, callback_tampil);
    }
  });
}
function hide() {
  $(".li").last().hide(500, function callback_hide(){ //bisa pake fadeOut juga
    if ($(this).is(":first-child")) {
      tampilkan();
    }else {
      $(this).prev().hide(500, callback_hide);
    }
  });
}
//function animasi box
function animationBox() {
  $(".box").animate({
    left:"+=150",
    opacity:0.5
  }, 500, callBackAnimationBox);
}
function callBackAnimationBox() {
  $(this).animate({
    left:"-=150",
    opacity:1
  }, 1000, animationBox)
}
//function append and prepend
function prependAppend(){
  $(".tambah-di-awal").click(function(){
    $(".box2").prepend("tambahkan di awal | ");
  })
  $(".tambah-di-akhir").click(function(){
    $(".box2").append(" | tambah di akhir ");
  })
}
//function dom untuk menambahkan html melalui js atau mengambil html
function htmlJquery() {
  $(".isi-text").html("Ini dari JQuery");
  let temp = $(".element-spesial").html();
  console.log(temp);
}
// function menambahkan value ke inputan
// function abc(){
//   $(".input-text").val("xxxaaa")
// }
//function merubah tag div menjadi tulisan sesaui value dari radio button yang di pilih
function outputRadio() {
  $(".input-radio").change(function() {
    let nilaiRadio = $(".input-radio:radio:checked").val();
    $(".output-radio").html(nilaiRadio);
  })
}
//function add and remove class
function addClass() {
  $(".tambah-di-awal").click(function(){
    $(".box2").addClass("class-tambahan");
  })
}
function removeClass(){
  $(".tambah-di-akhir").click(function(){
    $(".box2").removeClass("class-tambahan")
  })
}
//function add and remove and take attr
function addAttr(){
  $(".tambah-di-awal").click(function(){
    $(".box2").attr("id", "id-tambahan")
  })
}
function removeAttr(){
  $(".tambah-di-akhir").click(function(){
    $(".box2").removeAttr("id")
  })
}
function ambilValAttr(){
  $(".dapatkan-attr").click(function(){
    let temp = $(".box2").attr("id");
    console.log(temp);
  })
}
//function sibling untuk mengganti list, jika parameter sibling kosong, maka semua akan di
//ganti, jika di isi parameter class dari list, maka hanya list tersebut yang berganti
function sibling(){
  $("li.list-kedua").siblings().html("sibiling dari kelas kedua")
}
//function ajax. untuk menampilkan file lain ke dalam file ini
function panggilAjax(){
  $(".btn-panggil-ajax").click(function(){
    $.ajax({
      method: "POST",
      url:"keluarkan-data.php",
      data: "nama=hakim&umur=17",
      success : function(data){
        $(".tampilkan-data").html(data);
      }
    })
  })
}
