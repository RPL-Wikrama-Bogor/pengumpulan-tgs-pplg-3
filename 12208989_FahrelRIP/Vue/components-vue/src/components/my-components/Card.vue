<template>
    <div class="card-service">
        <h4>
            {{ title }}
        </h4>
        <p>{{ description }}</p>
        <slot></slot>

        <button class="btn-service">Detail</button>
        <MyBtn></MyBtn>
    </div>
</template>

<script>
    export default{
        props: ['title', 'description']
    }
</script>

<style scoped>
    .btn-service{
        margin-top: 10px;
        font-size: 16px;
        font-weight: 400;
        color: #fff;
        background-color: rgb(76, 47, 91);
        padding: 15px 20px;
        border: none;
        border-radius: 15px;
        cursor: pointer;
    }

    .card-service{
        text-align: start;
        min-height: 306px;
        padding: 30px 30px 0 30px;
        box-shadow: 0px 5px 15px #000;
        border-radius: 75px 0px 0px 0px;
        background: #fff;
        transition: all 0.5s ease;
        margin: 10px 10px;
    }

    .card-service h4{
        font-size: 18px;
        line-height: 30px;
        color: #343b4e;
    }

    .card-service p{
        font-weight: 400;
        color: #827f8d;
        margin: 0 0 10px 0;
    }
</style>