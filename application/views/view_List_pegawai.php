<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox ">
				<div class="ibox-title bg-primary">
					<h5>Data Supir</h5>
					<div class="ibox-tools">
						<a class="collapse-link">
							<i class="fa fa-chevron-up text-white"></i>
						</a>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="container">
						<div class="card-deck" style="width:auto;height: 400px">
							<div class="card">
								<img class="card-img-top" src="..." alt="Card image cap" style="width: 100%;height: 200px;">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<h6 class="card-subtitle">Card subtitle</h6>
									<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								</div>
								<div class="card-footer">
									<small class="text-muted">Last updated 3 mins ago</small>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>



<!-- Mainly scripts -->
<script src="<?php echo base_url() ?>assets/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugins/toastr/toastr.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="<?php echo base_url() ?>assets/js/inspinia.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugins/pace/pace.min.js"></script>

<script src="<?php echo base_url() ?>assets/js/plugins/dataTables/datatables.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugins/dataTables/dataTables.bootstrap4.min.js"></script>

<!-- Page-Level Scripts -->
<script>
	$(document).ready(function() {

		getMainTable();
	});

	function getMainTable() {
		$(".card:first").hide()
		$.ajax({
			url: '<?php echo base_url() ?>List_pegawai/get_data',
			method: "POST",
			async: true,
			dataType: 'json',
			success: function(data) {
				console.log(data.length);
				var html = '';
				var i;
				for (i = 0; i < data.length; i++) {
					var cards = $(".card:first").clone() //clone first divs				        
					var gambar = data[i].link;
					var nama = data[i].pegawai_nama;
					var harga = data[i].harga;
					//add values inside divs
					$(cards).find(".card-img-top").attr('src', gambar);
					$(cards).find(".card-title").html(nama);
					$(cards).find(".card-subtitle").html(harga);
					$(cards).find(".card-footer").html("<center><a href='#' class='btn btn-primary'>Cek Supir</a></center>");
					$(cards).show() //show cards
					$(cards).appendTo($(".card-deck")) //append to container
					// html += '<option value='+data[i].pegawai_nomor+'>'+data[i].pegawai_nama+'</option>';
				}
				// $('#pegawai_nomor').html(html);
				// $('#pegawai_nomor_edit').html(html);
			}
		});
	}
</script>