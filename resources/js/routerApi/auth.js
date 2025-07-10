import axios from "axios";

const API_URL = "http://127.0.0.1:8000/api/auth";

// Khởi tạo token key và expires_at key
const TOKEN_KEY = "auth_token";
const EXPIRES_KEY = "token_expires_at";
const REMEMBER_KEY = "remember_me";

// Tạo instance axios với cấu hình mặc định
const axiosInstance = axios.create({
    baseURL: API_URL,
});

const getTokenFromStorage = () => {
    return localStorage.getItem(TOKEN_KEY) || sessionStorage.getItem(TOKEN_KEY);
};

const getExpiresAtFromStorage = () => {
    return (
        localStorage.getItem(EXPIRES_KEY) || sessionStorage.getItem(EXPIRES_KEY)
    );
};

// Interceptor để thêm token vào header
axiosInstance.interceptors.request.use(
    (config) => {
        const token = getTokenFromStorage();
        if (token) {
            config.headers.Authorization = `Bearer ${token}`;
        }
        return config;
    },
    (error) => {
        return Promise.reject(error);
    }
);

// Interceptor để xử lý lỗi 401 (unauthorized)
axiosInstance.interceptors.response.use(
    (response) => response,
    (error) => {
        if (error.response?.status === 401) {
            clearAllTokens();
        }
        return Promise.reject(error);
    }
);

const clearAllTokens = () => {
    localStorage.removeItem(TOKEN_KEY);
    localStorage.removeItem(EXPIRES_KEY);
    localStorage.removeItem(REMEMBER_KEY);
    sessionStorage.removeItem(TOKEN_KEY);
    sessionStorage.removeItem(EXPIRES_KEY);
    sessionStorage.removeItem(REMEMBER_KEY);
};

export default {
    async login(email, password, rememberMe = false) {
        try {
            const response = await axios.post(`${API_URL}/login`, {
                email,
                password,
                remember_me: rememberMe,
            });

            // Lưu token và expires_at vào localStorage với key nhất quán
            if (response.data.status === "success") {
                const { token, expires_at } = response.data;

                if (rememberMe) {
                    localStorage.setItem(TOKEN_KEY, token);
                    localStorage.setItem(EXPIRES_KEY, expires_at);
                    localStorage.setItem(REMEMBER_KEY, "true");
                } else {
                    sessionStorage.setItem(TOKEN_KEY, token);
                    sessionStorage.setItem(EXPIRES_KEY, expires_at);
                    sessionStorage.setItem(REMEMBER_KEY, "false");
                }
            }
            return response.data;
        } catch (error) {
            throw error;
        }
    },

    async logout() {
        try {
            const token = localStorage.getItem(TOKEN_KEY);
            if (!token) {
                throw new Error("No token found in localStorage");
            }

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
            clearAllTokens();
            return response.data;
        } catch (error) {
            clearAllTokens();
            throw error;
        }
    },

    // Phương thức kiểm tra token hợp lệ
    async checkToken() {
        try {
            const response = await axiosInstance.get("/check-token");
            return response.data;
        } catch (error) {
            clearAllTokens();
            throw error;
        }
    },

    // Helper method để kiểm tra xem user đã authenticated hay chưa
    isAuthenticated() {
        const token = getTokenFromStorage();
        const expiresAt = getExpiresAtFromStorage();

        if (!token || !expiresAt) {
            return false;
        }

        // Kiểm tra xem token có còn hiệu lực không
        const now = new Date();
        const isValid = now < new Date(expiresAt);

        if (!isValid) {
            clearAllTokens();
        }
        return isValid;
    },

    // Helper method để lấy token
    getToken() {
        return getTokenFromStorage();
    },

    async getCurrentUser() {
        try {
            const response = await axiosInstance.get("/user");
            return response.data;
        } catch (error) {
            clearAllTokens();
            throw error;
        }
    },

    clearToken() {
        clearAllTokens();
    },

    isRememberMe() {
        return localStorage.getItem(REMEMBER_KEY) === "true";
    },

    async forgotPassword(email) {
        try {
            const response = await axios.post(`${API_URL}/forgot-password`, {
                email,
            });
            return response.data;
        } catch (error) {
            throw error;
        }
    },

    async resetPassword(email, code, password) {
        try {
            const response = await axios.post(`${API_URL}/reset-password`, {
                email,
                code,
                password,
            });
            return response.data;
        } catch (error) {
            throw error;
        }
    },

    async register(firstname, lastname, email, password, confirm_password) {
        try {
            const response = await axios.post(`${API_URL}/register`, {
                firstname,
                lastname,
                email,
                password,
                confirm_password,
            });
            return response.data;
        } catch (error) {
            throw error;
        }
    },
};
