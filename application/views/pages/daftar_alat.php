<div class="right_col" role="main">   
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Daftar Alat</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <table id="brebet" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Id Alat</th>
                                    <th>Nama Alat</th>
                                    <th>Merk / Type</th>
                                    <th>Tahun Perolehan</th>
                                    <th>Jumlah</th>
                                    <th>Kondisi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if($alat != NULL){?>
                                <?php foreach ($alat as $ket){?>
                                <tr>
                                    <td><?php echo $ket->Id_alat ?></td>
                                    <td><?php echo $ket->Nama_alat ?></td>
                                    <td><?php echo $ket->Merk ?></td>
                                    <td><?php echo $ket->Tahun ?></td>
                                    <td><?php echo $ket->Jumlah ?></td>
                                    <td><?php if($ket->Kondisi == '2'){
                                        echo "Baik";
                                    }else if($ket->Kondisi == '1'){
                                        echo "Sedang";
                                    }else if($ket->Kondisi == '0') {
                                        echo "Rusak";
                                    } ?></td>
                                    <td> <button type="button" class="btn btn-warning btn-xs" onclick="location.href='<?php echo site_url();?>/daftar_alat/editalat/<?php echo $ket->Id_alat?>'">&nbsp;Edit&nbsp;</button>
                                    <button type="button" class="btn btn-danger btn-xs" onclick="location.href='<?php echo site_url();?>/daftar_alat/deletealat/<?php echo $ket->Id_alat?>'">Delete</button></td>
                                </tr>
                                <?php }} else {echo 'No Value';} ?>
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>