<template>
    <div class="container">
        <div class="form-inline">
        <input type="number" v-model="left_val" min="0">
        +
        <input type="number" v-model="right_val" min="0">
        </div>
        <p>= {{ plus }}</p>
    </div>

</template>

<script>
    export default {
        name: "TestComponent",
        data() {
            return {
              left_val: 0,
              right_val: 0
            };
        },
        computed: {
            plus: function () {
                return parseInt(this.left_val) + parseInt(this.right_val);
            }
        }
    }

</script>

<style scoped>

</style>