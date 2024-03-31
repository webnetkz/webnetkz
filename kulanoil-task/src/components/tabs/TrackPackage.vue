<template>
    <div class="tab-track-package" @click="changeTab" :class="{ 'active': activeTab === 'tracking' }">
        Отследить посылку
    </div>
</template>
    
<script>
    import { useStore } from '@/stores/store.js';
    import { computed } from 'vue';

    export default
    {
        name: 'TrackPackage',
        setup()
        {
            const store = useStore();
            const activeTab = computed(() => store.activeTab);
            
            const changeTab = () =>
            {
                store.activeTab = 'tracking';
            }

            return {
                activeTab,
                changeTab,
            };
        },
    }
</script>
    
<style scoped>
    .tab-track-package {
        position: relative;
        top: 6px;
        width: 188px;
        height: 52px;
        border-bottom: 6px solid var(--vt-c-white);
        padding: 12px 20px;
        font-size: var(--font-size);
        font-weight: 700;
        line-height: 18px;
        text-align: center;
        color: var(--vt-c-black);
        background: var(--vt-c-light-gray);
        border-top-right-radius: var(--border-radius);
        user-select: none;
    }
    .tab-track-package.active {
        background: var(--vt-c-white);
        top: 0;
        color: var(--vt-c-red);
    }
    .tab-track-package::after {
        content: "";
        position: absolute;
        top: -15%;
        right: -600px;
        width: 600px;
        height: 115%;
        background: var(--vt-c-light-gray);
    }
    .tab-track-package.active::after {
        width: 0;
    }
    @media (max-width: 1024px) {
        .tab-track-package {
            padding: 6px 20px;
        }
    }
</style>
  