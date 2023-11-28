
<template>
  <div class="card">
    <div class="content">
      <div class="image-container">
        <img :src="bannerImg" alt="Banner Image" class="banner" />
      </div>
      <div class="profile-info">
        <div class="profile-image">
          <img :src="profileImg" alt="Profile Image" class="profile" />
        </div>
        <div class="text-container">
          <h2>{{ title }}</h2>
          <p>{{ description }}</p>
          <div class="profile-name">{{ nama }}</div>
          <div class="profile-date">{{ tanggal }}</div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    bannerImg: String,
    profileImg: String,
    title: String,
    description: String,
    nama: String,
    tanggal: String,
  },
};
</script>

<style scoped>
.card {
  display: flex;
  width: 500px; /* Lebar card yang lebih lebar */
  border-radius: 5px;
  margin: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.content {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: space-between;
}

.image-container {
  width: 30%; /* Lebar gambar banner */
}

.banner {
  max-width: 100%; /* Lebar gambar banner */
  max-height: 100%;
}

text-container {
  flex: 1;
  padding: 10px;
  text-align: left;
}

h2 {
  font-size: 20px;
  margin: 0;
}

p {
  margin: 0;
}

.profile-info {
  display: flex;
  flex-direction: row; /* Mengatur orientasi elemen-elemen */
  align-items: flex-start;
  justify-content: space-between;
}

.profile-image {
  width: 50px; /* Lebar gambar profil */
  height: 50px; /* Tinggi gambar profil */
}

.profile {
  max-width: 100%; /* Lebar gambar profil */
  max-height: 100%; /* Tinggi gambar profil */
  border-radius: 50%; /* Membuat gambar profil menjadi bulat */
}

.profile-name {
  font-weight: bold;
}

.profile-date {
  color: #888;
}
</style>
