      <!-- Main Content -->
      <div class="main-content">
        <section class="section"> 
          <div class="section-header">
            <h1>Manajemen Biaya Ongkir</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="http://localhost/tokokita_1658/index.php/adminpanel/dashboard">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="http://localhost/tokokita_1658/index.php/kategori">Kategori</a></div>
              <div class="breadcrumb-item">Ongkir</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Biaya Ongkir</h2>
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Biaya Ongkir</h4><a href="<?php echo site_url('ongkir/add');?>" class="btn btn-primary">Tambah Biaya Ongkir</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>No.</th>
                          <th>idKurir</th>
                          <th>idKotaAsal</th>
                          <th>idKotaTujuan</th>
                          <th>Biaya Ongkir</th>
                          <th>Action</th>
                        </tr>
                        <?php foreach($ongkir as $item) {?>
                        <tr>
                          <td><?php echo $item->idBiayaKirim;?></td>
                          <td><?php echo $item->namaKurir;?></td>
                          <td><?php echo $item->asal;?></td>
                          <td><?php echo $item->tujuan;?></td>
                          <td><?php echo $item->biaya;?></td>
                          <td><a href="<?php echo site_url('ongkir/getid/'.$item->idBiayaKirim);?>" class="btn btn-warning">Edit</a>
                          <a href="<?php echo site_url('ongkir/delete/'.$item->idBiayaKirim);?>" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a></td>
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