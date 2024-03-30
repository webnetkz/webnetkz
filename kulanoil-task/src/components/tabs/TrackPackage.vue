<template>
    <div class="tab-track-package">
        Отследить посылку
    </div>
</template>
    
<script>  
    export default {
        name: 'TrackPackage',
        setup() {
  
          return {
            
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
        border-top-right-radius: var(--border-radius)
    }
    .tab-track-package::after {
        content: "";
        position: absolute;
        top: -10%;
        right: -600px;
        width: 600px;
        height: 110%;
        background: var(--vt-c-light-gray);
    }
</style>
  