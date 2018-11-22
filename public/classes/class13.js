window.Event = new Vue();

Vue.component('coupon', {

    template: `
    <input placeholder="Enter you coupon!!!" @blur="onCouponApplied">
    `,

    methods: {
        onCouponApplied() {
            Event.$emit('applied');
        }
    }

});

let app = new Vue({

    el: '#root',

    data: {

        couponApplied: false

    },

    created() {
        Event.$on('applied', () => alert("Handling it!"))
    }

});