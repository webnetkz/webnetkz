<template>
    <div class="search-input-container">
        <img src="../../assets/images/elements/search.svg" alt="search image">
        <input type="text" class="search-input" :value="text">
    </div>
</template>
  
<script>  
    export default {
      name: 'SearchInput',
      props: {
        text: {
          type: String,
        }
      },
      setup() {

        return {
        };
      },
    }
</script>
  
<style scoped>
  .search-input-container {
    position: relative;
  }
  .search-input-container > img {
    position: absolute;
    top: 12px;
    left: 12px;
  }
  .search-input {
    min-width: 350px;
    height: 48px;
    outline: none;
    padding: 12px 16px 12px 48px;
    border: 1px solid var(--border-color);
    border-radius: var(--border-radius);
    font-family: var(--font-family);
  }
  @media (max-width: 1024px) {
    .search-input-container {
      width: 200px;
    }
    .search-input {
      min-width: 75vw;
      width: 200px;
    }
  }
</style>
