<template>
    <div class="form-input-binding">
        <div class="text">
            {{ message }}
        </div>
        <div class="input-form">
            <select v-model="message">
                <option disabled="">Choose one</option>
                <option value="one">One</option>
                <option value="two">Two</option>
            </select>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                message: ''
            }
        }
    }
</script>

<style lang="scss" scoped>
</style>