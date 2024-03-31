# Kulanoil-task
Калькулятор без использования сторонних зависимостей.
Есть множетво недоработок, которые недопустимы для продакшена.
Вопросов не было, потому что это тестовое задание.


## Структура файлов
<pre>
.
├── App.vue
├── assets
│   ├── fonts
│   │   ├── Mulish-Italic-VariableFont_wght.ttf
│   │   └── Mulish-VariableFont_wght.ttf
│   ├── images
│   │   ├── arrows.svg
│   │   ├── elements
│   │   │   └── search.svg
│   │   └── results
│   │       ├── clock.svg
│   │       ├── distance.svg
│   │       └── tenge.svg
│   └── styles
│       ├── base.css
│       └── main.css
├── components
│   ├── CalculatorContainer.vue
│   ├── TabsContainer.vue
│   ├── content
│   │   ├── Calculation.vue
│   │   ├── Courier.vue
│   │   ├── Results.vue
│   │   └── Tracking.vue
│   ├── elements
│   │   ├── Button.vue
│   │   ├── CityTab.vue
│   │   └── SearchInput.vue
│   └── tabs
│       ├── CostCalculation.vue
│       ├── CourierCall.vue
│       └── TrackPackage.vue
├── main.js
└── stores
    └── store.js
</pre>

## Установка

1. Склонируйте репозиторий:

```bash
git clone https://github.com/webnetkz/webnetkz.git
```

2. Перейдите в каталог проекта:

```bash
cd webnetkz/kulanoil-task
```

3. Установите зависимости проекта, используя npm:

```bash
npm i
```

## Запуск

Чтобы запустить проект, выполните следующую команду:

```bash
npm run dev
```

Это запустит проект локально для разработки