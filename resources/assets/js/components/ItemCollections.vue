<template>
    <div>
        <H3>Vöruflokkar</H3>
        <div class="card card-body">
            <router-link to="store/packageDeals"><h5 class="">Pakka tilboð</h5></router-link>
        </div>
        <div class="rounded box-shadow" v-for="itemCollection of itemCollections" v-bind:key="itemCollection.collection_id">
            <router-link :to="{ name: 'collection', params: { id: itemCollection.collection_id }}"><h5 class='mb-5'>{{ itemCollection.collection_name }}</h5></router-link>
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