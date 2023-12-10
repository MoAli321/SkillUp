<template>
  <div class="signup-page">
    <router-link to="/" class="back-home">
      <span class="back-icon">✕ </span>
    </router-link>
    <div class="signup-container">
      <p class="join">Sign Up</p>

      <!-- <div class="signup-options">
        <div class="signup-option" @click="selectRole('Teacher')" :class="{ selected: selectedRole === 'Teacher' }">
          Teacher
        </div>
        <div class="signup-option" @click="selectRole('Student')" :class="{ selected: selectedRole === 'Student' }">
          Student
        </div>
      </div> -->

      <form @submit.prevent="submitForm">
        <div class="signup-form">
          <div class="form-group">
            <input v-model="formData.firstName" type="text" id="firstname" name="firstname" placeholder="First Name"
              required />
          </div>
          <div class="form-group">
            <input v-model="formData.lastName" type="text" id="lastname" name="lastname" placeholder="Last Name"
              required />
          </div>
          <div class="form-group">
            <input v-model="formData.email" type="email" id="email" name="email" placeholder="Email" required />
          </div>
          <div class="form-group">
            <input v-model="formData.password" type="password" id="password" name="password" placeholder="Password"
              required />
          </div>
          <div class="form-group">
            <button type="submit">Sign Up</button>
          </div>

          <div>
            <a href="/login" class="login">Already have an account?</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import { compileScript } from 'vue/compiler-sfc';

export default {
  data() {
    return {
      formData: {
        firstName: "",
        lastName: "",
        email: "",
        password: "",
      },

      //  selectedRole: null,
    };
  },
  methods: {
    async submitForm() {
 try {
  const response = await fetch("http://localhost:8000/register.php", {
    method: "POST", 
    headers: {
     'Content-Type': 'application/json'
    },
    body: JSON.stringify({
     firstname: this.formData.firstName,
     lastname: this.formData.lastName,
     email: this.formData.email,
     password: this.formData.password
    })
  });
  if (response.ok) {
    const data = await response.json();
    if (data.success) {
      window.location.href = 'http://localhost:3000/home';
    } else {
      console.error("Registration failed", data.message);
    }
  } else {
    console.error("Registration failed", response.status, response.statusText);
  }
 } catch (error) {
  console.error("An error occurred:", error);
 }
}



    // selectRole(role) {
    //   this.selectedRole = role;
    // },
  },
};
</script>
<style scoped>
.back-home {
  position: absolute;
  top: 20px;
  right: 300px;
  color: #4caf50;
  text-decoration: none;
}

.back-icon {
  font-size: 2em;
}

.login {
  color: #4caf50;
  text-decoration: none;
  font-size: 12px;
  margin-left: 130px;
}

.login:hover {
  text-decoration: underline;
}

.signup-page {
  font-family: Arial, sans-serif;
  background-image: url("background.jpg");
  background-repeat: no-repeat;
  background-size: 1800% 1800%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100vh;
}

.signup-container {
  display: flex;
  flex-direction: column;

  background-color: #fff;
  border: 2px solid #ccc;
  border-radius: 8px;
  padding: 20px;
  margin-top: -30px;
  margin-left: 30px;
  width: 80%;
  max-width: 400px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.join {
  font-size: 30px;
  margin-bottom: 40px;
  margin-left: 140px;
  font-weight: bold;
}

.signup-options {
  display: flex;
  justify-content: space-around;
  margin-bottom: 10px;
  width: 100%;
}

.signup-option {
  padding: 15px;
  border: 2px solid #ccc;
  border-radius: 8px;
}

.signup-form {
  width: 100%;
}

.form-group {
  margin-bottom: 15px;
}

label {
  font-weight: bold;
  margin-bottom: 5px;
  display: block;
}

input {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  width: 100%;
  box-sizing: border-box;
  margin-bottom: 10px;
}

button {
  background-color: #4caf50;
  color: #fff;
  padding: 10px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width: 100%;
  box-sizing: border-box;
  transition: background-color 0.3s;
}

.signup-option:hover,
.selected {
  background-color: #4caf50;
  color: #fff;
  cursor: pointer;
}

button:hover {
  background-color: #45a049;
}
</style>
