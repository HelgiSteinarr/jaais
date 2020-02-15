<template>
    <div>
        <H3>Vöruflokkar</H3>
        <div class="card card-body" v-for="itemCollection of itemCollections" v-bind:key="itemCollection.collection_id">
            <h5 class='mb-5'>{{ itemCollection.collection_name }}</h5>
            <div>
                <div class="card card-body" v-for="collection_item of itemCollection.collection_items[0]" v-bind:key="collection_item.item_id">
                    <span>{{ collection_item.item_name }}</span>
                    <span>{{ collection_item.item_desc }}</span>
                    <span>{{ collection_item.item_color }}</span>
                    <span>{{ collection_item.item_sizes }}</span>
                    <span>{{ collection_item.item_inventory }}</span>
                    <span>{{ collection_item.item_price }}</span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'itemcollections',
        data (){
            return {
                itemCollections: [],
                itemCollection: {
                    collection_id: '',
                    collection_name: '',
                    collection_items: []
                },
                collection_id : ''
            }
        },
        created(){
            this.fetchItemCollections();
        },

        methods: {
            async fetchItemCollections(){
                let res = await fetch('../api/itemCollections');
                let jsonRes = await res.json();
                this.itemCollections = jsonRes.data;
            }
        }
    }
</script>