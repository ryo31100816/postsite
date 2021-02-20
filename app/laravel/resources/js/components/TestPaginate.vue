<template>
    <div class="container">
        <ul>
            <li v-for="(value, key) in getItems" :key="key">
                <div>
                    <p>投稿ID{{ value.id }}</p>
                    <p>内容{{ value.contents }}</p>
                </div>
            </li>
        </ul>
        <paginate
            :page-count="getPageCount"
            :page-range="5"
            :margin-pages="2"
            :click-handler="clickCallback"
            :prev-text="'＜'"
            :next-text="'＞'"
            :container-class="'pagination justify-content-center'"
            :page-class="'page-item'"
            :page-link-class="'page-link'"
            :prev-class="'page-item'"
            :prev-link-class="'page-link'"
            :next-class="'page-item'"
            :next-link-class="'page-link'">
        </paginate>
    </div>
</template>     

<script>
var items = [];
 
for(var i=1; i<=105; i++){
  items.push('item-' + i);
}
import paginate from 'vuejs-paginate';
export default {
    components: {
        paginate
    },
    props: {
        posts: Array
    },
    data: function() {
        return {
            items: this.posts,
            parPage: 5,
            currentPage: 1,
        };
    },
    methods: {
        clickCallback: function(pageNum) {
            this.currentPage = Number(pageNum);
            console.log('どうよ');
        }
    },
    computed: {
        getItems: function() {
            let current = this.currentPage * this.parPage;
            let start = current - this.parPage;
            return this.items.slice(start, current);
        },
        getPageCount: function() {
            return Math.ceil(this.items.length / this.parPage);
        }
    },
    mounted() {
        console.log('ページネーションマウント')
    }
}
</script>