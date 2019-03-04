<template>
    <div id="my-text">
        This is my text
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log(this.$el)
            console.log(document.getElementById('my-text').innerHTML)
        }
    }
</script>

<style lang="scss" scoped>
</style>