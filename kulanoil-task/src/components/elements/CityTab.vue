<template>
    <button> {{ city }}</button>
</template>
  
<script>  
    export default {
      name: 'CityTab',
      props: {
        city: {
          type: String,
          required: true
        }
      },
      setup() {

        return {
          
        };
      },
    }
</script>
  
<style scoped>
    button {
        background: var(--vt-c-light-gray);
        padding: 6px 12px;
        border-radius: var(--border-radius);
        font-size: var(--font-size);
        font-weight: 400;
        line-height: 18px;
        text-align: left;
        border: none;
    }
    button:hover {
        cursor: pointer;
        background: var(--vt-c-red);
        color: var(--vt-c-white);
    }
</style>