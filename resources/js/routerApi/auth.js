import axios from "axios";

const API_URL = "http://127.0.0.1:8000/api/auth";

// Khởi tạo token key và expires_at key
const TOKEN_KEY = "auth_token";
const EXPIRES_KEY = "token_expires_at";

// Tạo instance axios với cấu hình mặc định
const axiosInstance = axios.create({
    baseURL: API_URL,
});

// Interceptor để thêm token vào header
axiosInstance.interceptors.request.use(
    (config) => {
        const token = localStorage.getItem(TOKEN_KEY);
        if (token) {
            config.headers.Authorization = `Bearer ${token}`;
        }
        return config;
    },
    (error) => {
        return Promise.reject(error);
    }
);

export default {
    async login(email, password, remember = false) {
        try {
            const response = await axios.post(`${API_URL}/login`, {
                email,
                password,
                remember,
            });

            // Lưu token và expires_at vào localStorage với key nhất quán
            if (response.data.status === "success") {
                localStorage.setItem(TOKEN_KEY, response.data.token);
                localStorage.setItem(EXPIRES_KEY, response.data.expires_at);
            }
            return response.data;
        } catch (error) {
            throw error;
        }
    },

    async register(firstname, lastname, email, password) {
        try {
            const response = await axios.post(`${API_URL}/register`, {
                firstname,
                lastname,
                email,
                password,
            });
            return response.data;
        } catch (error) {
            throw error;
        }
    },

    async logout(token) {
        try {
            const response = await axios.post(
                `${API_URL}/logout`,
                {},
                {
                    headers: {
                        Authorization: `Bearer ${token}`,
                    },
                }
            );
            // Xóa token và expires_at khỏi localStorage với key nhất quán
            localStorage.removeItem(TOKEN_KEY);
            localStorage.removeItem(EXPIRES_KEY);
            return response.data;
        } catch (error) {
            throw error;
        }
    },

    // Phương thức kiểm tra token hợp lệ
    async checkToken() {
        try {
            const response = await axiosInstance.get("/check-token");
            return response.data;
        } catch (error) {
            localStorage.removeItem(TOKEN_KEY);
            localStorage.removeItem(EXPIRES_KEY);
            throw error;
        }
    },

    // Helper method để kiểm tra xem user đã authenticated hay chưa
    isAuthenticated() {
        const token = localStorage.getItem(TOKEN_KEY);
        const expiresAt = localStorage.getItem(EXPIRES_KEY);

        if (!token || !expiresAt) {
            return false;
        }

        // Kiểm tra xem token có còn hiệu lực không
        const now = new Date();
        return now < new Date(expiresAt);
    },

    // Helper method để lấy token
    getToken() {
        return localStorage.getItem(TOKEN_KEY);
    },

    // Helper method để clear token
    clearToken() {
        localStorage.removeItem(TOKEN_KEY);
        localStorage.removeItem(EXPIRES_KEY);
    },
};
