<h1 style="text-align:center">formulir pendaftaran</h1>
<br/>
<table border="1">
	<tr style="background-color: red">
    	<tr><th>No. Registrasi</th></tr>
        <tr><th>NIS</th></tr>
        <tr><th>Nama Lengkap</th></tr>
        <tr><th>Tempat tanggal Lahir</th></tr>
        <tr><th>Jenis Kelamin</th></tr>
        <tr><th>Agama</th></tr>
        <tr><th>Asal Sekolah</th></tr>
        <tr><th>Jurusan di sekolah</th></tr>
        <tr><th>Prestasi</th></tr>
        <tr><th>Prestasi Khusus</th></tr>
        <tr><th>Nama Orang tua</th></tr>
        <tr><th>Pekerjaan orang tua</th></tr>
        <tr><th>Penghasilan orang tua</th></tr>
        <tr><th>Pilihan progran studi</th></tr>
        <tr><th>alasan</th></tr>
    </tr>
    
    <?php
    	$query = $this->modeladmin->cetakmhs();
		
		foreach($query->result() as $row):
	?>
    
    <tr>
    	<td><?php echo $row->no_reg;?></td>
        <td><?php echo $row->nis;?></td>
        <td><?php echo $row->nama;?></td>
        <td><?php echo $row->ttl;?></td>
        <td><?php echo $row->jk;?></td>
        <td><?php echo $row->agama;?></td>
        <td><?php echo $row->alamat;?></td>
        <td><?php echo $row->asal;?></td>
        <td><?php echo $row->jurusan;?></td>
        <td><?php echo $row->prestasi;?></td>
        <td><?php echo $row->prestasi_khusus;?></td>
        <td><?php echo $row->nama_ortu;?></td>
        <td><?php echo $row->pek_ortu;?></td>
        <td><?php echo $row->peng_ortu;?></td>
        <td><?php echo $row->pil_prodi;?></td>
        <td><?php echo $row->alasan;?></td>
        
    </tr>
    
    <?php
		endforeach;
   	?>
</table>