<!-- ================ start footer Area ================= -->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Tentang Pinda</h6>
                    <p>
                        Pinda Adalah
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Menu</h6>
                    <div class="row">
                        <div class="col">
                            <ul>
                                <li><a href="<?= site_url('Home') ?>">Beranda</a></li>
                                <li><a href="#">Semua Proyek</a></li>
                                <li><a href="<?= site_url('FAQ')?>">Tata Cara</a></li>

                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li><a href="<?= site_url('Team') ?>">Tim</a></li>
                                <li><a href="<?= site_url('Contact')?>">Artikel</a></li>
                                <li><a href="<?= site_url('Contact')?>">Kontak</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Kategori Proyek</h6>
                    <div class="row">
                        <div class="col">
                            <ul>
                                <li><a href="#">Logo Desain</a></li>
                                <li><a href="#">Video</a></li>
                                <li><a href="#">Web Desain</a></li>
                                <li><a href="#">Portfolio</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li><a href="#">Photo</a></li>
                                <li><a href="#">Icon</a></li>
                                <li><a href="#">Poster</a></li>
                                <li><a href="#">Flyer</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Mau Jadi Apa kamu di PINDA?</h6>
                    <a href="" class="buttonjoin">
                        Pembuat Proyek
                    </a>
                    <br>
                    <a href="" class="buttonjoin">
                        Pencari Proyek
                    </a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="row align-items-center">
                <p class="col-lg-8 col-sm-12 footer-text m-0 text-center text-lg-left"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Dibuat Dengan <i class="fa fa-heart" aria-hidden="true"></i> dari Meruya Selatan
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                <div class="col-lg-4 col-sm-12 footer-social text-center text-lg-right">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-dribbble"></i></a>
                    <a href="#"><i class="fab fa-behance"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ================ End footer Area ================= -->

<script src="<?= base_url('assets/user/vendors/jquery/jquery-3.2.1.min.js') ?>"></script>
<script src="<?= base_url('assets/user/vendors/bootstrap/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/user/vendors/owl-carousel/owl.carousel.min.js') ?>"></script>
<script src="<?= base_url('assets/user/vendors/nice-select/jquery.nice-select.min.js')?>"></script>
<script src="<?= base_url('assets/user/js/jquery.ajaxchimp.min.js') ?>"></script>
<script src="<?= base_url('assets/user/js/mail-script.js')?>"></script>
<script src="<?= base_url('assets/user/js/main.js') ?>"></script>


<!-- Datatables -->

<script src="<?= base_url('assets/admin/vendors/datatables.net/js/jquery.dataTables.min.js') ?>"></script>

<script src="<?= base_url('assets/admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>"></script>

<script src="<?= base_url('assets/admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') ?>"></script>

<script src="<?= base_url('assets/admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') ?>"></script>

<script src="<?= base_url('assets/admin/vendors/datatables.net-buttons/js/buttons.flash.min.js') ?>"></script>

<script src="<?= base_url('assets/admin/vendors/datatables.net-buttons/js/buttons.html5.min.js')?>"></script>

<script src="<?= base_url('assets/admin/vendors/datatables.net-buttons/js/buttons.print.min.js') ?>"></script>

<script src="<?= base_url('assets/admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')?>"></script>

<script src="<?= base_url('assets/admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') ?>"></script>

<script src="<?= base_url('assets/admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') ?>"></script>

<script src="<?= base_url('assets/admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') ?>"></script>

<script src="<?= base_url('assets/admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')?>"></script>

<script src="<?= base_url('assets/admin/vendors/jszip/dist/jszip.min.js') ?>"></script>

<script src="<?= base_url('assets/admin/vendors/pdfmake/build/pdfmake.min.js') ?>"></script>

<script src="<?= base_url('assets/admin/vendors/pdfmake/build/vfs_fonts.js') ?>"></script>
<script>

    $(document).ready(function() {
        $("#searchbox").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $('div[data-role="kategori"]').filter(function() {
                $(this).toggle($(this).find('h3').text().toLowerCase().indexOf(value) > -1)
            });
        });
    });



// user profile dashboard
    var DashboardTable;
    var MyprojectTable;
    var MykaryaTable;

    $(document).ready(function() {
        DashboardTable = $('DashboardTable').DataTable({

            'ajax': '',

            'order': []

        });
    });

    $(document).ready(function() {
        MyprojectTable= $('MyprojectTable').DataTable({

            'ajax': '',

            'order': []

        });
    });

    $(document).ready(function() {
        MykaryaTable = $('MykaryaTable').DataTable({

            'ajax': '',

            'order': []

        });
    });
</script>

<script>
    /**
     *
     * app.js
     *
     */


    function readFile(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                var htmlPreview =
                    '<img width="200" src="' + e.target.result + '" />'+
                    '<p>' + input.files[0].name + '</p>';
                var wrapperZone = $(input).parent();
                var previewZone = $(input).parent().parent().find('.preview-zone');
                var boxZone = $(input).parent().parent().find('.preview-zone').find('.box').find('.box-body');

                wrapperZone.removeClass('dragover');
                previewZone.removeClass('hidden');
                boxZone.empty();
                boxZone.append(htmlPreview);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    function reset(e) {
        e.wrap('<form>').closest('form').get(0).reset();
        e.unwrap();
    }
    $(".dropzone").change(function(){
        readFile(this);
    });
    $('.dropzone-wrapper').on('dragover', function(e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).addClass('dragover');
    });
    $('.dropzone-wrapper').on('dragleave', function(e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).removeClass('dragover');
    });
    $('.remove-preview').on('click', function() {
        var boxZone = $(this).parents('.preview-zone').find('.box-body');
        var previewZone = $(this).parents('.preview-zone');
        var dropzone = $(this).parents('.form-group').find('.dropzone');
        boxZone.empty();
        previewZone.addClass('hidden');
        reset(dropzone);
    });



</script>
</body>
</html>