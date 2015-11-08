<script type="text/javascript" src="<?php echo $path_to_root; ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $path_to_root; ?>assets/js/toggle.js"></script>
<script type="text/javascript" src="<?php echo $path_to_root; ?>assets/js/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="<?php echo $path_to_root; ?>assets/js/jquery.hoverIntent.min.js"></script>
<script type="text/javascript" src="<?php echo $path_to_root; ?>assets/js/jquery.cyber.js"></script>
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
<script type="text/javascript" src="<?php echo $path_to_root; ?>assets/js/popModal.js"></script>
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
<script type="text/javascript" src="<?php echo $path_to_root; ?>assets/js/dkslider.js"></script>
<script type="text/javascript" src="<?php echo $path_to_root; ?>assets/js/dkscroller.js"></script>
<!-- <script type="text/javascript" src="assets/js/lib.js"></script> -->
<!-- <script type="text/javascript" src="assets/js/run.js"></script> -->
<script type="text/javascript" src="<?php echo $path_to_root; ?>assets/js/main.js"></script>
</body>
</html>
