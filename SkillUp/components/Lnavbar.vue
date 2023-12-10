<template>
  <div class="all">

      <header>
        <img src="Logo.png" alt="logo" class="logo" />
  
        <nav>
          <ul class="links">
            <li><NuxtLink to="/home" class="nav-link">Home</NuxtLink></li>
            <li><NuxtLink to="/CourseCatalog" class="nav-link">Courses</NuxtLink></li>
            <li><NuxtLink to="/educators" class="nav-link">Educators</NuxtLink></li>
            <li><NuxtLink to="/contact" class="nav-link">Contact</NuxtLink></li>
           
          </ul>
        </nav>
        <div class="auth">
            <NuxtLink to="/profile" class="nav-link">Profile</NuxtLink>
            <NuxtLink to="/" class="signout">Sign out</NuxtLink>
         
        </div>
      </header>
    </div>
  </template>
  
  <style scoped>
  * {
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style-type: none;
  }
  
  @media screen and (max-width: 768px) {
  .all {
    padding: 5px; /* Adjust the padding for smaller screens */
  }
}
  .logo {
    width: 120px;
    display: flex;
  }
  
  .nav-link {
    font-weight: 500;
    text-decoration: none;
    color: #333;
    font-size: 18px;
    margin: 0 20px;
    transition: color 0.25s;
  }
  
  .auth {
    margin-right: 20px;
  }
  
  .signout {
    background-color: #309255;
    padding: 10px 20px;
    border-radius: 8px;
    color: white;
    transition: background-color 0.25s;
    font-size: 18px;
  }
  
  .links {
    display: flex;
  }
  
  header {
    display: flex;
    height: 80px;
    justify-content: space-between;
    align-items: center;
    padding: 10px 5%;
    background-color: #e7f8ee;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }
  
  .signout:hover {
    background-color: #3ead68;
  }
  
  .nav-link:hover {
    color: #309255;
  }
  
  .active {
    color: #309255;
    font-weight: bold;
  }
  </style>
  