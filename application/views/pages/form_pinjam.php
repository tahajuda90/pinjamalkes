<div class="right_col" role="main">
    <div class="">
        <?php if($this->session->flashdata('warning')){
                 echo '<div class="alert alert-danger">', $this->session->flashdata('warning'),'</div>';}
                else if($this->session->flashdata('succes')) {
                    echo '<div class="alert alert-success">', $this->session->flashdata('succes'),'</div>'; }?>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Formulir Peminjaman Alat</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nama Barang</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="nama_alat" class="form-control col-md-7 col-xs-12" type="text" name="nama_alat" readonly="readonly" value="<?php foreach ($alat as $ket){ echo $ket->Nama_alat; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NIM <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="nim_user" name="nim_user" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jumlah <span class="required">*</span>
                            </label>
                            <div class="col-md-2 col-sm-3 col-xs-12">
                                <input type="text" class="form-control" name="jumlah_alat" id="jumlah_alat" value="<?php echo $ket->Tersedia;?>">
                                <input type="hidden" name="jumlah_tersedia" id="jumlah_tersedia" value="<?php echo $ket->Tersedia;}?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Waktu Peminjaman <span class="required">*</span>
                            </label>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class='input-group date' id='myDatepickerfrom'>
                                    <input type='text' class="form-control" name="pinjam_alat" id="pinjam_alat"/>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Waktu Kembali <span class="required">*</span>
                            </label>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class='input-group date' id='myDatepickerto'>
                                    <input type='text' class="form-control" name="kembali_alat" id="kembali_alat"/>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tujuan <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea id="tujuan_pinjam" class="form-control" name="tujuan_pinjam" data-parsley-trigger="keyup" data-parsley-minlength="5" data-parsley-maxlength="100" data-parsley-minlength-message="Jelaskan tujuan peminjaman secara terperinci !"
                            data-parsley-validation-threshold="10"></textarea>
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

