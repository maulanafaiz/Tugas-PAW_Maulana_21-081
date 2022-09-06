<h1> Form Absensi Mahasiswa</h1>
<form action="Inputan.php" method="POST" name= "form_user">
    <table>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" name="nama_lengkap"></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><input type="number" name="nim"></td>
        </tr>
        <tr>
            <td>Universitas</td>
            <td>:</td>
            <td><input type="text" name="univ"></td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td>:</td>
            <td><input type="text" name="prodi"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <button type="submit" name="kirim">Kirim </button>
            </td>
        </tr>
    </table>
</form>