<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>Metronic | Login Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <?php echo $this->tag->stylesheetLink('css/bootstrap.min.css'); ?>
    <?php echo $this->tag->stylesheetLink('css/bootstrap-responsive.min.css'); ?>
    <?php echo $this->tag->stylesheetLink('css/font-awesome.min.css'); ?>
    <?php echo $this->tag->stylesheetLink('css/style-metro.css'); ?>
    <?php echo $this->tag->stylesheetLink('css/style.css'); ?>
    <?php echo $this->tag->stylesheetLink('css/style-responsive.css'); ?>
    <?php echo $this->tag->stylesheetLink('css/default.css'); ?>
    <?php echo $this->tag->stylesheetLink('css/uniform.default.css'); ?>
    <!-- END GLOBAL MANDATORY STYLES -->
    
    <!-- BEGIN PAGE LEVEL STYLES -->
    <?php echo $this->tag->stylesheetLink('css/login.css'); ?>
    <!-- END PAGE LEVEL STYLES -->
    
    <link rel="shortcut icon" href="/image/favicon.ico" />
</head>
<!-- END HEAD -->

<?php echo $this->getContent(); ?>


<!-- BEGIN COPYRIGHT -->
<div class="copyright">
    2013 &copy; Metronic. Admin Dashboard Template.
</div>
<!-- END COPYRIGHT -->

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<?php echo $this->tag->javascriptInclude('js/jquery-1.10.1.min.js'); ?>
<?php echo $this->tag->javascriptInclude('js/jquery-migrate-1.2.1.min.js'); ?>
<?php echo $this->tag->javascriptInclude('js/jquery-ui-1.10.1.custom.min.js'); ?>
<?php echo $this->tag->javascriptInclude('js/bootstrap.min.js'); ?>
<!--[if lt IE 9]>
<?php echo $this->tag->javascriptInclude('js/excanvas.min.js'); ?>
<?php echo $this->tag->javascriptInclude('js/respond.min.js'); ?>
<![endif]-->
<?php echo $this->tag->javascriptInclude('js/jquery.slimscroll.min.js'); ?>
<?php echo $this->tag->javascriptInclude('js/jquery.blockui.min.js'); ?>
<?php echo $this->tag->javascriptInclude('js/jquery.cookie.min.js'); ?>
<?php echo $this->tag->javascriptInclude('js/jquery.uniform.min.js'); ?>
<!-- END CORE PLUGINS -->


<!-- BEGIN PAGE LEVEL PLUGINS -->
<?php echo $this->tag->javascriptInclude('js/jquery.validate.min.js'); ?>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<?php echo $this->tag->javascriptInclude('js/app.js'); ?>
<?php echo $this->tag->javascriptInclude('js/login.js'); ?>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        App.init();
        Login.init();
    });
</script>
<!-- END JAVASCRIPTS -->

</body>
<!-- END BODY -->
</html>