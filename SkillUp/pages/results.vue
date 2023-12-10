<template>
     <router-link to="/" class="back-home">
          <span class="back-icon">✕ </span>
        </router-link>
  <div class="search-results">
    <h1>Search Results</h1>
  </div>
    <div class="course-result">
      <h2>Course 1</h2>
      <p>Description for Course 1</p>
    </div>

    <div class="course-result">
      <h2>Course 2</h2>
      <p>Description for Course 2</p>
    </div>
</template>

<script>
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
.search-results {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .course-result {
      margin-bottom: 20px;
      padding: 15px;
      border: 1px solid #ddd;
      border-radius: 8px;
    }

    h1 {
      text-align: center;
      color: #309255;
    }

    h2 {
      color: #309255;
    }

    p {
      color: #555;
    }
</style>