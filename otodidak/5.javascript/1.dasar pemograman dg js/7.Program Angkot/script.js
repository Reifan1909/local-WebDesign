var penumpang = [];

var tambahPenumpang = function(namaPenumpang, penumpang) {
    if (penumpang.length == 0) {
        penumpang.push(namaPenumpang);
        // return penumpang;
    } else {
        for (var i = 0; i < penumpang.length; i++) {
            if (penumpang[i] == undefined) {
                penumpang[i] = namaPenumpang;
                // return penumpang;
            } else if (penumpang[i] == namaPenumpang) {
                console.log("Nama Tersebut sudah ada didalam angkot");
                // return penumpang;
            } else if (i == penumpang.length - 1) {
                penumpang.push(namaPenumpang);
                // return penumpang;
            }
        }
    }
    return penumpang;
}

var penumpangTurun = function(namaPenumpang, penumpang) {
    if (penumpang.length == 0) {
        console.log("angkot kosong");
    } else {
        for (var j = 0; j < penumpang.length; j++) {
            if (penumpang[j] == namaPenumpang) {
                penumpang[j] = undefined;
                // return penumpang;
            } else {
                console.log("penumpang tersebut tidak berada dalam angkot");
                // return penumpang;
            }
        }
    } 
    return penumpang;
}