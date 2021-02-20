<template>
    <div class="container">
        <div class="row justify-content-center mt-1">
            <div class="col-md-12">
                <div>
                    <button>
                        購入
                    </button>
                    <button>
                        お気に入り
                    </button>
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


