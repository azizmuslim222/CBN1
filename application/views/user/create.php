<?php $this->load->view('include/head') ?>
<body>
  <div id="wrapper">  
  <!-- /. NAV TOP  --> 
  <!-- /. NAV SIDE  -->
  <div id="page-wrapper" >
    <div id="page-inner">
      <div class="row">
        <div class="col-md-6">
         <h2>Halaman Peserta</h2>                          
       </div>
     </div>
     <!-- /. ROW  -->
     <hr />
     <div class="row">
      <div class="col-md-6">
        <!-- Form Elements -->
        <div class="panel panel-default">
          <div class="panel-heading">
            Tambah Akun Peserta
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-6">
                <form role="form" action="<?php echo base_url(); ?>user/insert" method="post">
                  <div class="form-group">
                    <label>Nis</label>
                    <select id="nis" tabindex="5" class="chzn-select form-control" name="nis" value="" data-placeholder="Cari NIS..">
                      <option value=""></option>
                      <?php
                      if(isset($data_barang)){
                        foreach($data_barang as $row){
                          ?>
                          <option value="<?php echo $row->nis?>"><?php echo $row->nis?></option>
                          <?php
                        }
                      }
                      ?>
                    </select>
                  <div id="detail_barang" name="detail_barang"></div>
                  <br>
                  <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Simpan</button>                    
                    <a class="btn btn-default" href="<?php echo base_url();?>user">Batal</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- End Form Elements -->
    </div>
  </div>
  <!-- /. ROW  -->
  <!-- /. ROW  -->
</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script type="text/javascript">
    $("#nis").change(function(){
        var nis = $("#nis").val();
        $.ajax({
            type: "POST",
            url : "<?php echo base_url('user/get_detail_barang'); ?>",
            data: "nis="+nis,
            cache:false,
            success: function(data){
                $('#detail_barang').html(data);
                document.frm.add.disabled=false;
            }
        });
    });

</script>
<?php $this->load->view('include/footer') ?>

</body>
</html>
