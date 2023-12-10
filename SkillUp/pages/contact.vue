<template>
    <div class="contact-page">
      <Lnavbar></Lnavbar>
  
      <div class="contact-container">
        <h1>Contact Us</h1>
  
        <form @submit.prevent="submitForm">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" v-model="formData.name" required>
          </div>
  
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" v-model="formData.email" required>
          </div>
  
          <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" v-model="formData.message" rows="4" required></textarea>
          </div>
  
          <div class="form-group">
            <button type="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        formData: {
          name: '',
          email: '',
          message: '',
        },
      };
    },
    methods: {
      submitForm() {
        // You can add logic here to handle the form submission
        console.log('Form submitted:', this.formData);
        // For a real application, you would likely send the form data to a server.
        // You can use an HTTP library like Axios for that purpose.
      },
    },
  };
  </script>
  
  <style scoped>
  /* Your existing styles for contact-page, contact-container, etc. */
  .contact-container {
    border: 1px solid grey;
    padding: 20px;
    max-width: 400px;
    margin: 0 auto; /* Center the form in the container */
    margin-top: 50px;
  }
  
  h1 {
    font-size: 32px;
    color: #333;
    margin-top: 50px;
    margin-bottom: 20px;
  }
  
  form {
    width: 100%;
  }
  
  .form-group {
    margin-bottom: 20px;
  }
  
  label {
    font-weight: bold;
    display: block;
    margin-bottom: 8px;
  }
  
  input,
  textarea {
    width: 90%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  
  button {
    background-color: #4CAF50;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
  }
  
  button:hover {
    background-color: #45a049;
  }
  
  /* Add more styles as needed */
  </style>
  