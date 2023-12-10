<template>

  <div class="login-page">
    

    <div class="login-container">
      <div class="left-side">
        <h1>Log In</h1>
        
        <p class="login-heading">Welcome Back to SkillUp</p>
        <p class="login-description">
          Log in to access your account and continue your learning journey!
        </p>
     
      </div>

      <div class="right-side">
        <p class="login-heading">Log In</p>
       
        <div class="login-form">
   <div class="form-group">
     <input v-model="formData.email" type="email" id="email" name="email" placeholder="Email" required />
   </div>
   <div class="form-group">
     <input v-model="formData.password" type="password" id="password" name="password" placeholder="Password" required />
   </div>
   <div class="form-group">
     <button @click="submitForm">Log In</button>
   </div>
 </div>

        <p class="signup-link">
          Don't have an account? <a href="/register">Sign Up</a>
        </p>
      </div>
    </div>
  </div>
</template>
<script>
export default {
 data() {
   return {
     formData: {
       email: "",
       password: "",
     },
   };
 },
 methods: {
  async submitForm() {
 try {
 const response = await fetch("http://localhost:8000/login.php", {
   method: "POST", 
   headers: {
     'Content-Type': 'application/json'
   },
   body: JSON.stringify({
     email: this.formData.email,
     password: this.formData.password
   })
 });
 if (!response.ok) {
   throw new Error(`HTTP error! status: ${response.status}`);
 }
 const data = await response.json();
 console.log(data);
 if (data.success) {
   window.location.href = 'http://localhost:3000/home';
 } else {
   console.error("Login failed", data.message);
 }
 } catch (error) {
 console.error("An error occurred:", error);
 }
}
  

 }
}
</script>
<style scoped>
.login-page {
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

.login-container {
  display: flex;
  border: 2px solid #ccc;
  border-radius: 8px;
  margin-bottom: 60px;
  width: 80%;
  max-width: 800px;
  height:600px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.left-side {
  background-color: #4caf50;
  color: #fff;
  padding: 20px;
  border-radius: 8px 0 0 8px;
  box-sizing: border-box;
  
}

.login-heading {
  font-size: 20px;
  margin-bottom: 20px;
}

.login-description {
  font-size: 14px;
  line-height: 1.5;

}


.right-side {
  width: 50%;
  padding: 20px;
  box-sizing: border-box;
 margin-top: 10vh;
}

.login-form {
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

button:hover {
  background-color: #45a049;
}

.signup-link {
  font-size: 14px;
  margin-top: 10px;
}

.signup-link a {
  color: #4caf50;
  text-decoration: none;
  font-weight: bold;
}

.signup-link a:hover {
  text-decoration: underline;
}
</style>
