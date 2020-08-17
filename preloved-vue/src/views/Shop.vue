<template>
  <div class="shop-page">
    <HeaderAllbrands />
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section text-left">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcrumb-text product-more">
              <router-link to="/">
                <i class="fa fa-home"></i> Home
              </router-link>
              <span>Shop</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb Section End -->
    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
      <div class="container" :class="{'loading': loading}">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
            <div class="filter-widget">
              <h4 class="fw-title">Gender</h4>
              <div
                class="form-check"
                v-for="(gender, index) in genders"
                v-bind:key="gender.id"
                align="left"
              >
                <input
                  class="form-check-input mt-3"
                  type="checkbox"
                  :value="gender.id"
                  :id="'category'+index"
                  v-model="selected.genders"
                  @click="check_once('gender')"
                />
                <label
                  class="form-check-label"
                  :for="'category' + index"
                >{{ gender.name }} ({{ gender.products_count }})</label>
              </div>
            </div>
            <div class="filter-widget">
              <h4 class="fw-title">Categories</h4>
              <div
                class="form-check"
                v-for="(category, index) in categories"
                v-bind:key="category.id"
                align="left"
              >
                <input
                  class="form-check-input mt-3"
                  type="checkbox"
                  :value="category.id"
                  :id="'category'+index"
                  v-model="selected.categories"
                  @click="check_once('category')"
                />
                <label
                  class="form-check-label"
                  :for="'category' + index"
                >{{ category.name }} ({{ category.products_count }})</label>
              </div>
            </div>
            <div class="filter-widget">
              <h4 class="fw-title">Price</h4>
              <div
                class="form-check"
                v-for="(price, index) in prices"
                v-bind:key="price.id"
                align="left"
              >
                <input
                  class="form-check-input mt-3"
                  type="checkbox"
                  :value="index"
                  :id="'price'+index"
                  v-model="selected.prices"
                  @click="check_once('price')"
                />
                <label
                  class="form-check-label"
                  :for="'price' + index"
                >{{ price.name }} ({{ price.products_count }})</label>
              </div>
            </div>
            <div class="filter-widget">
              <h4 class="fw-title">Tags</h4>
              <div class="fw-tags" align="left">
                <a href="#">Stradivarius</a>
                <a href="#">Zara</a>
                <a href="#">Pull and Bear</a>
                <a href="#">Mango</a>
                <a href="#">HM</a>
                <a href="#">Bershka</a>
                <a href="#">Uniqlo</a>
                <a href="#">Pomelo</a>
                <a href="#">Berrybenka</a>
              </div>
            </div>
          </div>
          <div class="col-lg-9 order-1 order-lg-2">
            <div class="product-show-option">
              <div class="row">
                <div class="col-lg-7 col-md-7">
                  <div class="form-inline">
                    <label class="mr-2">Showing</label>

                    <select class="form-control" v-model="perpage">
                      <option v-for="o in pageoptions" :key="o" :value="o">{{ o }}</option>
                    </select>
                    <label class="ml-0">Entries</label>
                  </div>
                </div>
                <div class="col-lg-5 col-md-5 text-right">
                  <p>Show 01- 09 Of 36 Product</p>
                </div>
              </div>
            </div>
            <div class="product-list">
              <div class="row">
                <p v-if="loading">Loading....</p>
                <transition-group name="card" tag="ul" v-else>
                  <div
                    class="product-item"
                    v-for="itemProduct in products.data"
                    v-bind:key="itemProduct.id"
                  >
                    <div class="pi-pic" v-if="itemProduct.galleries.length > 0">
                      <span class="out-of-stock-banner">Stock: {{itemProduct.quantity}}</span>
                      <img v-bind:src="itemProduct.galleries[0].photo" alt />
                      <ul>
                        <li class="quick-view">
                          <router-link v-bind:to="'/product/'+itemProduct.id">+ Quick View</router-link>
                        </li>
                      </ul>
                    </div>
                    <div class="pi-text">
                      <div class="catagory-name">{{ itemProduct.type }}</div>
                      <router-link to="/product">
                        <a href="#">
                          <h5>{{ itemProduct.name }}</h5>
                        </a>
                      </router-link>
                      <div class="product-price">IDR {{ itemProduct.price }}</div>
                    </div>
                  </div>
                </transition-group>
                <paginate
                  :page-count="parseInt(products.last_page)"
                  :page-range="parseInt(products.per_page)"
                  :margin-pages="2"
                  :click-handler="kliknext"
                  :prev-text="'Prev'"
                  :next-text="'Next'"
                  :container-class="'pagination'"
                  :page-class="'page-item'"
                ></paginate>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Product Shop Section End -->
    <FooterAllbrands />
  </div>
