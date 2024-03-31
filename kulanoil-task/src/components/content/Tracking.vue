<template>
    <div class="calculation-container">
        <SearchInput placeholder="Укажите номер накладной" input-width="580px" />
        <Button text="Отследить посылку" button-width="440px" />
    </div>
</template>
    
<script>
    import SearchInput from '../elements/SearchInput.vue';
    import Button from '../elements/Button.vue';
    import CityTab from '../elements/CityTab.vue';


    export default
    {
        name: 'Tracking',
        components:
        {
            SearchInput,
            Button,
            CityTab,
        },
    }
</script>
    
<style scoped>
    .calculation-container {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
    }

    @media (max-width: 1024px) {
        .calculation-container {
            flex-direction: column;
            width: 96vw;
        }
        .calculation-container > * {
            margin-bottom: 12px;
        }
        .calculation-container > button {
            max-width: 76vw;
        }
    }
</style>
  