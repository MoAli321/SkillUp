<!-- CoursePage.vue -->
<template>
  <Lnavbar></Lnavbar>
  <div class="course-page">
    <header>
      <h1>{{ course.title }}</h1>
      <p class="subtitle">{{ course.subtitle }}</p>
    </header>

    <section class="course-details">
      <div class="instructor">
        <h2>Instructor</h2>
        <p>{{ course.instructor.name }}</p>
        <p>{{ course.instructor.role }}</p>
      </div>

      <div class="description">
        <h2>Description</h2>
        <p>{{ course.description }}</p>
      </div>
    </section>

    <!-- New section for the list of students -->
    <section class="student-list">
      <h2>Students</h2>
      <ul>
        <li v-for="student in course.students" :key="student.id">
          {{ student.name }}
        </li>
      </ul>
    </section>

    <footer>
      <p class="price">Price: ${{ course.price }}</p>
   <button @click="enroll">Enroll Now</button>
      <!-- <NuxtLink to ="../enrolled"><button @click="enroll">Enroll Now</button></NuxtLink> -->
    </footer>
  </div>
</template>

<script>
export default {
  data() {
    return {
      course: {
        title: "Introduction to Programming",
        subtitle: "Learn the basics of programming with hands-on examples.",
        instructor: {
          name: "John Smith",
          role: "Teacher",
        },
        description:
          "This course is designed to introduce you to the fundamentals of programming. You'll learn key concepts and gain practical experience through coding exercises.",
        price: 49.99,
        students: [
          { id: 1, name: "Alice Johnson" },
          { id: 2, name: "Bob Williams" },
          { id: 3, name: "Charlie Davis" },
          // Add more students as needed
        ],
      },
    };
  },
  methods: {
    enroll() {
      // Assuming you have the user's email, id, and name stored in this.user
      fetch('http://localhost:8000/enroll.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
          email: this.user.email,
          user_id: this.user.id,
          course_id: this.course.id
        })
      })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          console.log('Enrollment successful');
          // Add the user's name to the list of students
          this.course.students.push({ id: this.user.id, name: this.user.name });
        } else {
          console.error('Enrollment failed', data.message);
        }
      })
      .catch(error => console.error('An error occurred:', error));
    },
  },
};
</script>

<style scoped>
/* Styling for the CoursePage component */
.course-page {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
  background-color: #f8f8f8;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  margin-top: 100px;
}

header {
  text-align: center;
  margin-bottom: 20px;
}

h1 {
  margin-bottom: 5px;
}

.subtitle {
  font-style: italic;
  color: #555;
}

.course-details {
  display: flex;
  justify-content: space-between;
}

.instructor {
  flex-basis: 30%;
}

.description {
  flex-basis: 60%;
}

h2 {
  color: #333;
}

/* New styling for the student list */
.student-list {
  margin-top: 20px;
}

ul {
  list-style-type: none;
  padding: 0;
}

li {
  margin-bottom: 8px;
}

footer {
  margin-top: 20px;
  text-align: center;
}

.price {
  font-weight: bold;
  color: #27ae60;
}

button {
  padding: 10px 20px;
  font-size: 16px;
  background-color: #3498db;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s;
}

button:hover {
  background-color: #2980b9;
}
</style>
