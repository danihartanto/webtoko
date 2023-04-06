   <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
              <div class="breadcrumb-item">Form</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Forms</h2>
            <p class="section-lead">
            </p>

            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <form method="POST" action="<?php echo site_url('ongkir/save'); ?>" class="needs-validation" novalidate="">
                  <div class="card">
                  <div class="card-header">
                    <h4>Form Tambah Ongkos Kirim</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-left col-9 col-sm-3">Kota Asal</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric" name="kotaAsal" id="kotaAsal">
                         <?php foreach($kota as $item) {?>
                                <option value="<?php echo $item->idKota; ?>"><?php echo $item->namaKota; ?></option>
                              <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-left col-9 col-sm-3">Kota Tujuan</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric" name="kotaTujuan" id="kotaTujuan">
                          <?php foreach($kota as $item) {?>
                                <option value="<?php echo $item->idKota; ?>"><?php echo $item->namaKota; ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-left col-9 col-sm-3">Nama Kurir</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric" name="namaKurir" id="namaKurir">
                          <?php foreach($kurir as $item1) {?>
                                <option value="<?php echo $item1->idKurir; ?>"><?php echo $item1->namaKurir; ?></option>
                              <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Biaya</label>
                      <div class="col-sm-7"><input type="text" class="form-control" name="biaya" placeholder="Biaya" required autofocus></div>
                    </div>   
                    <div class="card-footer">
                      
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
        