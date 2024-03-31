<template>
    <button :style="{ width: buttonWidth }"> {{ text }}</button>
</template>
  
<script>  
    export default
    {
      name: 'Button',
      props:
      {
        text:
        {
          type: String,
          required: true
        },
        buttonWidth: {
          type: String,
          default: '276px'
        }
      },
    }
</script>
  
<style scoped>
    button {
        min-width: 276px;
        height: 46px;
        border: 1px solid var(--vt-c-red);
        background: var(--vt-c-red);
        border-radius: var(--border-radius);
        color: var(--vt-c-white);
        font-weight: 700;
        font-size: 16px;
        line-height: 20px;
        align-items: center;
        transition-duration: 300ms;
    }
    button:hover {
        cursor: pointer;
        background: var(--vt-c-white);
        color: var(--vt-c-red);
    }
</style>
