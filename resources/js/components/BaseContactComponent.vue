<template name="component-name">
   <v-container>
    <v-row>
      <v-col cols="4">
        <p><v-icon>fa-phone</v-icon> +381 6995 4448</p>
        <p>Cara Lazara 2</p>
        <p>Srbobran 21480</p>
        <p>Serbia</p>
      </v-col>
      <v-col cols="8">
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
            <v-file-input prepend-icon="" accept="image/*" filled outlined label="Upload image">
            </v-file-input>
          </v-col>
          <v-col cols="12" class="text-right">
            <v-btn color="#781212" large dark>
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