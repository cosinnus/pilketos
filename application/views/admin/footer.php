<?php 
	foreach($idsekolah as $load) {}
?>
<?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
    <!-- content ends -->
    </div><!--/#content.col-md-0-->
<?php } ?>
</div><!--/fluid-row-->
<?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>

    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="row">
        <p class="col-md-6 col-sm-6 col-xs-6 copyright">&copy; <a href="https://www.gadink47.com" target="_blank">Muhammad Rompegading</a> <?php echo date('Y') ?></p>

        <p class="col-md-6 col-sm-6 col-xs-6 powered-by">Powered by: 
		<a href="#"><?php echo $load['nm_sekolah']; ?></a></p>
    </footer>
<?php } ?>

<script src="<?php echo base_url(); ?>asset/vendor/jquery/jquery.js"></script>
<script src="<?php echo base_url(); ?>asset/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>asset/vendor/datatables/datatables.min.js"></script>
<script src="<?php echo base_url(); ?>asset/vendor/responsive-tables/responsive-tables.js"></script>
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</body>
</html>



</body>
</html>
