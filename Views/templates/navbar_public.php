<nav class="navbar navbar-expand-lg fixed-top py-3 navbar-dark transition-all" :style="navStyle">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center m-0" href="beranda.php" style="width: 75%; overflow: hidden;">
            <img src="../assets/images/logo-nmg.png" alt="Logo Naureen" height="35" class="me-2 flex-shrink-0">
            <span class="fw-bold text-white text-truncate">Naureen Mini Garden</span>
        </a>
        
        <button class="navbar-toggler border-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav text-center mt-3 mt-lg-0 pb-2 pb-lg-0">
                <li class="nav-item">
                    <a class="nav-link px-3 <?= basename($_SERVER['PHP_SELF']) == 'beranda.php' ? 'active' : ''; ?>" href="beranda.php">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 <?= basename($_SERVER['PHP_SELF']) == 'tentang.php' ? 'active' : ''; ?>" href="tentang.php">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 <?= basename($_SERVER['PHP_SELF']) == 'detail.php' ? 'active' : ''; ?>" href="detail.php">Detail</a>
                </li>
            </ul>
        </div>
    </div>
</nav>