<template>
    <div class="card-service">
        <h4>
            {{ title }}
        </h4>
        <p>
            {{ description }}
        </p>
        
        <slot></slot>

        <button class="btn-service">test</button>
        <MyBtn></MyBtn>
    </div>
    
</template>

<script>
    export default {
        props: ['title', 'description']
    }
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

* {
  font-family: 'Poppins', sans-serif;
}

.card-service {
    text-align: start;
    min-height: 306px;
    padding: 30px 30px 0 30px;
    box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.5);
    border-radius: 60px 0px 0px 0px;
    background: white;
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
    margin: 0 0 10px 0;
    color: #6b88d9;
}

.btn-service {
    margin-top: 10px;
    font-size: 16px;
    font-weight: 400;
    color: white;
    background: linear-gradient(90deg, rgb(40, 40, 40) 0%, rgb(40, 40, 40) 50%, #0f0f0f 50%, #0f0f0f 100%);
    padding: 15px 20px;
    margin-bottom: 30px;
    border: none;
    border-radius: 5px;
    transition: background-position 0.3s ease, border 0.3s ease; /* Transisi untuk latar belakang dan border */
    margin-right: 5px;
    background-size: 200% 100%;
}

.btn-service:hover {
    cursor: pointer;
    background-position: -100% 0;
    border: none;
}



</style>