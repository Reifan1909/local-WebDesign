<!DOCTYPE html>
<html>
<head>
	<title>FORM INPUT MAHASISWA</title>
</head>
<body>
    <p><u><b><i>Form Input Mahasiswa</i></b></u></p>
        <h2>Tambah Data Mahasiswa</h2>
        <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>NOBP</td>
                    <td><input type="text" name="nobp"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <input type="radio" name="jenis_kelamin" value="Pria"> Pria
                        <input type="radio" name="jenis_kelamin" value="Wanita"> Wanita
                        <input type="radio" name="jenis_kelamin" value="LGBT"> LGBT
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td> <textarea name="alamat"></textarea></td>

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