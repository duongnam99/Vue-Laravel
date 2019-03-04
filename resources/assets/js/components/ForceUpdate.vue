<template>
    <div>
        <div>
            Name: {{ person.name }}
        </div>
        <div>
            Nick name: {{ person.nickname }}
        </div>
        <div>
            <button @click="changeName">Change Name</button>
        </div>
        <div>
            <button @click="changeNickname">Change Nick Name</button>
        </div>
        <div>
            <button @click="changeNicknameProperly">Change NIck name properly</button>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                person: {
                    name: 'Edson'
                }
            }
        },
        methods: {
            changeName() {
                this.person.name = 'Arantes';
            },
            changeNickname() {
                this.person.nickname = Math.random().toString(36).substring(7);
                this.$forceUpdate()
            },
            // để Vue có thể tự động render lại DOM thì các dữ liệu phụ thuộc phải được
            // khai báo ban đầu là "reactive data" hoặc được thiết lập bằng cách gọi Vue.set()
            changeNicknameProperly() {
                Vue.set(this.person, 'nickname', 'Louis');
            }
        }
    }
</script>

<style lang="scss" scoped>
</style>