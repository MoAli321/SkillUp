<template>
    <Lnavbar></Lnavbar>
  <search></search>
    <div class="everything">
      <div class="content">
        <img src="student.jpg" alt="logo" class="image" />
  
        <div class="intro">
          <p class="introd">Welcome To SkillUp.</p>
          <h2>
            You can join with SkillUp <br />
            and upgrade your skill for<br />
            your <u>brighter future!</u>
          </h2>
          <p class="description">
            SkillUp is a platform where teachers and tutors can post assignments
            and instructions, <br />
            and students can actively engage with and complete these assignments
            to enhance their <br />learning experience. <br />
            <br />
          </p>
      
          <a href="/CourseCatalog" class="reg">Start A Course</a>
        </div>
      </div>
    </div>
    <hr />
  </template>
  
  <style>
  
  
  .everything {
    margin-left: 10%;
    margin-top: 6%;
  }
  .content {
    display: flex;
    margin: 100px 200px;
  }
  
  .intro {
    margin-left: 80px; /* Adjust the margin as needed */
  }
  
  .introd {
    color: #309255;
    font-weight: bold;
  }
  
  u {
    color: #309255;
    font-weight: bold;
  }
  
  img {
    width: 500px;
    border-radius: 10px;
  }
  .description {
    color: #888;
    font-size: 14px;
    margin-top: 10px;
  }
  .reg {
    background-color: #309255;
    padding: 10px;
    border-radius: 8px;
    color: white;
    transition: background-color 0.25s;
    text-decoration: none;
  }
  
  .reg:hover {
    background-color: #3ead68;
  }
  </style>
  