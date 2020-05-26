/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");

import Loading from "vue-loading-overlay";
import "vue-loading-overlay/dist/vue-loading.css";
import VueToast from "vue-toast-notification";
import "vue-toast-notification/dist/theme-sugar.css";
import VueSweetalert2 from "vue-sweetalert2";
import "sweetalert2/dist/sweetalert2.min.css";

Vue.use(VueSweetalert2);
Vue.use(Loading);
Vue.use(VueToast);
Vue.component("loading", Loading);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);

Vue.component(
    "passport-clients",
    require("./components/passport/Clients.vue").default
);

Vue.component(
    "passport-authorized-clients",
    require("./components/passport/AuthorizedClients.vue").default
);

Vue.component(
    "passport-personal-access-tokens",
    require("./components/passport/PersonalAccessTokens.vue").default
);

Vue.component(
    "profile-component",
    require("./components/ProfileComponent.vue").default
);

Vue.component(
    "list-contact-component",
    require("./components/contact/ListContactComponent.vue").default
);

Vue.component(
    "edit-contact-component",
    require("./components/contact/EditContactComponent.vue").default
);

Vue.component(
    "create-contact-component",
    require("./components/contact/CreateContactComponent.vue").default
);

Vue.component(
    "list-trashed-contact-component",
    require("./components/contact/ListTrashedContactComponent.vue").default
);

Vue.component(
    "import-contacts-component",
    require("./components/contact/ImportContactsComponent.vue").default
);

Vue.component(
    "empty-trash-component",
    require("./components/contact/EmptyTrashComponent.vue").default
);

Vue.component(
    "empty-component",
    require("./components/EmptyComponent.vue").default
);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: "#app"
});
