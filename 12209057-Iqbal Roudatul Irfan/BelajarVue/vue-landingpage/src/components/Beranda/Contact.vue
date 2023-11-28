<template>
    <div class="contact">
      <h3>Contact</h3>
      <div class="row-service">
        <Contact></Contact>
      </div>
    </div>
  </template>
  
  <script>
  import Contact from '@/components/Contact/Contact.vue';
  export default {
    components: {
      Contact
    }
  }
  </script>
  
  <style>
  .contact {
    margin-top: 80px;
  }
  
  .contact h3 {
    font-weight: 900;
    font-size: 48px;
    line-height: 35px;
    color: #042181;
    margin-bottom: 30px;
    text-align: center;
  }
  
@media screen and (max-width: 600px) {
    .row-service{
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        grid-gap: 10px;
    }
}
  </style>
  