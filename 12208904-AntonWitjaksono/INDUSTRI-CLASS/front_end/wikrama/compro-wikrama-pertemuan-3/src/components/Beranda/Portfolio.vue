<template>
    <div class="portofolio">
        <h3>Portfolio kami</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, atque.</p>
        <div class="row-portofolio">
            <Card v-for="item in data" :key="item.id" :portfolio="item"></Card>
        </div>
    </div>
</template>
<script>
import Card from '@/components/Portfolio/Card.vue';
export default {
    components: {
        Card
    },
    props: ['data']
}
</script>
<style scoped>
.portofolio {
    margin-top: 80px;
}

.portofolio h3 {
    margin: auto;
    font-family: 'Raleway', sans-serif;
    font-weight: 900;
    font-size: 48px;
    line-height: 70px;
    color: #042181;
    margin-bottom: 15px;
    text-align: center;
}

.portofolio p {
    font-weight: 900;
    font-size: 14px;
    line-height: 20px;
    color: #4F556A;
    max-width: 680px;
    margin: auto;
    margin-top: 14px;
    margin-bottom: 25px;
    text-align: center;

}

.portofolio p span {
    color: gray;
}

.row-portofolio {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 10px;
    margin: 0 90px;
    align-content: center;
}

/* Samakan ukuran card dan proporsi gambar */
.card-portofolio {
    display: flex;
    flex-direction: column;
    min-height: 400px; /* Atur tinggi kartu ke ukuran yang diinginkan */
    box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.05);
    border-radius: 15px;
    background: white;
    transition: all 0.5s ease;
    max-width: 100%;
    flex-direction: column;
    margin: 0 25px;
}

.card-portofolio img {
    max-width: 100%;
    height: 100%;
    object-fit: cover; /* Memastikan gambar tetap rapi di dalam card */
}

.card-portofolio-description {
    padding: 20px;
    max-width: 100%;
}

.card-portofolio h4 {
    margin-top: 10px;
    font-weight: 900;
    font-size: 24px;
    line-height: 30px;
    margin-bottom: 0;
    color: #042181;
    max-width: 100%;
}

/* Mengatur grid pada layar yang lebih kecil */
@media screen and (max-width: 600px) {
    .row-portofolio {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        grid-gap: 10px;
    }
}
</style>
