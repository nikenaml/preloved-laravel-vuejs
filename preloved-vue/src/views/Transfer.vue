<template>
  <div>
    <div class="breacrumb-section text-left">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcrumb-text product-more">
              <router-link to="/">
                <i class="fa fa-home"></i> Home
              </router-link>
              <span>Upload Bukti Transfer</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="guestbook spad">
      <div class="container">
        <div class="row col-sm-8 offset-2">
          <div class="col-lg-12">
            <h4 class="mb-4 text-center">Data Diri Customer</h4>
            <div class="user-checkout text-left">
              <p
                class="mt-5 mb-5 text-justify"
              >Halaman ini digunakan untuk proses upload bukti pembayaran, dan juga sebagai tanda bukti bahwa customer sudah melakukan pembayaran. Harap diisi dengan benar dan penuh tanggung jawab agar dapat ditindaklanjuti lebih lanjut ke proses pengecekan pembayaran. Terima kasih.</p>
              <form>
                <div class="form-group">
                  <label for="namaLengkap">Nama lengkap</label>
                  <input
                    type="text"
                    class="form-control"
                    id="namaLengkap"
                    aria-describedby="namaHelp"
                    placeholder="Masukan nama lengkap anda"
                    v-model="transferInfo.nama_transfer"
                  />
                </div>
                <div class="form-group">
                  <label for="emailAddress">Email</label>
                  <input
                    type="email"
                    class="form-control"
                    id="emailAddress"
                    aria-describedby="emailHelp"
                    placeholder="Masukkan email pada saat melakukan pemesanan"
                    v-model="transferInfo.email_transfer"
                  />
                </div>
                <div class="form-group">
                  <label for="tglTransfer">Tanggal Transfer</label>
                  <input
                    type="text"
                    class="form-control"
                    id="tglTransfer"
                    aria-describedby="tanggalHelp"
                    placeholder="Masukkan tanggal pembayaran atau transfer (contoh: 28 Januari 2020, 07 Desember 2020)"
                    v-model="transferInfo.tgl_transfer"
                  />
                </div>
                <div class="form-group">
                  <label for="bankCustomer">Bank Customer</label>
                  <input
                    type="text"
                    class="form-control"
                    id="bankCustomer"
                    aria-describedby="bankHelp"
                    placeholder="Masukkan nama bank yang anda gunakan untuk transfer"
                    v-model="transferInfo.bank_customer"
                  />
                </div>
                <div class="form-group">
                  <label for="norekCustomer">Nomor Rekening Anda</label>
                  <input
                    type="text"
                    class="form-control"
                    id="norekCustomer"
                    aria-describedby="norekHelp"
                    placeholder="Masukkan nomor rekening anda"
                    v-model="transferInfo.no_rek_customer"
                  />
                </div>
                <div class="form-group">
                  <label for="totalBayar">Masukkan Jumlah Total Pembayaran</label>
                  <input
                    type="text"
                    class="form-control"
                    id="totalBayar"
                    aria-describedby="totalHelp"
                    placeholder="Masukkan jumlah pembayaran (contoh: 53.500 atau 250.000 atau 1.120.550)"
                    v-model="transferInfo.total_bayar"
                  />
                </div>

                <div class="form-group">
                  <a @click="transfer()" class="btn btn-primary btn-block" href="#">Submit</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
// import CKEditor from "ckeditor4-vue";
import axios from "axios";

export default {
  name: "Transfer",
  components: {
    // Use the <ckeditor> component in this view.
    // ckeditor: CKEditor.component
  },
  data() {
    return {
      transferInfo: {
        nama_transfer: "",
        email_transfer: "",
        tgl_transfer: "",
        bank_customer: "",
        no_rek_customer: "",
        total_bayar: ""
      }
    };
  },
  methods: {
    transfer() {
      let transferData = {
        nama_transfer: this.transferInfo.nama_transfer,
        email_transfer: this.transferInfo.email_transfer,
        tgl_transfer: this.transferInfo.tgl_transfer,
        bank_customer: this.transferInfo.bank_customer,
        no_rek_customer: this.transferInfo.no_rek_customer,
        total_bayar: this.transferInfo.total_bayar
      };

      axios
        .post("http://127.0.0.1:8000/api/transfer", transferData)

        .then(() => this.$router.push("success-transfer"))
        .catch(err => console.log(err));
    }
  }
};
</script>

<style scoped>
</style>