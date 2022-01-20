		<!-- Sidebar -->
        <ul
				class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" 
				id="accordionSidebar"
			>
				<!-- Sidebar - Brand -->
				<a
					class="sidebar-brand d-flex align-items-center justify-content-center"
					
				>
					<div class="sidebar-brand-icon">
                    <i class="fas fa-home"></i>
					</div>
					<div class="sidebar-brand-text mx-3">SecondHome <sup>admin</sup></div>
				</a>

				<!-- Divider -->
				<hr class="sidebar-divider my-0" />

				<!-- Heading -->
				<div class="sidebar-heading mt-3">Admin</div>

				<!-- Nav Item - Dashboard -->
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('admin/dashboard');?>">
						<i class="fas fa-fw fa-tachometer-alt"></i>
						<span>Dashboard</span></a
					>
				</li>

				<!-- Divider -->
				<hr class="sidebar-divider my-0" />

				<!-- Heading -->
				<div class="sidebar-heading mt-3">Menu</div>

				<!-- Nav Item - Dashboard -->
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('admin/menu');?>">
					<i class="fas fa-folder-open"></i>
						<span>CRUD Menu</span></a
					>
				</li>
				
				
				
				
				<!-- Divider -->
				<hr class="sidebar-divider" />
				
				<!-- Heading -->
				<div class="sidebar-heading">User</div>
                
                <!-- Nav Item - Charts -->
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('admin/profile');?>">
						<i class="fas fa-user-circle"></i>
						<span>Profile</span></a
						>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('admin/pengguna');?>">
						<i class="fas fa-user-circle"></i>
							<span>Daftar Pengguna</span></a
						>
					</li>
					
				<!-- Sidebar Toggler (Sidebar) -->
				<div class="text-center d-none d-md-inline">
					<button class="rounded-circle border-0" id="sidebarToggle"></button>
				</div>
			</ul>
			<!-- End of Sidebar -->