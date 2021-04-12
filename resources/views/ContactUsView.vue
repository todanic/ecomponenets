<template>
  <v-container fludi>
    <v-container class="shrink-width contact-us-container">
      <v-row
        daTa-aos="fade-down"
        data-aos-delay="400"
        data-aos-easing="ease-in-out"
      >
        <v-col cols="12" class="text-center">
          <h1 class="mb-4">
            {{ $t("contact-us.title.text") }}
            <span>{{ $t("contact-us.title.span") }}</span>
          </h1>
        </v-col>
        <v-col lg="4" md="4" sm="12" cols="12">
          <p class="mb-0">
            <span>{{ $t("contact-us.phone") }}:</span>
          </p>
          <p class="mb-0">+381 63 8023260</p>
          <p class="mb-0">+381 60 5120666</p>
          <p class="mb-4">+381 63 1623505</p>
          <p class="mb-0">
            <span>{{ $t("contact-us.address") }}:</span>
          </p>
          <p class="mb-0">Cara Lazara 2</p>
          <p class="mb-0">Srbobran 21480 Serbia</p>
        </v-col>
        <v-col
          class="contact-us-container__col"
          v-if="!loading"
          lg="8"
          md="8"
          sm="12"
          cols="12"
        >
          <v-row>
            <v-col lg="6" md="6" sm="12" cols="12">
              <v-text-field
                outlined
                color="#000080"
                :label="$t('contact-us.name')"
                v-model="firstName"
              >
              </v-text-field>
            </v-col>
            <v-col lg="6" md="6" sm="12" cols="12">
              <v-text-field
                outlined
                color="#000080"
                :label="$t('contact-us.email')"
                v-model="email"
              >
              </v-text-field>
            </v-col>
            <v-col lg="6" md="6" sm="12" cols="12">
              <v-text-field
                outlined
                color="#000080"
                :label="$t('contact-us.country')"
                v-model="country"
              >
              </v-text-field>
            </v-col>
            <v-col lg="6" md="6" sm="12" cols="12">
              <v-text-field
                outlined
                color="#000080"
                :label="$t('contact-us.phone-placeholder')"
                v-model="phone"
              >
              </v-text-field>
            </v-col>
            <v-col cols="12">
              <v-textarea
                height="150px"
                outlined
                color="#000080"
                :label="$t('contact-us.message')"
                v-model="message"
              >
              </v-textarea>
            </v-col>
            <v-col class="text-right" lg="4" md="4" sm="12" cols="12">
              <v-file-input
                ref="fileUpload"
                @change="encodeImageFileAsURL"
                color="#000080"
                prepend-icon=""
                height="50px"
                accept="image/*"
                multiple
                outlined
                :label="$t('contact-us.upload')"
              >
              </v-file-input>
            </v-col>
            <v-col
              class="text-right"
              v-if="previewImages.length > 0"
              lg="12"
              md="12"
              sm="12"
              cols="12"
            >
              <v-divider class="pb-3"></v-divider>
              <span
                class="contact-us-container__remove-images"
                @click="removeImages()"
                >X</span
              >
            </v-col>
            <v-col
              lg="3"
              md="3"
              sm="2"
              cols="2"
              v-for="(img, index) in previewImages"
              :key="index"
            >
              <v-img :src="img" max-width="200px"></v-img>
            </v-col>
            <v-col cols="12" class="text-right">
              <v-btn
                width="160px"
                type="submit"
                color="#000080"
                class="btn"
                large
                dark
                @click="submit"
                rounded
              >
                {{ $t("contact-us.button") }}
              </v-btn>
            </v-col>
          </v-row>
        </v-col>
        <v-col v-else class="text-center pb-6">
          <!--					<cube-spin></cube-spin>-->
        </v-col>
      </v-row>
    </v-container>
  </v-container>
</template>
<script>
import axios from "axios";
// import CubeSpin from 'vue-loading-spinner/src/components/Circle.vue'

export default {
  name: "ContactUsView",
  components: {
    // CubeSpin
  },
  data() {
    return {
      email: null,
      firstName: null,
      country: null,
      phone: null,
      message: null,
      userImage: null,
      attachments: null,
      images: {},
      loading: false,
      previewImages: [],
    };
  },
  methods: {
    submit(e) {
      var formData = new FormData();

      formData.append("email", this.email);
      formData.append("name", this.firstName);
      formData.append("country", this.country);
      formData.append("phone", this.phone);
      formData.append("message", this.message);

      for (var i = 0; i < this.images.length; i++) {
        formData.append(`images[${i}]`, this.images[i]);
      }

      this.previewImages = "";
      this.images = {};
      this.loading = true;

      axios
        .post("/api/email", formData)
        .then((response) => {
          alert("Thank you for contacting us!");
          this.loading = false;
        })
        .catch((error) => alert("Error accrued!"));
    },
    encodeImageFileAsURL(e) {
      var tempImages = [];
      var tempPreviewImages = [];

      e.forEach(function (value, index) {
        tempImages.push(value);
        tempPreviewImages.push(URL.createObjectURL(value));
      });

      this.images = tempImages;
      this.previewImages = tempPreviewImages;
    },
    removeImages(e) {
      this.previewImages = "";
      this.images = {};
      this.$refs.fileUpload.value = null;
    },
  },
};
</script>
