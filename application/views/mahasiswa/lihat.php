<?php $this->load->view('include/head') ?>
<body>
    <div id="wrapper">  
    <!-- /. NAV TOP  --> 
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                   <h2>Halaman Lihat Mahasiswa</h2>                          
               </div>
           </div>
           <!-- /. ROW  -->
           <hr />
           <p><a class="btn btn-success" href="<?php echo base_url();?>mahasiswa">Kembali</a></p>
           <div class="row">
            <div class="col-md-12">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Lihat Mahasiswa
                    </div>                    
                    <div class="panel-body">
                            <table class="table table-striped">
                                <tr><th width='30%'>No. Registrasi</th><td><?php echo $no_reg; ?></td></tr>                                
                                <tr><th width='30%'>NIS</th><td><?php echo $nis; ?></td></tr>                                
                                <tr><th width='30%'>Nama</th><td><?php echo $nama; ?></td></tr>                                
                                <tr><th width='30%'>Tempat, Tangal Lahir</th><td><?php echo $ttl; ?></td></tr>                                
                                <tr><th width='30%'>Jenis Kelamin</th><td><?php echo $jk; ?></td></tr>                                
                                <tr><th width='30%'>Agama</th><td><?php echo $agama; ?></td></tr>                                
                                <tr><th width='30%'>Alamat</th><td><?php echo $alamat; ?></td></tr>                                
                                <tr><th width='30%'>Asal Sekolah</th><td><?php echo $asal; ?></td></tr>                                
                                <tr><th width='30%'>Jurusan di Sekolah</th><td><?php echo $jurusan; ?></td></tr>                                
                                <tr><th width='30%'>Prestasi</th><td><?php echo $prestasi; ?></td></tr>                                
                                <tr><th width='30%'>Jurusan di Sekolah</th><td><?php echo $jurusan; ?></td></tr>                                
                                <tr><th width='30%'>Prestasi Khusus</th><td><?php echo $prestasi_khusus; ?></td></tr>                                
                                <tr><th width='30%'>Nama Orang Tua</th><td><?php echo $nama_ortu; ?></td></tr>                                
                                <tr><th width='30%'>Pekerjaan Orang Tua</th><td><?php echo $pek_ortu; ?></td></tr>                                
                                <tr><th width='30%'>Penghasilan Orang Tua</th><td><?php echo $peng_ortu; ?></td></tr>                                
                                <tr><th width='30%'>Pilihan Program Studi</th><td><?php echo $pil_prodi; ?></td></tr>                                
                                <tr><th width='30%'>Alasan</th><td><?php echo $alasan; ?></td></tr>
                                <tr><th width='30'>Foto</th><td><img style="height:200px;" src="<?php echo base_url(); ?>images/<?php echo $foto ?>"></td></tr>                                
                            </table>

                   
                    <!-- /. ROW  -->
        <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
        <?php $this->load->view('include/footer') ?>

    </body>
    </html>