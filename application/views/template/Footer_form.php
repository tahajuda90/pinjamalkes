</div>
</div>
<script src="<?php echo base_url() ?>asset/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url() ?>asset/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>asset/build/js/custom.min.js"></script>
<script src="<?php echo base_url() ?>asset/nprogress/nprogress.js"></script>
<script src="<?php echo base_url() ?>asset/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url() ?>asset/fastclick/lib/fastclick.js"></script>

<script src="<?php echo base_url() ?>asset/moment/min/moment.min.js"></script>
<script src="<?php echo base_url() ?>asset/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url() ?>asset/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<script src="<?php echo base_url() ?>asset/switchery/dist/switchery.min.js"></script>
<script src="<?php echo base_url() ?>asset/select2/dist/js/select2.full.min.js"></script>
<script src="<?php echo base_url() ?>asset/starrr/dist/starrr.js"></script>
<!-- Initialize datetimepicker -->
<script>
    $('#myDatepickerfrom').datetimepicker();
    $('#myDatepickerto').datetimepicker();

    $('#myDatepicker2').datetimepicker({
        format: 'DD.MM.YYYY'
    });

    $('#myDatepicker3').datetimepicker({
        format: 'hh:mm A'
    });

    $('#myDatepicker4').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true
    });

    $('#datetimepicker6').datetimepicker();

    $('#datetimepicker7').datetimepicker({
        useCurrent: false
    });

    $("#datetimepicker6").on("dp.change", function (e) {
        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });

    $("#datetimepicker7").on("dp.change", function (e) {
        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });
</script>
</body>
</html>
