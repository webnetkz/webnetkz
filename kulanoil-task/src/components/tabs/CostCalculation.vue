<template>
    <div class="tab-cost-calculation" @click="changeTab" :class="{ 'active': activeTab === 'calculation' }">
        Рассчитать стоимость
    </div>
</template>
    
<script>
    import { useStore } from '@/stores/store.js';
    import { computed } from 'vue';

    export default
    {
        name: 'CostCalculation',
        setup()
        {
            const store = useStore();
            const activeTab = computed(() => store.activeTab);
            
            const changeTab = () =>
            {
                store.activeTab = 'calculation';
            }

            return {
                activeTab,
                changeTab,
            };
        },
    }
</script>
    
<style scoped>
    .tab-cost-calculation {
        width: 205px;
        height: 52px;
        padding: 15px 20px;
        font-size: var(--font-size);
        font-weight: 700;
        line-height: 18px;
        text-align: center;
        color: var(--vt-c-black);
        background: var(--vt-c-light-gray);
        border-top-left-radius: var(--border-radius);
        user-select: none;
    }
    .tab-cost-calculation.active {
        background: var(--vt-c-white);
        top: 0;
        color: var(--vt-c-red);        
    }
</style>
  