<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Naureen Mini Garden</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/login.css">
</head>
<body>

<div id="app" class="auth-page-wrapper">
    <div class="auth-card text-center shadow-lg" data-aos="zoom-in-up" data-aos-duration="1000">
        <img src="../assets/images/logo-nmg.png" alt="Logo" class="auth-logo">
        <h4 class="auth-title">Naureen Mini Garden</h4>
        <p class="auth-subtitle">Admin Control Center</p>

        <div class="text-start mt-4">
            <h5 class="auth-welcome-text">Selamat Datang, Admin</h5>
            <p class="auth-instruction">Silakan login untuk mengakses dashboard pengelolaan.</p>
            
            <form @submit.prevent="handleLogin">
                <div class="mb-3">
                    <label class="auth-label">USERNAME</label>
                    <div class="auth-input-container">
                        <i class="bi bi-person auth-icon"></i>
                        <input type="text" v-model="username" class="auth-input-field" placeholder="Masukkan username" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="auth-label">PASSWORD</label>
                    <div class="auth-input-container">
                        <i class="bi bi-lock auth-icon"></i>
                        <input :type="showPassword ? 'text' : 'password'" v-model="password" class="auth-input-field" placeholder="••••••••" required>
                        <i :class="showPassword ? 'bi bi-eye-slash' : 'bi bi-eye'" class="auth-password-toggle" @click="showPassword = !showPassword"></i>
                    </div>
                </div>
                
                <button type="submit" class="auth-btn-submit w-100" :disabled="loading">
                    <span v-if="loading" class="spinner-border spinner-border-sm me-2"></span>
                    <span v-else>Login<i class="bi bi-box-arrow-in-right ms-1"></i></span>
                </button>
            </form>

            <div class="text-center mt-4">
                <a href="beranda.php" class="auth-back-link"><i class="bi bi-arrow-left"></i> Kembali ke Beranda</a>
            </div>
        </div>
    </div>

    <div class="modal fade" id="successModal" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="auth-modal-content text-center" data-aos="zoom-in" data-aos-duration="500">
                <div class="auth-icon-circle">
                    <i class="bi bi-check-lg"></i>
                </div>
                <h3 class="fw-bold mt-3">Login Berhasil</h3>
                <p class="text-muted small">Selamat datang kembali, Admin. Mengalihkan ke dashboard...</p>
                <div class="auth-loading-dots">
                    <span>.</span><span>.</span><span>.</span>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="errorModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="auth-modal-content text-center" data-aos="zoom-in" data-aos-duration="500">
                <div class="auth-icon-circle" style="background-color: #ffebeb; color: #dc3545;">
                    <i class="bi bi-x-lg"></i>
                </div>
                <h3 class="fw-bold mt-3" style="color: #dc3545;">Login Gagal</h3>
                <p class="text-muted small mb-4">Harap periksa Username dan Password Anda.</p>
                <button type="button" class="btn btn-danger w-75 rounded-pill" data-bs-dismiss="modal">Coba Lagi</button>
            </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    const { createApp } = Vue;
    createApp({
        data() {
            return {
                username: '',
                password: '',
                showPassword: false,
                loading: false
            }
        },
        mounted() {
            AOS.init({ 
                duration: 800, 
                once: true 
            });
        },
        methods: {
            async handleLogin() {
                this.loading = true;
                const formData = new FormData();
                formData.append('login', true);
                formData.append('username', this.username);
                formData.append('password', this.password);

                try {
                    const response = await fetch('../app/controllers/AuthController.php', {
                        method: 'POST',
                        body: formData
                    });
                    
                    const result = await response.text();

                    if (result.trim() === 'success') {
                        const myModal = new bootstrap.Modal(document.getElementById('successModal'));
                        myModal.show();
                        setTimeout(() => { window.location.href = 'admin/dashboard.php'; }, 2000);
                    } else {
                        const errorModal = new bootstrap.Modal(document.getElementById('errorModal'));
                        errorModal.show();
                        
                        this.password = '';
                    }
                } catch (error) {
                    alert("Kesalahan koneksi ke server.");
                } finally {
                    this.loading = false;
                }
            }
        }
    }).mount('#app');
</script>
</body>
</html>