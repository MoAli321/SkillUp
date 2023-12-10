<template>
      <Lnavbar></Lnavbar>
    <div class="course-catalog">

  
      <div class="catalog-container">
        <div class="category">
          <h2>Programming Courses</h2>
          <ul>
            <li><NuxtLink to="/programming/introduction">Introduction to Programming</NuxtLink></li>
            <li><NuxtLink to="/programming/web-development">Web Development Fundamentals</NuxtLink></li>
            <li><NuxtLink to="/programming/python">Python for Beginners</NuxtLink></li>
            <!-- Add more programming courses as needed -->
          </ul>
        </div>
  
        <div class="category">
          <h2>Math Courses</h2>
          <ul>
            <li><NuxtLink to="/math/algebra">Algebra Basics</NuxtLink></li>
            <li><NuxtLink to="/math/geometry">Geometry Fundamentals</NuxtLink></li>
            <li><NuxtLink to="/math/calculus">Calculus for Beginners</NuxtLink></li>
            <!-- Add more math courses as needed -->
          </ul>
        </div>
  
        <div class="category">
          <h2>Science Courses</h2>
          <ul>
            <li><NuxtLink to="/science/physics">Physics Explained</NuxtLink></li>
            <li><NuxtLink to="/science/chemistry">Chemistry Basics</NuxtLink></li>
            <li><NuxtLink to="/science/biology">Introduction to Biology</NuxtLink></li>
            <!-- Add more science courses as needed -->
          </ul>
        </div>
  
        <div class="category">
          <h2>Language Courses</h2>
          <ul>
            <li><NuxtLink to="/language/english">English Grammar</NuxtLink></li>
            <li><NuxtLink to="/language/spanish">Learn Spanish</NuxtLink></li>
            <li><NuxtLink to="/language/french">French for Beginners</NuxtLink></li>
            <!-- Add more language courses as needed -->
          </ul>
        </div>
  
        <!-- Add more categories as needed -->
  
      </div>
    </div>
  </template>
  
  <style scoped>
  .course-catalog {
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
  
  .catalog-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    max-width: 800px;
    margin-top: -280px;
    margin-right: 750px;
  }
  
  .category {
    background-color: #fff;
    border: 2px solid #ccc;
    border-radius: 8px;
    padding: 10px 60px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-right: 100px;
  }
  
  h2 {
    font-size: 24px;
    margin-bottom: 15px;
  }
  
  ul {
    list-style-type: none;
    padding: 0;
  }
  
  li {
    font-size: 16px;
    margin-bottom: 10px;
  }
  </style>
  