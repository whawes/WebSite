<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="index.php">
            <img src="logo.png"  />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="has-sub">
                    <a class="js-arrow" href="index.php">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li>
                    <a href="charts.php">
                        <i class="fas fa-chart-bar"></i>Charts</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-desktop"></i>UI Elements</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">

                        <?php if ($_SESSION['role']=="Admin"){?>
                        <li>
                            <a href="tableclient.php">Utilisateur</a>
                        </li>
                            <?php ;} ?>

                        <?php if (($_SESSION['role']=="EmployeC")||($_SESSION['role']=="Admin")){?>
                        <li>
                            <a href="gestionlivre.php">Produits</a>
                        </li>
                        <?php ;} ?>

                        <?php if (($_SESSION['role']=="EmployeC")||($_SESSION['role']=="Admin")){?>
                        <li>
                            <a href="commande.php">Commandes</a>
                        </li>
                            <?php ;} ?>

                        <?php if (($_SESSION['role']=="EmployeS")||($_SESSION['role']=="Admin")){?>
                        <li>
                            <a href="afficherReclamation.php">Reclamations</a>
                        </li>
                            <?php ;} ?>

                        <?php if (($_SESSION['role']=="EmployeS")||($_SESSION['role']=="Admin")){?>
                        <li>
                            <a href="affiche_produit_sepcii.php">Demandes Produits Specifique</a>
                        </li>
                            <?php ;} ?>

                        <?php if (($_SESSION['role']=="EmployeD")||($_SESSION['role']=="Admin")){?>
                        <li>
                            <a href="tableDiscussion.php">Espcae Discussion</a>
                        </li>
                            <?php ;} ?>

                        <?php if (($_SESSION['role']=="EmployeR")||($_SESSION['role']=="Admin")){?>
                        <li>
                            <a href="progress-bar.html">Nos Auteurs</a>
                        </li>
                            <?php ;} ?>

                        <?php if ($_SESSION['role']=="Admin"){?>
                        <li>
                            <a href="switch.html">Mission</a>
                        </li>
                            <?php ;} ?>

                        <?php if ($_SESSION['role']=="Admin"){?>
                        <li>
                            <a href="grid.html">Grids</a>
                        </li>
                            <?php ;} ?>

                        <?php if ($_SESSION['role']=="Admin"){?>
                        <li>
                            <a href="fontawesome.html">Fontawesome Icon</a>
                        </li>
                            <?php ;} ?>

                        <?php if ($_SESSION['role']=="Admin"){?>
                        <li>
                            <a href="typo.html">Typography</a>
                        </li>
                            <?php ;} ?>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-calendar-alt"></i>Calendar</a>
                </li>

            </ul>
        </nav>
    </div>
</aside>