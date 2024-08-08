<!-- Footer Start -->
<footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                2024 &copy; JOSE TORRES MAMANI 
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- Vendor js -->
        <script src="<?php echo base_url(); ?>/assets/js/vendor.min.js"></script>

        <!-- Required datatable js -->
        <script src="<?php echo base_url(); ?>/assets/libs/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/libs/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="<?php echo base_url(); ?>/assets/libs/datatables/dataTables.buttons.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/libs/datatables/buttons.bootstrap4.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/libs/jszip/jszip.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/libs/pdfmake/pdfmake.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/libs/pdfmake/vfs_fonts.js"></script>
        <script src="<?php echo base_url(); ?>/assets/libs/datatables/buttons.html5.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/libs/datatables/buttons.print.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/libs/datatables/buttons.colVis.js"></script>

        <!-- Responsive examples -->
        <script src="<?php echo base_url(); ?>/assets/libs/datatables/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/libs/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Datatables init -->
        <script src="<?php echo base_url(); ?>/assets/js/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url(); ?>/assets/js/app.min.js"></script>
        
        <script>
        $(document).ready(function(){
            $('#modal-confirma').on('show.bs.modal', function(e) {
                var href = $(e.relatedTarget).data('href');
                $(this).find('.btn-ok').attr('href', href);
            });
        });
    </script>
    
    </body>
</html>
<!--Script para el modal -->
