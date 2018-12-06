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
                    <h2>Formulir Pendaftaran Pengguna Baru</h2>
                    
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">NIM</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="nim_user" class="form-control col-md-7 col-xs-12" type="text" name="nim_user"required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="nama_user" name="nama_user" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Jurusan <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="jurusan_user" name="jurusan_user" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" class="form-control" name="alamat_user" id="alamat_user">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nomor Telepon <span class="required">*</span>
                            </label>
                            <div class="col-md-2 col-sm-3 col-xs-12">
                                <input type="text" class="form-control" name="nomor_user" id="nomor_user" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div id="gender_user" class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                        <input type="radio" name="gender_user" value="Pria"> &nbsp; Pria &nbsp;
                                    </label>
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                        <input type="radio" name="gender_user" value="Wanita"> Wanita
                                    </label>
                                </div>
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