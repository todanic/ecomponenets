<template name="hardware">
  <v-container class="shrink-width harware-container text-center">
    <v-row id="led" daTa-aos="fade-down" data-aos-delay="400" data-aos-easing="ease-in-out">
      <v-col cols="12">
        <h2 class="subcat-title mb-5">Hardware</h2>
      </v-col>
      <v-col lg="7" md="7" sm="12" cols="12">
        <v-img class="subcat-img" max-width="600px" max-height="400px" src="/images/hardware/hardware.jpg"
               alt=""></v-img>
      </v-col>
      <v-col lg="5" md="5" sm="12" cols="12" class="text-left">
        <h3 class="mb-5">Hardware components <span>for many devices</span></h3>
        <p class="mb-0">Metal housings</p>
        <p class="mb-0">Power supply</p>
      </v-col>
    </v-row>
    <v-row class="wholesale-subcat-info mt-6" daTa-aos="fade-down" data-aos-delay="400" data-aos-easing="ease-in-out">
      <v-col cols="12" class="text-left">
        <ul class="pl-0">
          <li>
            Possible procurement of different parts for devices, like built-in
            monitors, touch screen monitors, LED panels, power supplies,
            Bluetooth modules, antennas, amplifier, and many other parts that
            you require.
          </li>
          <li>
            Retail and bulk procuring from European and American distributors,
            as well as from our Chinese partners at good prices with short
            delivery time
          </li>
          <li>
            Metal housings, plexiglass parts and other
          </li>
        </ul>
      </v-col>
    </v-row>
    <base-miny-gallery :className="'hardware'" :minyGallery="true" :galleryImages="hardwareImages"></base-miny-gallery>
  </v-container>
</template>
<script>

  import axios from 'axios'

  export default {
    name: 'Hardware',
    data() {
      return {
        hardwareImages: [],
      }
    },
    mounted() {
      axios.get('/api/index', {
        params: {
          folder: 'hardware'
        }
      })
        .then((response) => {
          let images = response.data.images;

          images.forEach(image => {
            this.hardwareImages.push('/images/hardware/' + image);
          });
        })
        .catch(error => console.log(error))
    }
  }
</script>