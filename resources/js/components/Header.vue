<template name="header-component">
    <v-container fluid class="header-container">
        <v-container class="pa-0 shrink-width">
            <v-row>
                <v-col  class="header-logo-col text-center" lg="12" md="12" sm="12" cols="12">
                    <img src="images/logo.png" alt="">
                </v-col>
            </v-row>
            <v-row>
                <v-col class="pt-6" lg="7" md="7" sm="7" cols="7">
                    <ul class="menu pl-0">
                        <li class="menu-block submenu">
                            <div class="submenu-wrapper">
                                <a href="#">Products</a>
                                <ul class="sub-hidden">
                                    <li class="submenu-block"><a href="#">Submenu</a></li>
                                    <li class="submenu-block"><a href="#">Submenu</a></li>
                                    <li class="submenu-block"><a href="#">Submenu</a></li>
                                    <li class="submenu-block"><a href="#">Submenu</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-block">
                            <a href="#">About us</a>
                        </li>
                        <li class="menu-block">
                            <a href="#">Contact us</a>
                        </li>
                        <li class="menu-block">
                            <a href="#">dropdown</a>
                        </li>
                    </ul>
                </v-col>
                <v-col class="text-right pt-5" lg="5" md="5" sm="5" cols="5">
                    <v-btn class="navbar-link" text dark>
                        LINK
                    </v-btn>
                    <v-btn class="navbar-link" text dark>
                        LINK
                    </v-btn>
                    <v-btn class="navbar-link" text dark>
                        LINK
                    </v-btn>
                </v-col>
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
