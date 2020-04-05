<template>
    <header>
        <div class="outer_flex_container" v-bind:style=" outerFlexStyle ">

            <div class="flex_container">
                <div class="flex_item" v-if=" showFnT ">
                    <a href="https://www.padi.com/" target="_blank">
                        <img src="/imgs/PADI_logo.jpg"> 
                    </a>
                </div>
                <div class="flex_item_mid">
                    <a href="/">
                        <img src="/imgs/Austfirsk_logo.jpg" v-bind:style=" logoStyle ">
                    </a>
                </div>
                <div class="flex_item_right" v-if=" showFnT ">
                    <a href="https://www.mares.com/en-IC/home/" target="_blank">
                        <img src="/imgs/Mares_logo.png">
                    </a>
                </div>
            </div>

                <nav class=''>
                    <div id="nav_button">
                        Valmynd
                    </div>
                    <ul v-bind:style=" navUlStyle ">
                        <li><router-link :to="'/'" class="nav_underline">Heim</router-link></li>
                        
                        <li><router-link to='/courses' class="nav_underline">Námskeið</router-link></li>
                        <li><router-link to="/store" class="nav_underline">Verslun</router-link></li>
                        <li><router-link to="/about" class="nav_underline">Um okkur</router-link></li>
                        <li><router-link to="/contact" class="nav_underline">Hafa samband</router-link></li>
                    </ul>
                </nav>
        </div>
        <div v-bind:style=" hrStyle " class='container'><hr></div>
    </header>
</template>

<script>
    export default {
        name: "navbar",
        data() {
            return{
                showFnT: true,
                logoStyle: null,
                outerFlexStyle: null,
                navUlStyle: null,
                hrStyle: ''
            }
        },
        mounted() {
            //console.log(this.showFnT);
            console.log(this.$route.path);
            console.log('Component mounted.');
        },
        watch: {
            '$route': function ()
            {
                this.changeNavbar();
                console.log(this.$route.path);
                console.log(this.$route.matched[0].path);
            }
        },
        created() {
            window.addEventListener('resize', this.changeNavbar);
            this.changeNavbar();
        },
        destroyed() {
            window.removeEventListener('resize', this.changeNavbar)
        },
        methods: {
            changeNavbar: function(){
                // Changes navbar to and from 'store' mode

                this.cond = this.$route.matched[0].path == '/store'; // Stores: true/false
                this.winWidth = window.innerWidth <= 475;
                console.log(this.cond)
                console.log(this.winWidth)

                this.showFnT = (this.cond) ? false:true;

                this.logoStyle = (this.cond) ? {width: '100px'}:{width: ''};

                this.navUlStyle = (!this.cond) ? 
                    { marginTop: '', textAlign: '' }:( this.winWidth ) ?
                    { marginTop: '', textAlign: '' }:{ marginTop: '25px', textAlign: 'left' };

                this.hrStyle = (this.cond) ? { margin: "-15px 0px 0px 0px", padding: '0px 0px 0px 0px', maxWidth: '100%'}:{ margin: '', padding: '', maxWidth: '' };

                this.outerFlexStyle = (!this.cond) ? 
                    { flexDirection: 'column' }:(this.winWidth) ?
                    { flexDirection: 'column' }:{ flexDirection: 'row' };
            },        
        }
    }
</script>
