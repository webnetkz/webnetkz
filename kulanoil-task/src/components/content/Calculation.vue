<template>
    <div class="calculation-container">
        <div class="from-search-container">
            <SearchInput placeholder="Откуда" :text="fromCity" @input="changeFromCity" />
            <div class="city-container">
                <CityTab city="Астана" @click="setFromCity" />
                <CityTab city="Алматы" @click="setFromCity" />
                <CityTab city="Шымкент" @click="setFromCity" />
            </div>
        </div>
        <div class="to-search-container">
            <SearchInput placeholder="Куда" :text="toCity"  @input="changeToCity" />
            <div class="city-container">
                <CityTab city="Астана" @click="setToCity" />
                <CityTab city="Алматы" @click="setToCity" />
                <CityTab city="Шымкент" @click="setToCity" />
            </div>
        </div>
        <div class="button-container">
            <Button text="Рассчитать стоимость" @click="getResults" />
        </div>
    </div>
    <Results v-if="isResults" />
</template>
    
<script>
    import { useStore } from '@/stores/store.js';
    import { computed } from 'vue';
    import SearchInput from '../elements/SearchInput.vue';
    import Button from '../elements/Button.vue';
    import CityTab from '../elements/CityTab.vue';
    import Results from './Results.vue';
  

    export default
    {
        name: 'Calculation',
        components:
        {
            SearchInput,
            Button,
            CityTab,
            Results,
        },
        setup()
        {
            const store = useStore();
            const isResults = computed(() => store.isResults);
            const fromCity = computed(() => store.fromCity);
            const toCity = computed(() => store.toCity);
            const cities = store.cities;
            const distances = store.distances;


            const changeFromCity = (event) => {
                store.fromCity = event.target.value.trim();
            };

            const changeToCity = (event) => {
                store.toCity = event.target.value.trim();
            };

            const setFromCity = (city) => {
                store.fromCity = city.target.innerText;
                try {
                    city.target.parentNode.querySelector('.active').classList.remove('active');
                } catch (error) {}
                city.target.classList.add('active');
            }

            const setToCity = (city) => {
                store.toCity = city.target.innerText;
                
                try {
                    city.target.parentNode.querySelector('.active').classList.remove('active');
                } catch (error) {}

                city.target.classList.add('active');
            }

            const getResults = () => {
                if (fromCity.value != false && toCity.value != false)
                {
                    const from = cities.find(city => city.address === fromCity.value);
                    const to = cities.find(city => city.address === toCity.value);
                    
                    let distance = distances.find(distance => {
                        return distance.from === from.id && distance.to === to.id ||
                        distance.from === to.id && distance.to === from.id
                    });

                    if (fromCity.value == toCity.value)
                    {
                        distance = {"value": 50};
                    }

                    if (distance.value <= 100)
                    {
                        store.resultTime = 24;
                    } 
                    else if(distance.value >= 100 && distance.value <= 499)
                    {
                        store.resultTime = 48;
                    } else {
                        store.resultTime = 96;
                    }

                    store.resultDistance = distance.value;
                    store.resultCash = distance.value * 10;

                    store.isResults = true;
                } 
            };

            return {
                isResults,
                changeFromCity,
                changeToCity,
                getResults,
                setFromCity,
                setToCity,
                fromCity,
                toCity,
            };
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
  