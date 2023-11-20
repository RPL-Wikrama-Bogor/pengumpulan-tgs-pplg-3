<template>
    <div class="card-service">
        <img :src="layanan.file" :alt="layanan.title" class="service-image">
        <h4>
            {{ layanan.title }}
        </h4>
        <p>
            {{ layanan.description }}
        </p>
    </div>
</template>
<script>
export default {
    props: ['layanan']
}
</script>
<style scoped>
.card-service {
    text-align: start;
    min-height: 276px; /* Mengurangi tinggi kartu */
    padding: 20px; /* Mengurangi padding kartu */
    box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.05);
    background: #1a1a1a;
    transition: all 0.5s ease;
    margin: 5px; /* Mengurangi margin kartu */
    display: flex;
    flex-direction: column;
    align-items: center;
    border-top-right-radius: 10px; /* Mengurangi radius sudut */
    border-top-left-radius: 10px; /* Mengurangi radius sudut */
    justify-content: center;
}

.service-image {
    width: 350px; /* Memperbesar lebar gambar */
    height: 250px; /* Memperbesar tinggi gambar */
    object-fit: cover;
    margin-bottom: 15px;
    border-radius: 10px;

}

.card-service h4 {
    font-size: 16px; /* Mengurangi ukuran teks judul */
    line-height: 28px;
    color: #d1d1d1;
    
}

.card-service p {
    font-weight: 400;
    color: #827f8d;
    margin: 0 0 8px 0; /* Mengurangi margin pada paragraf */
}
</style>
