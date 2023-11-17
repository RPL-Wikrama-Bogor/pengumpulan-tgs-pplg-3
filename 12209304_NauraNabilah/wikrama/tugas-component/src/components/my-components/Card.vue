<template>
    <div class="card">
        <div class="card-service">
            <div class="row">
                <img v-for="img in images" v-bind:src="img">
                <div class="">
                    <h4>
                        {{ title }}
                    </h4>
                    <p>{{ description }}</p>
                    <div class="row2">
                        <img v-for="img in gambar" v-bind:src="img">
                    </div>
                    <slot></slot>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: ['title', 'description', 'nama'],
    data() {
        return {
            images: ['https://lh6.googleusercontent.com/MQZ1qDHY2vpsteCiDNSXWzlIzQR0W3nnW-53-Z3h9Ns94jovaVGOZDTRBZHaq3bJo3G6rXu30ksLRa85JPNXRiyxM9gQDIcqKzAZX7v3PIKJq0wDD0Nkhzxu7wFDSKdVJE9O9AM124jq7Q5xvQDhoe22ymxsOMf7Wm_Zfti2BrDhH55o6-ONOS4f9QyUzg?dpr=2&w=675&fit=scale&auto=format&fm=pjpg'],
            gambar: ['https://characterai.io/i/300/static/avatars/uploaded/2022/10/7/z5Pw63MUhdn86aeKhV9RsSIuCNB1O_Ppxerve2lwBsI.webp']
        }
    }

}
</script>
<style scoped>

.card {
    height: 450px;
    background-color: #e7e6ee;
    align-items: center;
    margin: 70px 100px;
    display: flex;
}
.card-service {
    text-align: start;
    justify-content: center;
    box-shadow: 0px 10px 30px rgba(0, 0, 0, 05);
    border-radius: 10px 10px 10px 10px;
    background: white;
    transition: all 0.5s ease;
    margin: 200px auto;
    margin-left: 400px;
    margin-right: 400px;
    align-items: center;
    height: 250px;
    width: 750px;
}

.card-service h4 {
    font-size: 18px;
    color: #343b4e;
}

.card-service p {
    font-weight: 400;
    color: #827f8d;
}

.card-service .row {
    display: flex;
    justify-content: space-between;
}

.card-service .row img {
    height: 250px;
    width: 250px;
    border-radius: 10px 0 0 10px ;
}

.card-service .row2 img {
    border-radius: 50%;
    width: 50px;
    height: 50px;
}
</style>