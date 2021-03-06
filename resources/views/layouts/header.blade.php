<header>
	<div class="topbar d-flex align-items-center">
		<nav class="navbar navbar-expand">
			<div class="topbar-logo-header">
				<div class="">
					<img src="{{ asset('assets/images/LOGO.png') }}" width="140" alt="logo icon">
				</div>
				<div class="">
					{{-- <h4 class="logo-text">eDRo</h4> --}}
				</div>
			</div>
			<div class="mobile-toggle-menu">
				<i class='bx bx-menu'></i>
			</div>
			<div class="top-menu-left d-none d-xl-block ps-3">
				<nav class="">
					<ul class="navbar-nav nav-pills">
						<li class="nav-item">
							<a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Dashboard</a>
						</li>
						<li class="nav-item">
							<a class="nav-link {{ Request::is('users') ? 'active' : '' }}" href="{{ route('users.index') }}">Users</a>
						</li>
						<li class="nav-item">
							<a class="nav-link {{ Request::is('devices') ? 'active' : '' }}"
								href="{{ route('devices.index') }}">Devices</a>
						</li>
						<li class="nav-item">
							<a class="nav-link {{ Request::is('#') ? 'active' : '' }}" href="{{ url('#') }}">History</a>
						</li>
					</ul>
				</nav>
			</div>
			<div class="top-menu ms-auto">
				{{-- <ul class="navbar-nav align-items-center">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown"
							aria-expanded="false"> <i class='bx bx-category'></i>
						</a>
						<div class="dropdown-menu dropdown-menu-end">
							<div class="row row-cols-2 g-3 p-3">
								<div class="col text-center">
									<div class="app-box mx-auto bg-gradient-cosmic text-white"><i class='bx bx-group'></i>
									</div>
									<div class="app-title">Dashboard</div>
								</div>
								<div class="col text-center">
									<div class="app-box mx-auto bg-gradient-burning text-white"><i class='bx bx-atom'></i>
									</div>
									<div class="app-title">Users</div>
								</div>
								<div class="col text-center">
									<div class="app-box mx-auto bg-gradient-lush text-white"><i class='bx bx-shield'></i>
									</div>
									<div class="app-title">Devices</div>
								</div>
								<div class="col text-center">
									<div class="app-box mx-auto bg-gradient-lush text-white"><i class='bx bx-shield'></i>
									</div>
									<div class="app-title">Logs</div>
								</div>
							</div>
						</div>
					</li>
					<li class="nav-item dropdown dropdown-large">
						<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button"
							data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">7</span>
							<i class='bx bx-bell'></i>
						</a>
						<div class="dropdown-menu dropdown-menu-end">
							<a href="javascript:;">
								<div class="msg-header">
									<p class="msg-header-title">Notifications</p>
									<p class="msg-header-clear ms-auto">Marks all as read</p>
								</div>
							</a>
							<div class="header-notifications-list">
								<a class="dropdown-item" href="javascript:;">
									<div class="d-flex align-items-center">
										<div class="notify bg-light-primary text-primary"><i class="bx bx-group"></i>
										</div>
										<div class="flex-grow-1">
											<h6 class="msg-name">New Customers<span class="msg-time float-end">14 Sec
													ago</span></h6>
											<p class="msg-info">5 new user registered</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item" href="javascript:;">
									<div class="d-flex align-items-center">
										<div class="notify bg-light-danger text-danger"><i class="bx bx-cart-alt"></i>
										</div>
										<div class="flex-grow-1">
											<h6 class="msg-name">New Orders <span class="msg-time float-end">2 min
													ago</span></h6>
											<p class="msg-info">You have recived new orders</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item" href="javascript:;">
									<div class="d-flex align-items-center">
										<div class="notify bg-light-success text-success"><i class="bx bx-file"></i>
										</div>
										<div class="flex-grow-1">
											<h6 class="msg-name">24 PDF File<span class="msg-time float-end">19 min
													ago</span></h6>
											<p class="msg-info">The pdf files generated</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item" href="javascript:;">
									<div class="d-flex align-items-center">
										<div class="notify bg-light-warning text-warning"><i class="bx bx-send"></i>
										</div>
										<div class="flex-grow-1">
											<h6 class="msg-name">Time Response <span class="msg-time float-end">28 min
													ago</span></h6>
											<p class="msg-info">5.1 min avarage time response</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item" href="javascript:;">
									<div class="d-flex align-items-center">
										<div class="notify bg-light-info text-info"><i class="bx bx-home-circle"></i>
										</div>
										<div class="flex-grow-1">
											<h6 class="msg-name">New Product Approved <span class="msg-time float-end">2
													hrs ago</span></h6>
											<p class="msg-info">Your new product has approved</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item" href="javascript:;">
									<div class="d-flex align-items-center">
										<div class="notify bg-light-danger text-danger"><i class="bx bx-message-detail"></i>
										</div>
										<div class="flex-grow-1">
											<h6 class="msg-name">New Comments <span class="msg-time float-end">4 hrs
													ago</span></h6>
											<p class="msg-info">New customer comments recived</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item" href="javascript:;">
									<div class="d-flex align-items-center">
										<div class="notify bg-light-success text-success"><i class='bx bx-check-square'></i>
										</div>
										<div class="flex-grow-1">
											<h6 class="msg-name">Your item is shipped <span class="msg-time float-end">5
													hrs
													ago</span></h6>
											<p class="msg-info">Successfully shipped your item</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item" href="javascript:;">
									<div class="d-flex align-items-center">
										<div class="notify bg-light-primary text-primary"><i class='bx bx-user-pin'></i>
										</div>
										<div class="flex-grow-1">
											<h6 class="msg-name">New 24 authors<span class="msg-time float-end">1 day
													ago</span></h6>
											<p class="msg-info">24 new authors joined last week</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item" href="javascript:;">
									<div class="d-flex align-items-center">
										<div class="notify bg-light-warning text-warning"><i class='bx bx-door-open'></i>
										</div>
										<div class="flex-grow-1">
											<h6 class="msg-name">Defense Alerts <span class="msg-time float-end">2 weeks
													ago</span></h6>
											<p class="msg-info">45% less alerts last 4 weeks</p>
										</div>
									</div>
								</a>
							</div>
							<a href="javascript:;">
								<div class="text-center msg-footer">View All Notifications</div>
							</a>
						</div>
					</li>
					<li class="nav-item dropdown dropdown-large">
						<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button"
							data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
							<i class='bx bx-comment'></i>
						</a>
						<div class="dropdown-menu dropdown-menu-end">
							<a href="javascript:;">
								<div class="msg-header">
									<p class="msg-header-title">Messages</p>
									<p class="msg-header-clear ms-auto">Marks all as read</p>
								</div>
							</a>
							<div class="header-message-list">
								<a class="dropdown-item" href="javascript:;">
									<div class="d-flex align-items-center">
										<div class="user-online">
											<img src="assets/images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
										</div>
										<div class="flex-grow-1">
											<h6 class="msg-name">Daisy Anderson <span class="msg-time float-end">5 sec
													ago</span></h6>
											<p class="msg-info">The standard chunk of lorem</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item" href="javascript:;">
									<div class="d-flex align-items-center">
										<div class="user-online">
											<img src="assets/images/avatars/avatar-2.png" class="msg-avatar" alt="user avatar">
										</div>
										<div class="flex-grow-1">
											<h6 class="msg-name">Althea Cabardo <span class="msg-time float-end">14
													sec ago</span></h6>
											<p class="msg-info">Many desktop publishing packages</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item" href="javascript:;">
									<div class="d-flex align-items-center">
										<div class="user-online">
											<img src="assets/images/avatars/avatar-3.png" class="msg-avatar" alt="user avatar">
										</div>
										<div class="flex-grow-1">
											<h6 class="msg-name">Oscar Garner <span class="msg-time float-end">8 min
													ago</span></h6>
											<p class="msg-info">Various versions have evolved over</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item" href="javascript:;">
									<div class="d-flex align-items-center">
										<div class="user-online">
											<img src="assets/images/avatars/avatar-4.png" class="msg-avatar" alt="user avatar">
										</div>
										<div class="flex-grow-1">
											<h6 class="msg-name">Katherine Pechon <span class="msg-time float-end">15
													min ago</span></h6>
											<p class="msg-info">Making this the first true generator</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item" href="javascript:;">
									<div class="d-flex align-items-center">
										<div class="user-online">
											<img src="assets/images/avatars/avatar-5.png" class="msg-avatar" alt="user avatar">
										</div>
										<div class="flex-grow-1">
											<h6 class="msg-name">Amelia Doe <span class="msg-time float-end">22 min
													ago</span></h6>
											<p class="msg-info">Duis aute irure dolor in reprehenderit</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item" href="javascript:;">
									<div class="d-flex align-items-center">
										<div class="user-online">
											<img src="assets/images/avatars/avatar-6.png" class="msg-avatar" alt="user avatar">
										</div>
										<div class="flex-grow-1">
											<h6 class="msg-name">Cristina Jhons <span class="msg-time float-end">2 hrs
													ago</span></h6>
											<p class="msg-info">The passage is attributed to an unknown</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item" href="javascript:;">
									<div class="d-flex align-items-center">
										<div class="user-online">
											<img src="assets/images/avatars/avatar-7.png" class="msg-avatar" alt="user avatar">
										</div>
										<div class="flex-grow-1">
											<h6 class="msg-name">James Caviness <span class="msg-time float-end">4 hrs
													ago</span></h6>
											<p class="msg-info">The point of using Lorem</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item" href="javascript:;">
									<div class="d-flex align-items-center">
										<div class="user-online">
											<img src="assets/images/avatars/avatar-8.png" class="msg-avatar" alt="user avatar">
										</div>
										<div class="flex-grow-1">
											<h6 class="msg-name">Peter Costanzo <span class="msg-time float-end">6 hrs
													ago</span></h6>
											<p class="msg-info">It was popularised in the 1960s</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item" href="javascript:;">
									<div class="d-flex align-items-center">
										<div class="user-online">
											<img src="assets/images/avatars/avatar-9.png" class="msg-avatar" alt="user avatar">
										</div>
										<div class="flex-grow-1">
											<h6 class="msg-name">David Buckley <span class="msg-time float-end">2 hrs
													ago</span></h6>
											<p class="msg-info">Various versions have evolved over</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item" href="javascript:;">
									<div class="d-flex align-items-center">
										<div class="user-online">
											<img src="assets/images/avatars/avatar-10.png" class="msg-avatar" alt="user avatar">
										</div>
										<div class="flex-grow-1">
											<h6 class="msg-name">Thomas Wheeler <span class="msg-time float-end">2 days
													ago</span></h6>
											<p class="msg-info">If you are going to use a passage</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item" href="javascript:;">
									<div class="d-flex align-items-center">
										<div class="user-online">
											<img src="assets/images/avatars/avatar-11.png" class="msg-avatar" alt="user avatar">
										</div>
										<div class="flex-grow-1">
											<h6 class="msg-name">Johnny Seitz <span class="msg-time float-end">5 days
													ago</span></h6>
											<p class="msg-info">All the Lorem Ipsum generators</p>
										</div>
									</div>
								</a>
							</div>
							<a href="javascript:;">
								<div class="text-center msg-footer">View All Messages</div>
							</a>
						</div>
					</li>
				</ul> --}}
			</div>
			<div class="user-box dropdown dropdown-large border-light-2">
				<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button"
					data-bs-toggle="dropdown" aria-expanded="false">
					<img src="assets/images/avatars/avatar-2.png" class="user-img" alt="user avatar">
					<div class="user-info ps-3">
						<p class="user-name mb-0">{{ auth()->user()->name }}</p>
						<p class="designattion mb-0">{{ auth()->user()->division }}</p>
					</div>
				</a>
				<ul class="dropdown-menu dropdown-menu-end text-center">
					<div class="col pb-3">
						<div class="card">
							<img src="assets/images/gallery/01.png" class="card-img-top" alt="...">
							<div class="card-body" style="position: absolute;top:2rem;left:0;right:0;">
								<h6 class="designattion mb-4">{{ auth()->user()->role }}</h6>
								<img src="assets/images/avatars/avatar-2.png" class="rounded-circle shadow-lg" alt="user avatar"
									style="background-color: #495057; padding: 4px" width="150px">
							</div>
						</div>
					</div>
					<h5 class="user-name mb-0">{{ auth()->user()->name }}</h5>
					<p class="designattion mb-0">{{ auth()->user()->division }}</p>
					<li>
						<a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#modalProfile">
							<i class="bx bx-user"></i>
							<span>Edit Profile</span>
						</a>
					</li>
					<li>
						<a class="dropdown-item" href="{{ url('/') }}">
							<i class='bx bx-home-circle'></i>
							<span>Dashboard</span>
						</a>
					</li>
					<li>
						<form action="{{ url('/userlogout') }}" method="POST">
							@csrf
							<button type="submit" class="dropdown-item">
								<i class='bx bx-log-out-circle'></i>
								<span>Logout</span>
							</button>
						</form>

						{{-- <a class="dropdown-item" href="{{ url('/userlogin') }}">
							<i class='bx bx-log-out-circle'></i>
							<span>Logout</span>
						</a> --}}
					</li>
				</ul>
			</div>
		</nav>
	</div>


	{{-- <div class="modal fade" id="modalProfile" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog modal-md">
			<div class="modal-content">
				<div class="modal-body">
					<div class="card-title d-flex align-items-center">
						<div><i class="bx bx-edit me-1 font-60 text-info"></i>
						</div>
						<h5 class="mb-0 text-info">Edit Profile</h5>
						<button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<hr>
					<form action="{{ route('users.update') }}" method="POST" enctype="multipart/form-data" class="row g-3">
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
								<input type="text" class="form-control border-start-0" name="name" value="{{ auth()->user()->name }}" />
							</div>
						</div>
						<div class="col-md-6">
							<label for="inputLastName1" class="form-label">Username</label>
							<div class="input-group input-group-sm"> <span class="input-group-text bg-transparent"><i
										class='bx bx-user'></i></span>
								<input type="text" class="form-control border-start-0" name="username"
									value="{{ auth()->user()->username }}" />
							</div>
						</div>
						<div class="col-md-6">
							<label for="inputPhoneNo" class="form-label">Phone No</label>
							<div class="input-group input-group-sm"> <span class="input-group-text bg-transparent"><i
										class='bx bxs-phone'></i></span>
								<input type="text" class="form-control border-start-0" name="phone"
									value="0{{ auth()->user()->phone }}" />
							</div>
						</div>
						<div class="col-md-6">
							<label for="inputEmailAddress" class="form-label">Email Address</label>
							<div class="input-group input-group-sm"> <span class="input-group-text bg-transparent"><i
										class='bx bxs-envelope'></i></span>
								<input type="text" class="form-control border-start-0" name="email"
									value="{{ auth()->user()->email }}" />
							</div>
						</div>
						<div class="col-md-6">
							<label class="form-label">Gender</label>
							<select class="single-select" name="gender">
								<option selected>{{ $user->gender }}</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
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
	</div> --}}

</header>