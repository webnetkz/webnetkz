<template>
  <div class="tabs-container">
    <CostColculation/>
    <CourierCall/>
    <TrackPackage/>
  </div>
</template>
  
<script>
  import CostColculation from './tabs/CostCalculation.vue';
  import CourierCall from './tabs/CourierCall.vue';
  import TrackPackage from './tabs/TrackPackage.vue';

  export default {
    name: 'TabsContainer',
    components: {
      CostColculation,
      CourierCall,
      TrackPackage,
    },
    setup() {

      return {
        
      };
    },
  }
</script>
  
<style scoped>
  .tabs-container {
    display: flex;
    width: 565px;
    border-top-left-radius: var(--border-radius);
    box-shadow: 0px -4px 15px 0px rgba(0, 0, 0, 0.07);
  }
  .tabs-container > div:hover {
    cursor: pointer;
  }
  @media (max-width: 1024px) {
    .tabs-container {
      max-width: 88vw;
    }
  }
</style>
