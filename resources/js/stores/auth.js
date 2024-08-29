import { defineStore } from 'pinia';
import axios from 'axios';

// User Authentication Pinia Store
export const useAuthStore = defineStore('auth', {
  state: () => ({
    user: null,  // authenticated user state
  }),
  getters: {
    isAuthenticated: (state) => !!state.user,  // check if user is authenticated
  },
  actions: {
    async checkAuth() {
      try {
        // Make a request to the server to get the authenticated user
        const response = await axios.get('/user');
        this.user = response.data.user;
        if (!this.user) {
          // If the user is not authenticated, reset the user state
          this.user = null;
        }
      } catch (error) {
        // Handle any errors in the request
        this.user = null;  // Ensure the user state is reset in case of error
      }
    }
  }
});
