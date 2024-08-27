<template>
  <div class="chart-container">
    <Bar v-if="loaded" :data="chartData" :options="chartOptions" />
    <p v-else>Loading chart data...</p>
  </div>
</template>

<script>
import { defineComponent } from 'vue'
import axios from 'axios'
import { Bar } from 'vue-chartjs'
import { Chart as ChartJS, Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale } from 'chart.js'

ChartJS.register(Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale)

export default defineComponent({
  name: 'MultiSeriesColumnChart',
  components: {
    Bar
  },
  data() {
    return {
      loaded: false,
      chartData: null,
      chartOptions: {
        responsive: true,
        plugins: {
          legend: {
            position: 'top',
          },
          title: {
            display: true,
            text: 'Multi-Series Bar Chart Example',
          },
        },
      },
    }
  },
  mounted() {
    console.log('Component mounted')
    this.fetchChartData()
  },
  methods: {
    fetchChartData() {
      console.log('Fetching chart data...')
      axios.get('/api/multi-series-chart-data')
        .then(response => {
          console.log('API response:', response.data)
          this.chartData = response.data
          this.loaded = true
        })
        .catch(error => {
          console.error("There was an error fetching the chart data:", error)
        })
    }
  }
})
</script>

<style scoped>
.chart-container {
  width: 80%;
  margin: 0 auto;
}
</style>