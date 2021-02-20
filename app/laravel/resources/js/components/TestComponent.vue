<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component2</div>

                    <div class="card-body">
                         <div>{{ now }}</div>
                         <input class="btn btn-primary" type="button" @click="pl" value="プラス"/>
                        <input class="btn btn-primary" type="button" @click="mi" value="マイナス"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            yourName:Number
        },
        data: function() {
            return {
                now: this.yourName
            };
        },
        methods: {
            pl: function() {
                this.now++;
            },
            mi: function() {
                this.now--;
            }
        }
    }
</script>
