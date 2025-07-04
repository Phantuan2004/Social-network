<template>
    <div class="loading-overlay">
        <div class="loading-container">
            <div class="logo-icon"></div>
            <div class="logo-text">Socialite</div>
            <div class="loading-spinner"></div>
            <div class="loading-text">Đang tải...</div>
        </div>
    </div>
</template>

<style scoped>
.loading-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    background: #1a1a2e;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 9999;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
        sans-serif;
}

.loading-container {
    text-align: center;
    color: white;
}

.logo-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(45deg, #4267b2, #6fa8dc);
    border-radius: 15px;
    margin: 0 auto 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    animation: pulse 2s ease-in-out infinite;
}

.logo-icon::before {
    content: "";
    width: 25px;
    height: 25px;
    background: white;
    border-radius: 50%;
    position: absolute;
}

.logo-icon::after {
    content: "";
    width: 10px;
    height: 10px;
    background: #4267b2;
    border-radius: 50%;
    position: absolute;
}

.logo-text {
    font-size: 1.8rem;
    font-weight: 700;
    color: rgb(223, 223, 223);
    margin-bottom: 30px;
    letter-spacing: -0.5px;
}

.loading-spinner {
    width: 32px;
    height: 32px;
    border: 3px solid rgba(66, 103, 178, 0.2);
    border-top: 3px solid #4267b2;
    border-radius: 50%;
    animation: spin 1s linear infinite;
    margin: 0 auto 20px;
}

.loading-text {
    font-size: 0.9rem;
    color: #bbb;
    font-weight: 400;
}

@keyframes pulse {
    0%,
    100% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.05);
    }
}

@keyframes spin {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

/* Fade out animation */
.loading-container.fade-out {
    opacity: 0;
    transition: opacity 0.5s ease;
}

@media (max-width: 768px) {
    .logo-text {
        font-size: 1.5rem;
    }
}
</style>
