<template>
    <div class="search-input-container">
        <input type="text" class="search-input" :value="text" :placeholder="placeholder" :style="{ width: inputWidth }">
    </div>
</template>
  
<script>  
    export default
    {
      name: 'SearchInput',
      props:
      {
        text:
        {
          type: String,
        },
        placeholder:
        {
          type: String,
        },
        inputWidth: {
          type: String,
          default: '350px'
        }
      },
    }
</script>
  
<style scoped>
  .search-input-container {
    position: relative;
  }
  .search-input-container::after {
    content: "";
    position: absolute;
    top: 12px;
    left: 12px;
    width: 24px;
    height: 24px;
    background: url("../../assets/images/elements/search.svg");
  }
  .search-input {
    min-width: 150px;
    width: 350px;
    height: 48px;
    outline: none;
    padding: 12px 16px 12px 48px;
    border: 1px solid var(--border-color);
    border-radius: var(--border-radius);
    font-family: var(--font-family);
  }
  .search-input:focus {
    border-color: var(--vt-c-red);
    font-size: 18px;
  }
  .search-input::placeholder {
    color: var(--vt-c-black);
  }
  @media (max-width: 1024px) {
    .search-input-container {
      width: 50vw;
    }
    .search-input-container .search-input {
      width: 76vw!important;
    }
  }
</style>
