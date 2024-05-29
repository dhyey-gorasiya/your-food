<header class="header">
	<a class="circle" href="accueil.php">YourFood</a>
	<div class="logo-container">
		<a href="accueil.php" class="logo">
			<span class="book-eat">Your Food</span>
		</a>
		<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
			<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
		</div>
	</div>
	<!-- start: search & user box -->
	<div class="header-right">
		<span class="separator"></span>
		<span class="separator"></span>
		<div id="userbox" class="userbox">
			<a href="#" data-toggle="dropdown">
				<figure class="profile-picture">
					<img src="assets/images/image-profil.png" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/image-profil.png" />
				</figure>
				<div class="profile-info" data-lock-name="Jean Dupon" data-lock-email="jeandupon@test.com">
					
					<span class="role">Admin</span>
				</div>
				<i class="fa custom-caret"></i>
			</a>
			<div class="dropdown-menu">
				<ul class="list-unstyled">
					<li class="divider"></li>
					
					<li>
						<a role="menuitem" tabindex="-1" href="logout.php"><i class="fa fa-power-off"></i> Log Out</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- end: search & user box -->
</header>