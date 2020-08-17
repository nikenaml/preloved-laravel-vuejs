<template>
  <div>
    <div class="footer">
      <div class="inner-footer">
        <div class="footer-items">
          <div class="footer-logo">
            <a href="#">
              <img src="img/logo-allbrands.png" alt />
              <br />
            </a>
          </div>
          <p>Situs jual beli barang bekas preloved berkualitas dari segala brand ternama. Dijual dengan penuh ketulusan cinta dengan style yang cocok untuk semua kalangan usia dan harga yang sesuai dengan kantong para remaja.</p>
        </div>

        <div class="footer-items links">
          <h2>Quick Links</h2>
          <!-- <div class="border"></div> -->
          <ul>
            <a href>
              <li>Home</li>
            </a>
            <router-link to="/about">
              <a href="#">
                <li>About Us</li>
              </a>
            </router-link>
            <router-link to="/service">
              <li>
                <a href="#">Services</a>
              </li>
            </router-link>
            <router-link to="/timeline-order">
              <a href="#">
                <li>Alur Pemesanan</li>
              </a>
            </router-link>
            <router-link to="/cart">
              <a href="#">
                <li>Checkout</li>
              </a>
            </router-link>
            <router-link to="/transfer">
              <a href="#">
                <li>Upload Bukti Bayar</li>
              </a>
            </router-link>
            <router-link to="/faq">
              <a href="#">
                <li>FAQ</li>
              </a>
            </router-link>
            <router-link to="/katalog">
              <a href="#">
                <li>Katalog</li>
              </a>
            </router-link>
            <router-link to="/shop">
              <a href="#">
                <li>Shop</li>
              </a>
            </router-link>
          </ul>
        </div>

        <div class="footer-items contact-us">
          <h2>Contact Us</h2>
          <!-- <div class="border"></div> -->
          <ul>
            <li>
              <i class="fa fa-map-marker" aria-hidden="true"></i>SCBD - Gedung Artha Graha, Jl. Jend. Sudirman No.Kav 52-53
            </li>
            <li>
              <i class="fa fa-phone mt-4" aria-hidden="true"></i>085311321124
            </li>
            <li>
              <i class="fa fa-envelope mt-4" aria-hidden="true"></i>allbrandsgroup@gmail.com
            </li>
          </ul>
          <div class="social-media mt-4">
            <button class="btn btn-outline-warning rounded-circle mr-3 mt-3">
              <a href="#">
                <i class="fa fa-facebook-square"></i>
              </a>
            </button>

            <button class="btn btn-outline-warning rounded-circle mr-3 mt-3">
              <a href="#">
                <i class="fa fa-twitter-square"></i>
              </a>
            </button>

            <button class="btn btn-outline-warning rounded-circle mr-3 mt-3">
              <a href="#">
                <i class="fa fa-instagram"></i>
              </a>
            </button>

            <button class="btn btn-outline-warning rounded-circle mr-3 mt-3">
              <a href="#">
                <i class="fa fa-whatsapp"></i>
              </a>
            </button>
          </div>
        </div>

        <div class="footer-items">
          <h2>Our Newsletter</h2>
          <p>Nikmati layanan berlangganan email untuk update info gratis dan penawaran khusus lainnya dari toko kami setiap harinya.</p>
          <form action method="post">
            <input
              type="text"
              name
              class="form-control rounded-pill mt-3"
              placeholder="Masukkan Nama Anda"
              v-model="subscriberInfo.nama_berlangganan"
            />
            <input
              type="text"
              name
              class="form-control rounded-pill mt-3"
              placeholder="Masukkan Email Anda"
              v-model="subscriberInfo.email_berlangganan"
            />
            <!-- <button type="submit" class="btn btn-danger mt-3 rounded-pill">Subsribe</button> -->
            <a @click="subscriber()" class="btn btn-danger mt-3 rounded-pill" href="#">Subscribe</a>
          </form>
        </div>
      </div>

      <div class="footer-bottom">
        Copyright &copy;
        2019 - 2020 All rights reserved | Allbrands Store
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "FooterPreloved",
  data() {
    return {
      subscriberInfo: {
        nama_berlangganan: "",
        email_berlangganan: ""
      }
    };
  },

  methods: {
    subscriber() {
      let subscriberData = {
        nama_berlangganan: this.subscriberInfo.nama_berlangganan,
        email_berlangganan: this.subscriberInfo.email_berlangganan
      };

      axios
        .post("http://127.0.0.1:8000/api/subscriber", subscriberData)

        .then(() => this.$router.push("success-subscribe"))
        .catch(err => console.log(err));
    }
  }
};
</script>

<style scoped>
/* * {
  margin: 0;
  padding: 0;
  font-family: sans-serif;
} */
.footer {
  width: 100%;
  background: #00121b;
  display: block;
}

.inner-footer {
  width: 95%;
  margin: auto;
  padding: 30px 10px;
  display: flex;
  flex-wrap: wrap;
  box-sizing: border-box;
  justify-content: center;
}

.footer-items {
  width: 25%;
  padding: 10px 20px;
  box-sizing: border-box;
}

h1 {
  padding: 10px 0;
  font-size: 25px;
  color: #fff;
  text-transform: uppercase;
}

.footer-items p {
  color: grey;
  font-size: 16px;
  text-align: justify;
  line-height: 25px;
}

h2 {
  margin: 10px 0;
  color: grey;
  font-size: 16px;
  font-weight: lighter;
  text-transform: uppercase;
}

.border {
  height: 2px;
  width: 40px;
  background: #ff9800;
}

ul {
  list-style: none;
  color: #fff;
  font-size: 15px;
  letter-spacing: 0.5px;
}

ul a {
  text-decoration: none;
  outline: none;
  color: #fff;
  transition: 0.3s;
}

ul a:hover {
  color: #ff9800;
}

.links ul li {
  margin: 10px 0;
  height: 30px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.3);
  text-align: justify;
}

.contact-us ul li {
  margin: 10px 0;
  height: 30px;
  text-align: justify;
}

li i {
  margin-right: 20px;
}

.social-media {
  width: 100%;
  color: #fff;
  text-align: center;
}

.social-media a {
  text-decoration: none;
}

.sociala-media i {
  height: 15px;
  width: 15px;
  margin: 20px 5px;
  padding: 10px;
  color: #fff;
  border-radius: 50%;
  border: 1px solid grey;
  transition: 0.3s;
}

.social-media i:hover {
  background: grey;
}

.footer-bottom {
  padding: 10px;
  background: #3d545f;
  color: #fff;
  font-size: 12px;
}

@media screen and (max-width: 1085px) {
  .footer-items {
    width: 50%;
  }
}

@media screen and (max-width: 600px) {
  .footer-items {
    width: 100%;
  }
}
</style>