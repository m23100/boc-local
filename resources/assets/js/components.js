const Vuetable = require('vuetable/src/components/Vuetable.vue');
const VuetablePagination = require('vuetable/src/components/VuetablePagination.vue');
const VuetablePaginationDropdown = require('vuetable/src/components/VuetablePaginationDropdown.vue');

const BootstrapPagination = require('./components/BootstrapPagination.vue');

const VuestrapDatepicker = require('vue-strap').datepicker;
const VuestrapAlert = require('vue-strap').alert;

const Avatar = require('./components/Avatar.vue');
const Actions = require('./components/Actions.vue');
const Notify = require('./components/Notify.vue');
const ImageInput = require('./components/ImageInput.vue');
const CRUDForm = require('./components/CRUDForm.vue');

const Top = require('./components/Top.vue');
const Left = require('./components/Left.vue');
const Right = require('./components/Right.vue');
const Middle = require('./components/Middle.vue');
const Bottom = require('./components/Bottom.vue');

Vue.component('vuetable', Vuetable);
Vue.component('vuetable-pagination', VuetablePagination);
Vue.component('vuetable-pagination-dropdown', VuetablePaginationDropdown);

Vue.component('bootstrap-pagination', BootstrapPagination);

Vue.component('datepicker', VuestrapDatepicker);
Vue.component('alert', VuestrapAlert);

Vue.component('avatar', Avatar);
Vue.component('actions', Actions);
Vue.component('notify', Notify);
Vue.component('image-input', ImageInput);
Vue.component('crud-form', CRUDForm);

Vue.component('top', Top);
Vue.component('left', Left);
Vue.component('right', Right);
Vue.component('middle', Middle);
Vue.component('bottom', Bottom);