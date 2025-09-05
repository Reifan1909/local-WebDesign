// membuat object

//object literal
var mhs1 = {
    nama : "reifan",
    kelas : "SI-2",
    email : "reifanmardatilla09@gmail.com"
};

var mhs2 = {
    nama : "panpan",
    kelas : "HK-b",
    email : "panpan@gmail.com"
};


// function declaration
function buatObjectMahasiswa(nama,nim,kelas,email) {
    var mhs = {};
    mhs.nama = nama;
    mhs.nim = nim;
    mhs.kelas = kelas;
    mhs.email = email;
    return mhs;
}

var mhs3 = buatObjectMahasiswa("reifan", "240069", "si-2", "reifanmardatilla09@gmail.com");
var mhs4 = buatObjectMahasiswa("panpan", "240069", "si-2", "reifanmardatilla09@gmail.com");
var mhs5 = buatObjectMahasiswa("baim", "240069", "si-2", "reifanmardatilla09@gmail.com");


// Construktor
function Mahasiswa(nama,nim,kelas,email) {
    this.nama = nama;
    this.nim = nim;
    this.kelas = kelas;
    this.email = email;
}
//          ^ wajib new pada Conductor
var mhs6 = new Mahasiswa("zul", "240069", "si-2", "reifanmardatilla09@gmail.com");

