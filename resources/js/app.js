import './bootstrap';
import { createPopper } from '@popperjs/core';
import $ from 'jquery';
import { createApp } from 'vue'
import MultiSeriesColumnChart from './components/MultiSeriesColumnChart.vue'

const app = createApp({})
app.component('multi-series-column-chart', MultiSeriesColumnChart)
app.mount('#app')

