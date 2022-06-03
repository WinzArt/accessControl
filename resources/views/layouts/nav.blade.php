<div class="nav-container">
	<div class="mobile-topbar-header">
		<div>
			<img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
		</div>
		<div>
			<h4 class="logo-text">eDRo</h4>
		</div>
		<div class="toggle-icon ms-auto"><i class='bx bx-x'></i>
		</div>
	</div>
	<nav class="topbar-nav">
		<ul class="metismenu" id="menu">
			{{-- <li>
				<a href="javascript:;" class="has-arrow">
					<div class="parent-icon"><i class='bx bx-home-circle'></i>
					</div>
					<div class="menu-title">Dashboard</div>
				</a>
				<ul> --}}
					<li><a href="{{ url('index') }}"><i class="bx bx-right-arrow-alt"></i>Dashboard</a></li>
					<li><a href="{{ url('visitors') }}"><i class="bx bx-right-arrow-alt"></i>Visitors</a></li>
					<li><a href="{{ url('devices') }}"><i class="bx bx-right-arrow-alt"></i>Devices</a></li>
					{{--
				</ul>
			</li> --}}
		</ul>
	</nav>
</div>