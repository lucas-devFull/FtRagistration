<script src="<?= base_url("assets/libs/jquery/jquery.js") ?>"></script>
<script src="<?= base_url("assets/libs/iziToast-master/dist/js/iziToast.js")?>"></script>
<script src="https://unpkg.com/leaflet@1.0.1/dist/leaflet.js"></script>
<script src="<?= base_url("assets/libs/bootstrap/js/bootstrap.min.js") ?>"></script>
<script src="<?= base_url("assets/libs/pushy-master/js/pushy.min.js") ?>"></script>
<script src="<?= base_url("assets/libs/perfect-scrollbar/js/perfect-scrollbar.min.js") ?>"></script>
<script src="<?= base_url("assets/js/generico/generico.js") ?>"></script>

<?php if(!empty($js)) {
        foreach($js as $value){?>
            <script src="<?=$value?>"></script>
        <?php }
    } ?>


</body>
</html>