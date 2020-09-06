require('./bootstrap');

window.Vue = require('vue');

// Layout
Vue.component('precon-topbar', require('./components/precon/layout/precon-topbar.vue').default);
Vue.component('precon-header', require('./components/precon/layout/precon-header.vue').default);
Vue.component('precon-footer', require('./components/precon/layout/precon-footer.vue').default);

// Components
Vue.component('precon-hero', require('./components/precon/component/precon-hero.vue').default);
Vue.component('precon-whychoose', require('./components/precon/component/precon-whychoose.vue').default);
Vue.component('precon-calltoaction', require('./components/precon/component/precon-calltoaction.vue').default);
Vue.component('precon-services', require('./components/precon/component/precon-services.vue').default);
Vue.component('precon-testimonial', require('./components/precon/component/precon-testimonial.vue').default);
Vue.component('precon-news', require('./components/precon/component/precon-news.vue').default);
Vue.component('precon-partner', require('./components/precon/component/precon-partner.vue').default);

const app = new Vue({
    el: '#app',
});
