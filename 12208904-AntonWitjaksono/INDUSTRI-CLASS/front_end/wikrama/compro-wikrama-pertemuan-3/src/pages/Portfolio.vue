<template>
    <div class="card-portfolio">
        <h4>hello ges</h4>
        <p>dwhd9hnajfnioajnoiwjd</p>
        <div class="category">
            <span>Web</span>
            <span>Desain</span>
            <span>Mobile</span>
        </div>
        <div class="row-portofolio">
            <Card v-for="item in DataPortfolio" :portfolio="item" :key="item.id"></Card>
        </div>
    </div>
</template>
<script>
import Card from '@/components/Portfolio/Card.vue';
import { Get } from '@/Api/index.js';

export default {
    components: {
        Card
    },
    data() {
        return {
            DataPortfolio: []
        }
    },
    async created() {
        const response = await Get('http://127.0.0.1:8000/api/portfolio');
        this.DataPortfolio = response.data.data;
    }
}
</script>
<style>
.card-portfolio {
    color: #d1d1d1;
    padding: 20px;
    text-align: center;
    margin-top: 10px;
    
}

.card-portfolio h4 {
    font-weight: 900;
    font-size: 30px;
    line-height: 35px;
    margin-bottom: 10px;
}

.card-portfolio p {
    font-weight: 500;
    font-size: 16px;
    line-height: 22px;
    max-width: 680px;
    margin: auto;
    margin-top: 14px;
    margin-bottom: 25px;
}

.category {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-bottom: 20px;
}

.category span {
    background-color: #35404f;
    padding: 10px 15px;
    font-weight: 500;
    border-radius: 20px;
    cursor: pointer;
    color: #fff;
}

.row-portofolio {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    justify-items: center;}

@media screen and (max-width: 600px) {
    .row-portofolio {
        grid-template-columns: repeat(1, 1fr);
    }

    .card-portfolio h4 {
        font-size: 24px;
    }
}
</style>
