</div>

<footer class="main-footer">
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
            <p>&copy; Copyright 2023 - <?= date("Y"); ?> <a href="#" target="_blank"><?= getenv('APP_NAME'); ?></a>. All rights reserved.</p>
        </div>
        <div class="float-end">
            <p>
                Developed with <span class="text-danger"><i class="bi bi-heart-fill icon-mid"></i></span> By
                <a href="https://github.com/armandwipangestu" target="_blank">Arman</a>
            </p>
        </div>
    </div>
</footer>


<script src="<?= base_url(); ?>template/mazer/dist/assets/static/js/components/dark.js"></script>
<script src="<?= base_url(); ?>template/mazer/dist/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>

<script src="<?= base_url(); ?>template/mazer/dist/assets/compiled/js/app.js"></script>

<!-- Need: Apexcharts -->
<script src="<?= base_url(); ?>template/mazer/dist/assets/extensions/apexcharts/apexcharts.min.js"></script>
<script src="<?= base_url(); ?>template/mazer/dist/assets/static/js/pages/dashboard.js"></script>

<!-- Sweetalert -->
<script src="<?= base_url(); ?>template/mazer/dist/assets/extensions/sweetalert2/sweetalert2.min.js"></script>
<script src="<?= base_url(); ?>template/mazer/dist/assets/static/js/pages/sweetalert2.js"></script>

<!-- Simple Datatable -->
<script src="<?= base_url(); ?>template/mazer/dist/assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
<script src="<?= base_url(); ?>template/mazer/dist/assets/static/js/pages/simple-datatables.js"></script>

<!-- jQuery -->
<script src="<?= base_url(); ?>assets/js/jquery/jquery-3.7.1.min.js"></script>

<!-- Custom JS -->
<script src="<?= base_url(); ?>assets/js/script.js"></script>

</body>

</html>