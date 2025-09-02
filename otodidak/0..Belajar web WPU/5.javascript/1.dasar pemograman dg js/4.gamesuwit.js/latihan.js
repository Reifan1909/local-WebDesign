var kesempatan = 3;
while (kesempatan) {
  //pilihan player
  var p = prompt("pilihlah angka 1-10");
  //angka random komputer 1-10
  var comp = Math.floor(Math.random() * 10) + 1;
  // rules
  if(p == comp) {
    hasil = 'anda benar';
  }else if(p < comp) {
    hasil = 'terlalu kecil'; kesempatan - 1;
  }else if(p > comp) {
    hasil = 'terlalu besar'; kesempatan - 1;
  }else {
    hasil = 'benar';
  }

  alert('anda memasukkan ' + p + '\nnilai yang anda masukkan' + hasil)
}
confirm('coba lagi');

// menentukan rules
// var hasil = ''
// if(p == comp) {
//     hasil = 'benar';
// }else if(p < comp) {
//     hasil = 'angkanya lebih kecil';
// }else if(p > comp) {
//     hasil = 'angkanya lebih besar';
// }else {
//     hasil = 'masukkan angka yang benar antara 1-10';
// }

//tampilkan hasil
alert(
  "anda memasukkan" + p + ", dan komputer memasukkan " + comp + "\n" + hasil
);
