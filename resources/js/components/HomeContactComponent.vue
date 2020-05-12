<template name="contact-component">
<v-container fluid class="contact-container">
    <v-container>
      <v-row>
        <v-col cols="12" class="text-center">
          <h2 class="mb-5">Have <span>questions?</span></h2>
        </v-col>
        <v-col cols="12" class="text-center">
          <v-dialog content-class="contact-dialog" max-width="680px">
            <template v-slot:activator="{ on }">
              <v-btn outlined class="home-contact-btn" x-large rounded v-on="on">Contact us</v-btn>
            </template>
           <base-contact-component></base-contact-component>
          </v-dialog>
        </v-col>
      </v-row>
    </v-container>
  </v-container>
</template>
<script>
import BaseContactComponent from './BaseContactComponent'

export default {
  name: 'HomeContactComponent'
  
}
</script>