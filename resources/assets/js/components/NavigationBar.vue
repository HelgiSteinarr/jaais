<template>
    <nav class=''>
        <div id="nav_button">
            Valmynd
        </div>
        <ul>
            <li><router-link :to="{ path: '/in_dev'}" class="nav_underline">Heim</router-link></li>
            <li><router-link :to="{ path: '/in_dev/courses'}" class="nav_underline">Námskeið</router-link></li>
            <li><router-link :to="{ path: '/in_dev/store'}" class="nav_underline">Verslun</router-link></li>
            <li><router-link :to="{ path: '/in_dev/about'}" class="nav_underline">Um okkur</router-link></li>
            <li><router-link :to="{ path: '/in_dev/contact'}" class="nav_underline">Hafa samband</router-link></li>
        </ul>
    </nav>
</template>

<script>
    export default {
        name: "navbar",
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
