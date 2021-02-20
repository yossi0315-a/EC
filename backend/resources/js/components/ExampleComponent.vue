<template>
    <div class="container">
        <div class="row justify-content-center mt-1">
            <div class="col-md-12">
                <div>
                    <a class="MyButton">購入</a>
                    <a class="MyButton">お気に入り</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['post'],
        mounted () {
            console.log(this.post);
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
