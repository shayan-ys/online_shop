<?php
/**
 * Created by PhpStorm.
 * User: Shayanyousefian
 * Date: 12/12/15
 * Time: 5:15 PM
 */?>

{!! HTML::script('assets/bootstrap/js/bootstrap.min.js') !!}
{!! HTML::script('assets/js/toggle.js') !!}
{!! HTML::script('assets/js/jquery.slimscroll.min.js') !!}
{!! HTML::script('assets/js/jquery.hoverIntent.min.js') !!}
{!! HTML::script('assets/js/jquery.cyber.js') !!}

<script type="text/javascript">
    $(document).ready(function() {
        $("#owl-demo-slider").owlCarousel({
            navigation : true, // Show next and prev buttons
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem:true,
            items : 1,
            itemsDesktop : false,
            itemsDesktopSmall : false,
            itemsTablet: false,
            itemsMobile : false,
            autoPlay : true,
            navigationText : [" ", " "]
        });
        $("#owl-demo1").owlCarousel({
            autoPlay : true,
            navigation : false,
            pagination : true,
            items : 1,
            itemsDesktop : [1199,1],
            itemsDesktopSmall : [979,1],
            itemsTablet : [768, 1]
        });
        $("#owl-demo2, #owl-demo3, #owl-demo4").owlCarousel({
            autoPlay : false,
            navigation : true,
            pagination : false,
            items : 4,
            itemsDesktop : [1199,3],
            itemsDesktopSmall : [979,2]
        });
    });
</script>

{!! HTML::script('assets/js/popModal.js') !!}

<script type="text/javascript">
    $('#popModal_ex1').click(function(){
        $('#popModal_ex1').popModal({
            html : $('#content'),
            placement : 'bottomLeft',
            showCloseBut : true,
            onDocumentClickClose : true,
            onDocumentClickClosePrevent : '',
            overflowContent : false,
            inline : true,
            beforeLoadingContent : 'Please, waiting...',
            onOkBut : function() {},
            onCancelBut : function() {},
            onLoad : function() {},
            onClose : function() {}
        });
    });
    $(function() {
        $('.db_show a').click(function(){
            $(this).parent().hide();
            return false;
        });
    });
</script>

{!! HTML::script('assets/js/dkslider.js') !!}
{!! HTML::script('assets/js/dkscroller.js') !!}
{!! HTML::script('assets/js/main.js') !!}