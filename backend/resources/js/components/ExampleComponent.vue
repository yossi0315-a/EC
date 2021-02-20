<template>
    <div class="container">
        <div class="row justify-content-center mt-1">
            <div class="col-md-12">
                <div>
                    <p>{{ message }}</p>
                    <button @click="click" class="MyButton">購入</button>
                    <button class="MyButton">お気に入り</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        data:function() {
            return {
                message: 'hello',
            };
        },
        methods: {
            click: function() {
                this.message = this.message.split('')
            }
        }
     }

</script>

<style>
    .MyButton {
        background-color: #00a656;
        border-radius: 1.0em;
        box-shadow: 0 0.2em 0.5em rgba(0, 0, 0, 0.2);
        padding: 0.75em 0.75em;
        color: #ffffff;
        font-weight: bold;
        text-decoration: none;
    }

</style>
