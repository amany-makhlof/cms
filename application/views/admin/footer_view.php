                    <div class="row mb-5">
                        <div class="col-md-12">
                                <footer>
                                        جميع الحقوق محفوظة ©  <a href="#" target="_blank" style="font-weight:300;color:#ffffff;background:#1d1d1d;padding:0 3px;">  Masry International </a>
                                </footer>
                        </div>
                    </div>
            </main>

				
				
				
				
				
            </div>
    </div>
</div>
	<!-- SCRIPTS - REQUIRED START -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!-- Bootstrap core JavaScript -->
	
	<!-- Popper.js - Bootstrap tooltips -->
	
	<script type="text/javascript" src="<?= base_url()?>assets/admin/js/bootstrap/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="<?= base_url()?>assets/admin/js/bootstrap/bootstrap.min.js"></script>
	<!-- MDB core JavaScript 
	<script type="text/javascript" src="<?= base_url()?>assets/admin/js/bootstrap/mdb.min.js"></script>-->
	<!-- Velocity -->
	<script type="text/javascript" src="<?= base_url()?>assets/admin/plugins/velocity/velocity.min.js"></script>
	<script type="text/javascript" src="<?= base_url()?>assets/admin/plugins/velocity/velocity.ui.min.js"></script>
	<!-- Custom Scrollbar -->
	<script type="text/javascript" src="<?= base_url()?>assets/admin/plugins/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<!-- jQuery Visible -->
	<script type="text/javascript" src="<?= base_url()?>assets/admin/plugins/jquery_visible/jquery.visible.min.js"></script>
	<!-- jQuery Visible -->
	<script type="text/javascript" src="<?= base_url()?>assets/admin/plugins/jquery_visible/jquery.visible.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script type="text/javascript" src="<?= base_url()?>assets/admin/js/misc/ie10-viewport-bug-workaround.js"></script>

	<!-- datatables Scripts -->
	<script type="text/javascript" src="<?= base_url()?>assets/admin/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="<?= base_url()?>assets/admin/plugins/datatables/js/dataTables.bootstrap4.min.js"></script> 
	<script type="text/javascript" src="<?= base_url()?>assets/admin/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script type="text/javascript" src="<?= base_url()?>assets/admin/datatables/js/responsive.bootstrap4.min.js"></script> 
	<!-- include summernote css/js -->
	<script src="<?= base_url()?>assets/admin/plugins/tinymce/tinymce.min.js"></script>
	<!-- QuillPro Scripts -->
	<script type="text/javascript" src="<?= base_url()?>assets/admin/js/scripts.js"></script>

    <!-- set langauge -->   
    <script>
 	$( "#setLang" ).change(function() {
         var data = { 'id' : this.value  };
         $.ajax({
            type : 'post',
            data : data,
            cache : false,
            url : '<?= site_url();?>home/set_lang',
            success : function(response){
               location.reload();
            }
          });
	});
    </script>
    <script>
    tinymce.init({
		  selector: 'textarea',
		  height: 500,
		  menubar: false,
		  plugins: [
			'advlist autolink lists link image charmap print preview anchor textcolor',
			'searchreplace visualblocks code fullscreen',
			'insertdatetime media table contextmenu paste code help wordcount'
		  ],
		  toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
		  content_css: [
			'//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
			'//www.tinymce.com/css/codepen.min.css']
	}); 

	</script>
</body>

</html>