</template>

<script>
import HeaderAllbrands from "@/components/HeaderPreloved.vue";
import FooterAllbrands from "@/components/FooterPreloved.vue";
import Pagination from "../views/Pagination";
import Paginate from "vuejs-paginate";
import axios from "axios";

export default {
  name: "Shop",
  created() {
    this.$store.dispatch("productdata");
  },
  components: {
    // HelloWorld
    HeaderAllbrands,
    FooterAllbrands,
    Pagination,
    Paginate
  },
  computed: {
    productdata() {
      return this.$store.getters.products;
    }
  },
  data() {
    return {
      genders: [],
      prices: [],
      categories: [],
      // products: [],
      products: {},
      loading: true,
      selected: {
        prices: [],
        categories: [],
        genders: []
      },
      pageoptions: [2, 4, 6, 8, 10],
      perpage: 2,
      pricerange: null,
      category: null,
      gender: null
    };
  },
  mounted() {
    this.loadCategories();
    this.loadProducts();
    this.loadPrices();
    this.loadGenders();
  },
  watch: {
    perpage(value) {
      console.log(value);
      this.loadProducts();
    },
    selected: {
      handler: function(x) {
        // if (x.prices.length==0) {
        //   this.pricerange = null
        // } else {
        //   this.pricerange = x.prices[0]
        // }
        this.gender = x.genders.length == 0 ? null : x.genders[0];
        this.category = x.categories.length == 0 ? null : x.categories[0];
        this.pricerange = x.prices.length == 0 ? null : x.prices[0];

        // console.log(x)

        // this.loadCategories();
        this.loadProducts();
        // this.loadPrices();
        // thid.loadGenders();
      },
      deep: true
    }
  },
  methods: {
    check_once(type) {
      if (type == "gender") this.selected.genders = [];

      if (type == "price") this.selected.prices = [];
      if (type == "category") this.selected.categories = [];
    },
    kliknext(value) {
      console.log(value);
      this.loadProducts(value);
    },
    loadCategories: function() {
      axios
        .get("http://127.0.0.1:8000/api/categories", {
          params: _.omit(this.selected, "categories")
        })
        .then(response => {
          this.categories = response.data.data;
        })
        .catch(function(error) {
          console.log(error);
        });
    },
    loadProducts(page) {
      var that = this;
      const params = {
        limit: this.perpage,
        page: page,
        pricerange: this.pricerange,
        category: this.category,
        gender: this.gender
      };
      console.log(params);
      axios
        .get("http://127.0.0.1:8000/api/products", { params })
        .then(res => {
          this.products = res.data.data;
        })
        .catch(err => console.log(err));
    },
    loadPrices: function(page = 1) {
      axios
        .get("http://127.0.0.1:8000/api/prices", {
          params: _.omit(this.selected, "page")
        })
        .then(response => {
          this.prices = response.data;
          this.loading = false;
        })
        .catch(function(error) {
          console.log(error);
        });
    },
    loadGenders: function() {
      axios
        .get("http://127.0.0.1:8000/api/genders", {
          params: _.omit(this.selected, "genders")
        })
        .then(response => {
          this.genders = response.data.data;
        })
        .catch(function(error) {
          console.log(error);
        });
    }
  }
};
</script>

