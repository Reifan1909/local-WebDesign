// // contoh penggunaan if else
// var angka = parseInt(prompt('masukkan angka'));

// if(angka === 1) {
//     alert('anda memasukkan angka 1');
// }else if(angka === 2) {
//     alert('anda memasukkan angka 2');
// }else {
//     alert('anda memasukkan angka yang salah');
// }

// // jika menggunakan swicth
// var angka = parseInt(prompt("masukkan angka"));

// switch (angka) {
//   case 1:
//     alert("anda memasukkan angka 1");
//     break;
//   case 2:
//     alert("anda memasukkan angka 2");
//     break;
//   default:
//     alert("anda memasukkan angka yang salah");
// }

var item = prompt(
  "masukkan nama makanan : \n ( nasi, daging, ayam, sosis, burger, gorengan, mie )"
);

switch (item) {
  case "nasi":                      // |
  case "ayam":                      // |>> output yang sama,jadi bisa digabung
  case "daging":                    // |
    alert("makanan sehat");
    break;
  case "sosis":                     // |
  case "burger":                    // |>> output yang sama,jadi bisa digabung
  case "gorengan":                  // |
  case "mie":                       // |
    alert("makanan tidak sehat");
    break;
  default:
    alert("anda salah memasukkan nama makanan yang salah");
    break;
}
