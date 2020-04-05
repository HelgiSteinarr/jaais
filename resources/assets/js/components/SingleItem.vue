<template>
    <div>
        <div class="container"><img src="" width="150" height="180"/></div>
        <h4>{{ storeItem.item_name }}</h4>
        
        <h5>Lýsing</h5>
        <div class="container"> {{ storeItem.item_desc }} </div>
        <h6>Litir</h6>
        <div class="container"> {{ storeItem.item_color }} </div>
        <h6>Stærðir</h6>
        <div class="container"> {{ storeItem.item_sizes }} </div>
        <div class="container"><b>Á lager:</b> {{ storeItem.item_inventory }} </div>
    </div>
</template>
<script>
    export default {
        name: 'singleitem',
        data (){
            return {
                storeItem: []
            }
        },
        created(){
            this.fetchItemCollection();

        },

        methods: {
            async fetchItemCollection(){
            let res = await fetch('../api/storeItem/' + this.$route.params.item_id);
            let jsonRes = await res.json();
            //this.itemCollection = jsonRes.data;
            this.storeItem = jsonRes.data;
            }
        }
    }
</script>