
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    @font-face {
      src: url(../assets/font/tayo.ttf);
      font-family: tayo;
    }
    @font-face {
      src: url(../assets/font/hiya.ttf);
      font-family: hiya;
    }

    h2{
      font-family: hiya;
      text-align: center;
      margin-bottom: 40px;
      margin-top: -10px;
      font-size: 40px;
    }

    table{
      font-family: tayo;
      font-size: 20px;
    }

    .tamba{
      position: absolute;
      margin-left: 285px;
      margin-bottom: 20px;
      font-family: tayo;
      font-size: 15px;
    }
    </style>
  </head>
  <body>

    <h2>Daftar makanan</h2>
    <?= $this->session->flashdata('pesan'); ?>

    <table id="example" class="table table-hover table-stripped">
      <thead>
        <tr>
          <td>No</td>
          <td>Foto Cover</td>
          <td>Nama makanan</td>
          <td>Kategori</td>
          <td>Harga</td>
          <!-- <td>pembuat</td> -->
          <td>Stok</td>
          <td>Aksi</td>
        </tr>
      </thead>
      <tbody>
        <?php $no=0; foreach($tampil_makanan as $makanan):
        $no++; ?>
        <tr>
          <td><?= $no ?></td>
          <td><img src="<?=base_url('assets/img/'.$makanan->foto_cover )?>" style="width: 40px"></td>
          <td><?= $makanan->nama_makanan ?></td>
          <td><?= $makanan->nama_kategori ?></td>
          <td><?= $makanan->harga ?></td>
          <td><?= $makanan->stok ?></td>
          <td><a href="#edit" onclick="edit('<?= $makanan->id_makanan ?>')" data-toggle="modal" class="btn btn-success">Ubah</a>
            <a href="<?=base_url('index.php/makanan/hapus/'.$makanan->id_makanan)?>" onclick="return confirm('Are you sure?')" class="btn btn-danger">Hapus</a></td>
        </tr>
      <?php endforeach ?>
      </tbody>
    </table>

    <center>
      <a href="#tambah" data-toggle="modal" class="btn btn-warning tamba">+Tambah</a>
    </center>

    <div class="modal fade" id="tambah">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-titile" style="color:black;">Tambah makanan</h4>
          </div>
          <div class="modal-body">
            <form action="<?=base_url('index.php/makanan/tambah')?>" method="post" enctype="multipart/form-data">
              <table>
                <tr>
                  <td><input type="hidden" name="id_makanan" class="form-control"></td>
                </tr>
                <tr>
                  <td>Judul makanan</td>
                  <td><input type="text" name="nama_makanan" required class="form-control"></td>
                </tr>
                <tr>
                  <td>Kategori</td>
                  <td><select name="id_kategori" class="form-control">
                    <option></option>
                    <?php foreach($kategori as $kat): ?>
                    <option value="<?=$kat->id_kategori?>"><?=$kat->nama_kategori?></option>
                    <?php endforeach ?>
                  </select></td>
                </tr>
                <!-- <tr>
                  <td>Tahun</td>
                  <td><input type="number" name="tahun" required class="form-control"></td>
                </tr> -->
                <tr>
                  <td>Harga</td>
                  <td><input type="number" name="harga" required class="form-control"></td>
                </tr>
                <!-- <tr>
                  <td>pembuat</td>
                  <td><input type="text" name="pembuat" required class="form-control"></td>
                </tr> -->
                <!-- <tr>
                  <td>Penulis</td>
                  <td><input type="text" name="penulis" required class="form-control"></td>
                </tr> -->
                <tr>
                  <td>Stok</td>
                  <td><input type="number" name="stok" required class="form-control"></td>
                </tr>
                <tr>
                  <td>Foto Cover</td>
                  <td><input type="file" name="foto_cover" class="form-control"></td>
                </tr>
              </table>
              <input type="submit" name="create" value="Simpan" class="btn btn-success">
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="edit">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-titile">Edit makanan</h4>
          </div>
          <div class="modal-body">
            <form action="<?=base_url('index.php/makanan/makanan_update')?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_makanan_lama" id="id_makanan_lama">
              <table>
                <tr>
                  <td><input type="hidden" name="id_makanan" id="id_makanan" class="form-control"></td>
                </tr>
                <tr>
                  <td>Judul makanan</td>
                  <td><input type="text" name="nama_makanan" id="nama_makanan" required class="form-control"></td>
                </tr>
                <tr>
                  <td>Kategori</td>
                  <td><select name="id_kategori" class="form-control" id="id_kategori">
                    <option></option>
                    <?php foreach($kategori as $kat): ?>
                    <option value="<?=$kat->id_kategori?>"><?=$kat->nama_kategori?></option>
                    <?php endforeach ?>
                  </select></td>
                </tr>
                <!-- <tr>
                  <td>Tahun</td>
                  <td><input type="number" name="tahun" required id="tahun" class="form-control"></td>
                </tr> -->
                <tr>
                  <td>Harga</td>
                  <td><input type="number" name="harga" required id="harga" class="form-control"></td>
                </tr>
                <!-- <tr>
                  <td>pembuat</td>
                  <td><input type="text" name="pembuat" required id="pembuat" class="form-control"></td>
                </tr> -->
                <!-- <tr>
                  <td>Penulis</td>
                  <td><input type="text" name="penulis" required id="penulis" class="form-control"></td>
                </tr> -->
                <tr>
                  <td>Stok</td>
                  <td><input type="number" name="stok" required id="stok" class="form-control"></td>
                </tr>
                <tr>
                  <td>Foto Cover</td>
                  <td><input type="file" name="foto_cover" id="foto_cover" class="form-control"></td>
                </tr>
              </table>
              <input type="submit" name="edit" value="Simpan" class="btn btn-success">
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
      function edit(a){
        $.ajax({
          type:"post",
          url:"<?=base_url()?>index.php/makanan/edit_makanan/"+a,
          dataType:"json",
          success:function(data){
            $("#id_makanan").val(data.id_makanan);
            $("#nama_makanan").val(data.nama_makanan);
            $("#id_kategori").val(data.id_kategori);
            $("#harga").val(data.harga);
            // $("#pembuat").val(data.pembuat);
            $("#stok").val(data.stok);
            $("#id_makanan_lama").val(data.id_makanan);
          }
        })
      }
    </script>

  </body>
</html>
