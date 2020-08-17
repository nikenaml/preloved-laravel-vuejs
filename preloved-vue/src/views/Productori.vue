<template>
  <div class="product">
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
              <span>Detail</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad page-details">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-lg-6">
                <div class="product-pic-zoom">
                  <!-- src bersifat dinamis, oleh karna itu di dimanipulasi menggunakan v-bind (memberikan suatu komponen pada property tersebut) -->
                  <img class="product-big-img" :src="gambar_default" alt />
                </div>
                <div class="product-thumbs" v-if="productDetails.galleries.length > 0">
                  <carousel class="product-thumbs-track ps-slider" :dots="false" :nav="false">
                    <div
                      v-for="gambar in productDetails.galleries"
                      :key="gambar.id"
                      class="pt"
                      @click="changeImage(gambar.photo)"
                      :class="gambar.photo  == gambar_default ? 'active' : ''"
                    >
                      <img :src="gambar.photo" alt />
                      <!-- : (artinya v-bind), untuk mempersingkat langsung : aja -->
                    </div>
                  </carousel>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="product-details text-left">
                  <div class="pd-title">
                    <span>{{productDetails.type}}</span>
                    <h3>{{productDetails.name}}</h3>
                  </div>
                  <div class="pd-desc">
                    <!-- v-html untuk menghapus tag p yang di generate secara otomatis di halaman admin
                    jadi bisa dihapus menggunakan fungsi dari vue js yaitu v-html-->
                    <p v-html="productDetails.description"></p>
                    <h4>Rp {{productDetails.price}}</h4>
                  </div>
                  <div class="quantity">
                    <router-link to="/cart">
                      <!-- (gambar,id) merupakan parameter yang akan dilemparkan kepada function
                      save keranjang sehingga bisa disimpan kepada local storage-->
                      <a
                        @click="saveKeranjang(productDetails.id, productDetails.name, productDetails.price, productDetails.galleries[0].photo)"
                        href="#"
                        class="primary-btn pd-cart"
                      >Add To Cart</a>
                    </router-link>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Product Shop Section End -->

    <RelatedProductPreloved />
    <FooterPreloved />
  </div>
</template>

<script>
// @ is an alias to /src
// import HelloWorld from "@/components/HelloWorld.vue";
import HeaderPreloved from "@/components/HeaderPreloved.vue";
import FooterPreloved from "@/components/FooterPreloved.vue";
import carousel from "vue-owl-carousel";
import RelatedProductPreloved from "@/components/RelatedProductPreloved.vue";

import axios from "axios";

export default {
  name: "Product",
  components: {
    // HelloWorld
    HeaderPreloved,
    FooterPreloved,
    carousel,
    RelatedProductPreloved
  },
  //   data untuk menaruh API
  data() {
    return {
      // gambarnya akan dinamis berdasarkan "id" yang dipilih oleh pengguna sebelumnya,
      // data nya diambil dari api, lalu di implementasikan kepada json, dan akan dimanipulasi kepada bagian html
      // datanya berbentuk array, yang akan di ambil dengan api, datanya ditampilkan dengan v-for dengan vue js
      gambar_default: "",
      // karna sudah ga dibutuhkan lagi jadi dihapus saja, kan sudah ambil dari database dan api datanya
      // thumbs: [
      //   "img/mickey1.jpg",
      //   "img/mickey2.jpg",
      //   "img/mickey3.jpg",
      //   "img/mickey4.jpg"
      // ],
      // ini untuk get idProduct di halaman utamanya ketika product gambarnya di klik
      // id: this.$route.params.id

      productDetails: [],

      // objek dan array digunakan untuk menyimpan dan mengambil, jadi perlu
      // mempersiapkan placeholder atau tempat dimana akan menyimpan keranjang user ini
      keranjangUser: []
    };
  },
  //   method digunakan untuk membuat suatu events, method bisa disebut function
  methods: {
    changeImage(urlImage) {
      // ketika sudah menekan atau klik tombol changeImage, lalu tampilkan dibawah
      this.gambar_default = urlImage;
    },
    // fungsi tambahan untuk gambar detail, fungsi ini digunakan setelah
    //  berhasil akses API dari axios ini
    setDataPicture(data) {
      //replace object productDetails dengan data dari API
      this.productDetails = data;

      //replace value gambar default dengan data dari API (galleries)
      this.gambar_default = data.galleries[0].photo;
    },

    // yang didalam kurung artinya parsing parameternya,
    // function ini digunakan pada button addtocart di halaman front-end
    saveKeranjang(idProduct, nameProduct, priceProduct, photoProduct) {
      // untuk menyimpan data lain selain id di local storage
      var productStored = {
        id: idProduct,
        name: nameProduct,
        price: priceProduct,
        photo: photoProduct
      };

      // didapatkan dari button, lalu dilempar ke keranjang user,
      // ini yang dilempar yang di dalam adalah var productstored
      this.keranjangUser.push(productStored);
      const parsed = JSON.stringify(this.keranjangUser);
      localStorage.setItem("keranjangUser", parsed);
    }
  },
  mounted() {
    // validasi untuk local storage nya
    if (localStorage.getItem("keranjangUser")) {
      try {
        this.keranjangUser = JSON.parse(localStorage.getItem("keranjangUser"));
      } catch (e) {
        localStorage.removeItem("keranjangUser");
      }
    }

    // fungsi bawaan dari vue js
    axios
      .get("http://127.0.0.1:8000/api/products", {
        params: {
          id: this.$route.params.id
        }
        // fungsi params untuk menghubungkan link dengan api, params bersifat objek
      })
      // setelah berhasil akses, maka akan jalankan fungsi di bawah ini
      .then(res => this.setDataPicture(res.data.data))
      // setelah api diambil lalu letakkan di bagian product yang sudah
      // ada di data
      // kenapa data.data? karna untuk mendapatkannya ada di data bagian ke 2 setelah datapembungkus
      // data1=data pembungkus, data 2 dan data 3 itu masuk ke isi data API nya
      // buka json formatter dari API yang di get
      .catch(err => console.log(err));
  }
};
</script>

<style scoped>
.product-thumbs .pt {
  margin-right: 15px;
}

/* fungsi binding untuk memasukkan suatu data amanipulasi yang di dapat dari api, lalu diterapkan di client side atau front side*/
</style>
