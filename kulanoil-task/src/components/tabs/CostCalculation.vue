<template>
    <div class="tab-cost-calculation">
        Рассчитать стоимость
    </div>
</template>
    
<script>
    import { ref } from 'vue';

    export default {
        name: 'CostCalculation',
        setup() {
            const currentTab = ref('CostCalculation');
  
            return {
                currentTab
            };
        },
    }
</script>
    
<style scoped>
    .tab-cost-calculation {
        width: 205px;
        height: 52px;
        border-bottom: 6px solid var(--vt-c-white);
        padding: 15px 20px;
        font-size: var(--font-size);
        font-weight: 700;
        line-height: 18px;
        text-align: center;
        color: var(--vt-c-red);
        background: var(--vt-c-white);
        border-top-left-radius: var(--border-radius);
    }
</style>
  