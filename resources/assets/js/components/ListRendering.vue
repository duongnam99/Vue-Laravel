<template>
    <div class="list-rendering">
        <ul>
            <li v-for="(value, key) of myInfo">
                {{ key }} - {{ value }}
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                myInfo: {
                    name: 'Mai Trung Duc',
                    age: '2x',
                    country: 'vietnam'
                }
            }
        }
    }
</script>

<style lang="scss" scoped>
</style>