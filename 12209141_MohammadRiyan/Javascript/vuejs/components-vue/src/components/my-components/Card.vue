<template>
    <div class="card-service">
        <h4>
            {{title}}
        </h4>
        <p>{{description}}</p>
        <slot></slot>
            <button class="btn-service-global">Detail</button>
        <MyBtn></MyBtn>
    </div>
</template>
<script>
    export default{
        props: ['title', 'description']
    }
</script>

<style scoped>
    .card-service {
        text-align: start;
        min-height: 306px;
        padding: 30px 30px 0 30px;
        box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.15);
        border-radius: 60px 0px 60px 0px;
        background: rgb(250, 232, 232);
        transition: all 0.5s ease;
        margin: 10px 10px; 
    }

    .card-service h4 {
        font-size: 18px;
        line-height: 30px;
        color: 343b4e;
    }

    .card-service p{
        font-size: 400;
        color: #827f8d;
        margin: 0 0 10px 0;

    }
</style>