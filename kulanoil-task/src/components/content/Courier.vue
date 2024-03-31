<template>
    <div class="calculation-container">
        <div class="from-search-container">
            <SearchInput placeholder="Откуда"/>
            <div class="city-container">
                <CityTab city="Астана"/>
                <CityTab city="Алматы"/>
                <CityTab city="Шымкент"/>
            </div>
        </div>
        <div class="to-search-container">
            <SearchInput placeholder="Куда"/>
            <div class="city-container">
                <CityTab city="Астана"/>
                <CityTab city="Алматы"/>
                <CityTab city="Шымкент"/>
            </div>
        </div>
        <div class="button-container">
            <Button text="Вызвать курьера"/>
        </div>
    </div>
</template>
    
<script>
import SearchInput from '../elements/SearchInput.vue';
    import Button from '../elements/Button.vue';
    import CityTab from '../elements/CityTab.vue';
  

    export default
    {
        name: 'Courier',
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
    .from-search-container,
    .to-search-container {
        position: relative;
    }
    .from-search-container::after {
        content: "";
        position: absolute;
        width: 24px;
        height: 24px;
        right: -28px;
        top: 12px;
        background: url("../../assets/images/arrows.svg");
    }
    .city-container {
        margin-top: 12px;
    }
    .city-container > *:first-child {
        margin-right: 12px;
    }
    .city-container > *:last-child {
        margin-left: 12px;
    }

    @media (max-width: 1024px) {
        .calculation-container {
            flex-direction: column;
            width: 50vw;
        }
        .city-container {
            width: 80vw;
            margin-bottom: 12px;
        }
        .from-search-container::after {
            background: none;
        }
    }
</style>
  