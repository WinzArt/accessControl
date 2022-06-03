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
			<h4 class="mb-0 text-uppercase">Users List</h4>
			<a type="button" class="btn btn-outline-info ms-auto btn-sm" data-bs-toggle="modal"
				data-bs-target="#modalRegis"><i class='bx bx-user-plus'></i>Add New Visitors</a>
		</div>
		<hr />
		<div class="card">
			<div class="card-body">
				<div class="table-responsive container-fluid p-1">
					<table id="example2" class="table table-striped display nowrap">
						<thead>
							<tr>
								<th scope="col">No</th>
								<th scope="col">Photo</th>
								<th scope="col">Name</th>
								<th scope="col">Access</th>
								<th scope="col">Gender</th>
								<th scope="col">Phone</th>
								<th scope="col">Email</th>
								<th scope="col">Visit Date</th>
								<th scope="col">Actions</th>
							</tr>
						</thead>
						<tbody style="font-size: 16px; vertical-align: baseline;">

							@php
							$no = 1;
							@endphp

							@foreach ($dataVisitor as $visitor)
							<tr>
								<th scope="row">{{ $no++ }}</th>
								<td>
									@if ($visitor->photo == null)
									<img class="img-circle" src="{{ asset('assets/images/avatars/avatar-no-photo.png') }}"
										alt="no photo" width="40px" height="40px">
									@else
									<img class="img-circle" src="{{ asset('visitorsPhoto/'. $visitor->photo) }}"
										alt="{{ $visitor->photo }}" width="40px" height="40px">
									@endif
								</td>
								<td>{{ $visitor->name }}</td>
								<td>
									<div class="btn p-1">
										<a class="btn badge btn-outline-info dropdown d-flex align-items-center  dropdown-toggle" href="#"
											type="button" data-bs-toggle="dropdown">
											<i class="bx bx-door-open bx-xs"></i>
											<p class=" mb-0">Door</p>
										</a>
										<ul class="dropdown-menu dropdown-menu-start" style="min-width: 7rem">
											@foreach ($visitor->visitorToDevice as $device )
											<li>
												<a class="dropdown-item"><i class="bx bx-door-open"></i><span>{{ $device->name }}</span>
												</a>
											</li>
											@endforeach
										</ul>
									</div>
								</td>
								<td>{{ $visitor->gender }}</td>
								<td>0{{ $visitor->phone }}</td>
								<td>{{ $visitor->email }}</td>
								<td>{{ $visitor->updated_at->format('d/m/Y') }}</td>
								<td class="text-center">
									<a class="btn badge btn-outline-warning edit" type="button" data-bs-toggle="modal"
										data-bs-target="#modalEdit-{{ $visitor->id }}"><i class="bx bx-edit bx-xs"></i></a>
									<form action="{{ route('visitors.destroy', $visitor) }}" class="d-inline" method="POST">
										@csrf
										@method('DELETE')
										<a type="button" class="btn badge btn-outline-danger delete" data-id="{{ $visitor->id }}"
											data-nama="{{ $visitor->name }}"><i class="bx bx-trash bx-xs text-center"></i></a>
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
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-body">
						<div class="card-title d-flex align-items-center">
							<div><i class="bx bx-user-plus me-1 font-60 text-info"></i>
							</div>
							<h5 class="mb-0 text-info">Users Registration</h5>
							<button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<hr>
						<form action="{{ route('visitors.store') }}" method="POST" enctype="multipart/form-data" class="row g-3">
							@csrf
							<div class="col-md-12">
								<label for="inputPhoneNo" class="form-label">Pitcture</label>
								<div class="input-group input-group-sm"> <span class="input-group-text bg-transparent"><i
											class='bx bxs-image-add'></i></span>
									<input class="form-control" type="file">
								</div>
							</div>
							<div class="col-md-6">
								<label for="inputLastName1" class="form-label">Name</label>
								<div class="input-group input-group-sm"> <span class="input-group-text bg-transparent"><i
											class='bx bxs-user'></i></span>
									<input type="text" class="form-control border-start-0" placeholder="Name" name="name" />
								</div>
							</div>
							<div class="col-md-6">
								<label for="inputLastName2" class="form-label">Card Id</label>
								<div class="input-group input-group-sm"> <span class="input-group-text bg-transparent"><i
											class='bx bxs-credit-card'></i></span>
									<input type="text" class="form-control border-start-0" placeholder="Card Id" name="card_id" />
								</div>
							</div>
							<div class="col-md-6">
								<label for="inputPhoneNo" class="form-label">Phone No</label>
								<div class="input-group input-group-sm"> <span class="input-group-text bg-transparent"><i
											class='bx bxs-phone'></i></span>
									<input type="text" class="form-control border-start-0" placeholder="Phone No" name="phone" />
								</div>
							</div>
							<div class="col-md-6">
								<label for="inputEmailAddress" class="form-label">Email Address</label>
								<div class="input-group input-group-sm"> <span class="input-group-text bg-transparent"><i
											class='bx bxs-envelope'></i></span>
									<input type="text" class="form-control border-start-0" placeholder="Email Address" name="email" />
								</div>
							</div>
							<div class="col-md-6">
								<label class="form-label">Gender</label>
								<select class="single-select" name="gender">
									<option value="">Select Gender</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>
							</div>
							<div class="col-md-6">
								<label class="form-label">Door Access</label>
								<select class="multiple-select" data-placeholder="Choose anything" multiple="multiple"
									name="device_id[]">
									<div class="user-box dropdown border-light-2">
										<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
											role="button" data-bs-toggle="dropdown" aria-expanded="false">
											<img src="assets/images/avatars/avatar-2.png" class="user-img" alt="user avatar">
											<div class="user-info ps-3">
												<p class="user-name mb-0">Pauline Seitz</p>
												<p class="designattion mb-0">Web Designer</p>
											</div>
										</a>
										<ul class="dropdown-menu dropdown-menu-end">
											<li><a class="dropdown-item" href="{{ url('user-profile') }}"><i
														class="bx bx-user"></i><span>Profile</span></a>
											</li>
											<li><a class="dropdown-item" href="{{ url('orders') }}"><i
														class="bx bx-cog"></i><span>Orders</span></a>
											</li>
											<li><a class="dropdown-item" href="{{ url('index') }}"><i
														class='bx bx-home-circle'></i><span>Dashboard</span></a>
											</li>
											<li><a class="dropdown-item" href="{{ url('earnings') }}"><i
														class='bx bx-dollar-circle'></i><span>Earnings</span></a>
											</li>
											<li><a class="dropdown-item" href="{{ url('downloads') }}"><i
														class='bx bx-download'></i><span>Downloads</span></a>
											</li>
											<li>
												<div class="dropdown-divider mb-0"></div>
											</li>
											<li><a class="dropdown-item" href="{{ url('authentication-signin') }}"><i
														class='bx bx-log-out-circle'></i><span>Logout</span></a>
											</li>
										</ul>
									</div>
									@foreach ($dataDevice as $device)
									<option value="{{ $device->id }}">{{ $device->name }}</option>
									@endforeach
								</select>
							</div>
							<div class="col-12">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" id="gridCheck2">
									<label class="form-check-label" for="gridCheck2">Check me out</label>
								</div>
							</div>
							<hr>
							<div class="col-12">
								<button type="submit" class="btn btn-outline-info px-5">Register</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal Edit -->
		@foreach ( $dataVisitor as $visitor )
		<div class="modal fade" id="modalEdit-{{ $visitor->id }}" tabindex="-1" aria-hidden="true">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-body">
						<div class="card-title d-flex align-items-center">
							<div><i class="bx bx-edit me-1 font-60 text-info"></i>
							</div>
							<h5 class="mb-0 text-info">User Edit</h5>
							<button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<hr>
						<form action="{{ route('visitors.update', $visitor) }}" method="POST" enctype="multipart/form-data"
							class="row g-3">
							@csrf
							@method('PUT')
							<div class="col-md-12">
								<label for="inputPhoneNo" class="form-label">Pitcture</label>
								<div class="input-group input-group-sm"> <span class="input-group-text bg-transparent"><i
											class='bx bxs-image-add'></i></span>
									<input class="form-control" type="file">
								</div>
							</div>
							<div class="col-md-6">
								<label for="inputLastName1" class="form-label">Name</label>
								<div class="input-group input-group-sm"> <span class="input-group-text bg-transparent"><i
											class='bx bxs-user'></i></span>
									<input type="text" class="form-control border-start-0" name="name" value="{{ $visitor->name }}" />
								</div>
							</div>
							<div class="col-md-6">
								<label for="inputLastName2" class="form-label">Card Id</label>
								<div class="input-group input-group-sm"> <span class="input-group-text bg-transparent"><i
											class='bx bxs-credit-card'></i></span>
									<input type="text" class="form-control border-start-0" name="card_id" value="{{ $visitor->card_id }}"
										readonly />
								</div>
							</div>
							<div class="col-md-6">
								<label for="inputPhoneNo" class="form-label">Phone No</label>
								<div class="input-group input-group-sm"> <span class="input-group-text bg-transparent"><i
											class='bx bxs-phone'></i></span>
									<input type="text" class="form-control border-start-0" name="phone" value="0{{ $visitor->phone }}" />
								</div>
							</div>
							<div class="col-md-6">
								<label for="inputEmailAddress" class="form-label">Email Address</label>
								<div class="input-group input-group-sm"> <span class="input-group-text bg-transparent"><i
											class='bx bxs-envelope'></i></span>
									<input type="text" class="form-control border-start-0" name="email" value="{{ $visitor->email }}" />
								</div>
							</div>
							<div class="col-md-6">
								<label class="form-label">Gender</label>
								<select class="single-select" name="gender">
									<option selected>{{ $visitor->gender }}</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>
							</div>
							<div class="col-md-6">
								<label class="form-label">Door Access</label>
								<select class="multiple-select" data-placeholder="Choose anything" multiple="multiple"
									name="device_id[]">

									@foreach ($dataDevice as $device)
									@foreach ($visitor->visitorToDevice as $deviceSelect )
									<option {{ ($device->name == $deviceSelect->name ? 'selected' : '') }}
										@endforeach
										value="{{ $device->id }}">{{ $device->name }}</option>
									@endforeach

								</select>
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
<script src="assets/plugins/select2/js/select2.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
	$(document).ready(function() {
		var table = $('#example2').DataTable({
			"lengthChange": false,
			"autoWidth": false,
			"paging": false,
			"info": false,
			"scrollY": "50vh",
			"scrollX": true,
			"buttons": ['excel', 'pdf', 'print']
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
			$('.multiple-select').select2({
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
			})

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