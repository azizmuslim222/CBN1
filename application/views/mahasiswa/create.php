<?php $this->load->view('include/head') ?>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">admin</a> 
            </div>
            <div style="color: white;
            padding: 15px 50px 5px 50px;
            float: right;
            font-size: 16px;">
            <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> 
        </div>
    </nav>   
    <!-- /. NAV TOP  --> 
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">                          
               </div>
           </div>
           <!-- /. ROW  -->
           <hr />                
                <p><a class="btn btn-success" href="<?php echo base_url();?>mahasiswa">Kembali</a></p>
           <hr />
           <div class="row">
            <div class="col-md-12">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Identitas Mahasiswa
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form role="form" action="<?php echo base_url(); ?>mahasiswa/insert" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>No. Registrasi</label>
                                        <input class="form-control" name="no_reg" required/>
                                    </div>
                                    <div class="form-group">
                                        <label>NIS</label>
                                        <input class="form-control" name="nis" />
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input class="form-control" name="nama" />
                                    </div>
                                    <div class="form-group">
                                        <label>Tempat Tangal Lahir</label>
                                        <input class="form-control" name="ttl" />
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control" name="jk">
                                            <option>Laki-Laki</option>
                                            <option>Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Agama</label>
                                        <select class="form-control" name="agama">
                                            <option>Islam</option>
                                            <option>Kristen</option>
                                            <option>Hindu</option>
                                            <option>Budha</option>
                                            <option>konghucu</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat Lengkap</label>
                                        <input class="form-control" name="alamat" />
                                    </div>
                                    <div class="form-group">
                                        <label>Asal Sekolah</label>
                                        <input class="form-control" name="asal" />
                                    </div>
                                    <div class="form-group">
                                        <label>Jurusan di Sekolah</label>
                                        <input class="form-control" name="jurusan" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Prestasi</label>
                                        <textarea class="form-control" rows="3" name="prestasi"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Prestasi Khusus</label>
                                        <textarea class="form-control" rows="3" name="prestasi_khusus"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Orang Tua</label>
                                        <input class="form-control" name="nama_ortu" />
                                    </div>
                                    <div class="form-group">
                                        <label>Pekerjaan Orang Tua</label>
                                        <input class="form-control" name="pek_ortu" />
                                    </div>
                                    <div class="form-group">
                                        <label>Penghasilan Orang Tua</label>
                                        <select class="form-control" name="peng_ortu">
                                            <option>0-1 juta/bulan</option>
                                            <option>1-3 juta/bulan</option>
                                            <option>3-5 juta/bulan</option>
                                            <option>di atas 5 juta/bulan </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Pilihan Program Studi</label>
                                        <input class="form-control" name="pil_prodi" />
                                    </div>
                                    <div class="form-group">
                                        <label>Alasan</label>
                                        <textarea class="form-control" rows="3" name="alasan"></textarea>
                                    </div>
                                   <div class="form-group">
                                        <label>Foto</label>
                                        <input type="file" name="file_upload" />
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan </button>
                                    <a class="btn btn-default" href="<?php echo base_url();?>mahasiswa">Batal</a>
                                </form>
                            </div>
                            <!-- End Form Elements -->
                        </div>
                    </div>
                    <!-- /. ROW  -->
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
                        </div>
                        <div class="col-md-6">
                        </div>
                        </div>
                    </div>
                    <!-- /. ROW  -->
        <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
        <?php $this->load->view('include/footer') ?>

    </body>
    </html>
