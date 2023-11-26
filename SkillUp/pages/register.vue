<template>
    <body class="bb">
   

<navbar> </navbar>
 <p class="join">Join SkillUp as a </p>       
<div class="signup-container">
    <div class="signup-option" selected onclick="selectRole('teacher')">Teacher</div>
    <div class="signup-option" onclick="selectRole('tutor')">Tutor</div>
    <div class="signup-option" onclick="selectRole('student')">Student</div>
  </div>
</body>
</template>

<script>

</script>

<style>
.join{
margin-left: 40%;
margin-top: 170px;
position: absolute;
}
.bb {
      font-family: Arial, sans-serif;
      background-image: url('background.jpg');
    background-repeat:no-repeat;
   background-size: 500% 500%;
   
   
    
    }

    .signup-container {
      border: 2px solid #ccc;
      border-radius: 8px;
      padding: 10px;
     width: 300px;
      background-color: #fff;
      display: flex;
      justify-content: space-around;
      margin-top: 200px;
      margin-left: 40%;
      
    }

    .signup-option {
      padding: 15px;
      cursor: pointer;
      transition: background-color 0.3s;
     padding-left: 25px;
     padding-right: 25px;
    }
    
    .signup-option1:active {
      background-color: #4CAF50;
      color: #fff;
    }
    .signup-option:hover, .signup-option.selected {
      background-color: #4CAF50;
      color: #fff;
     
     
    }

</style>