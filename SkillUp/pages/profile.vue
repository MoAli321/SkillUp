<template>
    <div class="back">
      <div class="user-profile">
        <div class="profile-header">
          <div class="avatar-container">
            <img :src="user.avatar" alt="User Avatar" class="avatar" />
            <h1>{{ user.name }}</h1>
            <p class="email">{{ user.email }}</p>
          </div>
        </div>
  
        <router-link to="/" class="back-home">
          <span class="back-icon">✕ </span>
        </router-link>
  
        <div class="profile-section">
          <h2>Courses</h2>
          <div class="info-box">
            <!-- Add courses content here -->
            <p>Course 1</p>
            <p>Course 2</p>
            <!-- Add more courses as needed -->
          </div>
        </div>
  
        <div class="profile-section">
          <h2>Certificates</h2>
          <div class="info-box">
            <!-- Add certificates content here -->
            <p>Certificate 1</p>
            <p>Certificate 2</p>
            <!-- Add more certificates as needed -->
          </div>
        </div>
  
        <div class="profile-section">
          <h2>Badges</h2>
          <div class="info-box">
            <!-- Add badges content here -->
            <p>Badge 1</p>
            <p>Badge 2</p>
            <!-- Add more badges as needed -->
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        user: {
          name: 'John Doe',
          email: 'john@example.com',
          avatar: 'https://placekitten.com/200/200', // Replace with actual avatar URL
          // Add other user details here
        },
      };
    },
  };
  </script>
  
  <style scoped>
  .back {
    background-color: #45a049;
    min-height: 100vh;
  }
  
  .user-profile {
    max-width: 800px;
    margin: auto;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  }
  
  .profile-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  
  .avatar-container {
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  
  .avatar {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    margin-bottom: 10px;
  }
  
  .email {
    color: #ccc;
  }
  
  .back-home {
    position: absolute;
    top: 20px;
    right: 300px;
    color: #fff;
    text-decoration: none;
  }
  
  .back-home:hover {
    text-decoration: underline;
  }
  
  .back-icon {
    font-size: 2em;
  }
  
  .profile-section {
    margin-top: 20px;
  }
  
  .info-box {
    border: 1px solid #ddd;
    padding: 10px;
  }
  
  .info-box p {
    margin: 0;
    padding: 5px 0;
    font-weight: bold;
  }
  
  /* Add more styles as needed */
  </style>
  