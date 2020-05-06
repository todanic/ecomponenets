<template name="component-name">
   <v-container>
    <v-row>
      <v-col cols="6">
        <v-icon>fas fa-phone</v-icon>
        <p>+381 6995 4448</p>
        <p>Cara Lazara 2</p>
        <p>Srbobran 21480</p>
        <p>Serbia</p>
      </v-col>
      <v-col cols="6">
        <v-row>
          <v-col cols="6">
          <v-text-field label="First name">
          </v-text-field>
          </v-col>
          <v-col cols="6">
            <v-text-field label="Email">
          </v-text-field>
          </v-col>
          <v-col cols="6">
            <v-text-field label="Country">
          </v-text-field>
          </v-col>
          <v-col cols="6">
            <v-text-field label="Phone number">
          </v-text-field>
          </v-col>
          <v-col cols="12">
            <v-text-field label="Message">
          </v-text-field>
          </v-col>
          <v-col cols="12">
            <v-file-input accept="image/*" filled outlined label="Upload image">

            </v-file-input>
          </v-col>
          <v-col>
            <v-btn color="#781212">
              Send
            </v-btn>
          </v-col>
        </v-row>
      </v-col>
    </v-row>
  </v-container>
</template>
<script>
export default {
  name: 'BaseContactComponent'
}
</script>