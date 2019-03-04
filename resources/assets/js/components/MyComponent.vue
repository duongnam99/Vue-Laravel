<template>
    <div class="my-component">
        <p>{{ message }}</p>
         <button v-on:click="sayHello">To say Hi</button>
        <p>{{ reverseMessage }}</p>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                message: '@ blueguy_55'
            }
        },
        methods: {
            sayHello() {
                this.message = "@ Minh Nam"
            }
        },
        computed: {
            reverseMessage() {
                return this.message.split('').reverse().join('')
            }
        },
        watch: {
            message() {
                console.log('message changed')
            },
            reverseMessage() {
                console.log('Computed changed')
            }
        }

    }
</script>

<style lang="scss" scoped>
    .my-component {
        p{
            color: red;
        }
    }
</style>