
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});

$(function clickableTable(){
    $('.table tr[data-href]').each(function(){
        $(this).css('cursor','pointer').click( function(){
                window.location.href += '/'+$(this).attr('id');
            }
        );
    });

    $('.table tr[data-href-book]').each(function(){
        $(this).css('cursor','pointer').click( function(){
                window.location.href = '/books/'+$(this).attr('id');
            }
        );
    });
});