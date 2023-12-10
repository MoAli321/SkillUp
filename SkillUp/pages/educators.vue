<template>
  <Lnavbar></Lnavbar>
  <div class="educators-page">
    <div class="switch-container">
      <button @click="toggleList('tutors')" :class="{ 'active': activeList === 'tutors', 'tutors-button': activeList === 'tutors' }">Tutors</button>
      <button @click="toggleList('teachers')" :class="{ 'active': activeList === 'teachers', 'teachers-button': activeList === 'teachers' }">Teachers</button>
    </div>
    <div class="educators-container">
      <div v-if="activeList === 'tutors'" class="educator-category">
        <h2>Tutors</h2>
        <ul>
          <li class="educator-item">
            <div class="educator-details">
              <NuxtLink to="/educators/tutor/john-doe">John Doe</NuxtLink>
              <p>Teaches: Math 101</p>
              <p>Reviews: Excellent tutor! Highly recommended.</p>
            </div>
          </li>
          <li class="educator-item">
            <div class="educator-details">
              <NuxtLink to="/educators/tutor/jane-smith">Jane Smith</NuxtLink>
              <p>Teaches: Physics 201</p>
              <p>Reviews: Patient and knowledgeable tutor.</p>
            </div>
          </li>
          <!-- Additional tutors -->
          <li class="educator-item">
            <div class="educator-details">
              <NuxtLink to="/educators/tutor/susan-miller">Susan Miller</NuxtLink>
              <p>Teaches: Chemistry 101</p>
              <p>Reviews: Dedicated tutor with a deep understanding of the subject.</p>
            </div>
          </li>
          <li class="educator-item">
            <div class="educator-details">
              <NuxtLink to="/educators/tutor/robert-jones">Robert Jones</NuxtLink>
              <p>Teaches: English Literature</p>
              <p>Reviews: Encouraging and supportive tutor.</p>
            </div>
          </li>
        </ul>
      </div>

      <div v-if="activeList === 'teachers'" class="educator-category">
        <h2>Teachers</h2>
        <ul>
          <li class="educator-item">
            <div class="educator-details">
              <NuxtLink to="/educators/teacher/alex-jackson">Alex Jackson</NuxtLink>
              <p>Teaches: History 202</p>
              <p>Reviews: Inspirational teacher! Very knowledgeable.</p>
            </div>
          </li>
          <li class="educator-item">
            <div class="educator-details">
              <NuxtLink to="/educators/teacher/mary-williams">Mary Williams</NuxtLink>
              <p>Teaches: Intro to C programming</p>
              <p>Reviews: Inspirational teacher! Very knowledgeable.</p>
            </div>
          </li>
          <!-- Additional teachers -->
          <li class="educator-item">
            <div class="educator-details">
              <NuxtLink to="/educators/teacher/sarah-smith">Sarah Smith</NuxtLink>
              <p>Teaches: Biology 301</p>
              <p>Reviews: Engaging teacher with a passion for the subject.</p>
            </div>
          </li>
          <li class="educator-item">
            <div class="educator-details">
              <NuxtLink to="/educators/teacher/michael-johnson">Michael Johnson</NuxtLink>
              <p>Teaches: Advanced Mathematics</p>
              <p>Reviews: Excellent problem-solving skills demonstrated by the teacher.</p>
            </div>
          </li>
        </ul>
      </div>

      <!-- Add more educator categories as needed -->

    </div>
  </div>
</template>
  
  <script>
  export default {
    data() {
      return {
        activeList: 'tutors',
      };
    },
    methods: {
      toggleList(list) {
        this.activeList = list;
      },
    },
  };
  </script>
  
  <style scoped>
  /* Your existing styles for educators-page, educators-container, etc. */
  h2{
    margin-left: 50px;
  }
  .switch-container {
    display: flex;
    justify-content: center;
    margin-top: 20px;
  
  }
  
  button {
    padding: 10px 20px;
    border: none;
    color: white;
    border-radius: 8px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
  }
  
  .tutors-button {
    background-color: #4CAF50;
  }
  
  .teachers-button {
    background-color: #2196F3;
  }
  
  button:hover, button.active {
    opacity: 0.8;
  }
  
  .educator-item {
    display: flex;
    align-items: center;
    border: 1px solid #ccc;
    border-radius: 8px;
    padding: 10px;
    margin-bottom: 10px;
    
  }
  
  .educator-details {
    max-width: 400px;
    
  }
  
  /* Add more styles as needed */
  
  </style>
  