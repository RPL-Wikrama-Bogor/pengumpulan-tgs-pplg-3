<template>
    <div class="card-services">
     <h4>
         {{ title }}
     </h4>
     <p>{{ description }}</p>
     <slot></slot>
     <button class="btn-services">Detail</button>
    </div>
</template>
<script>

export default {
    props: ['title', 'description']
}
</script>
<style scoped>

.btn-services {
    margin-top: 10px;
    font-size: 10px;
    font-weight: 400;
    color: white;
    background-color: rgb(0, 0, 82);
    padding: 15px 20px;
    border: none;
    border-radius: 5px;
}
.card-services {
  text-align: start;
  min-height: 200px;
  padding: 30px 30px 0 30px;
  box-shadow: 0px 10px 30px rgb(81, 255, 75);
  border-radius: 60px 0px 0px 0px;
  background: rgb(255, 255, 255);
  transition: all 0.5s ease;
  margin: 10px 10px;
}

.card-services h4 {
    font-size: 12px;
    line-height: 30px;
    color: #343b4e;
}

.card-services p{
    font-weight: 400;
    color: #827f8d;
    margin: 0 0 10px 0;
}
</style>