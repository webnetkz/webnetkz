<template>
  <TabsContainer @tab-click="currentTab = $event" :currentTab="currentTab" />
  <div class="content-container" :currentTab="currentTab">
    <Calculation/>
  </div>
</template>

<script>
    import TabsContainer from './TabsContainer.vue';
    import Calculation from './content/Calculation.vue';

    export default {
      name: 'ContentContainer',
      components: {
        TabsContainer,
        Calculation,
      },
      setup() {

      },
    }
</script>
  
<style scoped>
  .content-container {
    box-shadow: 0px 4px 15px 0px rgba(0, 0, 0, 0.1);
    border-radius: var(--border-radius);
    width: 1104px;
    height: 130px;
    padding: 20px 30px 20px 30px;
    border-radius: 0px 12px 12px 12px;
    background: var(--vt-c-white);
  }

  @media (max-width: 1024px) {
    .content-container {
      width: 90vw;
      height: 100%;
      border-top-right-radius: 0;
    }
  }
</style>
