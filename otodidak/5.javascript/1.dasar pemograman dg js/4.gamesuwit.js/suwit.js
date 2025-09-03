// pengulangan
var lagi = true;
while (lagi ===true) {
  // pilihan palyer
  var p = prompt("pilih : gajah, semut, orang");

  // pilihan computer
  var comp = "";

  // bilangan random
  var comp = Math.random();

  if (comp < 0.34) {
    comp = "gajah";
  } else if (comp >= 0.34 && comp < 0.67) {
    comp = "semut";
  } else {
    comp = "orang";
  }

  // menentukan rules
  var hasil = "";

  if (p == comp) {
    hasil = "seri";
  } else if (p == "gajah") {
    hasil = (comp == 'semut') ? 'anda kalah' : 'anda menang';
  } else if (p == "orang") {
    hasil = (comp == 'gajah') ? 'anda kalah' : 'anda menang';
  } else if (p == "semut") {
    hasil = (comp == 'orang') ? 'anda kalah' : 'anda menang';
  } else {
    hasil = "jawaban anda tidak tepat";
  }

  // tampilkan hasil
  alert('anda memilih ' + p + ', komputer memilih ' + comp + ":\nmaka " + hasil);

  lagi = confirm("ingin coba lagi?");
}

alert("thanks");
