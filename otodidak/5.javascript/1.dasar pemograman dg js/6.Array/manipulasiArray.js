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







