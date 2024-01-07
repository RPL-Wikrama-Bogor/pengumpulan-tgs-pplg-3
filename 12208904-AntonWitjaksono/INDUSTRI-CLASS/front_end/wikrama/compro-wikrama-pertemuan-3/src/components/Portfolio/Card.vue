<template>
    <div class="card-portfolio">
        <div class="image-container">
            <img :src="portfolio.file" :alt="portfolio.title" class="portfolio-image">
        </div>
        <div class="card-portfolio-description">
            <h4>{{ portfolio.title }}</h4>
            <p><span>Clients:</span> {{ portfolio.name }}</p>
        </div>
    </div>
</template>

<script>
export default {
    props: ['portfolio']
}
</script>

<style scoped>
.card-portfolio {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    min-height: 320px; /* Tinggi sedikit ditinggikan untuk keselarasan */
    box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.1); /* Sedikit mengurangi intensitas bayangan */
    border-radius: 12px; /* Merapikan sudut */
    background: #1a1a1a; /* Warna latar belakang abu-abu muda */
    transition: all 0.3s ease-in-out;
    margin: 7px;
    width: 290px; /* Lebar sedikit diperlebar */
    overflow: hidden; /* Memastikan isi konten tidak bocor keluar */
    

}

.portfolio-image {
    width: 100%; /* Memastikan gambar penuh di dalam container */
    height: 450px; /* Tinggi gambar sedikit diperkecil */
    object-fit: cover;
    border-top-left-radius: 12px; /* Merapikan sudut */
    border-top-right-radius: 12px; /* Merapikan sudut */
}

.card-portfolio-description {
    padding: 20px;
}

.card-portfolio h4 {
    margin-top: 10px;
    font-weight: 700; /* Merubah font-weight */
    font-size: 20px; /* Ukuran teks sedikit dikurangi */
    line-height: 24px; /* Menyesuaikan line-height */
    color: #d1d1d1;
}

.card-portfolio p {
    font-size: 14px; /* Ukuran teks deskripsi */
    color: #9e9e9e; /* Warna teks deskripsi yang lebih gelap */
    margin-top: 8px; /* Sedikit penyesuaian margin atas */
    margin-bottom: 0; /* Menghapus margin bawah */
}
</style>
