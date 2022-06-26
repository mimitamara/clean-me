require('./bootstrap');

import Vue from 'vue'
import App from './components/AdminStatistics'

new Vue({
    render: h => h(App)
}).$mount('#admin-statistics')
