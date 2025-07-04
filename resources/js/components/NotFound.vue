<template>
    <main class="main-content">
        <div class="error-container">
            <div class="error-code">404</div>
            <h1 class="error-title">Trang không tồn tại</h1>
            <p class="error-message">
                Xin lỗi, trang bạn đang tìm kiếm không thể tìm thấy. Có thể
                đường dẫn đã bị thay đổi hoặc trang đã bị xóa.
            </p>

            <div class="action-buttons">
                <a href="/home" class="btn btn-primary">
                    <span
                        ><img
                            src="/public/images/icons/home.png"
                            width="25"
                            height="25"
                            alt=""
                    /></span>
                    Về trang chủ
                </a>
                <a href="javascript:history.back()" class="btn btn-secondary">
                    <span>←</span> Quay lại
                </a>
            </div>

            <div class="suggestions">
                <div class="suggestions-title">Các trang phổ biến:</div>
                <div class="suggestion-links">
                    <a href="/feed" class="suggestion-link">Bảng tin</a>
                    <a href="/friends" class="suggestion-link">Bạn bè</a>
                    <a href="/messages" class="suggestion-link">Tin nhắn</a>
                    <a href="/profile" class="suggestion-link">Trang cá nhân</a>
                    <a href="/photos" class="suggestion-link">Ảnh</a>
                    <a href="/events" class="suggestion-link">Sự kiện</a>
                    <a href="/groups" class="suggestion-link">Nhóm</a>
                    <a href="/settings" class="suggestion-link">Cài đặt</a>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
export default {
    name: "NotFound",
    methods: {
        goBack() {
            this.$router.go(-1);
        },
    },
};
</script>

<style scoped>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
        sans-serif;
    background: #1a1a2e;
    min-height: 100vh;
    color: white;
}

.main-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    min-height: calc(100vh - 80px);
    padding: 40px 20px;
    text-align: center;
}

.error-container {
    max-width: 500px;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 15px;
    padding: 50px 40px;
    backdrop-filter: blur(10px);
}

.error-code {
    font-size: 5rem;
    font-weight: 800;
    color: #4267b2;
    margin-bottom: 20px;
    text-shadow: 0 0 30px rgba(66, 103, 178, 0.3);
}

.error-title {
    font-size: 1.8rem;
    font-weight: 600;
    color: white;
    margin-bottom: 15px;
}

.error-message {
    font-size: 1rem;
    color: rgba(255, 255, 255, 0.7);
    line-height: 1.6;
    margin-bottom: 35px;
}

.action-buttons {
    display: flex;
    gap: 15px;
    justify-content: center;
    flex-wrap: wrap;
    margin-bottom: 30px;
}

.btn {
    padding: 12px 24px;
    border: none;
    border-radius: 8px;
    font-size: 0.9rem;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s ease;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.btn-primary {
    background: #4267b2;
    color: white;
}

.btn-primary:hover {
    background: #365899;
    transform: translateY(-1px);
}

.btn-secondary {
    background: transparent;
    border: 1px solid rgba(255, 255, 255, 0.3);
    color: rgba(255, 255, 255, 0.8);
}

.btn-secondary:hover {
    background: rgba(255, 255, 255, 0.1);
    color: white;
}

.suggestions {
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    padding-top: 25px;
}

.suggestions-title {
    font-size: 0.9rem;
    color: rgba(255, 255, 255, 0.8);
    margin-bottom: 15px;
}

.suggestion-links {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    justify-content: center;
}

.suggestion-link {
    color: #4267b2;
    text-decoration: none;
    font-size: 0.85rem;
    padding: 6px 12px;
    border-radius: 15px;
    background: rgba(66, 103, 178, 0.1);
    transition: all 0.3s ease;
}

.suggestion-link:hover {
    background: rgba(66, 103, 178, 0.2);
    color: #6fa8dc;
}

@media (max-width: 768px) {
    .error-container {
        padding: 40px 25px;
        margin: 20px;
    }

    .error-code {
        font-size: 4rem;
    }

    .error-title {
        font-size: 1.5rem;
    }

    .action-buttons {
        flex-direction: column;
        align-items: center;
    }

    .btn {
        width: 200px;
        justify-content: center;
    }

    .suggestion-links {
        flex-direction: column;
        align-items: center;
    }
}
</style>
