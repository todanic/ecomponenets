<template name="home-cat-component">
    <v-container flud class="home-cat-container">
        <v-container class="shrink-width">
            <v-row class="text-center">
                <v-col class="pb-11" lg="4" md="4" sm="6" cols="6">
                    <a href="#" class="cat-block">
                        <div class="cat-img-block">
                            <img src="images/splash1.jpeg" alt="">
                        </div>
                        <router-link to="/wholesale/wires-cables">
                            <div class="cat-contents-block">
                                <h2>Wires and cables</h2>
                            </div>
                        </router-link>
                    </a>
                </v-col>
                <v-col class="pb-11" lg="4" md="4" sm="6" cols="6">
                    <a href="#" class="cat-block">
                        <div class="cat-img-block">
                            <img src="images/splash2.jpeg" alt="">
                        </div>
                        <router-link to="/wholesale/connectors">
                            <div class="cat-contents-block">
                                <h2>Connectors & electronic components</h2>
                            </div>
                        </router-link>
                    </a>
                </v-col>
                <v-col class="pb-11" lg="4" md="4" sm="6" cols="6">
                    <a href="#" class="cat-block">
                        <div class="cat-img-block">
                            <img src="images/splash1.jpeg" alt="">
                        </div>
                        <div class="cat-contents-block">
                            <h2>PCBs</h2>
                        </div>
                    </a>
                </v-col>
                <v-col class="pb-11" lg="4" md="4" sm="6" cols="6">
                    <a href="#" class="cat-block">
                        <div class="cat-img-block">
                            <img src="images/splash2.jpeg" alt="">
                        </div>
                        <div class="cat-contents-block">
                            <h2>LEDs</h2>
                        </div>
                    </a>
                </v-col>
                <v-col class="pb-11" lg="4" md="4" sm="6" cols="6">
                    <a href="#" class="cat-block">
                        <div class="cat-img-block">
                            <img src="images/splash3.jpeg" alt="">
                        </div>
                        <div class="cat-contents-block">
                            <h2>Cable accessories</h2>
                        </div>
                    </a>
                </v-col>
                <v-col class="pb-11" lg="4" md="4" sm="6" cols="6">
                    <a href="#" class="cat-block">
                        <div class="cat-img-block">
                            <img src="images/splash4.jpeg" alt="">
                        </div>
                        <div class="cat-contents-block">
                            <h2>Hardware</h2>
                        </div>
                    </a>
                </v-col>
            </v-row>
        </v-container>
    </v-container>
</template>
<script>
    export default {
        data: () => ({
        })
    }
</script>
