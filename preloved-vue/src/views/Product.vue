<template>
  <div class="product">
    <HeaderPreloved />
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section text-left">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcrumb-text product-more">
              <router-link to="/" active-class="active">
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
                  <img class="product-big-img" :src="gambar_default" alt />
                </div>
                <div
                  class="product-thumbs"
                  v-if="productDetails.galleries && productDetails.galleries.length > 0"
                >
                  <carousel class="product-thumbs-track ps-slider" :dots="false" :nav="false">
                    <div
                      v-for="gambar in productDetails.galleries"
                      :key="gambar.id"
                      class="pt"
                      @click="changeImage(gambar.photo)"
                      :class="gambar.photo  == gambar_default ? 'active' : ''"
                    >
                      <img :src="gambar.photo" alt />
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
                    <p v-html="productDetails.description"></p>
                    <h4>Rp {{productDetails.price}}</h4>
                  </div>
                  <div class="quantity">
                    <router-link to="/cart">
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
//import HelloWorld from '@/components/HelloWorld.vue'
import HeaderPreloved from "@/components/HeaderPreloved.vue";
import FooterPreloved from "@/components/FooterPreloved.vue";
import RelatedProductPreloved from "@/components/RelatedProductPreloved.vue";
import carousel from "vue-owl-carousel";
import axios from "axios";

export default {
  name: "Products",
  components: {
    HeaderPreloved,
    RelatedProductPreloved,
    FooterPreloved,
    carousel
  },
  data() {
    return {
      gambar_default: "",
      productDetails: [],
      keranjangUser: []
    };
  },
  methods: {
    changeImage(urlImage) {
      this.gambar_default = urlImage;
    },
    setDataPicture(data) {
      //replace object productDetails dengan data dari API
      this.productDetails = data;
      //replace value gambar default dengan data dari API (galleries)
      this.gambar_default = data.galleries[0].photo;
    },
    saveKeranjang(idProduct, nameProduct, priceProduct, photoProduct) {
      var productStored = {
        id: idProduct,
        name: nameProduct,
        price: priceProduct,
        photo: photoProduct
      };
      this.keranjangUser.push(productStored);
      const parsed = JSON.stringify(this.keranjangUser);
      localStorage.setItem("keranjangUser", parsed);
    }
  },
  mounted() {
    if (localStorage.getItem("keranjangUser")) {
      try {
        this.keranjangUser = JSON.parse(localStorage.getItem("keranjangUser"));
      } catch (e) {
        localStorage.removeItem("keranjangUser");
      }
    }
    axios
      .get("http://127.0.0.1:8000/api/products", {
        params: {
          id: this.$route.params.id
        }
      })
      .then(res => this.setDataPicture(res.data.data))

      // eslint-disable-next-line no-console
      .catch(err => console.log(err));
  }
};
</script>

<style scoped>
.product-pic-zoom {
  margin-bottom: 10px;
  position: relative;
  z-index: 1;
}

.product-pic-zoom img {
  min-width: 80%;
  height: 450px;
}

.product-pic-zoom .zoom-icon {
  position: absolute;
  right: 20px;
  top: 20px;
}

.product-pic-zoom .zoom-icon i {
  color: #4c4c4c;
  font-size: 14px;
  width: 40px;
  height: 40px;
  border: 1px solid #d7d7d7;
  text-align: center;
  border-radius: 50%;
  line-height: 37px;
}
.product-thumbs .pt {
  margin-right: 14px;
}
.product-details .pd-title h3 {
  margin-bottom: 30px;
}
</style>
