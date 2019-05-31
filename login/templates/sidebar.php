<div class="col-lg-2 col-md-3">
    <div class="list-group list-group-borderless">
        <a href="index.php"
           class="list-group-item list-group-item-action <?= $sidebarActive == 'home' ? 'active' : '' ?>">
            <i class="fa fa-home"></i>
            <?= trans('home') ?>
        </a>
        <a href="profile.php"
           class="list-group-item list-group-item-action <?= $sidebarActive == 'profile' ? 'active' : '' ?>">
            <i class="fa fa-user"></i>
            <?= trans('my_profile') ?>
        </a>
       <!--?php// if (app('current_user')->is_admin) : ?>-->
            <a href="users.php"
               class="list-group-item list-group-item-action <?= $sidebarActive == 'users' ? 'active' : '' ?>">
                <i class="fa fa-users"></i>
                <?= trans('users') ?>
            </a>
            <a href="user_roles.php"
               class="list-group-item list-group-item-action <?= $sidebarActive == 'roles' ? 'active' : '' ?>">
                <i class="fa fa-user-secret"></i>
                <?= trans('user_roles') ?>
            </a>
		
		<!--<a href="seiten.php"
               class="list-group-item list-group-item-action --><?/*= $sidebarActive == 'seiten' ? 'active' : '' */?>
               <!-- <i class="fa fa-user-secret"></i>
                Seiten
            </a>-->
		
		<a href="mitarbeiter.php"
               class="list-group-item list-group-item-action <?= $sidebarActive == 'mitarbeiter' ? 'active' : '' ?>">
                <i class="fa fa-user-secret"></i>
                Mitarbeiter
            </a>
		<a href="bilder.php"
               class="list-group-item list-group-item-action <?= $sidebarActive == 'bilder' ? 'active' : '' ?>">
                <i class="fa fa-user-secret"></i>
                Bilder
            </a>
		<a href="statistik.php"
               class="list-group-item list-group-item-action <?= $sidebarActive == 'statistik' ? 'active' : '' ?>">
                <i class="fa fa-user-secret"></i>
                Statistiken
            </a>
		<!--<a href="blog.php"
               class="list-group-item list-group-item-action  < ?//= $sidebarActive == 'aktuelles' ? 'active' : '' ?>">
                <i class="fa fa-user-secret"></i>
               GoogleAds
            </a>-->
        <?php/// endif; ?>
    </div>
</div>