// DOM Selection

// document.getElementById() -> element
const judul = document.getElementById('judul'); // mencari sesuai id

// mengubah style tanpa menyentuh CSS
judul.style.color = 'blue';
// tidak bisa nulis style dengan simbol - "background-color" >> "backgroundColor" 
judul.style.backgroundColor = 'red';
// mengubah tulisan tanpa menyentuh HTML
judul.innerHTML = 'Halo Dunia';


// document.getElementsByTagName() -> HTMLCollections
// const p = document.getElementsByTagName('p'); // mencari sesuai tag
// // out console >> array [p.p1, p.p2, p.p3]

// p.style.backgroundColor = 'red';      // ERRORRR >> karna yg dihasilkan berupa ARRAY
// p[0].style.backgroundColor = 'red';   // 
// p[1].style.backgroundColor = 'red';   // >> BISA, lebih bagus pake looping
// p[2].style.backgroundColor = 'red';   // 

// for (let i = 0; i < p.length; i++) {
//   p[i].style.backgroundColor = 'red';
// }

const h1 = document.getElementsByTagName('h1')[0];  // seperti ini juga bisa [0] dibelakang
h1.style.fontSize = '10px';


// document.getElementsByClassName() -> HTMLCollecttion
const p1 = document.getElementsByClassName('p1');
p1[0].innerHTML = "Edit paragraft 1 pake JS";