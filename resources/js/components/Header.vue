<template name="header-component">
    <v-container fluid class="header-container">
        <v-container class="pa-0 shrink-width">
            <v-row>
                <v-col class="header-logo-col d-flex justify-center" lg="12" md="12" sm="12" cols="12">
                    <router-link to="/">
                        <v-img max-width="350px" src="/images/logo.png" alt="logo"></v-img>
                    </router-link>
                </v-col>
            </v-row>
            <v-row>
                <v-col :class="{'pt-6': !$vuetify.breakpoint.xs, 'text-right pt-0 pb-0': $vuetify.breakpoint.xs}" lg="12" md="12" sm="12" cols="12">
                    <div class="header-collapse-menu">
                        <span @click="toggleMenu()"></span>
                    </div>
                    <ul class="menu pl-0 justify-center" :class="{active: isActive}">>
                        <li class="menu-block">
                            <router-link to="/">Home</router-link>
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
						isActive: false
        }),
        methods: {
					toggleMenu() {
						this.isActive = !this.isActive;
					}
				}
    }
</script>
