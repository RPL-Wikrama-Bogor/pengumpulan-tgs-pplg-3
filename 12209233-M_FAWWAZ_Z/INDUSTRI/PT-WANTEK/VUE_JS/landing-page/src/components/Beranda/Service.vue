<template>
    <div class="service">
        <h1>Layanan Kami</h1>
        <div class="row-service">
        <Card></Card>
        <Card></Card>
        <Card></Card>
        <Card></Card>
        <Card></Card>
        <Card></Card>
    </div>
</div>
</template>
<script>
import Card from '@/components/Service/Card.vue';
export default {
    components:{
        Card,
    }
}
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