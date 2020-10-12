        <!-- Begin Page Content -->
        <div class="container-fluid">

        <!-- DataTales Example -->
          <div class="row">
            <div class="col-lg-3">
              <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data</h6>
                  </div>
                  <div class="card-body">
                      <?php echo form_open_multipart('Admin/create_lokasi');?>
                          <div class="form-group">
                              <label for="nama_lokasi">Nama Lokasi</label>
                              <input type="text" class="form-control" name="nama_lokasi" id="nama_lokasi">
                          </div>
                          <div class="form-group">
                              <label for="koordinat">Koordinat</label>
                              <input type="text" class="form-control" name="koordinat" id="koordinat">
                          </div>
                          <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" class="form-control" id="alamat" cols="10" rows="3"></textarea>
                          </div>
                          <div class="form-group">
                            <button class="btn btn-md btn-primary" type="submit" name="submit">Simpan</button>
                            </div>
                      </form>
                  </div>
              </div>
            </div>
            <div class="col-lg-9">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">List Lokasi</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Tempat</th>
                          <th>Koordinat</th>
                          <th>Alamat</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $no=1;foreach($listlokasi as $lokasi):?>
                        <tr>
                          <td><?= $no++; ?></td>
                          <td><?= $lokasi['nama_lokasi'] ?></td>
                          <td><?= $lokasi['koordinat'] ?></td>
                          <td><?= $lokasi['alamat'] ?></td>
                          <td><a href="<?= base_url('Admin/read_lokasi/') ?><?= $lokasi['id_lokasi']; ?>" class="btn btn-warning btn-sm">Edit</a><a href="<?= base_url('Admin/delete_lokasi/') ?><?= $lokasi['id_lokasi']; ?>" class="btn btn-danger btn-sm">Hapus</a></td>
                        </tr>
                      <?php endforeach;?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

          

        </div>
        <!-- /.container-fluid -->