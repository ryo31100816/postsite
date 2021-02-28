<template>
    <div class="container">
        <div class="row">
            <div class="col-6">
            <textarea v-model="message"></textarea>
                <br>
            <button type="button" @click="send">送信</button>
            </div>
            <div class="col-6">
                <ul>
                    <li v-for="(item, index) in posts" :key="index">
                    {{ item }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>


<script>
export default {
    data: function() {
        return {
            message: '',
            posts: [],
        }
    },
    methods: {
        send: function() {
            const url = '/ajax/pusher';
            const params = { message: this.message };
            axios.post(url, params)
                .then((response) => {
                    // 成功したらメッセージをクリア
                    this.message = '';
                })
                .catch(err => {
                    console.log(err);
                });
        },
        getPosts: function() {
            axios.get('/ajax')
                .then(response => {
                    this.posts = response.data;   
                })
                .catch(err => {
                    console.log('エラーやで');
                })
        }
    },
    mounted() {
        this.getPosts();

        Echo.channel('post')
            .listen('MessagePusher', (e) => {
                this.getPosts();
            });
    }

}
</script>