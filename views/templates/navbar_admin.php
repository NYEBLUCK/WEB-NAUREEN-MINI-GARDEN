<header class="adm-nav-header d-flex justify-content-between align-items-center mb-4">
    <div class="d-flex align-items-center">
        <button class="adm-nav-toggle me-3" @click="isSidebarOpen = !isSidebarOpen">
            <i class="bi bi-list"></i>
        </button>
        
        <div class="d-none d-md-block border-start ps-3">
            <h5 class="adm-nav-brand-name mb-0">Naureen Mini Garden</h5>
            <span class="adm-nav-brand-portal">Admin Portal</span>
        </div>
    </div>

    <div class="header-profile d-flex align-items-center gap-3">
        <div class="text-end d-none d-sm-block">
            <p class="adm-nav-user-name fw-bold mb-0 text-capitalize"><?php echo htmlspecialchars($username_login); ?></p>
            <small class="adm-nav-user-role">GARDEN MANAGEMENT</small>
        </div>
        
        <div class="adm-nav-avatar-wrapper">
            <img src="../../assets/images/logo-nmg.png" class="adm-nav-avatar shadow-sm" alt="Admin Avatar">
        </div>
    </div>
</header>