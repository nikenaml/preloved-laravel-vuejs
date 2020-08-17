<template>
  <div>
    <div class="d-flex success-checkout align-items-center justify-content-center">
      <div class="col col-lg-4 text-center">
        <img src="img/success-transfer.png" alt width="294" />
        <h3 class="mt-4">Sukses Upload Bukti Transfer!</h3>
        <p
          class="mt-2"
        >Terima kasih sudah melakukan pembayaran, ditunggu yaa, barang pesanan anda sudah terkonfirmasi dan sedang dalam proses packing dan pengiriman.</p>
        <router-link to="/">
          <a href="index.html" class="primary-btn pd-cart mt-2">Back to Home</a>
        </router-link>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "SuccessTransfer",
  components: {}
};
</script>

<style scoped>
</style>