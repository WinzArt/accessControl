@extends("layouts.app")

@section("style")
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />

<link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
<link href="assets/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />

<style>
	.select2-container--open {
		z-index: 9999;
	}
</style>
@endsection

@section("wrapper")
<div class="page-wrapper">
	<div class="page-content">
		<div class="d-none d-sm-flex align-items-center">
			<h4 class="mb-0 text-uppercase">Devices List</h4>
			<a type="button" class="btn btn-outline-info ms-auto btn-sm" data-bs-toggle="modal"
				data-bs-target="#modalRegis"><i class='bx bx-plus'></i>Add New Devices</a>
		</div>
		<hr />
		<div class="card">
			<div class="card-body">
				<div class="table-responsive container-fluid p-1">
					<table id="example2" class="table table-striped display nowrap">
						<thead>
							<tr>
								<th scope="col">No</th>
								<th scope="col">Device Type</th>
								<th scope="col">Device Name</th>
								<th scope="col">Last Updated</th>
								<th scope="col">Actions</th>
							</tr>
						</thead>
						<tbody style="font-size: 16px; vertical-align: baseline;">

							@php
							$no = 1;
							@endphp

							@foreach ($dataDevice as $device)
							<tr>
								<th scope="device">{{ $no++ }}</th>
								<td>{{ $device->device }}</td>
								<td>{{ $device->name }}</td>
								<td>{{ $device->updated_at->format('d/m/Y, H:i') }}</td>
								<td>
									<a class="btn badge btn-outline-warning edit" type="button" data-bs-toggle="modal"
										data-bs-target="#modalEdit-{{ $device->id }}"><i class="bx bx-edit bx-xs"></i></a>
									<form action="{{ route('devices.destroy', $device) }}" class="d-inline" method="POST">
										@csrf
										@method('DELETE')
										<a type="button" class="btn badge btn-outline-danger delete" data-id="{{ $device->id }}"
											data-nama="{{ $device->name }}"><i class="bx bx-trash bx-xs text-center"></i></a>
									</form>
								</td>
							</tr>
							@endforeach
						</tbody>
						<tfoot>
							<tr>

							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
		<!-- Modal Regis -->
		<div class="modal fade" id="modalRegis" tabindex="-1" aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-body">
						<div class="card-title d-flex align-items-center">
							<div><i class="bx bx-devices me-1 font-60 text-info"></i>
							</div>
							<h5 class="mb-0 text-info">Add Devices</h5>
							<button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<hr>
						<form action="{{ route('devices.store') }}" method="POST" enctype="multipart/form-data" class="row g-3">
							@csrf
							<div class="col-md-12">
								<label for="inputLastName2" class="form-label">Device Id</label>
								<div class="input-group input-group-sm"> <span class="input-group-text bg-transparent"><i
											class='bx bxs-credit-card'></i></span>
									<input type="text" class="form-control border-start-0" value="{{ $device->id + 1 }}" readonly />
								</div>
							</div>
							{{-- <div class="col-md-12">
								<label for="inputLastName1" class="form-label">Device Type</label>
								<div class="input-group input-group-sm"> <span class="input-group-text bg-transparent"><i
											class='bx bxs-user'></i></span>
									<input type="text" class="form-control border-start-0" placeholder="Device Type" name="device" />
								</div>
							</div> --}}
							<div class="col-md-12">
								<label class="form-label">Device Type</label>
								<select class="single-select" name="device">
									<option value="Reader">Reader</option>
									<option value="MobileReader">Mobile Reader</option>
									<option value="Enrollment">Enrollment</option>
									<option value="Module">Module</option>
									<option value="IntelligentController">Intelligent Controller</option>
								</select>
							</div>
							<div class="col-md-12 {{ ('Reader' == 'selected' ? 'd-none' : '') }}">
								<label for="inputLastName1" class="form-label">Door Name</label>
								<div class="input-group input-group-sm"> <span class="input-group-text bg-transparent"><i
											class='bx bxs-user'></i></span>
									<input type="text" class="form-control border-start-0" placeholder="Door Office" name="name" />
								</div>
							</div>
							<div class="col-12">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" id="gridCheck2">
									<label class="form-check-label" for="gridCheck2">Check me out</label>
								</div>
							</div>
							<hr>
							<div class="col-12">
								<button type="submit" class="btn btn-outline-info px-5">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal Edit -->
		@foreach ( $dataDevice as $device )
		<div class="modal fade" id="modalEdit-{{ $device->id }}" tabindex="-1" aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-body">
						<div class="card-title d-flex align-items-center">
							<div><i class="bx bx-edit me-1 font-60 text-info"></i>
							</div>
							<h5 class="mb-0 text-info">Device Edit</h5>
							<button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<hr>
						<form action="{{ route('devices.update', $device) }}" method="POST" enctype="multipart/form-data"
							class="row g-3">
							@csrf
							@method('PUT')

							<div class="col-md-12">
								<label for="inputLastName2" class="form-label">Device Id</label>
								<div class="input-group input-group-sm"> <span class="input-group-text bg-transparent"><i
											class='bx bxs-credit-card'></i></span>
									<input type="text" class="form-control border-start-0" value="{{ $device->id }}" />
								</div>
							</div>
							<div class="col-md-12">
								<label for="inputLastName1" class="form-label">Device Type</label>
								<div class="input-group input-group-sm"> <span class="input-group-text bg-transparent"><i
											class='bx bxs-devices'></i></span>
									<input type="text" class="form-control border-start-0" value="{{ $device->device }}" name="device" />
								</div>
							</div>
							<div class="col-md-12">
								<label for="inputLastName1" class="form-label">Door</label>
								<div class="input-group input-group-sm"> <span class="input-group-text bg-transparent"><i
											class='bx bxs-door-open'></i></span>
									<input type="text" class="form-control border-start-0" value="{{ $device->name }}" name="name" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" id="gridCheck2">
									<label class="form-check-label" for="gridCheck2">Check me out</label>
								</div>
							</div>
							<div class="col-md-12">
								<hr>
								<button type="submit" class="btn btn-outline-info px-5">Update</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection

@section("script")
<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="assets/plugins/select2/js/select2.min.js"></script>
<script>
	$(document).ready(function() {
		var table = $('#example2').DataTable({
			"lengthChange": false,
			"autoWidth": false,
			"paging": false,
			"info": false,
			"scrollY": "50.9vh",
			"scrollX": true,
			buttons: ['excel', 'pdf', 'print']
		});

		table.buttons().container()
			.appendTo('#example2_wrapper .col-md-6:eq(0)');
	});
</script>
<script>
	$(document).ready(function() {
		$('.single-select').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
		});

		$('.delete').click(function() {
			var deviceId = $(this).attr('data-id')
			var name = $(this).attr('data-name')
			let $form = $(this).closest('form')

			Swal.fire({
			width: '20rem',
			title: 'Are you sure?',
			text: "You won't be able to revert this!",
			icon: 'warning',
			background: '#343a40',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
			if (result.isConfirmed) {
				$form.submit()
				}
			})
		});

		var Toast = Swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 1500,
			background: '#343a40',
			didOpen: (toast) => {
			toast.addEventListener('mouseenter', Swal.stopTimer)
			toast.addEventListener('mouseleave', Swal.resumeTimer)
			}
		})

		@if ($message = Session::get('success'))
			Toast.fire({
			icon: 'success',
			title: '{{ Session::get('success') }}'
		});
		@endif
	});
</script>
@endsection