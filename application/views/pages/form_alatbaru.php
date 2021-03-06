<div class="right_col" role="main">
    <div class="">
        <?php
        if ($this->session->flashdata('warning')) {
            echo '<div class="alert alert-danger">', $this->session->flashdata('warning'), '</div>';
        } else if ($this->session->flashdata('succes')) {
            echo '<div class="alert alert-success">', $this->session->flashdata('succes'), '</div>';
        }
        ?>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Formulir Pendaftaran Alat Baru</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Kode Barang</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="id_alat" class="form-control col-md-7 col-xs-12" type="text" name="id_alat">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Barang <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="nama_alat" name="nama_alat" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Merk/Type <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="merk_alat" name="merk_alat" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tahun Perolehan <span class="required">*</span>
                            </label>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                    <input type="text" class="form-control" name="tahun_alat" id="tahun_alat">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jumlah <span class="required">*</span>
                            </label>
                            <div class="col-md-2 col-sm-3 col-xs-12">
                                    <input type="text" class="form-control" name="jumlah_alat" id="jumlah_alat">
                            </div>
                        </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kondisi</label>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <select id="kondisi_alat" name="kondisi_alat" class="form-control" required>
                            <option value="">Pilih</option>
                            <option value="2">Baik</option>
                            <option value="1">Sedang</option>
                            <option value="0">Rusak</option>
                          </select>
                        </div>
                      </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button class="btn btn-primary" type="button" onclick="location.href='<?php echo site_url();?>'">Cancel</button>
                                <button type="submit" name="tambah" value="benar" class="btn btn-success">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

