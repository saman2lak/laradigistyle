<template>
    <div>
        <date-picker v-model="date"></date-picker>
    </div>
</template>

<script>
    import VuePersianDatetimePicker from 'vue-persian-datetime-picker';
    export default {
        name: "date-picker",
        data(){
            return {
                date:'',
                dateend:'',
            }
        },
        components:{
            datepicker: VuePersianDatetimePicker
        }
    }
</script>

<style scoped>

</style>
