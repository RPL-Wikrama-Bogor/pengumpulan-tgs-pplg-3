<template>
    <div class="service">
        <h3>Layanan kami</h3>

        <div class="row-service">
            <Card v-for="item in data" :layanan="item"></Card>
        </div>
    </div>
</template>
<script>
import Card from '../Service/Card.vue';
export default {
    components: {
        Card
    },
    props: ['data']
}
</script>
<style scope>
.service
{
    margin-top: 80px;

}

.service h3 
{
    margin: auto;
    font-family: "Poppins", sans-serif;
    font-weight: 900;
    font-size: 48px;
    line-height: 70px;
    color: #042181;
    margin-bottom: 15px;
    text-align: start;
}

.service p1
{
    font-weight: 900;
    font-size: 14px;
    line-height: 20px;
    color: #4F556A;
    max-width: 680px;
    margin: auto;
    margin-top: 14px;
    margin-bottom: 25px;
    text-align: center;;
}

.service span
{
    color: gray;
}

.row-service
{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 10px;
}

.portfolio
{
    margin-top: 80px;
}

.portfolio h3
{
    font-weight: 900;
    font-size: 48px;
    line-height: 35px;
    color: #042181;
    margin-bottom: 30px;
    text-align: center;
}

.row-portfolio
{
    display: grid;
    grid-template-columns: repeat(3, 2fr);
    grid-gap: 10px;
}

@media screen and (max-width: 600px)
{
    .row-portfolio
    {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        grid-gap: 10px;
    }
}


@media screen and (max-width: 600px)
{
    .row-service
    {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        grid-gap: 10px;
    }
}
</style>

