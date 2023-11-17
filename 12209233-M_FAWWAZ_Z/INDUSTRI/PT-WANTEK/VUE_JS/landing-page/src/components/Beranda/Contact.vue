<template>
    
    <div id="app">
      <h1>Contact Us</h1>
      <form @submit.prevent="submitForm">
        <label for="name">Name:</label>
        <input type="text" id="name" v-model="name" required><br>
  
        <label for="email">Email:</label>
        <input type="email" id="email" v-model="email" required><br>
  
        <label for="message">Message:</label>
        <textarea id="message" v-model="message" required></textarea><br>
  
        <button type="submit">Submit</button>
      </form>
    </div>
  </template>
  
  <script>
  
  export default {
    data() {
      return {
        name: '',
        email: '',
        message: ''
      };
    },
    methods: {
      submitForm() {
        // Kirim data formulir ke server atau lakukan operasi lainnya di sini
        console.log('Form submitted!');
        console.log('Name:', this.name);
        console.log('Email:', this.email);
        console.log('Message:', this.message);
  
        // Setelah mengirim formulir, Anda dapat membersihkan nilai input
        this.name = '';
        this.email = '';
        this.message = '';
      }
    }
  };
  </script>
  
  <style scoped>
  /* Gaya CSS formulir kontak */
  form {
    max-width: 400px;
    margin: 0 auto;
  }
  label, input, textarea {
    margin-bottom: 10px;
    width: 100%;
  }
  button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
  }
  button:hover {
    background-color: #45a049;
  }
  </style>
  