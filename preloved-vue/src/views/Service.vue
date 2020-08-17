<template>
  <div class="service-page">
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
              <span>Services</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Service Section Begin -->
    <section class="services-detail">
      <div class="wrapper">
        <div class="container">
          <div class="material">
            <div class="content mt-4">
              <h1>Our Services</h1>
              <p>Memberikan pelayanan prima setiap saat dengan selalu memberikan kemudahan berkomunikasi antara penjual dengan pembeli dan mengedepankan solusi parktis bagi e-commerce. Pelayanan yang mudah dan cepat dengan point yang diutamakan keramahan dan kenyamanan kepada pelanggan. Dijual dengan penuh ketulusan cinta, tanpa ribet dengan transaksi yang cepat dan mudah.</p>
            </div>
            <div class="features">
              <div class="features-group-1">
                <div class="feature-1">
                  <img src="img/services/phone.svg" />
                  <h2>
                    <b>24 hours full nonstop</b>
                  </h2>
                  <p>Pelayanan penuh 24 jam sehari dengan akses website setiap saat dan dengan bantuan customer service toko kami yang siap melayani anda dalam kesulitan. Dilengkapi dengan buku panduan berbelanja.</p>
                </div>
                <div class="feature-2">
                  <img src="img/services/delivery-truck.svg" />
                  <h2>
                    <b>Best Delivery</b>
                  </h2>
                  <p>Pengiriman yang aman, amanah dan terpercaya dengan harga lebih hemat, layanan pick up yang mudah dan lebih cepat.</p>
                </div>
              </div>
              <div class="features-group-2">
                <div class="feature-3">
                  <img src="img/services/ecommerce.svg" />
                  <h2>
                    <b>Shopping Convenience</b>
                  </h2>
                  <p>Berbelanja dimanapun dan kapanpun secara online dengan pelayanan yang tidak terbatas. Sangat mudah digunakan dan diakses setiap saat dalam berbelanja.</p>
                </div>
                <div class="feature-4">
                  <img src="img/services/safe.svg" />
                  <h2>
                    <b>High Security</b>
                  </h2>
                  <p>Berbelanja sepuasnya tanpa khawatir dengan jaminan keamanan yang tinggi melindungi privasi pelanggan.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Service Section End -->

    <RelatedProductPreloved />
    <FooterPreloved />
  </div>
</template>

<script>
import HeaderPreloved from "@/components/HeaderPreloved.vue";
import FooterPreloved from "@/components/FooterPreloved.vue";
// import "../script.js";

export default {
  name: "Service",
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
body {
  overflow: hidden;
}

.material {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.content h1 {
  margin-top: 200px;
  color: #434a54;
  font-size: 3rem;
  font-family: "Roboto";
}

.content p {
  color: #656d78;
  margin-top: 30px;
  margin-bottom: 80px;
  max-width: 500px;
  font-size: 1rem;
}

.content a {
  background-color: #35587b;
  color: #fff;
  font-size: 1.3rem;
  padding: 10px 35px;
  text-decoration: none;
  position: absolute;
}

.wrapper {
  overflow: hidden;
}

.features {
  margin-top: 50px;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
}

.features-group-2 {
  margin-left: 40px;
  margin-top: 50px;
  padding-bottom: 40px;
}

.feature-1,
.feature-2,
.feature-3,
.feature-4 {
  max-width: 250px;
  box-shadow: 0 0.2rem 3rem rgba(0, 0, 0, 0.09);
  padding: 20px;
  background-color: #fff;
}

.feature-2 {
  margin-top: 20px;
}

.feature-4 {
  margin-top: 20px;
}

.features img {
  width: 140px;
  filter: drop-shadow(0 0.1rem 0.2rem rgba(0, 0, 0, 0.35));
  position: relative;
  left: 35%;
  right: 50%;
  transform: translateX(-50%);
}

.features h2 {
  text-align: center;
  font-size: 1rem;
  text-transform: uppercase;
  padding: 15px 0 15px 0;
  color: #434a54;
  font-family: "Roboto";
}

.features p {
  font-size: 0.8rem;
  text-align: center;
  color: #434a54;
  line-height: 1.5;
}
</style>
