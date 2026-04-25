<div class="adm-sidebar-overlay" :class="{ active: isSidebarOpen }" @click="isSidebarOpen = false"></div>

<aside class="adm-sidebar-wrapper" :class="{ active: isSidebarOpen }">
    <div class="adm-sidebar-header">
        <img src="../../assets/images/logo-nmg.png" alt="Logo" class="adm-sidebar-logo">
        <div class="adm-sidebar-brand-text">
            <h3 class="fw-bold mb-0">Naureen
                <br>Mini Garden</h3>
        </div>
    </div>

    <nav class="adm-sidebar-nav">
        <a href="dashboard.php" 
            class="adm-nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : ''; ?>">
            <i class="bi bi-grid"></i> 
            <span>Dashboard</span>
        </a>
        
        <a href="kelola_berita.php" 
            class="adm-nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'kelola_berita.php' ? 'active' : ''; ?>">
            <i class="bi bi-ticket-perforated"></i> 
            <span>Kelola Berita</span>
        </a>
        
        <a href="kelola_review.php" 
            class="adm-nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'kelola_review.php' ? 'active' : ''; ?>">
            <i class="bi bi-chat-left-text"></i> 
            <span>Kelola Review</span>
        </a>
    </nav>

    <div class="adm-sidebar-footer">
        <a href="../../app/controllers/AuthController.php?action=logout" class="adm-nav-link text-danger">
            <i class="bi bi-box-arrow-left"></i> 
            <span>Logout</span>
        </a>
    </div>
</aside>