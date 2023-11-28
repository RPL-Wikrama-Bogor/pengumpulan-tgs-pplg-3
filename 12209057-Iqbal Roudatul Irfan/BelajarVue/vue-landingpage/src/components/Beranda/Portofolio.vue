<template>
    <div class="portofolio">
      <h3>Portofolio Kami</h3>
      <p class="portofolio-description">
        Lorem ipsum dolor sit amet consectetur.
      </p>
      <div class="row-portofolio">
        <Card></Card>
      </div>
    </div>
  </template>
  
  <script>
  import Card from '@/components/Portofolio/Card.vue';
  
  export default {
    components: {
      Card
    }
  }
  </script>
  
  <style>
  .portofolio {
    margin-top: var(--spacing-large, 80px);
  }
  
  .portofolio h3 {
    font-weight: 900;
    font-size: var(--font-size-large, 48px);
    line-height: var(--line-height-large, 35px);
    color: var(--color-primary, #042181);
    margin-bottom: var(--spacing-medium, 30px);
    text-align: center;
  }
  
  .portofolio-description {
    font-size: var(--font-size-medium, 16px); 
    color: var(--color-secondary, #333); 
    text-align: center; 
    margin-bottom: var(--spacing-small, 10px);
  }
  </style>
  