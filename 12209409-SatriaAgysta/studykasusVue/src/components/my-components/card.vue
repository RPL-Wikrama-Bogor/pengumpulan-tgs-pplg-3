<template>
  <div class="card-service">
    <div class="img">
      <img class="sabbath" src="/src/components/image/sabbl.jpg" alt="Deskripsi Gambar" />
    </div>

    <div class="inCard">
      <h4>{{ title }}</h4>
      <p>{{ description }}</p>
      <slot></slot>

      <div class="account">
        <div class="image">
          <img src="/src/components/image/img.jpeg" alt="">
        </div>
        <div class="desc">
          <p style="color: #0f0f0f;"><b>Joker </b><br>22 August 2007</p>
        </div>
        <div class="iconx">
          <svg style="border-radius: 50px; background-color: gray; padding: 5px;" xmlns="http://www.w3.org/2000/svg"
            height="1em" viewBox="0 0 512 512">
            <path
              d="M307 34.8c-11.5 5.1-19 16.6-19 29.2v64H176C78.8 128 0 206.8 0 304C0 417.3 81.5 467.9 100.2 478.1c2.5 1.4 5.3 1.9 8.1 1.9c10.9 0 19.7-8.9 19.7-19.7c0-7.5-4.3-14.4-9.8-19.5C108.8 431.9 96 414.4 96 384c0-53 43-96 96-96h96v64c0 12.6 7.4 24.1 19 29.2s25 3 34.4-5.4l160-144c6.7-6.1 10.6-14.7 10.6-23.8s-3.8-17.7-10.6-23.8l-160-144c-9.4-8.5-22.9-10.6-34.4-5.4z" />
          </svg>
        </div>
      </div>
    </div>
  </div>
</template>
  
<script>
export default {
  props: ['title', 'description'],
};
</script>
  
<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

* {
  font-family: 'Poppins', sans-serif;
}

img {
  height: 100%;
  width: 100%;
  border-radius: 10px 0 0 10px;
}

.card-service {
  text-align: start;
  display: flex;
  min-height: 306px;
  padding: 0 auto;
  box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.9);
  border-radius: 10px;
  background: white;
  transition: all 0.5s ease;
  margin: 10px 10px;
}

.card-service .img {
  width: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.card-service .inCard {
  width: 50%;
  text-align: start;
  min-height: 306px;
  padding: 30px 30px 0 30px;
  transition: all 0.5s ease;
}

.card-service h4 {
  font-size: 18px;
  line-height: 30px;
  color: #343b4e;
}

.card-service p {
  font-weight: 400;
  margin: 0 0 10px 0;
  color: #37665c;
}

.image {
  max-width: 10%;
}

.image img {
  border-radius: 50px;
}

.account {
  display: flex;
  align-items: center;
  padding: 20px 0 20px 0;
  width: 100%;
  height: auto;
  gap: 10px;
}

.desc {
  display: grid;
  align-items: center;
  width: 100%;
}

.icon {
  width: 100%;
  align-items: center;
  display: flex;
  justify-content: right;
}
</style>
  