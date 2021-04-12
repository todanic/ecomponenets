<template name="wires-cables">
  <v-container class="shrink-width wires-cables-container text-center">
    <v-row>
      <v-col cols="12">
        <h3 class="wholesale-subcat-title mb-5">
          {{ $t("wholesale.pages.wires.title.text") }}
          <span>{{ $t("wholesale.pages.wires.title.span") }}</span>
        </h3>
      </v-col>
      <v-col class="pb-11" lg="4" md="4" sm="12" cols="12">
        <a href="#wires" class="round-block">
          <div class="round-block__img">
            <v-img
              max-width="280px"
              src="/images/wires-cables/wires/wire1.jpg"
              alt=""
            ></v-img>
          </div>
          <div class="round-block__content">
            <h2>{{ $t("wholesale.pages.wires.sub-section.wires.title") }}</h2>
          </div>
        </a>
      </v-col>
      <v-col class="pb-11" lg="4" md="4" sm="12" cols="12">
        <a href="#cables" class="round-block">
          <div class="round-block__img">
            <v-img
              max-width="280px"
              src="/images/wires-cables/cables/cable1.jpg"
              alt=""
            ></v-img>
          </div>
          <div class="round-block__content">
            <h2>{{ $t("wholesale.pages.wires.sub-section.cables.title") }}</h2>
          </div>
        </a>
      </v-col>
      <v-col class="pb-11" lg="4" md="6" sm="12" cols="12">
        <a href="#readyMadeCables" class="round-block">
          <div class="round-block__img">
            <v-img
              max-width="280px"
              src="/images/wires-cables/ready-made-cables/ready-made-cables-thumb.jpg"
              alt=""
            ></v-img>
          </div>
          <div class="round-block__content">
            <h2>
              {{ $t("wholesale.pages.wires.sub-section.ready-made.title") }}
            </h2>
          </div>
        </a>
      </v-col>
    </v-row>

    <v-divider class="pb-10"></v-divider>

    <v-row id="wires">
      <v-col cols="12">
        <h2 class="subcat-title mb-5">
          {{ $t("wholesale.pages.wires.sub-section.wires.title") }}
        </h2>
      </v-col>
      <v-col lg="8" md="8" sm="12" cols="12">
        <v-img
          class="subcat-img"
          max-width="600px"
          max-height="400px"
          src="/images/wires-cables/wires/wire1.jpg"
          alt=""
        ></v-img>
      </v-col>
      <v-col lg="4" md="4" sm="12" cols="12" class="text-left">
        <h3>
          {{ $t("wholesale.pages.wires.sub-section.wires.sub-title.text") }}
          <span>{{
            $t("wholesale.pages.wires.sub-section.wires.sub-title.span")
          }}</span>
        </h3>
        <p class="mb-0">
          {{ $t("wholesale.pages.wires.sub-section.wires.paragraph") }}
        </p>
        <p class="mb-0">
          {{ $t("wholesale.pages.wires.sub-section.wires.description") }}
        </p>
        <p class="mb-0">
          {{ $t("wholesale.pages.wires.sub-section.wires.description2") }}
        </p>
      </v-col>
    </v-row>
    <v-row class="wholesale-subcat-info">
      <v-col cols="12">
        <h3 class="mt-5">
          {{ $t("wholesale.pages.wires.sub-section.wires.liy") }}
        </h3>
      </v-col>
      <v-col cols="12" class="text-left">
        <h4 class="mb-2">
          {{ $t("wholesale.pages.wires.sub-section.wires.list.title") }}
        </h4>
        <ul class="pl-0">
          <li>
            {{ $t("wholesale.pages.wires.sub-section.wires.list.list-item") }}
          </li>
          <li>
            {{ $t("wholesale.pages.wires.sub-section.wires.list.list-item2") }}
          </li>
        </ul>
      </v-col>
      <v-col cols="12" class="text-left">
        <h4 class="mb-2">
          {{ $t("wholesale.pages.wires.sub-section.wires.list2.title") }}
        </h4>
        <ul class="pl-0">
          <li>
            {{ $t("wholesale.pages.wires.sub-section.wires.list2.list-item") }}
          </li>
          <li>
            {{ $t("wholesale.pages.wires.sub-section.wires.list2.list-item2") }}
          </li>
        </ul>
      </v-col>
      <v-col cols="12" class="text-left">
        <h4 class="mb-2">
          {{ $t("wholesale.pages.wires.sub-section.wires.list3.title") }}
        </h4>
        <ul class="pl-0">
          <li>
            {{ $t("wholesale.pages.wires.sub-section.wires.list3.list-item") }}
          </li>
          <li>
            {{ $t("wholesale.pages.wires.sub-section.wires.list3.list-item2") }}
          </li>
        </ul>
        <p class="mt-5">
          * {{ $t("wholesale.pages.wires.sub-section.wires.note") }}
        </p>
      </v-col>
    </v-row>
    <base-miny-gallery
      :minyGallery="true"
      :className="'wire'"
      :galleryImages="wireImages"
    ></base-miny-gallery>

    <v-divider class="pb-10"></v-divider>

    <v-row
      id="cables"
      daTa-aos="fade-down"
      data-aos-delay="400"
      data-aos-easing="ease-in-out"
    >
      <v-col cols="12">
        <h2 class="subcat-title mb-5">
          {{ $t("wholesale.pages.wires.sub-section.cables.title") }}
        </h2>
      </v-col>
      <v-col lg="8" md="8" sm="12" cols="12">
        <v-img
          class="subcat-img"
          max-width="600px"
          max-height="400px"
          src="/images/wires-cables/cables/cable2.jpg"
          alt=""
        ></v-img>
      </v-col>
      <v-col lg="4" md="4" sm="12" cols="12" class="text-left">
        <h3>
          {{ $t("wholesale.pages.wires.sub-section.cables.sub-title.text") }}
          <span>{{
            $t("wholesale.pages.wires.sub-section.cables.sub-title.span")
          }}</span>
        </h3>
        <p class="mb-0">
          {{ $t("wholesale.pages.wires.sub-section.cables.paragraph") }}
        </p>
        <p class="mb-0">
          {{ $t("wholesale.pages.wires.sub-section.cables.description") }}
        </p>
        <p class="mb-0">
          {{ $t("wholesale.pages.wires.sub-section.wires.description2") }}
        </p>
      </v-col>
    </v-row>
    <v-row
      class="wholesale-subcat-info"
      daTa-aos="fade-down"
      data-aos-delay="400"
      data-aos-easing="ease-in-out"
    >
      <v-col cols="12">
        <h3 class="mt-5">
          {{ $t("wholesale.pages.wires.sub-section.cables.multi-core") }}
        </h3>
      </v-col>
      <v-col cols="12" class="text-left">
        <h4 class="mb-2">
          {{ $t("wholesale.pages.wires.sub-section.cables.list.title") }}
        </h4>
        <ul class="pl-0">
          <li>
            {{ $t("wholesale.pages.wires.sub-section.cables.list.list-item") }}
          </li>
          <li>
            {{ $t("wholesale.pages.wires.sub-section.cables.list.list-item2") }}
          </li>
        </ul>
      </v-col>
      <v-col cols="12" class="text-left">
        <h4 class="mb-2">
          {{ $t("wholesale.pages.wires.sub-section.cables.list2.title") }}
        </h4>
        <ul class="pl-0">
          <li>
            {{ $t("wholesale.pages.wires.sub-section.cables.list.list-item") }}
          </li>
        </ul>
        <p class="mt-5">
          {{ $t("wholesale.pages.wires.sub-section.cables.note") }}
        </p>
      </v-col>
    </v-row>
    <base-miny-gallery
      :minyGallery="true"
      :className="'cable'"
      :galleryImages="cableImages"
    ></base-miny-gallery>
    <v-divider class="pb-10"></v-divider>

    <v-row
      id="readyMadeCables"
      daTa-aos="fade-down"
      data-aos-delay="400"
      data-aos-easing="ease-in-out"
    >
      <v-col cols="12">
        <h2 class="subcat-title mb-5">
          {{ $t("wholesale.pages.wires.sub-section.ready-made.title") }}
        </h2>
      </v-col>
      <v-col cols="12" class="text-left">
        <v-row
          class="wholesale-subcat-info"
          daTa-aos="fade-down"
          data-aos-delay="400"
          data-aos-easing="ease-in-out"
        >
          <v-col lg="8" md="8" sm="12" cols="12">
            <v-img
              class="subcat-img"
              max-width="600px"
              max-height="400px"
              src="/images/wires-cables/ready-made-cables/ready-made-cables.jpg"
              alt=""
            ></v-img>
          </v-col>
          <v-col lg="4" md="4" sm="12" cols="12" class="text-left">
            <h3>
              {{
                $t(
                  "wholesale.pages.wires.sub-section.ready-made.sub-title.text"
                )
              }}
              <span>{{
                $t(
                  "wholesale.pages.wires.sub-section.ready-made.sub-title.span"
                )
              }}</span>
            </h3>
            <p class="mb-0">
              {{
                $t("wholesale.pages.wires.sub-section.ready-made.description")
              }}
            </p>
            <p class="mb-0">
              {{
                $t("wholesale.pages.wires.sub-section.ready-made.description2")
              }}
            </p>
            <p class="mb-0">
              {{
                $t("wholesale.pages.wires.sub-section.ready-made.description3")
              }}
            </p>
          </v-col>
          <v-col cols="12">
            <h4 class="mb-2">
              {{
                $t("wholesale.pages.wires.sub-section.ready-made.list.title")
              }}
            </h4>
            <ul class="pl-0">
              <li>
                {{
                  $t(
                    "wholesale.pages.wires.sub-section.ready-made.list.list-item"
                  )
                }}
              </li>
              <li>
                {{
                  $t(
                    "wholesale.pages.wires.sub-section.ready-made.list.list-item2.title"
                  )
                }}
                <p class="mb-0 ml-5">
                  -
                  {{
                    $t(
                      "wholesale.pages.wires.sub-section.ready-made.list.list-item2.paragraph"
                    )
                  }}
                </p>
                <p class="mb-0 ml-5">
                  -
                  {{
                    $t(
                      "wholesale.pages.wires.sub-section.ready-made.list.list-item2.paragraph2"
                    )
                  }}
                </p>
                <p class="mb-0 ml-5">
                  -
                  {{
                    $t(
                      "wholesale.pages.wires.sub-section.ready-made.list.list-item2.paragraph3"
                    )
                  }}
                </p>
                <p class="mb-0 ml-5">
                  -
                  {{
                    $t(
                      "wholesale.pages.wires.sub-section.ready-made.list.list-item2.paragraph4"
                    )
                  }}
                </p>
              </li>
              <li>
                {{
                  $t(
                    "wholesale.pages.wires.sub-section.ready-made.list.list-item3"
                  )
                }}
              </li>
            </ul>
          </v-col>
          <v-col cols="12">
            <h4 class="mb-2">
              {{
                $t("wholesale.pages.wires.sub-section.ready-made.list2.title")
              }}
            </h4>
            <ul class="pl-0">
              <li>
                {{
                  $t(
                    "wholesale.pages.wires.sub-section.ready-made.list2.list-item"
                  )
                }}
              </li>
              <li>
                {{
                  $t(
                    "wholesale.pages.wires.sub-section.ready-made.list2.list-item2"
                  )
                }}
              </li>
            </ul>
          </v-col>
          <v-col cols="12">
            <h4 class="mb-2">
              {{
                $t("wholesale.pages.wires.sub-section.ready-made.list3.title")
              }}
            </h4>
          </v-col>
        </v-row>
        <v-row
          class="justify-center mt-5"
          daTa-aos="fade-down"
          data-aos-delay="400"
          data-aos-easing="ease-in-out"
        >
          <v-col class="text-center" lg="6" md="6" sm="8" cols="8">
            <p>
              {{
                $t(
                  "wholesale.pages.wires.sub-section.ready-made.list3.list-item"
                )
              }}
            </p>
            <p class="wholesale-click-picture">
              {{
                $t(
                  "wholesale.pages.wires.sub-section.ready-made.list3.click-here.text"
                )
              }}
              <span>
                {{
                  $t(
                    "wholesale.pages.wires.sub-section.ready-made.list3.click-here.span"
                  )
                }}</span
              >
            </p>
            <router-link to="/wires-and-harness" class="round-block">
              <div class="round-block__img">
                <v-img
                  max-width="200px"
                  max-height="180px"
                  src="/images/wires-cables/ready-made-cable.jpg"
                  alt=""
                ></v-img>
              </div>
            </router-link>
          </v-col>
        </v-row>
      </v-col>
    </v-row>
    <base-miny-gallery
      :minyGallery="true"
      :className="'readyMadeCable'"
      :galleryImages="readyMadeCableImages"
    ></base-miny-gallery>
  </v-container>
</template>
<script>
import ImageService from "../../services/ImageService";

export default {
  name: "WiresCables",
  data() {
    return {
      wireImages: [],
      cableImages: [],
      readyMadeCableImages: [],
      className: null,
      folders: [
        { folder: "wires-cables/wires" },
        { folder: "wires-cables/cables" },
        { folder: "wires-cables/ready-made-cables" },
      ],
    };
  },
  mounted() {
    this.folders.forEach((value, index) => {
      ImageService.gallery(value.folder, index)
        .then((response) => {
          let images = response.data.images;

          images.forEach((image) => {
            if (index == 0) {
              this.wireImages.push(image);
            } else if (index == 1) {
              this.cableImages.push(image);
            } else {
              this.readyMadeCableImages.push(image);
            }
          });
        })
        .catch((e) => {
          console.log(e);
        });
    });
  },
};
</script>
