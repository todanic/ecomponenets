<template name="about-us-view">
  <v-container fluid class="about-us-view-container">
    <v-container class="shrink-width">
      <h1 class="mb-4 text-center">
        {{ $t("about-us.title.text") }}
        <span>{{ $t("about-us.title.span") }} </span>
      </h1>
      <p>
        {{ $t("about-us.text1") }}
      </p>
      <p>
        {{ $t("about-us.text2") }}
      </p>
      <p>
        {{ $t("about-us.text3") }}
      </p>
      <p>
        {{ $t("about-us.text4") }}
      </p>
      <p>
        {{ $t("about-us.text5") }}
      </p>
      <p>
        {{ $t("about-us.text6") }}
      </p>
      <p>
        {{ $t("about-us.sincerely") }},<br />
        {{ $t("about-us.stamp") }}
      </p>
      <v-img
        daTa-aos="fade-down"
        data-aos-delay="100"
        data-aos-easing="ease-in-out"
        class="mt-10"
        src="/images/logo-name.png"
        max-width="200px"
      >
      </v-img>
      <p>- {{ $t("about-us.make-it-work") }} -</p>
    </v-container>
  </v-container>
</template>
<script>
export default {
  name: "AboutUsView",
  data() {
    return {};
  },
};
</script>
