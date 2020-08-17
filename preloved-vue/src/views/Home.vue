<template>
  <div class="home">
    <!-- <GuestBookPreloved /> -->
    <HeaderPreloved />
    <SliderPreloved />
    <KatalogPreloved />
    <SubCategory />
    <InstaGalleryPreloved />
    <PartnerPreloved />
    <!-- <div class="move-up">
      <span>
        <i class="fas fa-arrow-circle-up fa-2x"></i>
      </span>
    </div>-->
    <FooterPreloved />
  </div>
</template>

<script>
// @ is an alias to /src
// import HelloWorld from "@/components/HelloWorld.vue";
// import GuestBookPreloved from "@/components/GuestBookPreloved.vue";
import HeaderPreloved from "@/components/HeaderPreloved.vue";
import SliderPreloved from "@/components/SliderPreloved.vue";
import KatalogPreloved from "@/components/KatalogPreloved.vue";
import SubCategory from "@/components/SubCategory.vue";
import InstaGalleryPreloved from "@/components/InstaGalleryPreloved.vue";
import PartnerPreloved from "@/components/PartnerPreloved.vue";
import FooterPreloved from "@/components/FooterPreloved.vue";
// import "../script.js";

export default {
  name: "Home",
  components: {
    // HelloWorld
    // GuestBookPreloved,
    HeaderPreloved,
    SliderPreloved,
    KatalogPreloved,
    SubCategory,
    InstaGalleryPreloved,
    PartnerPreloved,
    FooterPreloved
  }
};
</script>
