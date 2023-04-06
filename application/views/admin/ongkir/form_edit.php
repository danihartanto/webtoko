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
                <form method="POST" action="<?php echo site_url('ongkir/edit'); ?>" class="needs-validation" novalidate="">
                  <input type="hidden" name="id" value="<?php echo $ongkir->idBiayaKirim; ?>" >
                  <div class="card">
                  <div class="card-header">
                    <h4>Form Edit ongkir Kirim</h4>
                </div>
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-left col-9 col-sm-3">Kota Asal</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric" name="kotaAsal" id="kotaAsal">
                              <option value=""><?php echo $ongkir->asal; ?></option>
                              <optgroup label="---Pilih dibawah ini---"></optgroup>
                              <?php foreach($kota as $item1) {?>
                                <option value="<?php echo $item1->idKota ?>"><b><?php echo $item1->namaKota ?></b></option>
                              <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-left col-9 col-sm-3">Kota Tujuan</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric" name="kotaTujuan" id="kotaTujuan">
                          <option value=""><?php echo $ongkir->tujuan ?></option>
                          <optgroup label="---Pilih dibawah ini---"></optgroup>
                              <?php foreach($kota as $item1) {?>
                                <option value="<?php echo $item1->idKota ?>"><?php echo $item1->namaKota ?></option>
                              <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-left col-9 col-sm-3">Nama Kurir</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric" name="namaKurir" id="namaKurir">
                         <option value=""><?php echo $ongkir->namaKurir ?></option>
                         <optgroup label="---Pilih dibawah ini---"></optgroup>
                              <?php foreach($kurir as $item) {?>
                                <option value="<?php echo $item->idKurir; ?>"><?php echo $item->namaKurir ?></option>
                              <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Biaya</label>
                      <div class="col-sm-7"><input type="text" class="form-control" name="biaya" value="<?php echo $ongkir->biaya ?>" required autofocus></div>
                    </div>   
                    <div class="card-footer">
                      
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>