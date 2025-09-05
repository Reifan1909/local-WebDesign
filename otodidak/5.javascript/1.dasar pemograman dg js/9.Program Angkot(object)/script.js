// membuat object angkot
function Angkot(sopir,trayek,penumpang,kas) {
    this.sopir = sopir;
    this.trayek = trayek;
    this.penumpang = penumpang;
    this.kas = kas;

    this.penumpangNaik = function (namaPenumpang) {
        for (let i = 0; i < this.penumpang.length; i++) {
            if (this.penumpang[i] == undefined) {
                this.penumpang[i] = namaPenumpang;
            } else {
                this.penumpang.push(namaPenumpang);
                return this.penumpang;
            }
        }
    }

    this.penumpangTurun = function (namaPenumpang,bayar) {
        if (this.penumpang.length == 0) {
            alert("angkot kosong");
            return false;
        } else {
            for (var i = 0; i < this.penumpang.length; i++) {
                if (this.penumpang[i] == namaPenumpang) {
                    this.penumpang[i] = undefined;
                    this.kas += bayar;
                    return this.penumpang;
                }
            }
        }
    }
}

var angkot1 = new Angkot("reifan", ["pyk","bkt","pdg"], [], 0);
var angkot2 = new Angkot("panpan", ["pyk","pku"], [], 0);
