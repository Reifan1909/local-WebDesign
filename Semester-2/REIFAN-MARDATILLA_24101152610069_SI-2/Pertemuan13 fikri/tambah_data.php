<!DOCTYPE html>
<html>
<head>
	<title>FORM INPUT DATA MAHASISWA</title>
</head>
<body>
 <p><u><b><i>Form Input Data Mahsiswa</i></b></u></p>
        <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
            <table>
            	<tr>
                    <td><h2>Tambah Data Mahasiswa</h2></td>
                </tr>
                <tr>
                    <td>NO BP</td>
                    <td><input type="text" name="nobp"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <input type="radio" name="jekel" value="Laki-laki"> Laki-laki
                        <input type="radio" name="jekel" value="Perempuan"> Perempuan
                      
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td> <textarea name="alamat"> </textarea></td>

                </tr>
                <tr>
                    <td>Telp</td>
                    <td><input type="text" name="telp"></td>
                </tr> 
                <tr>
					<td> Agama <select name="agama"> 
						<option value="Islam"> Islam 
						<option value="Kristen"> Kristen 
						<option value="Budha"> Budha 
					</select>
					</td>
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