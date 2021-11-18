<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox ">
				<div class="ibox-title bg-primary">
					<h5>Master Data pegawai</h5>
					<div class="ibox-tools">
						<a class="collapse-link">
							<i class="fa fa-chevron-up text-white"></i>
						</a>
					</div>
				</div>
				<div class="ibox-content">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover dataTables-example" width="100%" id="main-table">
							<thead>
								<tr>
									<th width="5%">#</th>
									<!-- <th width="30%">Id pegawai</th> -->
									<th width="20%">No Pegawai</th>
									<th width="20%">Nama</th>
									<th width="20%">Jenis Kelamin</th>
									<th width="10%">Gaji</th>
									<th width="20%">Foto</th>
									<th width="10%">Action</th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal inmodal" id="add_pegawai_mdl" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content animated flipInY">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title">Tambah Data Pegawai</h4>
			</div>
			<form method="post" action="" enctype="multipart/form-data" id="myform">
				<div class="modal-body">
					<div class="form-row">
						<div class="form-group col">
							<label>Nama Pegawai</label>
							<input type="text" class="form-control" id="pegawai_nama" name="pegawai_nama" placeholder="Nama" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<label>No Pegawai</label>
							<input type="text" class="form-control" id="pegawai_no" name="pegawai_no" placeholder="No KTP" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<label>Gaji</label>
							<input type="number" class="form-control" id="harga" name="harga" placeholder="Gaji" onkeypress="return isNumberKey(event)" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<label>Jenis Kelamin</label>
							<select class="form-control" id="pegawai_jk" name="pegawai_jk">
								<option value="" disabled selected>Pilih...</option>
								<option value="L">Laki - laki</option>
								<option value="P">Perempuan</option>
							</select>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<label>Foto</label>
							<input type="file" class="form-control" id="file" name="file">
							<p>Foto format (.jpg, .png, .jpeg,)</p>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary" onclick="save_add_pegawai()">Save changes</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="modal inmodal" id="edit_pegawai_mdl" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content animated flipInY">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="header_edit_pegawai"></h4>
			</div>
			<form method="post" action="" enctype="multipart/form-data" id="myform_edit">
				<div class="modal-body">
					<div class="form-row" style="display: none;">
						<div class="form-group col">
							<label>ID</label>
							<input type="text" class="form-control" id="pegawai_id_edit" name="pegawai_id" readonly="true">
						</div>
					</div>
					<div class="form-row" style="display: none;">
						<div class="form-group col">
							<label>ID</label>
							<input type="text" class="form-control" id="file_prev" name="file_prev" readonly="true">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<label>Nama pegawai</label>
							<input type="text" class="form-control" id="pegawai_nama_edit" name="pegawai_nama_edit" placeholder="Nama" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<label>Jenis Kelamin</label>
							<select class="form-control" id="pegawai_jk_edit" name="pegawai_jk_edit">
								<option value="" disabled selected>Pilih...</option>
								<option value="L">Laki - laki</option>
								<option value="P">Perempuan</option>
							</select>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<label>Harga</label>
							<input type="number" class="form-control" id="harga_edit" name="harga_edit" placeholder="Harga" onkeypress="return isNumberKey(event)" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<label>Gambar</label>
							<img src="" id="imgView" class="card-img-top img-fluid">
							<input type="file" class="form-control" id="file_edit" name="file_edit">
							<p>Gambar format (.jpg, .png, .jpeg,)</p>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary" onclick="save_edit_pegawai()">Save changes</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="modal inmodal" id="confirm_delete_pegawai_mdl" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content animated flipInY">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="header_delete_pegawai"></h4>
			</div>
			<div class="modal-body">
				<div class="form-row" style="display: none;">
					<div class="form-group col">
						<label>ID</label>
						<input type="text" class="form-control" id="id_delete" name="id_delete" placeholder="...">
					</div>
				</div>
				<div>
					<span>
						Apakah anda yakin?
					</span>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-white" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-danger" onclick="save_delete_pegawai()">Yes</button>
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
		// getdatakategori();
	});

	// function getdatakategori() {
	// 	$.ajax({
	// 		url: '<?php echo base_url() ?>pegawai/get_data_kategori',
	// 		method: "POST",
	// 		async: true,
	// 		dataType: 'json',
	// 		success: function(data) {

	// 			var html = '';
	// 			var i;
	// 			for (i = 0; i < data.length; i++) {
	// 				html += '<option value=' + data[i].kategori_kode + '>' + data[i].kategori_nama + '</option>';
	// 			}
	// 			$('#kategori').html(html);
	// 			$('#kategori_edit').html(html);
	// 		}
	// 	});
	// }

	function getMainTable() {
		var tahun = $('#tahun').val();
		var bulan = $('#bulan').val();
		// alert(tahun+'-'+bulan);
		var role_id = 1;
		var oTable = $('#main-table').DataTable({
			processing: true,
			select: true,
			destroy: true,
			searching: true,
			lengthChange: true,
			pageLength: 10,
			responsive: true,
			dom: '<"html5buttons"B>lTfgitp',
			buttons: {
				buttons: [{
					text: '<i class="fa fa-plus-square"></i>&ensp;Tambah Data',
					action: function(e, dt, node, config) {
						add_pegawai();
					}
				}, ],
				dom: {
					button: {
						tag: "button",
						className: "btn btn-primary btn-sm"
					},
					buttonLiner: {
						tag: null
					}
				}
			},
			ajax: {
				url: "<?= base_url('Pegawai/get_data') ?>",
				type: 'GET',
				dataSrc: function(json) {
					var return_data = new Array()
					$.each(json['response'], function(i, item) {
						var button = '' +
							'<div class="btn-group">' +
							'<button class="btn btn-sm btn-warning" data-toggle="tooltip" title="Edit Data" onclick="edit_pegawai(\'' + item["pegawai_id"] + '\')"><i class="fa fa-edit"></i>&ensp;Edit</button>' +
							'<button class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete Data" onclick="confirm_delete_pegawai(\'' + item["pegawai_id"] + '\')"><i class="fa fa-trash"></i>&ensp;Delete</button>' +
							'</div>'
						return_data.push({
							'no': (i + 1),
							'pegawai_no': item['pegawai_no'],
							'pegawai_nama': item['pegawai_nama'],
							'pegawai_jk': item['pegawai_jk'],
							'harga': item['harga'],
							'gambar': item['gambar'],
							'action': button
						})
					})
					return return_data
				}
			},
			columns: [{
					data: 'no'
				},
				{
					data: 'pegawai_no'
				},
				{
					data: 'pegawai_nama'
				},
				{
					data: 'pegawai_jk'
				},
				{
					data: 'harga'
				},
				{
					data: 'gambar'
				},
				{
					data: 'action'
				}
			]
		});
	}

	function add_pegawai() {
		$('#pegawai_no').val('');
		$('#pegawai_nama').val('');
		$('#pegawai_jk').val('');
		$('#harga').val('');
		$('#file').val('');
		$('#add_pegawai_mdl').modal('show');
	}

	function save_add_pegawai() {
		var pegawai_no = $('#pegawai_no').val();
		var pegawai_nama = $('#pegawai_nama').val();
		var pegawai_jk = $('#pegawai_jk').val();
		var harga = $('#harga').val();
		var fd = new FormData();
		var files = $('#file')[0].files[0];
		fd.append('pegawai_no', pegawai_no);
		fd.append('pegawai_nama', pegawai_nama);
		fd.append('pegawai_jk', pegawai_jk);
		fd.append('harga', harga);
		fd.append('file', files);

		$.ajax({
			url: '<?php echo base_url() ?>pegawai/save_add',
			type: 'post',
			data: fd,
			contentType: false,
			processData: false,
			success: function(data) {
				console.log(data);
				if (data == 1) {
					toastr.success('Data berhasil diperbarui', 'Success');
					$('#add_pegawai_mdl').modal('hide');
					getMainTable();
				} else {
					toastr.error(data, 'Failed');
				}
			}
		});

	}

	function edit_pegawai(id) {
		$.ajax({
			type: 'GET',
			url: '<?php echo base_url() ?>pegawai/get_data_by_id/' + id,
			dataType: 'json',
			success: function(data) {

				$('#pegawai_id_edit').val(data.pegawai_id);
				$('#pegawai_no_edit').val(data.pegawai_no);
				$('#pegawai_nama_edit').val(data.pegawai_nama);
				$('#pegawai_jk_edit').val(data.pegawai_jk);
				$('#harga_edit').val(data.harga);
				$('#file_prev').val(data.gambar);
				if (data.gambar != null)
					$('#imgView').attr('src', '<?php echo base_url() ?>/assets/images/' + data.gambar);
				else
					$('#imgView').hide();

				$('#header_edit_pegawai').html('Edit Data pegawai <span class="text-info">' + data.pegawai_nama + '</span>');
				$('#edit_pegawai_mdl').modal("show");
			}
		});

	}

	function save_edit_pegawai() {
		var pegawai_id = $('#pegawai_id_edit').val();
		var file_prev = $('#file_prev').val();
		var pegawai_no = $('#pegawai_no_edit').val();
		var pegawai_nama = $('#pegawai_nama_edit').val();
		var pegawai_jk = $('#pegawai_jk_edit').val();
		var harga = $('#harga_edit').val();

		var fd = new FormData();
		var files = $('#file_edit')[0].files[0];
		fd.append('pegawai_id', pegawai_id);
		fd.append('pegawai_no', pegawai_no);
		fd.append('pegawai_nama', pegawai_nama);
		fd.append('pegawai_jk', pegawai_jk);
		fd.append('harga', harga);
		fd.append('file', files);
		fd.append('file_prev', file_prev);

		$.ajax({
			type: "POST",
			url: '<?php echo base_url() ?>pegawai/save_edit',
			data: fd,
			contentType: false,
			processData: false,
			success: function(data) {
				console.log(data);
				if (data == 1) {
					toastr.success('Data berhasil diperbarui', 'Success');
					$('#edit_pegawai_mdl').modal('hide');
					getMainTable();
				} else {
					toastr.error(data, 'Failed');
				}
			}
		});

	}

	function confirm_delete_pegawai(id) {

		$('#id_delete').val(id);

		$('#header_delete_pegawai').html('Confirm Delete Data pegawai');

		$('#confirm_delete_pegawai_mdl').modal('show');

	}

	function save_delete_pegawai() {
		var id = $('#id_delete').val();

		$.ajax({
			type: "POST",
			url: '<?php echo base_url() ?>pegawai/save_delete',
			data: {
				id: id,
			},
			success: function(data) {
				console.log(data);
				if (data == 1) {
					toastr.success('Data berhasil diperbarui', 'Success');
					$('#confirm_delete_pegawai_mdl').modal('hide');
					getMainTable();
				} else {
					toastr.error("Data gagal diperbarui", 'Failed');
				}
			}
		});

	}

	function isNumberKey(evt) {
		var charCode = (evt.which) ? evt.which : evt.keyCode
		if (charCode > 31 && (charCode < 48 || charCode > 57))
			return false;
		return true;
	}
</script>