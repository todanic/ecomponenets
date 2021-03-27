<template name="app-vue">
    <v-app>
        <v-content>
            <header-component></header-component>
            <router-view></router-view>
             <home-contact-component></home-contact-component>
            <prefooter></prefooter>
            <footer-component></footer-component>
        </v-content>
    </v-app>
</template>
<script>
export default {
    name: "app",

    data: () => ({
        //
    })
};
</script>
