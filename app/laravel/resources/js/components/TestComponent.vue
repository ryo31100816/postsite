<template>
    <div class="container">
          <div class="row">
            <form name="items">
                <draggable tag="ul" :value="items" :animation="animation" :group="{ name: 'items',pull: 'clone', put: false }" :clone="testcal">
                    <li v-for="(item, index) in items" :key="index" class="border">
                        <input type="checkbox" name="item" :value="item.name" />{{ item.name }}</li>
                </draggable>
            </form>
            <div class="m-2">
                <button type="button" @click="clickAdd">UP</button>
                <button type="button" @click="clcikDelete">DEL</button>
            </div>
            <div class="w-75 border">
                <form name="list">
                    <draggable tag="ul" id="list" class="w-100" v-model="list" :animation="animation" group="items">
                        <li v-for="(item, index) in list" :key="index" class="border">
                            <input type="text" name="name" :value="item.name" @input="onInput(index, $event)" />
                         </li>
                    </draggable>
                </form>
            </div>
        </div>
    </div>
</template>

<script>

    var items = [];
    for(var i = 1; i <= 5; i++){
    items.push({ 'id': i, 'name' : 'item-' + i});
    }

   import draggable from 'vuedraggable';

export default {
    components: {
        draggable
    },
    data: function() {
        return {
            animation: 200,
            items: items,
            list: [],
            test: [],
            respone: null
        };
    },
    methods: {
        onInput: function(index, e) {
            const name = e.target.name;
            const value = e.target.value;
            this.changeObject(index, name, value);
        },
        changeObject: function(index, name, value) {
            this.list[index][name] = value;
        },
        testcal: function(original) {
            console.log(original.id);
            this.test.push({id : original.id, name : original.name });
            return {id : original.id, name : original.name };
        },
        getListItem: function() {
            axios.get('/ajax')
                .then(respone => (this.respone = respone));
        },
        clickAdd: function(e) {
            console.log(e);
            const add_item = document.items.item
            console.log(add_item);
            for(let i = 0; i <= add_item.length; i++) {
                if(add_item[i].checked) {
                    this.list.push(this.getObjectTemp(i, add_item[i].value));
                }
            }
        },
        clcikDelete: function(e) {

        },
        getObjectTemp: function(index, name) {
            return { id : index, name : name };
        }
    },
    mounted() {
        this.getListItem();
    }
}

</script>
