<template>
    <div class="card">
        <h4>Flokkur {{ $route.params.id }}</h4>
        <div class="card card-body" v-for="storeItem of storeItems" v-bind:key="storeItem.item_id">
                    <router-link :to="{ name: 'item', params: { item_id: storeItem.item_id, id: $route.params.id }}">
                        <h5>{{ storeItem.item_name }}</h5>
                    </router-link>

                    <!--<div class="card card-body"><h6>Lýsing</h6><span>{{ storeItem.item_desc }}</span></div>
                    <div class="card card-body"><h6>Litur</h6><span>{{ storeItem.item_color }}</span></div>
                    <div class="card card-body"><h6>Stærðir</h6><span>{{ storeItem.item_sizes }}</span></div>
                    <div class="card card-body"><h6>Á lager</h6><span>{{ storeItem.item_inventory }}</span></div>
                    <div class="card card-body"><h6>Verð</h6><span>{{ storeItem.item_price }}</span></div>-->
        </div>
    </div>
    
</template>
<script>
    export default {
        name: 'singlecollection',
        data (){
            return {
                storeItems: []
            }
        },
        created(){
            this.fetchItemCollection();

        },

        methods: {
            async fetchItemCollection(){
            let res = await fetch('../api/itemCollection/' + this.$route.params.id);
            let jsonRes = await res.json();
            this.storeItems = jsonRes.data.collection_items[0];
            }
        }
    }

</script>