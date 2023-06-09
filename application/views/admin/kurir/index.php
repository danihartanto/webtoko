      <!-- Main Content -->
      <div class="main-content">
        <section class="section"> 
          <div class="section-header">
            <h1>Manajemen Data Kurir</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="http://localhost/tokokita_1658/index.php/adminpanel/dashboard">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="http://localhost/tokokita_1658/index.php/kategori">Kategori</a></div>
              <div class="breadcrumb-item">Kurir</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Data Kurir</h2>
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Kurir</h4><a href="<?php echo site_url('kurir/add');?>" class="btn btn-primary">Tambah Data Kurir</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>No.</th>
                          <th>Nama Kurir</th>
                          <th>Action</th>
                        </tr>
                        <?php foreach($kurir as $item) {?>
                        <tr>
                          <td><?php echo $item->idKurir;?></td>
                          <td><?php echo $item->namaKurir;?></td>
                          <td><a href="<?php echo site_url('kurir/getid/'.$item->idKurir);?>" class="btn btn-warning">Edit</a>
                          <td><a href="<?php echo site_url('kurir/delete/'.$item->idKurir);?>" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a></td>
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