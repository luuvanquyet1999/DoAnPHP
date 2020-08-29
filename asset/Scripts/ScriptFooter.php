<script src="asset/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="asset/assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="asset/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="asset/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="asset/assets/extra-libs/sparkline/sparkline.js"></script>
<script src="asset/dist/js/waves.js"></script>
<script src="asset/dist/js/sidebarmenu.js"></script>
<script src="asset/dist/js/custom.min.js"></script>
<script src="asset/assets/libs/flot/excanvas.js"></script>
<script src="asset/assets/libs/flot/jquery.flot.js"></script>
<script src="asset/assets/libs/flot/jquery.flot.pie.js"></script>
<script src="asset/assets/libs/flot/jquery.flot.time.js"></script>
<script src="asset/assets/libs/flot/jquery.flot.stack.js"></script>
<script src="asset/assets/libs/flot/jquery.flot.crosshair.js"></script>
<script src="asset/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
<script src="asset/dist/js/pages/chart/chart-page-init.js"></script>
<script src="asset/assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
<script src="asset/dist/js/pages/mask/mask.init.js"></script>
<script src="asset/assets/libs/select2/dist/js/select2.full.min.js"></script>
<script src="asset/assets/libs/select2/dist/js/select2.min.js"></script>
<script src="asset/assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
<script src="asset/assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
<script src="asset/assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
<script src="asset/assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
<script src="asset/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="asset/assets/libs/quill/dist/quill.min.js"></script>
<script src="asset/assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
<script src="asset/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
<script src="asset/assets/extra-libs/DataTables/datatables.min.js"></script>
<script>
    /****************************************
     *       Basic Table                   *
     ****************************************/
    $('#zero_config').DataTable();
</script>
<script>
    //***********************************//
    // For select 2
    //***********************************//
    $(".select2").select2();

    /*colorpicker*/
    $('.demo').each(function() {

        $(this).minicolors({
            control: $(this).attr('data-control') || 'hue',
            position: $(this).attr('data-position') || 'bottom left',

            change: function(value, opacity) {
                if (!value) return;
                if (opacity) value += ', ' + opacity;
                if (typeof console === 'object') {
                    console.log(value);
                }
            },
            theme: 'bootstrap'
        });

    });
    /*datwpicker*/
    jQuery('.mydatepicker').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    var quill = new Quill('#editor', {
        theme: 'snow'
    });
</script>
<script>
    function getVaue() {
        var cookieValue = $("div[name='editor']").html();
        //alert(cookieValue);
        document.getElementById("txtContent").value = cookieValue;
    }

    function fucAlert(id) {
        Swal.fire({
            title: 'Bạn muốn xóa?',
            text: "Nếu xóa bạn không thể khôi phục nó!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Hủy',
            confirmButtonText: 'Tôi muốn!'
        }).then((result) => {
            if (result.value) {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Xóa thành công!',
                    showConfirmButton: false,
                    timer: 1500
                }).then(function() {
                    document.getElementById('xoa' + id).click();
                });
            }
        });
    }
</script>