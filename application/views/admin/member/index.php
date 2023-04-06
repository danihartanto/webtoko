      <!-- Main Content -->
      <div class="main-content">
        <section class="section"> 
          <div class="section-header">
            <h1>Manajemen Member</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="http://localhost/tokokita_1658/index.php/adminpanel/dashboard">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="http://localhost/tokokita_1658/index.php/kategori">Kategori</a></div>
              <div class="breadcrumb-item">Member</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Data Member</h2>
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Member</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>No.</th>
                          <th>Username</th>
                          <th>Password</th>
                          <th>Nama</th>
                          <th>Alamat</th>
                          <th>idKota</th>
                          <th>Email</th>
                          <th>No. HP</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                        <?php foreach($member as $item) {?>
                        <tr>
                          <td><?php echo $item->idKonsumen;?></td>
                          <td><?php echo $item->username;?></td>
                          <td><?php echo $item->password;?></td>
                          <td><?php echo $item->namaKonsumen;?></td>
                          <td><?php echo $item->alamat;?></td>
                          <td><?php echo $item->idKota;?></td>
                          <td><?php echo $item->email;?></td>
                          <td><?php echo $item->tlpn;?></td>
                          <td><?php echo $item->statusAktif;?></td>
                          <a href="<?php echo site_url('member/delete/'.$item->idBiayaKirim);?>" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a></td>
                        </tr>
                      <?php } ?>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>