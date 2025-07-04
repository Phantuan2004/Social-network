import axios from "axios";

const API_URL = "http://127.0.0.1:8000/api/auth";

export default {
    async login(email, password, remember = false) {
        try {
            const response = await axios.post(`${API_URL}/login`, {
                email,
                password,
                remember,
            });
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
            return response.data;
        } catch (error) {
            throw error;
        }
    },

    async checkToken(token) {
        try {
            const response = await axios.get("/api/check-token", {
                headers: {
                    Authorization: `Bearer ${token}`,
                },
            });
            return response.data;
        } catch (error) {
            throw error;
        }
    },
};
