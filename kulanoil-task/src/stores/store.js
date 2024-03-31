import { defineStore } from 'pinia';
import { ref } from 'vue';

export const useStore = defineStore({
  id: 'store',
  
  state: () => ({
    activeTab: ref('calculation'),
    isResults: ref(0),
    fromCity: ref(''),
    toCity: ref(''),
    resultDistance: ref('0'),
    resultTime: ref('0'),
    resultCash: ref('0'),

    cities: [
      {
        "id": 1,
        "address": "Алматы"
      },
      {
        "id": 2,
        "address": "Астана"
      },
      {
        "id": 3,
        "address": "Кызылорда"
      },
      {
        "id": 4,
        "address": "Костанай"
      },
      {
        "id": 5,
        "address": "Петропавловск"
      },
      {
        "id": 6,
        "address": "Шымкент"
      }
    ],

    distances: [
      {
        "from": 1,
        "to": 2,
        "value": 5551
      },
      {
        "from": 1,
        "to": 3,
        "value": 1231
      },
      {
        "from": 1,
        "to": 4,
        "value": 8585
      },
      {
        "from": 1,
        "to": 5,
        "value": 8244
      },
      {
        "from": 1,
        "to": 6,
        "value": 7554
      },
      {
        "from": 2,
        "to": 3,
        "value": 5443
      },
      {
        "from": 2,
        "to": 4,
        "value": 2299
      },
      {
        "from": 2,
        "to": 5,
        "value": 4124
      },
      {
        "from": 2,
        "to": 6,
        "value": 3210
      },
      {
        "from": 3,
        "to": 4,
        "value": 8888
      },
      {
        "from": 3,
        "to": 5,
        "value": 4411
      },
      {
        "from": 3,
        "to": 6,
        "value": 4555
      },
      {
        "from": 4,
        "to": 5,
        "value": 3211
      },
      {
        "from": 4,
        "to": 6,
        "value": 8744
      },
      {
        "from": 5,
        "to": 6,
        "value": 4553
      }
    ]    
  }),

  actions: {
    
  },
});
