<template name="pcbs">
  <v-container class="shrink-width connectors-container text-center">
    <v-row id="pcbs" daTa-aos="fade-down" data-aos-delay="400" data-aos-easing="ease-in-out">
      <v-col cols="12">
        <h2 class="subcat-title mb-5">PCBs</h2>
      </v-col>
      <v-col lg="7" md="7" sm="12" cols="12">
        <v-img class="subcat-img" max-width="600px" max-height="400px" src="/images/pcbs/pcbs.jpg" alt=""></v-img>
      </v-col>
      <v-col lg="5" md="5" sm="12" cols="12" class="text-left">
        <h3 class="mb-5">PCB <span>design</span></h3>
        <p class="mb-0">Rapid prototyping</p>
        <p class="mb-0">Serial production</p>
        <p class="mb-0">Filling of PCB with SMT components</p>
      </v-col>
    </v-row>
    <v-row class="wholesale-subcat-info mt-6" daTa-aos="fade-down" data-aos-delay="400" data-aos-easing="ease-in-out">
      <v-col cols="12" class="text-left">
        <h4 class="mb-2">
          Assistance with design
        </h4>
        <ul>
          <li>
            Design per customer request
          </li>
          <li>
            Making documentation
          </li>
          <li>
            Electronic design
          </li>
          <li>
            PCB design
          </li>
          <li>
            Quick prototyping
          </li>
        </ul>
      </v-col>
      <v-col cols="12" class="text-left">
        <h4 class="mb-2">Production</h4>
        <ul>
          <li>
            Manual and robotized serial production
          </li>
          <li>
            Control and testing
          </li>
          <li>
            Quality guaranteed
          </li>
          <li>
            Affordable prices
          </li>
        </ul>
      </v-col>
    </v-row>
    <base-miny-gallery :minyGallery="true" :galleryImages="pcbsImages"></base-miny-gallery>
  </v-container>
</template>
<script>

  import axios from 'axios'

  export default {
    name: 'Pcbs',
    data() {
      return {
        pcbsImages: [],
      }
    },
    mounted() {
      axios.get('/api/index', {
        params: {
          folder: 'pcbs'
        }
      })
        .then((response) => {
          let images = response.data.images;

          images.forEach(image => {
            this.pcbsImages.push('/images/pcbs/' + image);
          });
        })
        .catch(error => console.log(error))
    }
  }
</script>