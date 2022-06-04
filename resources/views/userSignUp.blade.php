@extends('layouts.userAuth')

@section('userAuth')

<div class="d-flex align-items-center justify-content-center my-lg-4">
	<div class="container-fluid">
		<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
			<div class="col mx-auto">
				<div class="card mt-5">
					<div class="card-body">
						<div class="border p-3 rounded">
							<div class="text-center">
								<h3 class="">Sign Up</h3>
								<p>Already have an account? <a href="{{url('/userlogin')}}">Sign in
										here</a>
								</p>
							</div>
							<div class="d-grid">
								<a class="btn my-3 shadow-sm btn-secondary" href="javascript:;"> <span
										class="d-flex justify-content-center align-items-center">
										<img class="me-2" src="assets/images/icons/search.svg" width="16" alt="Image Description">
										<span>Sign Up with Google</span>
									</span>
								</a>
							</div>
							<div class="text-center m-2"> <span>OR SIGN UP WITH EMAIL</span>
								<hr class="mt-0" />
							</div>
							<div class="form-body">
								<form action="{{ route('users.store') }}" class="row g-3" method="POST">
									@csrf
									<div class="col-sm-6">
										<label for="name" class="form-label">Name</label>
										<input type="text" class="form-control @error('name') is-invalid @enderror" id="Name" name="name"
											value="{{ old('name') }}" placeholder="Jhon" required>
										@error('name')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
										@enderror
									</div>
									<div class="col-sm-6">
										<label for="username" class="form-label">Username</label>
										<input type="text" class="form-control @error('username') is-invalid @enderror" id="Username"
											name="username" value="{{ old('username') }}" placeholder="Deo" required>
										@error('username')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
										@enderror
									</div>
									<div class="col-12">
										<label for="inputEmailAddress" class="form-label">Email Address</label>
										<input type="email" class="form-control @error('email') is-invalid @enderror" id="inputEmailAddress"
											name="email" value="{{ old('email') }}" placeholder="example@user.com" required>
										@error('email')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
										@enderror
									</div>
									<div class="col-12">
										<label for="inputPhoneNumber" class="form-label">Phone Number</label>
										<input type="number" class="form-control @error('phone') is-invalid @enderror" id="inputPhoneNumber"
											name="phone" value="{{ old('phone') }}" placeholder="08*****" required>
										@error('phone')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
										@enderror
									</div>
									<div class="col-12">
										<label for="inputChoosePassword" class="form-label">Password</label>
										<div class="input-group" id="show_hide_password">
											<input type="password" class="form-control border-end-0 @error('password') is-invalid @enderror"
												name="password" placeholder="Enter Password" required> <a href="javascript:;"
												class="input-group-text bg-transparent text-info"><i class='bx bx-hide'></i></a>
											@error('password')
											<div class="invalid-feedback">
												{{ $message }}
											</div>
											@enderror
										</div>
									</div>
									<div class="col-6">
										<label for="inputSelectCountry" class="form-label">Division</label>
										<select class="form-select @error('division') is-invalid @enderror" id="inputSelectCountry"
											name="division" aria-label="Default select example" required>
											<option value="{{ old('division') }}" selected>{{ old('division') }}</option>
											<option value="Receptionist">Receptionist</option>
											<option value="IT Support">IT Support</option>
											<option value="Technician">Technician</option>
											<option value="Sales">Sales</option>
										</select>
										@error('division')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
										@enderror
									</div>
									<div class="col-6">
										<label for="inputSelectCountry" class="form-label">Role</label>
										<select class="form-select @error('role') is-invalid @enderror" id="inputSelectCountry" name="role"
											aria-label="Default select example" required>
											<option value="{{ old('role') }}" selected>{{ old('role') }}</option>
											<option value="User">User</option>
											<option value="Admin">Admin</option>
											<option value="Super Admin">Super Admin</option>
										</select>
										@error('role')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
										@enderror
									</div>
									<div class="col-12">
										<div class="form-check form-switch">
											<input class="form-check-input shadow-sm @error('regis') is-invalid @enderror" type="checkbox"
												name="regis" required>
											<label class="form-check-label" for="flexSwitchCheckChecked">I read and agree to Terms &
												Conditions</label>
										</div>
										@error('regis')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
										@enderror
									</div>
									<div class="col-12">
										<div class="d-grid">
											<button type="submit" class="btn btn-outline-info"><i class='bx bx-user'></i>Sign up</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end row-->
	</div>
</div>

@endsection