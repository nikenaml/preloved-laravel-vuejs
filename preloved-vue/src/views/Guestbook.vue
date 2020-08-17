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
              <span>Buku Tamu</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="guestbook spad">
      <div class="container">
        <div class="row col-sm-8 offset-2">
          <div class="col-lg-12">
            <h4 class="mb-4 text-center">Data Diri Pengunjung</h4>
            <div class="user-checkout text-left">
              <p
                class="mt-5 mb-5 text-justify"
              >Guest Book ini berguna untuk memberikan sebuah saran dan kritik mengenai webiste kami, dan juga sebagai tanda bukti kunjungan anda. Harap diisi dengan benar dan penuh tanggung jawab. Terima kasih.</p>
              <form>
                <div class="form-group">
                  <label for="namaLengkap">Nama lengkap</label>
                  <input
                    type="text"
                    class="form-control"
                    id="namaLengkap"
                    aria-describedby="namaHelp"
                    placeholder="Masukan Nama Lengkap"
                    v-model="tamuInfo.nama_tamu"
                  />
                </div>
                <div class="form-group">
                  <label for="emailAddress">Email</label>
                  <input
                    type="email"
                    class="form-control"
                    id="emailAddress"
                    aria-describedby="emailHelp"
                    placeholder="Masukan Nama Lengkap"
                    v-model="tamuInfo.email_tamu"
                  />
                  <!-- v-model untuk memasukkan data ke object customer.info yang sudah dibuat -->
                </div>
                <div class="form-group">
                  <label for="asalKunjungan">Asal Kunjungan</label>
                  <input
                    type="text"
                    class="form-control"
                    id="asalKunjungan"
                    aria-describedby="asalHelp"
                    placeholder="Masukan Asal Kunjungan"
                    v-model="tamuInfo.asal_tamu"
                  />
                </div>
                <div class="form-group">
                  <label for="noHP">No. HP</label>
                  <input
                    type="text"
                    class="form-control"
                    id="noHP"
                    aria-describedby="noHPHelp"
                    placeholder="Masukan No. HP"
                    v-model="tamuInfo.nohp_tamu"
                  />
                </div>
                <div class="form-group">
                  <label for="komentarTamu">Pesan, Saran dan Masukan</label>
                  <ckeditor v-model="tamuInfo.komentar_tamu" :config="editorConfig">
                    <textarea
                      class="form-control"
                      id="komentarTamu"
                      rows="3"
                      placeholder="Tulis saran dan masukkan untuk Kami!"
                    ></textarea>
                  </ckeditor>
                </div>
                <div class="form-group">
                  <label for="nilai">Nilai</label>
                  <input
                    type="text"
                    class="form-control"
                    id="nilai"
                    aria-describedby="nilaiHelp"
                    placeholder="Masukan Penilaian"
                    v-model="tamuInfo.nilai_tamu"
                  />
                </div>
                <div class="form-group">
                  <a @click="pengunjung()" class="btn btn-primary btn-block" href="#">Submit</a>
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
import CKEditor from "ckeditor4-vue";
import axios from "axios";

export default {
  name: "Guestbook",
  components: {
    // Use the <ckeditor> component in this view.
    ckeditor: CKEditor.component
  },
  data() {
    return {
      editorConfig: {
        // The configuration of the editor.
      },
      tamuInfo: {
        nama_tamu: "",
        email_tamu: "",
        asal_tamu: "",
        nohp_tamu: "",
        komentar_tamu: "",
        nilai_tamu: ""
      }
    };
  },

  methods: {
    pengunjung() {
      let pengunjungData = {
        nama_tamu: this.tamuInfo.nama_tamu,
        email_tamu: this.tamuInfo.email_tamu,
        asal_tamu: this.tamuInfo.asal_tamu,
        nohp_tamu: this.tamuInfo.nohp_tamu,
        komentar_tamu: this.tamuInfo.komentar_tamu,
        nilai_tamu: this.tamuInfo.nilai_tamu
      };

      axios
        .post("http://127.0.0.1:8000/api/guestbook", pengunjungData)

        .then(() => this.$router.push("success-guestbook"))
        .catch(err => console.log(err));
    }
  }
};
</script>

<style scoped>
</style>