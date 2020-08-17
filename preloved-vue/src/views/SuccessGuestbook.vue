<template>
  <div>
    <div class="d-flex success-checkout align-items-center justify-content-center">
      <div class="col col-lg-4 text-center">
        <img src="img/success-guestbook.png" alt width="294" />
        <h3 class="mt-4">Sukses Mengisi Buku Tamu!</h3>
        <p
          class="mt-2"
        >Terima Kasih sudah meluangkan waktu untuk mengunjungi website ini dan mengisi buku kunjungan. Sebarkan link web ini ke teman-teman lain juga ya :)</p>
        <router-link to="/">
          <a href="index.html" class="primary-btn pd-cart mt-2">Back to Home</a>
        </router-link>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "SuccessGuestbook",
  components: {}
};
</script>

<style scoped>
</style>