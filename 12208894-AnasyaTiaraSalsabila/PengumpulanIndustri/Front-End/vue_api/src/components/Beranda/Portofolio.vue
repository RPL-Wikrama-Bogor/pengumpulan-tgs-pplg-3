<template>
    <div class="portofolio">
        <h3>Portofolio kami</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi sit, alias repellat illum voluptate accusantium quis recusandae? Ipsam nemo reprehenderit, natus praesentium mollitia earum vitae, voluptas id distinctio, perferendis voluptatibus.</p>
        <div class="row-portofolio">
            <card></card>
        </div>
    </div>
</template>

<script>
    import Card from '@/components/Portofolio/Card.vue'
    export default {
        components: {
            Card
        }
    }
</script>

<style>
    .portofolio {
        margin-top: 80px;
    }

    .portofolio h3 {
        margin: auto;
        font-family: 'Raleway', sans-serif;
        font-weight: 900;
        font-size: 40px;
        line-height: 70px;
        color: #042181;
        margin-bottom: 35px;
        text-align: center;
    }

    .portofolio p {
        font-weight: 900;
        font-size: 14px;
        line-height: 20px;
        color: #4f5564;
        max-width: 600px;
        margin: auto;
        margin-top: 14px;
        margin-bottom: 25px;
    }

    .portofolio p span {
        color: gray;
    }

    .row-portofolio {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 10px;
    }

    @media screen and (max-width: 600px) {
        .row-portofolio {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            grid-gap: 10px;
        }
    }

</style>