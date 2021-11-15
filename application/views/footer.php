</div>
                </div>
                <!-- end dashboard inner -->
                </div>
            </div>
        </div>
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
        <!-- wow animation -->
        <script src="<?php echo base_url() ?>assets/js/animate.js"></script>
        <!-- select country -->
        <script src="<?php echo base_url() ?>assets/js/bootstrap-select.js"></script>
        <!-- owl carousel -->
        <script src="<?php echo base_url() ?>assets/js/owl.carousel.js"></script> 
        <!-- chart js -->
        <script src="<?php echo base_url() ?>assets/js/Chart.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/Chart.bundle.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/utils.js"></script>
        <script src="<?php echo base_url() ?>assets/js/analyser.js"></script>
        <!-- nice scrollbar -->
        <script src="<?php echo base_url() ?>assets/js/perfect-scrollbar.min.js"></script>
        <script>
            var ps = new PerfectScrollbar('#sidebar');
            $(document).ready(function() {
                $('#example').DataTable({
                    "paging":   false,
                    "ordering": false
                } );
            } );
            function hapus() {
            confirm("Yakin Ingin Menghapus data?");
            }
        </script>
        <!-- custom js -->
        <script src="<?php echo base_url() ?>assets/js/chart_custom_style1.js"></script>
        <script src="<?php echo base_url() ?>assets/js/custom.js"></script>
    </body>
</html>