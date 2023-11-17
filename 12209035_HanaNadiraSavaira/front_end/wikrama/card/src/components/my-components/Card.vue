<template>
<div class="card-service">
    <div class="row">
        <img v-for="img in images" v-bind:src="img"/>
    </div>
    <!-- <image-viewer url="@/img/gambar.jpeg"></image-viewer> -->
    <h4>
        {{ title }}
    </h4>
    <p>{{ description }}</p>
    <div class="row-row">
        <img v-for="img in gambar" v-bind:src="img"/>
    </div>
    
    <slot></slot>
</div>
</template>
<script>
export default{
    props: ['title', 'description'],
    data() {
        return {
            images: ['https://i.pinimg.com/564x/96/da/33/96da335ffc2efedbf27177b54c9b4e7f.jpg'],
            gambar: ['https://i.pinimg.com/474x/af/29/0d/af290dd75a20bdff1c5984594904cd79.jpg']
        }
    }
}
</script>
<!-- kalo css menggunakan scoped tidak bisa di akses di file file lain
khusus file itu sndiri -->
<style scoped>
.row img {
    max-width: 250px;
    float: left;
    border: 3px solid white;
    margin-right: 20px;
}
.row-row img {
    width: 75px;
    border-radius: 60%;
    float: left;
}
.card-service {
    text-align: start;
    justify-content: center;
    align-items: center;
    margin: 190px auto;
    box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.05);
    background: white;
    transition: all 0.5s ease;
    margin-left: 330px;
    margin-right: 330px;
}
.card-service h4 {
    font-size: 25px;
    color: #343b4e;
}
.card-service p {
    font-weight: 300;
    color: #827f8d;
    margin-bottom: 50px;
    /* font-size: 15px; */
    /* margin: 0 0 10px 0; */
}


</style>
