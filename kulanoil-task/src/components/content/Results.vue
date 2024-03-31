<template>
    <div class="results-container">
        <div>
            <div class="disctance-container">
                <img src="../../assets/images/results/distance.svg" alt="disctance icon" class="result-icon">
                <span>Расстояние: <b>{{ distance }} км</b></span>
            </div>
            <div class="clock-container">
                <img src="../../assets/images/results/clock.svg" alt="clock icon" class="result-icon">
                <span>Время: <b>{{ time }} ч 0 мин</b></span>
            </div>
            <div class="tange-container">
                <img src="../../assets/images/results/tenge.svg" alt="tenge icon" class="result-icon">
                <span>Стоимость: <b>{{ cash }} ₸</b></span>
            </div>
        </div>
        <button @click="resetResults">Сбросить</button>
    </div>
</template>
    
<script>
    import { useStore } from '@/stores/store.js';
    import { computed } from 'vue';

    export default
    {
        name: 'Results',
        setup()
        {
            const store = useStore();
            const distance = computed(() => store.resultDistance);
            const time = computed(() => store.resultTime);
            const cash = computed(() => store.resultCash);

            const resetResults = (btn) =>
            {
                store.resultDistance = 0;
                store.resultTime = 0;
                store.resultCash = 0;
                store.fromCity = '';
                store.toCity = '';
                store.isResults = false;
                btn.target.parentNode.parentNode.querySelector('button.active').classList.remove('active');
                btn.target.parentNode.parentNode.querySelector('button.active').classList.remove('active');
            }

            return {
                distance,
                time,
                cash,
                resetResults,
            };
        },
    }
</script>
    
<style scoped>
    .results-container {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-top: 24px;
    }
    .results-container > div {
        display: flex;
        align-items: center;
    }
    .results-container > div > div {
        display: flex;
        align-items: center;
        margin-right: 24px;
    }
    .result-icon {
        margin-right: 12px;
    }
    .results-container > div > div > span {
        color: var(--vt-c-black);
    }
    .results-container > div > div > span > b {
        font-weight: 800;
        font-size: 16px;
    }
    button {
        font-size: 16px;
        font-weight: 700;
        line-height: 20px;
        text-align: right;
        border: none;
        outline: none;
        background: none;
        color: var(--vt-c-red);
    }
    button:hover {
        cursor: pointer;
    }

    @media (max-width: 1024px) {
        .results-container {
            flex-direction: column;
        }
        .results-container > div {
            flex-direction: column;
            align-items: flex-start;
        }
        .results-container > div > div {
            margin-bottom: 12px;
        }
    }
</style>
  