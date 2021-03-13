<!DOCTYPE html>
<html lang="en">
<head>    <title>Barangay Health Center</title>

<link rel="icon" type="image/png" href="Pictures/logo2.jpg">
	<script type='text/javascript' src='js/jquery-1.4.2.min.js'></script>
    <script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="screen">
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<link rel="stylesheet" href="css/flexslider.css" />	
	<script src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
$(document).ready(function () {

    $("#btn-blog-next").click(function () {
      $('#blogCarousel').carousel('next')
    });
     $("#btn-blog-prev").click(function () {
      $('#blogCarousel').carousel('prev')
    });

     $("#btn-client-next").click(function () {
      $('#clientCarousel').carousel('next')
    });
     $("#btn-client-prev").click(function () {
      $('#clientCarousel').carousel('prev')
    });
    
});

 $(window).load(function(){

    $('.flexslider').flexslider({
        animation: "slide",
        slideshow: true,
        start: function(slider){
          $('body').removeClass('loading');
        }
    });  
});

</script>

    <link href="css/pussy.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="js/facebox.js"></script>
	<script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'images/loader.gif',
        closeImage   : 'images/delete.png'
      })
    })
  </script>
  
<!----hover pop up -->
    <script src="js/main.js" type="text/javascript"></script>
    <script src="js/mouseover_popup.js" type="text/javascript"></script>
    <div style="display: none;
        color:white;
        position: absolute;
        z-index:100;
        width:auto;
        height:auto;"
        id="preview_div"></div>
		
 <!-- notify -->
    <link href="css/notify/jquery_notification.css" type="text/css" rel="stylesheet" media="screen, projection"/>
    <script type="text/javascript" src="js/notify/jquery_notification_v.1.js"></script>
    <!-- notify end -->
    <style type="text/css" title="currentStyle">
        @import "css/datatable/demo_page.css";
        @import "css/datatable/demo_table_jui.css";
        @import "css/datatable/jquery-ui-1.8.4.custom.css";
    </style>
    <script type="text/javascript" language="javascript" src="js/dataTables/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf-8">
        jQuery(document).ready(function() {
            oTable = jQuery('#log').dataTable({
                "bJQueryUI": true,
                "sPaginationType": "full_numbers"
            } );
            oTable = jQuery('#attendance').dataTable({
                "bJQueryUI": true,
                "sPaginationType": "full_numbers"
            } );
            oTable = jQuery('#record').dataTable({
                "bJQueryUI": true,
                "sPaginationType": "full_numbers"
            } );
            oTable = jQuery('#cadet_list').dataTable({
                "bJQueryUI": true,
                "sPaginationType": "full_numbers"
            } );
            oTable = jQuery('#passed').dataTable({
                "bJQueryUI": true,
                "sPaginationType": "full_numbers"
            } );								

            $('.carousel').carousel({
                interval: 4000
            })		

        });		
    </script>
	
  <!--datepicker -->
    <link href="css/datepicker/ui.datepicker.css" type="text/css" rel="stylesheet"/>
    <script type="text/javascript" src="js/datepicker/ui.datepicker.js"></script>
    <script type="text/javascript" charset="utf-8">
        jQuery(function($){
            $(".Birthdate").datepicker();
        });
    </script>
    <!--datepicker -->
</head>