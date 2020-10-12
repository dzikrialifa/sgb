        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Pengunjung</th>
                      <th>Email</th>
                      <th>Kritik & Saran</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $no= 1; foreach($data as $user):?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $user['nama']; ?></td>
                      <td><?= $user['email']; ?></td>
                      <td><?= $user['isi']; ?></td>
                    </tr>
                  <?php endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->