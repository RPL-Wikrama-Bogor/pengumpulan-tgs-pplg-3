<template>
    <div class="card-service">
        <h4>
            {{ title }}
        </h4>
        <p>
            {{ description }}
        </p>
        <slot></slot>
        <button class="btn-service">Detail</button>
        <MyBtn></MyBtn>
    </div>
</template>
<script>
export default{
    props:['title', 'description']
}
</script>
<style scoped>
.btn-service{
    margin-top: 10px;
    font-size: 16px;
    font-weight: 400;
    color: white;
    background-color: #601e76;
    padding: 15px 20px;
    border: none;
    border-radius: 5px;
}
.card-service{
    text-align: start;
    min-height: 306px;
    padding: 30px 30px 0 30px;
    box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
    border-radius: 60px 0px 0px 0px;
    background: rgb(247, 250, 250);
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
    color: #080808;
    margin: 0 0 10px 0;
}

</style>