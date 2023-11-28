<template>
    <div class="card-service">
        <card-service>
            <h4>{{ title }}</h4>
            <p>{{ description }}</p>
        </card-service>
    </div>
</template>

<script>
export default {
    props: [title, description]
}
</script>

<style scoped>
.btn-service{
    margin-top: 10px;
    font-size: 16px;
    font-weight: 400;
    color: aqua;
    background-color: blueviolet;
    padding: 15px 20px;
    border: none;
    border-radius: 5px;
}
.card-serivice{
    text-align: start;
    min-height: 206px;
    padding: 30px 30px 0 30px;
    box-shadow: 0px 10px 30px rgba(0, 0, 0 , 0.50);
    border-radius: 60px 0px 0px 0px;
    background-color: white;
    transition: all 0.5s ease;
    margin: 10px 10px;
}

.card-serivice h4{
    font-size: 18px;
    line-height: 30px;
    color: black;
}
.card-serivice p {
    font-weight: 400;
    color: antiquewhite;
    margin: 0 0 10px 0;

}
</style>