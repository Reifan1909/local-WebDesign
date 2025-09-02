<!DOCTYPE html>
<html>
<head>
	<title>FORM INPUT MASAKAN</title>
</head>
<body>
    <p><u><b><i>Form Input Masakan</i></b></u></p>
        <h2>Tambah Data Masakan</h2>
        <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>ID Masakan</td>
                    <td><input type="text" name="id_masakan"></td>
                </tr>
                <tr>
                    <td>Nama Masakan</td>
                    <td><input type="text" name="nama_masakan"></td>
                </tr>
                <tr>
                    <td>Jenis Makanan</td>
                    <td>
                        <input type="radio" name="jenis_makanan" value="Kering"> Kering
                        <input type="radio" name="jenis_makanan" value="Basah"> Basah
                        <input type="radio" name="jenis_makanan" value="Tradisional"> Tradisional
                        <input type="radio" name="jenis_makanan" value="Modern"> Modern
                    </td>
                </tr>
                <tr>
                    <td>Komposisi</td>
                    <td> <textarea name="komposisi"></textarea></td>

                </tr>
                <tr>
                    <td>Harga</td>
                    <td><input type="text" name="harga"></td>
                </tr> 
                <tr>
                    <td>Foto</td>
                    <td><input type="file" name="foto"></td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Simpan">
                        <input type="reset" value="Batal">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>