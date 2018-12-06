<div class="right_col" role="main">   
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Daftar Riwayat Pengguna</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <table id="brebet" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Jurusan</th>
                                    <th>Alamat</th>
                                    <th>Telepon</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody> 
                                <?php if($user != NULL){?>
                                     <?php foreach ($user as $ket){?>
                                <tr>
                                    <td><?php echo $ket->Nim ?></td>
                                    <td><?php echo $ket->Nama ?></td>
                                    <td><?php echo $ket->Jurusan ?></td>
                                    <td><?php echo $ket->Alamat ?></td>
                                    <td><?php echo $ket->Nomor_HP ?></td>
                                    <td> <button type="button" class="btn btn-success btn-xs" onclick="location.href='<?php echo site_url();?>/alat_dipinjam/riwayat_user/<?php echo $ket->Nim?>'">&nbsp;View&nbsp;</button>
                                </tr>
                                <?php }}else{ echo 'No Value';} ?>
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>