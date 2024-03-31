<template>
    <div class="tab-courier" @click="changeTab" :class="{ 'active': activeTab === 'courier' }">
        Вызвать курьера
    </div>
</template>
    
<script>
    import { useStore } from '@/stores/store.js';
    import { computed } from 'vue';

    export default
    {
        name: 'CourierCall',
        setup()
        {
            const store = useStore();
            const activeTab = computed(() => store.activeTab);
            
            const changeTab = () =>
            {
                store.activeTab = 'courier';
            }

            return {
                activeTab,
                changeTab,
            };
        },
    }
</script>
    
<style scoped>
    .tab-courier {
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
        user-select: none;
    }
    .tab-courier.active {
        background: var(--vt-c-white);
        top: 0;
        color: var(--vt-c-red);
    }
    @media (max-width: 1024px) {
        .tab-courier {
            padding: 6px 20px;
        }
    }
</style>
  