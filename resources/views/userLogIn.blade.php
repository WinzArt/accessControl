@extends('layouts.userAuth')

@section('userAuth')

<div class="section-authentication-signin d-flex align-items-center justify-content-center ">
	<div class="container-fluid">
		<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
			<div class="col mx-auto">
				<div class="card mt-5">
					<div class="card-body">
						<div class="border p-3 rounded">
							<div class="text-center">
								<h3 class="">Sign in</h3>
								<p>Don't have an account yet? <a href="{{ route('users.index') }}">Sign
										up here</a>
								</p>
							</div>
							<div class="d-grid">
								<a class="btn my-3 shadow-sm btn-secondary" href="javascript:;"> <span
										class="d-flex justify-content-center align-items-center">
										<img class="me-2" src="assets/images/icons/search.svg" width="16" alt="Image Description">
										<span>Sign in with Google</span>
									</span>
								</a>
								{{-- <a href="javascript:;" class="btn btn-facebook btn-primary shadow-sm"><i
										class="bx bxl-facebook"></i>Sign
									in with
									Facebook</a> --}}
							</div>
							<div class="text-center m-2"> <span>OR SIGN IN WITH EMAIL</span>
								<hr class="mt-0" />
							</div>
							<div class="form-body">
								<form action="/userlogin" method="POST" class="row g-3">
									@csrf
									<div class="col-12">
										<label for="email" class="form-label">Email Address</label>
										<input type="email" class="form-control" id="email" placeholder="Email Address" name="email"
											@error('email') is-invalid @enderror autofocus required>
										@error('email')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
										@enderror
									</div>
									<div class="col-12">
										<label for="password" class="form-label">Enter Password</label>
										<div class="input-group" id="show_hide_password">
											<input type="password" class="form-control border-end-0" id="password" value="12345678"
												placeholder="Enter Password" name="password" required>
											<a href="javascript:;" class="input-group-text bg-transparent text-info"><i
													class='bx bx-hide'></i></a>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-check form-switch">
											<input class="form-check-input shadow-sm" type="checkbox" id="flexSwitchCheckChecked">
											<label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
										</div>
									</div>
									<div class="col-md-6 text-end"> <a href="{{ url('authentication-forgot-password') }}">Forgot
											Password ?</a>
									</div>
									<div class="col-12">
										<div class="d-grid">
											<button type="submit" class="btn btn-outline-info"><i class="bx bxs-lock-open"></i>Sign
												in</button>
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