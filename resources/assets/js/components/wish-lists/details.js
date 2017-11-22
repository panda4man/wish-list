import Vue from 'vue';

Vue.component('wish-list-details', {
    props: ['wishList'],
    data() {
        return {

        }
    },
    mounted() {
        console.log(this.wishList);
    }
});