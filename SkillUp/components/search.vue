<template>


<div class="search-bar">
    <form >
      <input type="text" placeholder="Search courses..." class="search-input" />
      <NuxtLink to="/results"><button class="search-button">Search</button></NuxtLink>
    </form>
    </div>

    
</template>

<style scoped>

.search-bar {
  display: flex;
  justify-content: center;
  margin-top: 20px;
 
}

.search-input {
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 5px;
  margin-right: 10px;
  width: 600px;
  box-shadow: 0px 0px 4px rgba(0, 0, 0, .3); 

}

.search-button {
  background-color: #309255;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.25s;
}

.search-button:hover {
  background-color: #3ead68;
}





</style>