<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									
									<li>
										<a href="{{ URL('/admin') }}">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>
									<li>
										<a href="{{ URL('/admin/pesan') }}">
											<i class="fa fa-pencil" aria-hidden="true"></i>
											<span>Pesan</span>
										</a>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-table" aria-hidden="true"></i>
											<span>Data Table</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="{{ URL('/admin/customer') }}">
													 Customer
												</a>
											</li>
										</ul>
									</li>
									
								</ul>
							</nav>
						</div>
				
					</div>
				
				</aside>