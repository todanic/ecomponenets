<template name="header-component">
    <v-container fluid class="header-container">
        <v-container class="pa-0 shrink-width">
            <v-row>
                <v-col  class="header-logo-col text-center" lg="12" md="12" sm="12" cols="12">
                    <router-link to="/">
                         <img src="/images/logo.png" alt="logo">
                    </router-link>
                </v-col>
            </v-row>
            <v-row>
                <v-col class="pt-6" lg="12" md="12" sm="12" cols="12">
                    <ul class="menu pl-0 justify-center">
                        <li class="menu-block submenu">
                            <div class="submenu-wrapper">
                                <router-link to="/">Home</router-link>
                                <!-- <a href="/">Home</a> -->
                                <!-- <ul class="sub-hidden">
                                    <li class="submenu-block"><a href="#">Submenu</a></li>
                                    <li class="submenu-block"><a href="#">Submenu</a></li>
                                    <li class="submenu-block"><a href="#">Submenu</a></li>
                                    <li class="submenu-block"><a href="#">Submenu</a></li>
                                </ul> -->
                            </div>
                        </li>
                        <li class="menu-block">
                            <router-link to="/wholesale">Wholesale</router-link>
                            <!-- <a href="#">Wholesale</a> -->
                        </li>
                        <li class="menu-block">
                             <router-link to="/production">Production</router-link>
                            <!-- <a href="#">Production</a> -->
                        </li>
                        <li class="menu-block">
                             <router-link to="/about-us">About us</router-link>
                            <!-- <a href="#">About us</a> -->
                        </li>
                         <li class="menu-block">
                            <router-link to="/contact-us">Contact us</router-link>
                            <!-- <a href="#">Contact us</a> -->
                        </li>
                    </ul>
                </v-col>
                <!-- <v-col class="text-right pt-5" lg="5" md="5" sm="5" cols="5">
                    <v-btn class="navbar-link" text dark>
                        LINK
                    </v-btn>
                    <v-btn class="navbar-link" text dark>
                        LINK
                    </v-btn>
                    <v-btn class="navbar-link" text dark>
                        LINK
                    </v-btn>
                </v-col> -->
            </v-row>
        </v-container>
    </v-container>
</template>

<script>
    export default {
        data: () => ({
            items: [
                { title: 'Click Me' },
                { title: 'Click Me' },
                { title: 'Click Me' },
                { title: 'Click Me 2' },
            ],
        }),
    }
</script>
