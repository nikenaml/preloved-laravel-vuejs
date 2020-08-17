<template>
  <div>
    <div class="d-flex success-checkout align-items-center justify-content-center">
      <div class="col col-lg-4 text-center">
        <img src="img/success-subscribe.png" alt width="294" />
        <h3 class="mt-4">Sukses Berlangganan Email!</h3>
        <p
          class="mt-2"
        >Terima Kasih sudah berlangganan email bersama kami. Nantikan update informasi terbaru dari toko kami ya secara berkala melalui email. Tetap bersabar menunggu yaa ^-^</p>
        <router-link to="/">
          <a href="index.html" class="primary-btn pd-cart mt-2">Back to Home</a>
        </router-link>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "About",
  components: {}
};
</script>

<style scoped>
</style>