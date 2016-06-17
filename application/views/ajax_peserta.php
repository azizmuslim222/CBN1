<?php
if(isset($detail_barang)){
    foreach($detail_barang as $row){
        ?>

<div class="form-group">
  <label>Nama</label>
  <input class="form-control" name="nama" value="<?php echo $row->nama; ?>" readonly/>
</div>
<div class="form-group">
  <label>Username</label>
  <input class="form-control" name="username" />
</div>
<div class="form-group">
  <label>Password</label>
  <input class="form-control" name="pass" />
</div>
<div class="form-group">
  <label>Level</label>
  <select class="form-control" name="level">
    <option>siswa</option>
    <option>admin</option>
  </select>
</div>
    <?php
    }
}
?>