<style scoped>
.out-of-stock-banner {
  background: #505050;
  color: #f9f9f9;
  font-family: sans-serif;
  position: absolute;
  padding: 2px 10px 4px;
  text-transform: uppercase;
  font-size: 13px;
  font-weight: 700;
  z-index: 99;
}
.product-list .product-item .pi-pic ul li {
  list-style: none;
  display: inline-block;
  margin-left: 20px;
}
.product-list .product-item .pi-pic ul li.w-icon.active a {
  margin-left: 0;
  padding-bottom: 62px;
  background: #e7ab3c;
  color: #ffffff;
}
.product-list .product-item {
  margin-bottom: 26px;
}
.product-list .product-item:hover .pi-pic .icon {
  top: 15px;
  opacity: 1;
}
.product-list .product-item:hover .pi-pic ul {
  bottom: 0;
}
.product-list .product-item .pi-pic .icon {
  font-size: 20px;
  color: #252525;
  position: absolute;
  right: 25px;
  top: -20px;
  cursor: pointer;
  -webkit-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s;
  opacity: 0;
}
.product-list .product-item .pi-pic ul {
  position: absolute;
  left: 0;
  bottom: -100px;
  -webkit-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s;
  text-align: center;
  width: 100%;
}

.filter-widget .fw-title {
  text-align: left;
}
.filter-catagories li {
  text-align: left;
}
.search-form h4 {
  text-align: left;
}
.form-check {
  position: relative;
  display: block;
  padding-left: 1.25rem;
}
.form-check-input {
  position: absolute;
  margin-top: 0.3rem;
  margin-left: -1.25rem;
}
.form-check-input:disabled ~ .form-check-label {
  color: #6c757d;
}
.form-check-label {
  margin-bottom: 0;
  font-size: 18px;
}
.form-check-inline {
  display: -ms-inline-flexbox;
  display: inline-flex;
  -ms-flex-align: center;
  align-items: center;
  padding-left: 0;
  margin-right: 0.75rem;
}
.form-check-inline .form-check-input {
  position: static;
  margin-top: 0;
  margin-right: 0.3125rem;
  margin-left: 0;
}
.blog-sidebar .search-form {
  margin-bottom: 55px;
}
.blog-sidebar .search-form h4 {
  color: #252525;
  font-weight: 700;
  margin-bottom: 12px;
}
.blog-sidebar .search-form form {
  position: relative;
}
.blog-sidebar .search-form form input {
  height: 46px;
  width: 100%;
  border: 2px solid #ececec;
  padding-left: 20px;
  font-size: 18px;
  color: #b2b2b2;
}
.blog-sidebar .search-form form button {
  position: absolute;
  right: 0;
  top: 0;
  color: #ffffff;
  background: #252525;
  border: 1px solid #252525;
  height: 46px;
  padding: 0 15px;
  cursor: pointer;
}
.mb-3,
.my-3 {
  margin-bottom: 3rem !important;
}
.product-shop {
  padding-top: 80px;
  padding-bottom: 80px;
}
.spad {
  padding-top: 50px;
  padding-bottom: 100px;
}
.container {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
.order-1 {
  -ms-flex-order: 1;
  order: 1;
}
.product-show-option {
  margin-bottom: 30px;
}
.product-list .row {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
  margin-top: 10px;
}
.product-show-option .select-option .sorting {
  margin-right: 20px;
}
.product-show-option .select-option .sorting.nice-select {
  padding-right: 70px;
}
.product-show-option .select-option .sorting {
  margin-right: 20px;
}
.product-show-option .select-option .nice-select {
  border-radius: 0;
  border: 1px solid #ecedee;
  height: 40px;
  line-height: 35px;
}
.product-show-option .select-option .nice-select .list {
  margin-top: 0;
  border-radius: 0;
  width: 100%;
}
.text-right {
  text-align: right !important;
}
.col-lg-4,
.col-sm-6 {
  position: relative;
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
}
label {
  margin-top: 10px;
  display: inline-block;
  margin-bottom: 0.5rem;
}
</style>