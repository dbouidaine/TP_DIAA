/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import 'bootstrap/dist/css/bootstrap.min.css';
import 'mdbvue/lib/css/mdb.min.css';
import '@fortawesome/fontawesome-free/css/all.css'; 
window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */
// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
Vue.component('navbar-compo', require('./components/NavBar.vue').default);

Vue.component('login-compo',require('./components/Login.vue').default);

Vue.component('rech-compo', require('./components/Recherche.vue').default);

Vue.component('user-card', require('./components/UserCard.vue').default);

Vue.component('add-admin', require('./components/AddAdmin.vue').default);

Vue.component('data-table', require('./components/DataTable.vue').default);

Vue.component('modal-table', require('./components/ModalTable.vue').default);

Vue.component('list-compo', require('./components/List.vue').default);

//Vue.component('login', require('./components/LoginForm.vue'));s

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data:{
      resultData: ''
        },
    methods:{
        'research_data' : function(data){
            this.resultData=data.data; 
        }
    }
});
