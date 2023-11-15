<template>
    <div class="service">
        <h1>Layanan Kami</h1>
        
        <div class="row-service">
            <div class="card-service">
            <img src="@/assets/img/layanan.png" alt="">
            <h4>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga, vitae.
        </h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, eaque. Perferendis, magnam.           
        </p>
    </div>
            <div class="card-service">
            <img src="@/assets/img/layanan.png" alt="">
            <h4>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga, vitae.
        </h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, eaque. Perferendis, magnam.           
        </p>
    </div>
            <div class="card-service">
            <img src="@/assets/img/layanan.png" alt="">
            <h4>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga, vitae.
        </h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, eaque. Perferendis, magnam.           
        </p>
    </div>
</div>
</div>
</template>
<script>
// import Card from '@/components/Service/Card.vue';
import '@/assets/service.css';

</script>

<style scoped>

.service{
    margin-top: 80px;
}

.service h1{
    font-weight: 900;
    font-size: 40px;
    line-height: 35px;
    color: #042181;
    margin-bottom: 30px;
    text-align: center;
}

.row-service{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 10px;
}

@media screen and(max-width: 600){

    .row-service{
        display: grid;
        grid-template-columns: repeat(1,1fr);
        grid-gap:10px;
    }
}

</style>