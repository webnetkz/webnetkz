<template>
  <TabsContainer />
  <div class="content-container">
    <Calculation v-if="activeTab === 'calculation'" />
    <Courier v-if="activeTab === 'courier'" />
    <Tracking v-if="activeTab === 'tracking'" />
  </div>
</template>

<script>
    import { useStore } from '@/stores/store.js';
    import { computed } from 'vue';
    import TabsContainer from './TabsContainer.vue';
    import Calculation from './content/Calculation.vue';
    import Courier from './content/Courier.vue';
    import Tracking from './content/Tracking.vue';


    export default
    {
      name: 'ContentContainer',
      components:
      {
        TabsContainer,
        Calculation,
        Courier,
        Tracking,
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
  .content-container {
    box-shadow: 0px 4px 15px 0px rgba(0, 0, 0, 0.1);
    border-radius: var(--border-radius);
    width: 1104px;
    min-height: 88px;
    max-height: 194px;
    padding: 20px 30px 20px 30px;
    border-radius: 0px 12px 12px 12px;
    background: var(--vt-c-white);
  }

  @media (max-width: 1024px) {
    .content-container {
      width: 90vw;
      max-height: 100%;
      border-top-right-radius: 0;
    }
  }
</style>
