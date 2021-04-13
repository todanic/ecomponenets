<template name="connectors">
  <v-container class="shrink-width connectors-container text-center">
    <v-row>
      <v-col cols="12">
        <h3 class="wholesale-subcat-title mb-5">
          {{ $t("wholesale.pages.connectors.title.text") }}
          <span>{{ $t("wholesale.pages.connectors.title.span") }} </span>
        </h3>
      </v-col>
      <v-col class="pb-11" lg="4" md="4" sm="12" cols="12">
        <a href="#connectors" class="round-block">
          <div class="round-block__img">
            <v-img
              max-width="280px"
              src="/images/connectors/sub-connectors/connectors.jpg"
              alt=""
            ></v-img>
          </div>
          <div class="round-block__content">
            <h2>
              {{
                $t("wholesale.pages.connectors.sub-section.connectors.title")
              }}
            </h2>
          </div>
        </a>
      </v-col>
      <v-col class="pb-11" lg="4" md="4" sm="12" cols="12">
        <a href="#terminals" class="round-block">
          <div class="round-block__img">
            <v-img
              max-width="280px"
              src="/images/connectors/terminals/terminals.jpg"
              alt=""
            ></v-img>
          </div>
          <div class="round-block__content">
            <h2>
              {{ $t("wholesale.pages.connectors.sub-section.terminals.title") }}
            </h2>
          </div>
        </a>
      </v-col>
      <v-col class="pb-11" lg="4" md="4" sm="12" cols="12">
        <a href="#electronicComponents" class="round-block">
          <div class="round-block__img">
            <v-img
              max-width="280px"
              src="/images/connectors/components/component2.jpg"
              alt=""
            ></v-img>
          </div>
          <div class="round-block__content">
            <h2>
              {{
                $t("wholesale.pages.connectors.sub-section.components.title")
              }}
            </h2>
          </div>
        </a>
      </v-col>
    </v-row>

    <v-divider class="mb-10 mt-6"></v-divider>

    <v-row id="connectors">
      <v-col cols="12">
        <h2 class="subcat-title mb-5">
          {{ $t("wholesale.pages.connectors.sub-section.connectors.title") }}
        </h2>
      </v-col>
      <v-col lg="7" md="7" sm="12" cols="12">
        <v-img
          class="subcat-img"
          max-width="600px"
          max-height="400px"
          src="/images/connectors/sub-connectors/connectors.jpg"
          alt=""
        ></v-img>
      </v-col>
      <v-col lg="5" md="5" sm="12" cols="12" class="text-left">
        <h3 class="mb-5">
          {{
            $t(
              "wholesale.pages.connectors.sub-section.connectors.sub-title.text"
            )
          }}
          <span>{{
            $t(
              "wholesale.pages.connectors.sub-section.connectors.sub-title.span"
            )
          }}</span>
        </h3>
        <p class="mb-0">
          {{
            $t("wholesale.pages.connectors.sub-section.connectors.paragraph")
          }}
        </p>
        <p class="mb-0">
          {{
            $t("wholesale.pages.connectors.sub-section.connectors.description")
          }}
        </p>
        <p class="mb-0">
          {{
            $t("wholesale.pages.connectors.sub-section.connectors.description2")
          }}
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
          {{ $t("wholesale.pages.connectors.sub-section.connectors.title") }}
        </h3>
      </v-col>
      <v-col cols="12" class="text-left">
        <h4 class="mb-2">
          {{
            $t("wholesale.pages.connectors.sub-section.connectors.list.title")
          }}
        </h4>
        <ul class="pl-0">
          <li>
            {{
              $t(
                "wholesale.pages.connectors.sub-section.connectors.list.list-item"
              )
            }}
          </li>
          <li>
            {{
              $t(
                "wholesale.pages.connectors.sub-section.connectors.list.list-item2"
              )
            }}
          </li>
        </ul>
      </v-col>
      <v-col cols="12" class="text-left">
        <h4 class="mb-2">
          {{
            $t("wholesale.pages.connectors.sub-section.connectors.list2.title")
          }}
        </h4>
        <ul class="pl-0">
          <li>
            {{
              $t(
                "wholesale.pages.connectors.sub-section.connectors.list2.list-item"
              )
            }}
          </li>
        </ul>
      </v-col>
      <v-col cols="12" class="text-left">
        <h4 class="mb-2">
          {{
            $t("wholesale.pages.connectors.sub-section.connectors.list3.title")
          }}r
        </h4>
        <ul class="pl-0">
          <li>
            {{
              $t(
                "wholesale.pages.connectors.sub-section.connectors.list3.list-item"
              )
            }}
          </li>
        </ul>
      </v-col>
    </v-row>
    <base-miny-gallery
      :minyGallery="true"
      :className="'connector'"
      :galleryImages="connectorImages"
    ></base-miny-gallery>
    <v-divider class="mb-10 mt-6"></v-divider>

    <v-row
      id="terminals"
      daTa-aos="fade-down"
      data-aos-delay="400"
      data-aos-easing="ease-in-out"
    >
      <v-col cols="12">
        <h2 class="subcat-title mb-5">
          {{ $t("wholesale.pages.connectors.sub-section.terminals.title") }}
        </h2>
      </v-col>
      <v-col lg="7" md="7" sm="12" cols="12">
        <v-img
          class="subcat-img"
          max-width="600px"
          max-height="400px"
          src="/images/connectors/terminals/terminals.jpg"
          alt=""
        ></v-img>
      </v-col>
      <v-col lg="5" md="5" sm="12" cols="12" class="text-left">
        <h3 class="mb-5">
          {{
            $t(
              "wholesale.pages.connectors.sub-section.terminals.sub-title.text"
            )
          }}
          <span>
            {{
              $t(
                "wholesale.pages.connectors.sub-section.terminals.sub-title.span"
              )
            }}</span
          >
        </h3>
        <p class="mb-0">
          {{ $t("wholesale.pages.connectors.sub-section.terminals.paragraph") }}
        </p>
        <p class="mb-0">
          {{
            $t("wholesale.pages.connectors.sub-section.terminals.description")
          }}
        </p>
        <p class="mb-0">
          {{
            $t("wholesale.pages.connectors.sub-section.terminals.description2")
          }}
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
          {{
            $t("wholesale.pages.connectors.sub-section.terminals.wire-cable")
          }}
        </h3>
      </v-col>
      <v-col cols="12" class="text-left">
        <h4 class="mb-2">
          {{
            $t("wholesale.pages.connectors.sub-section.terminals.list.title")
          }}
        </h4>
        <ul class="pl-0">
          <li>
            {{
              $t(
                "wholesale.pages.connectors.sub-section.terminals.list.list-item"
              )
            }}
            <p class="mb-0 ml-5">
              -
              {{
                $t(
                  "wholesale.pages.connectors.sub-section.terminals.list.list-item2"
                )
              }}
            </p>
            <p class="mb-0 ml-5">
              -
              {{
                $t(
                  "wholesale.pages.connectors.sub-section.terminals.list.list-item3"
                )
              }}
            </p>
            <p class="mb-0 ml-5">
              -
              {{
                $t(
                  "wholesale.pages.connectors.sub-section.terminals.list.list-item4"
                )
              }}
            </p>
            <p class="mb-0 ml-5">
              -
              {{
                $t(
                  "wholesale.pages.connectors.sub-section.terminals.list.list-item5"
                )
              }}
            </p>
            <p class="mb-0 ml-5">
              -
              {{
                $t(
                  "wholesale.pages.connectors.sub-section.terminals.list.list-item6"
                )
              }}
            </p>
            <p class="mb-0 ml-5">
              -
              {{
                $t(
                  "wholesale.pages.connectors.sub-section.terminals.list.list-item7"
                )
              }}
            </p>
          </li>
          <li>
            {{
              $t(
                "wholesale.pages.connectors.sub-section.terminals.list.list-item8"
              )
            }}
          </li>
        </ul>
      </v-col>
      <v-col cols="12" class="text-left">
        <h4 class="mb-2">
          {{
            $t("wholesale.pages.connectors.sub-section.terminals.list2.title")
          }}
        </h4>
        <ul class="pl-0">
          <li>
            {{
              $t(
                "wholesale.pages.connectors.sub-section.terminals.list2.list-item"
              )
            }}
          </li>
        </ul>
      </v-col>
      <v-col cols="12" class="text-left">
        <h4 class="mb-2">
          {{
            $t("wholesale.pages.connectors.sub-section.terminals.list3.title")
          }}
        </h4>
        <ul class="pl-0">
          <li>
            {{
              $t(
                "wholesale.pages.connectors.sub-section.terminals.list3.list-item"
              )
            }}
          </li>
        </ul>
      </v-col>
    </v-row>
    <base-miny-gallery
      :className="'terminal'"
      :minyGallery="true"
      :galleryImages="terminalImages"
    ></base-miny-gallery>

    <v-divider class="mb-10 mt-6"></v-divider>

    <v-row
      id="electronicComponents"
      daTa-aos="fade-down"
      data-aos-delay="400"
      data-aos-easing="ease-in-out"
    >
      <v-col cols="12">
        <h2 class="subcat-title mb-5">
          {{ $t("wholesale.pages.connectors.sub-section.components.title") }}
        </h2>
      </v-col>
      <v-col lg="7" md="7" sm="12" cols="12">
        <v-img
          class="subcat-img"
          max-width="600px"
          max-height="400px"
          src="/images/connectors/components/component.jpg"
          alt=""
        ></v-img>
      </v-col>
      <v-col lg="5" md="5" sm="12" cols="12" class="text-left">
        <h3 class="mb-5">
          {{
            $t(
              "wholesale.pages.connectors.sub-section.components.sub-title.text"
            )
          }}
          <span>{{
            $t(
              "wholesale.pages.connectors.sub-section.components.sub-title.span"
            )
          }}</span>
        </h3>
        <p class="mb-0">
          {{
            $t("wholesale.pages.connectors.sub-section.components.paragraph")
          }}
        </p>
        <p class="mb-0">
          {{
            $t("wholesale.pages.connectors.sub-section.components.description")
          }}
        </p>
        <p class="mb-0">
          {{
            $t("wholesale.pages.connectors.sub-section.components.description2")
          }}
        </p>
      </v-col>
    </v-row>
    <v-row
      class="wholesale-subcat-info mt-8"
      daTa-aos="fade-down"
      data-aos-delay="400"
      data-aos-easing="ease-in-out"
    >
      <v-col cols="12" class="text-left">
        <h4 class="mb-2">
          {{
            $t("wholesale.pages.connectors.sub-section.components.list.title")
          }}
        </h4>
        <ul class="pl-0">
          <li>
            {{
              $t(
                "wholesale.pages.connectors.sub-section.components.list.list-item"
              )
            }}
          </li>
          <li>
            {{
              $t(
                "wholesale.pages.connectors.sub-section.components.list.list-item2"
              )
            }}
          </li>
        </ul>
      </v-col>
      <v-col cols="12" class="text-left">
        <h4 class="mb-2">
          {{
            $t("wholesale.pages.connectors.sub-section.components.list2.title")
          }}
        </h4>
        <ul class="pl-0">
          <li>
            {{
              $t(
                "wholesale.pages.connectors.sub-section.components.list2.list-item"
              )
            }}
          </li>
        </ul>
      </v-col>
    </v-row>
    <base-miny-gallery
      :minyGallery="true"
      :className="'component'"
      :galleryImages="componentImages"
    ></base-miny-gallery>
  </v-container>
</template>
<script>
import ImageService from "../../services/ImageService";

export default {
  name: "Connectors",
  data() {
    return {
      connectorImages: [],
      terminalImages: [],
      componentImages: [],
      folders: [
        { folder: "connectors/sub-connectors" },
        { folder: "connectors/terminals" },
        { folder: "connectors/components" },
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
              this.connectorImages.push(image);
            } else if (index == 1) {
              this.terminalImages.push(image);
            } else {
              this.componentImages.push(image);
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
