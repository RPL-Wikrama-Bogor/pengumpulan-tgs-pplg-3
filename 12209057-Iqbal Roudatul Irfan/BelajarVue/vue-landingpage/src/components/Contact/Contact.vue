<template>
  <div>
    <div class="card">
      <div class="card-body">
        <form @submit.prevent="submitFeedback">
          <div class="form-group">
            <label for="name">Nama:</label>
            <input v-model="name" id="name" class="form-control" placeholder="Nama" required>
          </div>
          
          <div class="form-group">
            <label for="email">Email:</label>
            <input v-model="email" id="email" class="form-control" placeholder="Email" required>
          </div>
    
          <div class="form-group">
            <label for="message">Pesan:</label>
            <textarea v-model="message" id="message" class="form-control" placeholder="Pesan" required></textarea>
          </div>
    
          <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      name: '',
      email: '',
      message: '',
    };
  },
  methods: {
    submitFeedback() {
      const feedbackData = {
        name: this.name,
        email: this.email,
        message: this.message,
      };
      // Di sini Anda dapat mengirim data feedback ke server atau melakukan apa yang Anda butuhkan.
      // Juga, Anda dapat mereset input setelah pengiriman berhasil.
      this.name = '';
      this.email = '';
      this.message = '';
    },
  },
};
</script>

<style scoped>
.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  font-weight: bold;
  color: #042181;
  margin-bottom: 5px;
}

.form-control {
  width: 100%;
  padding: 10px;
  border: 1px solid #042181;
  border-radius: 5px;
  font-size: 16px;
  margin-bottom: 10px;
}

textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #042181;
  border-radius: 5px;
  font-size: 16px;
  margin-bottom: 10px;
  margin-right: 10px;
}

.btn {
  background-color: #042181;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  font-size: 18px;
  cursor: pointer;
  margin-top: 10px;
}

.btn:hover {
  background-color: #030d5c; /* Warna yang sedikit lebih gelap saat hover */
}
</style>
