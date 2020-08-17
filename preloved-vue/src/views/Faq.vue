<template>
  <div class="faq-page">
    <HeaderPreloved />
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section text-left">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcrumb-text product-more">
              <router-link to="/">
                <i class="fa fa-home"></i> Home
              </router-link>
              <span>FAQ</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- FAQ Section Begin -->
    <section>
      <div class="container">
        <h4 class="mt-5 mb-5 text-center">FAQ - FREQUENTLY ASKED QUESTIONS</h4>
        <div class="accordion">
          <div class="accordion-item" id="question1">
            <a class="accordion-link" href="#question1">
              Question 1 : Apakah saya perlu mengkonfirmasi pembayaran saya?
              <i class="fa fa-plus"></i>
              <i class="fa fa-minus"></i>
            </a>
            <div class="answer">
              <p>Kamu tidak perlu mengkonfirmasi pembayaran yang kamu lakukan, system kami yang akan memverifikasi pembayaran kamu.</p>
            </div>
          </div>

          <div class="accordion-item" id="question2">
            <a class="accordion-link" href="#question2">
              Question 2 : Dapatkah saya mengirimkan pesanan saya kepada orang lain atau ke alamat yang berbeda?
              <i
                class="fa fa-plus"
              ></i>
              <i class="fa fa-minus"></i>
            </a>
            <div class="answer">
              <p>Ya, pesanan bisa dikirimkan ke alamat yang berbeda dari alamat penagihan. Setelah kamu memasukkan alamat penagihan sebelum checkout, kamu akan punya pilihan untuk memasukkan alamat pengiriman baru (berbeda dari alamat penagihan).</p>
            </div>
          </div>

          <div class="accordion-item" id="question3">
            <a class="accordion-link" href="#question3">
              Question 3 : Berapa lama barang pesanan saya sampai, termasuk pengepakan dan pengiriman?
              <i
                class="fa fa-plus"
              ></i>
              <i class="fa fa-minus"></i>
            </a>
            <div class="answer">
              <p>
                Kami berusaha sebaik mungkin untuk memproses pesanan dalam satu hari kerja. Untuk perkiraan waktu pengiriman, silakan lihat waktu di bawah ini:
                Metode pengiriman: pengiriman stkamur perkiraan kedatangan: 3 – 14 hari kerja.
                Allbrands Preloved menggunakan jasa pengiriman SiCepat untuk ekspedisi pengiriman dan kami mengikuti syarat dan ketentuan mereka untuk pengiriman.
              </p>
            </div>
          </div>

          <div class="accordion-item" id="question4">
            <a class="accordion-link" href="#question4">
              Question 4 : Bagaimana caranya memeriksa status pengiriman saya?
              <i class="fa fa-plus"></i>
              <i class="fa fa-minus"></i>
            </a>
            <div class="answer">
              <p>Kamu dapat memeriksanya melalui email yang kami kirimkan. Klik “Lihat Status Pesanan Saya”, setelah itu kamu akan diarahkan ke halaman rekapan pesananmu. Kamu bisa melacak pesananmu dari nomor resi di halaman tersebut.</p>
            </div>
          </div>

          <div class="accordion-item" id="question5">
            <a class="accordion-link" href="#question5">
              Question 5 : Bagaimana jika barang yang saya pesan, saya terima dalam keadaan rusak?
              <i
                class="fa fa-plus"
              ></i>
              <i class="fa fa-minus"></i>
            </a>
            <div class="answer">
              <p>Jika pesananmu kamu terima dalam keadaan rusak, kamu bisa menukarnya dengan yang baru ataupun melakukan refund. Jika kamu ingin menukar item yang kamu pesan, kamu bisa menghubungi kami melaui email di allbrandsgroup@gmail.com.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- FAQ Section End -->

    <FooterPreloved />
  </div>
</template>

<script>
import HeaderPreloved from "@/components/HeaderPreloved.vue";
import FooterPreloved from "@/components/FooterPreloved.vue";

export default {
  name: "Faq",
  components: {
    // HelloWorld
    HeaderPreloved,
    FooterPreloved
  }
  //   mounted() {
  //     let externalScript = document.createElement("script");
  //     externalScript.setAttribute("src", "//script.js");
  //     document.head.appendChild(externalScript);
  //   }
};
</script>

<style scoped>
/* *,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: inherit;
} */
/* 
html {
  font-family: "Roboto", sans-serif;
  font-size: 10px;
  box-sizing: border-box;
} */

/* Section yang digunakan untuk process FAQ */
section {
  width: 100%;
  height: 100%;
  /* background-color: #61636d; */
  display: flex;
  align-items: justify;
  justify-content: center;
}

.container-faq {
  width: 100%;
  max-width: 100%;
  margin: 20px auto;
  padding: 0 1.5rem;
}

.accordion-item {
  background-color: #283042;
  border-radius: 0.4rem;
  margin-bottom: 1rem;
  padding: 1rem;
  box-shadow: 0.5rem 2px 0.5rem rgba(0, 0, 0, 0.1);
}

.accordion-link {
  font-size: 1rem;
  color: rgba(255, 255, 255, 0.8);
  text-decoration: none;
  background-color: #283042;
  width: 100%;
  display: flex;
  align-items: justify;
  justify-content: space-between;
  padding: 1rem;
}

.accordion-link i {
  color: #e7d5ff;
  padding: 0.5rem;
}

.accordion-link .fa.fa-minus {
  display: none;
}

.answer {
  position: relative;
  background-color: #212838;
  max-height: 0;
  overflow: hidden;
  transition: max-height 650ms;
}

.answer::before {
  content: "";
  position: absolute;
  width: 0.6rem;
  height: 90%;
  background-color: #8fc460;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
}

.answer p {
  font-size: 1rem;
  color: rgba(255, 255, 255, 0.6);
  padding: 2rem;
  text-align: justify;
}

.accordion-item:target .answer {
  max-height: 20rem;
}

.accordion-item:target .accordion-link .fa.fa-plus {
  display: none;
}
.accordion-item:target .accordion-link .fa.fa-minus {
  display: block;
}
</style>
