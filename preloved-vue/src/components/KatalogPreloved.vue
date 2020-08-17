<template>
  <!-- Women Banner Section Begin -->
  <section class="women-banner spad">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3">
          <div class="product-large set-bg" style="background-image: url('img/products/shop.png')">
            <h2 style="color:#fff;">SHOP</h2>
            <router-link to="/shop">
              <a href="#" style="color:#fff;">Discover More</a>
            </router-link>
          </div>
        </div>
        <div class="col-lg-8 offset-lg-1" v-if="products.length > 0">
          <carousel class="product-slider" :items="3" :dots="false" :nav="false" :autoplay="true">
            <div
              class="product product-single"
              v-for="itemProduct in products"
              v-bind:key="itemProduct.id"
            >
              <!-- untuk responsive atur dalam CSS (disini diatur di class product-single) -->
              <div class="product-label">
                <span>{{itemProduct.type}}</span>
              </div>
              <div class="product-thumb" v-if="itemProduct.galleries.length > 0">
                <router-link v-bind:to="'/product/'+itemProduct.id">
                  <button class="main-btn quick-view">
                    <i class="fa fa-search-plus"></i> Quick view
                  </button>
                </router-link>

                <img v-bind:src="itemProduct.galleries[0].photo" alt />
              </div>
              <div class="product-body">
                <router-link v-bind:to="'/product/'+itemProduct.id">
                  <h2 class="product-name">{{ itemProduct.name }}</h2>
                </router-link>
                <div class="product-price">IDR {{ itemProduct.price }}</div>
                <div class="product-btns">
                  <button class="primary-btn add-to-cart">
                    <i
                      class="fa fa-shopping-cart"
                      @click="saveKeranjang(itemProduct.id, itemProduct.name, itemProduct.price, itemProduct.galleries[0].photo)"
                    ></i> Add to Cart
                  </button>
                </div>
              </div>
            </div>
          </carousel>
        </div>
        <div class="col-lg-12 mt-5" v-else>
          <p>Produk terbaru belum tersedia untuk saat ini.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Women Banner Section End -->
</template>


<script>
import carousel from "vue-owl-carousel";
import axios from "axios";

export default {
  name: "WomanAllbrands",
  components: {
    carousel
  },
  data() {
    return {
      products: [],
      keranjangUser: []
    };
  },
  mounted() {
    axios
      .get("http://127.0.0.1:8000/api/products")
      .then(res => {
        // console.log(res.data.data.data)
        this.products = res.data.data.data;
      })
      // .then(res => (this.products = res.data.data.data))

      // eslint-disable-next-line no-console
      .catch(err => console.log(err));
  },
  methods: {
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
  }
};
</script>

    <style scoped>
.product-item {
  margin-right: 25px;
}
.product-item .pi-pic img {
  max-width: 100%;
  max-height: 100%;
  width: 600px;
  height: 420px;
}
.product-item .pi-pic ul li.w-icon.active a {
  background: #e7ab3c;
  color: #ffffff;
  height: 100%;
}
.product-large {
  margin-top: 25px;
  height: 480px;
  margin-left: -15px;
  margin-right: -15px;
  text-align: center;
  padding-top: 200px;
}
.product-large h2 {
  color: #ffffff;
  font-size: 48px;
  font-weight: 700;
}
.product-large a {
  color: #ffffff;
  font-size: 18px;
  font-weight: 500;
  display: inline-block;
  position: relative;
}
.product-slider {
  margin-top: 30px;
}

/* .imgwb {
  object-fit: contain;
  max-width: 100%;
  max-height: 100%;
  width: auto;
  height: auto;
} */
</style>