<template>
  <div class="tabs-container" :class="{ 'left-tab-active': activeTab === 'tracking' }">
    <CostColculation/>
    <CourierCall/>
    <TrackPackage/>
  </div>
</template>
  
<script>
  import { useStore } from '@/stores/store.js';
  import { computed } from 'vue';
  import CostColculation from './tabs/CostCalculation.vue';
  import CourierCall from './tabs/CourierCall.vue';
  import TrackPackage from './tabs/TrackPackage.vue';


  export default
  {
    name: 'TabsContainer',
    components:
    {
      CostColculation,
      CourierCall,
      TrackPackage,
    },
    setup()
    {
        const store = useStore();
        const activeTab = computed(() => store.activeTab);

        return {
            activeTab,
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
    background-color: var(--vt-c-white);
    top: 0;
  }
  .tabs-container.left-tab-active {
    border-top-right-radius: var(--border-radius);
  }
  @media (max-width: 1024px) {
    .tabs-container {
      max-width: 90vw;
    }
  }
</style>
