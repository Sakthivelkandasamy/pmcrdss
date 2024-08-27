import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'

export default defineConfig({
    base: '/',
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/bootstrap/bootstrap.min.css',
                'resources/css/bootstrap/select2.min.css',
                'resources/js/app.js',
                'resources/js/workflow-chart.js'
                ],
            refresh: true,
        }),
        vue(),
    ],
    optimizeDeps: {
        include: ['jquery', 'jsplumb','chart.js', 'vue-chartjs']
    },
   
    resolve: {
        alias: {
            'vue': 'vue/dist/vue.esm-bundler.js',
            '@': '/resources/js',
        }
    },

    css: {
      postcss: './postcss.config.mjs'
    },
    build: {
        sourcemap: false // Disable source maps
    }

});
