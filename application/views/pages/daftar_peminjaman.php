<div class="right_col" role="main">   
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Daftar Peminjaman</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <table id="brebet" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Nama Peminjam</th>
                                    <th>Nama Alat</th>
                                    <th>Waktu Pinjam</th>
                                    <th>Waktu Kembali</th>                                    
                                    <th>Jumlah</th>
                                    <th>Action</th>
                                    <th>Tujuan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if($pinjam !=NULL){?>
                                <?php foreach ($pinjam as $ket){?>
                                <tr>
                                    <td><?php echo $ket->Nama ?></td>
                                    <td><?php echo $ket->Nama_alat ?></td>
                                    <td><?php echo $ket->Pinjam ?></td>
                                    <td><?php echo $ket->Kembali ?></td>                                    
                                    <td><?php echo $ket->Jumlah ?></td>
                                    <td> <button type="button" class="btn btn-info btn-xs" onclick="location.href='<?php echo site_url();?>/alat_dipinjam/kembali/<?php echo $ket->Id_pinjaman?>'">&nbsp;Kembali&nbsp;</button></td>
                                    <td><p><?php echo $ket->Tujuan ?></p></td>
                                    
                                </tr>
                                <?php }}else{
                                    echo 'No Value';
                                } ?>
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>