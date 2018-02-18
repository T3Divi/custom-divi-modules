// Import all of NPM.
import Vue from 'vue'
import VueRouter from 'vue-router'
import VueAxios from 'vue-axios'
import Vuetify from 'vuetify'
import 'babel-polyfill'
import axios from 'axios'
import ListBaseComponent from './components/list.vue'
import EditBaseComponent from './components/edit.vue'

// Bootstrap the application.
import './bootstrap'

(($) => {
    // Get VueJS ready.
    Vue.use(VueRouter)
    Vue.use(VueAxios, axios)
    Vue.use(Vuetify)

    // Mount VueJS when the page is loaded.
    const router = new VueRouter({ mode: 'history' })
    $(document).ready(() => {
        // Mount the correct VueJS app depending on what admin page we are
        // viewing.
        if ($('#haydn-custom-divi-modules-list').length) {
            new Vue(Vue.util.extend({ router }, ListBaseComponent)).$mount('#haydn-custom-divi-modules-list')
        }
        else if ($('#haydn-custom-divi-modules-edit').length) {
            new Vue(Vue.util.extend({ router }, EditBaseComponent)).$mount('#haydn-custom-divi-modules-edit')
        }
    });
})(jQuery)
