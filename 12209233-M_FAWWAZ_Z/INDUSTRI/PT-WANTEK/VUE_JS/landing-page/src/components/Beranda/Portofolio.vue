<template>
    <div class="portofolio">
        <h1>Portofolio</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <div class="row-portofolio">
<Card></Card>
        </div>
    </div>
</template>
<script>
import Card from '@/components/Portofolio/Card.vue';
export default {
    components: {
        Card
    }
}
</script>

<style scoped>
.portofolio{
    margin-top: 80px;
}

.portofolio h1{
    margin: auto;
    font-family: 'Raleway', sans-serif;
    font-weight: 900;
    font-size: 40px;
    line-height: 70px;
    color: blue;
    margin-bottom: 15px;
    text-align: center;
}
.portofolio p{
    font-weight: 900;
    font-size: 14px;
    line-height: 20px;
    color: brown;
    max-width: 600px;
    margin: auto;
    margin-top: 14px;
    margin-bottom: 25px;
    text-align: center;
}

.portofolio p span{
    color: gray;
}
.row-portofolio{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 10px;
}

@media screen and (max-width: 600px) {
    .row-portofolio{
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        grid-gap: 10px;
    }
}
</style>