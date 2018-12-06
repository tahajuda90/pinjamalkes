</div>
</div>
        <script src="<?php echo base_url() ?>asset/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>asset/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>asset/build/js/custom.min.js"></script>
        <script src="<?php echo base_url() ?>asset/nprogress/nprogress.js"></script>
        <script src="<?php echo base_url() ?>asset/iCheck/icheck.min.js"></script>
        <script src="<?php echo base_url() ?>asset/fastclick/lib/fastclick.js"></script>

        <script src="<?php echo base_url() ?>asset/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url() ?>asset/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>asset/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?php echo base_url() ?>asset/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="<?php echo base_url() ?>asset/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url() ?>asset/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
        <script src="<?php echo base_url() ?>asset/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
        <script>
            $(document).ready(function() {
                    $('#brebet').DataTable( {
                        "bPaginate": true,
                        "bLengthChange": false,
                        "bFilter": true,
                        "bInfo": false,
                        "bAutoWidth": false
                    });
                } );
        </script>
    </body>
</html>

