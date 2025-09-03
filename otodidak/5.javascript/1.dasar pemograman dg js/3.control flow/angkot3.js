// latihan if-else
var jumlahAngkot = 10;
var angkotBeroperasi = 6;
var noAngkot = 1;

for(noAngkot; noAngkot <= jumlahAngkot; noAngkot++) {
    if(noAngkot <= angkotBeroperasi) {
        console.log('Angkot No. ' + noAngkot + ' beroperasi dengan baik.');
    }else {
        console.log('Angkot No. ' + noAngkot + ' sedang tidak beroperasi');
    }
}
