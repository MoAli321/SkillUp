<template>
  <body>
 <header>
   <img src="Logo.png" alt="logo" class="logo">
  
     <nav>
       
         <ul class="links">
           <li><a href="/index" class="active">Home</a></li>
           <li><a href="/CourseCatalog" class="ce" >Courses</a></li>
           <li><a href="/index" class="ce">Pages</a></li>
           <li><a href="/index" class="ce" >Contact</a></li>
         </ul>
    
     </nav>
     <div class="auth">
    <a href="/login" class="ces">Log In</a>
    <a href="/register" class="signup">Sign up</a>
  </div>
 </header>
</body>
</template>

<style scoped>

* {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
  text-decoration: none;
  list-style-type: none;
 
  
 }

 
 .logo {
  width: 120px;
  display: flex;
 }

 li {
  font-weight: 500;
  text-decoration: none;
  color: black;
  font-size: 20px;
  margin-left: 140px;
  

 
 }

 .auth{
  margin-right: 180px;
 }
 .ces{
font-size: 20px;
 }
.signup{
  margin-left: 30px;
  background-color: #309255;
 padding:10px;
  border-radius: 8px;
  color: white;
  transition: background-color .25s;
  font-size: 20px;
}
 a{
  transition: color .25s;
  color: black;
 }
.links{
  display: flex;
  
  padding:0px 20px;
}
 header {
 
 
  display: flex;
  height: 200px;
justify-content: space-between;
  align-items: center;
  padding: 30px 10%;
  background-color:#e7f8ee; 
  
 }

.signup:hover{
  background-color: #3ead68;
}

.ce:hover{
  color:#309255;
  text-decoration: underline;
}
.ces:hover{
  color:#309255;

}

.active{
  color:#309255
}
</style>

