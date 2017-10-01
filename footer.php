</div>

<!-- BEGIN FOOTER -->
<div class="footer">
    <div class="container">
        <div class="row">
            <!-- BEGIN COPYRIGHT -->
            <div class="col-md-6 col-sm-6 padding-top-10">
                <?php
                if ( is_active_sidebar( 'service_copy_right' ) ) {
                    dynamic_sidebar( 'service_copy_right' );
                }
                ?>
                <!--2015 © Keenthemes. ALL Rights Reserved. <a href="javascript:;">Privacy Policy</a> | <a href="javascript:;">Terms of Service</a>-->
            </div>
            <!-- END COPYRIGHT -->
            <!-- BEGIN PAYMENTS -->
            <div class="col-md-6 col-sm-6">
                <ul class="social-footer list-unstyled list-inline pull-right">
                    <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="javascript:;"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="javascript:;"><i class="fa fa-skype"></i></a></li>
                    <li><a href="javascript:;"><i class="fa fa-github"></i></a></li>
                    <li><a href="javascript:;"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="javascript:;"><i class="fa fa-dropbox"></i></a></li>
                </ul>
            </div>
            <!-- END PAYMENTS -->
        </div>
    </div>
</div>
<!-- END FOOTER -->

<!-- START PAGE LEVEL JAVASCRIPTS -->
<?php wp_footer(); ?>
<?php if( is_page( 'services' ) ) {?>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();
            Layout.initTwitter();
            Portfolio.init();
        });
    </script>
<?php }elseif(is_page( 'gallery' )){?>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();
            Layout.initTwitter();
        });
    </script>
<?php }elseif(is_page( 'single-services' )){?>
    <script type="text/javascript">
        $('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('Test your website' + recipient)
            modal.find('.modal-body input').val(recipient)
        })
    </script>
<?php }else{?>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();
            Layout.initOWL();
            Layout.initTwitter();
            Layout.initFixHeaderWithPreHeader(); /* Switch On Header Fixing (only if you have pre-header) */
            Layout.initNavScrolling();
        });
    </script>
<?php }?>

<!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>