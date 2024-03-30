<template>
    <div class="tab-cost-calculation">
        Вызвать курьера
    </div>
  </template>
    
  <script>  
      export default {
        name: 'CourierCall',
      }
</script>
    
<style scoped>
    .tab-cost-calculation {
        position: relative;
        top: 6px;
        width: 172px;
        height: 52px;
        border-bottom: 6px solid var(--vt-c-white);
        padding: 12px 20px;
        font-size: var(--font-size);
        font-weight: 700;
        line-height: 18px;
        text-align: center;
        color: var(--vt-c-black);
        background: var(--vt-c-light-gray);
        border-top-left-radius: var(--border-radius);
    }
    .tab-cost-calculation.active {
        background: var(--vt-c-white);
    }
    @media (max-width: 1024px) {
        
    }
</style>
  