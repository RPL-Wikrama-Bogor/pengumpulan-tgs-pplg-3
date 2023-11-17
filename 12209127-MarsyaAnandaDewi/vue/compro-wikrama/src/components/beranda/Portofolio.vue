<template>
    <div class="portofolio">
        <h3>Portofolio Kami</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, doloremque.</p>
        <div class="row-portofolio">
           <Card></Card>
        </div>
    </div>
</template>
<script>
import Card from '@/components/portofolio/Card.vue';
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
    .portofolio h3{
        margin: auto;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        font-weight: 900;
        font-size: 48px;
        line-height: 70px;
        color: black;
        margin-bottom: 15px;
        text-align: center;
    }
    .portofolio p{
        font-size: 14px;
        line-height: 20px;
        color: #4F556A;
        min-width: 680px;
        margin: auto;
        margin-top: 14px;
        margin-bottom: 25px;
        text-align: center;
    }
    .portofolio p span{
        color: gray;
    }
    .row-portofolio {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 10px;
    }

    @media screen and (max-width: 600px){
        .row-portofolio {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            grid-gap: 10px;
        }
    }
</style>