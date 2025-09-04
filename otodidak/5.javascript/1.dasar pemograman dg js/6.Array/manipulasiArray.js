// // 1. menambah isi array
// var arr = [];
// arr[0]= "reifan";
// arr[1]= "endut";
// arr[2]= "yeye";
// arr[5]= "serli";
// console.log(arr);
// // output >> Array(6)


// // 2. menghapus isi array
// var arr = ["reifan", "endut", "yeye"];
// arr[1] = undefined;
// console.log(arr);
// // tidak menghapus, hanya mengganti


// // 3. menampilkan isi array
// var arr = ["reifan", "endut", "yeye"];
// for (let i = 0; i < arr.length; i++) {
//     console.log('mahasiswa absen ke-'+ (i+1) + ' ' + arr[i]);
// }


// method pada array
var arr = ["reifan", "endut", "yeye", "pardi", "daus", "sukk"];

// // 1. join >> menampikan isi array
// console.log(arr.join(' - '));


// // 2. push & pop  >> menambah & menghapus dari belakang
// arr.push('repan');
// console.log(arr.join(', '));
// arr.pop();
// console.log(arr.join(', '));

// // 3. unshif & shif >> menambah & menghapus dari depan
// arr.unshift('panpan');
// console.log(arr.join());
// arr.shift();
// console.log(arr.join());


// // 4. splice >> menambahkan ditengah array
// // splice(indexAwal, mauDihapusBerapa, elemenBaru1, ...)
// arr.splice(2, 0, "panpan", "zul"); // disisipkan diindex ke2, hapus isi array sebanyak 0
// console.log(arr.join());
// arr.splice(2, 2);
// console.log(arr.join());

// // 5. slice >> mengambil ditengah
// // slice(awal, akhir)
// var arr2 = arr.slice(2,5); // yg diambil dari index ke2 - ke4
// console.log(arr2.join());


// // 6. foreach  >> pengganti for
var angka = [1,2,3,4,5,6,7];
// for (var i = 0; i < angka.length; i++) {
//     console.log(angka[i]);
// }

// angka.forEach(function(e) {
//     console.log('index ke-' + i + ' adalah ' + e);
// });

// arr.forEach(function(e,i) {  // e parameter elemen, i parameter index
//     console.log('mahasiswa ke-' + (i+1) + ' adalah ' + e);
// });

// // 7. map  >> mengembalikan nilai array, foreach tidak
// angka.map(function(e) { 
//     console.log(e);  // sama seperti foreach
// });

// var angka2 = angka.map(function(e) {
//     return e * 2;   // bisa return
// });
// console.log(angka2.join());

// // 8. sort
// // jika angkanya 1digit
// var ang = [1,5,3,6,8,9];
// ang.sort();
// console.log(ang.join(' - '));

// // angka 2digit
// var ang = [1,5,3,20,10,9]; // kalo pake cara 1digit, maka 1,10,20,3,5,9
// ang.sort(function(a,b) {   // , karna sort melihat digit awalnya, 10 >> 1
//     return a-b;     // a - b < 0, maka a sebelum b.
// });                 // a - b > 0, maka b sebelum a.
// console.log(ang.join(' - '));


// // 9. filter & find >> mencari nilai yg ada pada array
// // filter >> mencari nilai yg ada pada array
// var ang = [1,5,3,20,10,9]; // filter mengembalikan array
// var ang2 = ang.filter(function(x) {
//     // return x == 5;
//     return x > 3;
// });
// console.log(ang2.join());

// // find >> mencari nilai yg pertama ditemukan, dicari dari index ke-0
// var ang = [1,5,3,20,10,9]; // find mengembalikan nilai, tidak bisa pake join
// var ang2 = ang.find(function(x) {
//     return x > 3
// });
// console.log(ang2);

// methode lainnya cek di https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array