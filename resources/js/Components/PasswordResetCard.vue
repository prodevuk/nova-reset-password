<template>
    <card class="password-reset-card">
      <h1>Change Password</h1>
      <form @submit.prevent="submit">
        <text-input
          label="Current Password"
          type="password"
          v-model="form.current_password"
        />
        <text-input
          label="New Password"
          type="password"
          v-model="form.new_password"
        />
        <text-input
          label="Confirm New Password"
          type="password"
          v-model="form.new_password_confirmation"
        />
        <button type="submit" class="btn btn-primary">Update Password</button>
      </form>
      <p v-if="message">{{ message }}</p>
    </card>
  </template>
  
  <script>
  export default {
    data() {
      return {
        form: {
          current_password: '',
          new_password: '',
          new_password_confirmation: '',
        },
        message: '',
      };
    },
    methods: {
      async submit() {
        try {
          const response = await Nova.request().post('/nova-vendor/password-reset/update', this.form);
          this.message = response.data.message;
        } catch (error) {
          this.message = error.response.data.message || 'An error occurred.';
        }
      },
    },
  };
  </script>