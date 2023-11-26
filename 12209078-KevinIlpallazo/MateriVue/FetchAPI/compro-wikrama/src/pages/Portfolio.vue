<template>
     <div class="container">
          <div class="portofolio">
               <h3>Jujutsu Sorcerer</h3>
               <p style="color: white;">Chosen One</p>
               <div class="row-portofolio">
                    <Card v-for="item in DataPortfolio" :portfolio="item" :key="item.id"></Card>
               </div>
          </div>
     </div>
</template>
   
<script>
import Card from '@/components/Portfolio/Card.vue';
import { Get } from '@/api/index.js';

export default {
     components: {
          Card,
     },
     data() {
          return {
               DataPortfolio: [],
               DataCategories: []
          };
     },
     async created() {
          const responsePortfolio = await Get('http://127.0.0.1:9000/api/portfolio');
          this.DataPortfolio = responsePortfolio.data.data;

          const responseCategories = await Get('http://127.0.0.1:9000/api/categories');
          this.DataCategories = responseCategories.data;
     },
     methods: {
          async filter(id) {
               const responsePortfolio = await Get(`http://127.0.0.1:9000/api/portfolio?category_id=${id}`);
               this.DataPortfolio = responsePortfolio.data.data;
          },
     },
};
</script>
<style>
.category
{
     margin: 10px 0 35px 0;
     display: flex;
     flex-wrap: wrap;
     color: black;
     justify-content: center;
     align-items: center;
}

.btn-category:hover
{
     background-color: #247add;
     transition: background-color 0.10s ease;
}


.category span
{
     background-color: #247add;
     padding: 10px 15px;
     font-weight: 500;
     border-radius: 10px;
     margin: 5px;
     cursor: pointer;
}

.row-portofolio
{
     display: grid;
     grid-template-columns: repeat(3, 1fr);
     grid-gap: 10px;
     justify-content: center;
     align-items: center;
}

.portofolio
{
     margin-top: 10px;
}

.portofolio h4
{
     margin-top: 10px;
     font-weight: 900;
     font-size: 30px;
     line-height: 35px;
     margin-bottom: 0;
     color: rgb(221, 36, 36);
}

.portofolio p
{
     font-size: 14px;
     line-height: 20px;
     color: #ffffff;
     max-width: 680px;
     margin: auto;
     margin-top: 14px;
     margin-bottom: 25px;
     text-align: center;
}

.portofolio p span
{
     color: rgb(255, 255, 255);
}

@media screen and (max-width: 600px)
{

     .row-portofolio
     {
          display: grid;
          grid-template-columns: repeat(1, 1fr);
          grid-gap: 10px;
     }

     .portofolio h4
     {
          font-size: 20px
     }
}

;
</style>