<template>
  <!-- Header Section Begin -->
  <header class="header-section">
    <div class="header-top">
      <div class="container">
        <div class="ht-left">
          <div class="mail-service">
            <i class="fa fa-envelope"></i> allbrandsgroup@gmail.com
          </div>
          <div class="phone-service">
            <i class="fa fa-phone"></i> +62853 1132 1124
          </div>
        </div>
        <div class="ht-right">
          <div class="guest-book btn btn-info btn-sm">
            <router-link to="/guestbook" style="color:#FFF;">
              <i class="fa fa-book"></i> Buku Tamu
            </router-link>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="inner-header">
        <div class="row">
          <div class="col-lg-2 col-md-2">
            <div class="logo">
              <a href="./index.html">
                <img src="img/logo-allbrands.png" alt />
              </a>
            </div>
          </div>
          <div class="col-lg-7 col-md-7"></div>
          <div class="col-lg-3 text-right col-md-3">
            <ul class="nav-right">
              <li class="cart-icon">
                Keranjang Belanja &nbsp;
                <a href="#">
                  <i class="icon_bag_alt"></i>
                  <span>{{keranjangUser.length}}</span>
                </a>
                <div class="cart-hover">
                  <div class="select-items">
                    <table>
                      <tbody v-if="keranjangUser.length > 0">
                        <!-- looping dengan menggunakan v-for-->
                        <tr v-for="keranjang in keranjangUser" :key="keranjang.id">
                          <td class="si-pic">
                            <!-- (:) artinya binding, img di binding karna data tersebut data atribut -->
                            <img class="photo-item" :src="keranjang.photo" alt />
                          </td>
                          <td class="si-text">
                            <div class="product-selected">
                              <p>Rp {{keranjang.price}} x 1</p>
                              <h6>{{keranjang.name}}</h6>
                            </div>
                          </td>
                          <!-- kenapa (keranjang,id) karna mengambil dari keranjang yang sudah di tampung -->
                          <td @click="removeItem(keranjang.id)" class="si-close">
                            <i class="ti-close"></i>
                          </td>
                        </tr>
                      </tbody>

                      <tbody v-else>
                        <tr>
                          <td>Keranjang Kosong</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="select-total">
                    <span>total:</span>
                    <h5>Rp{{totalHarga}},00</h5>
                  </div>
                  <div class="select-button">
                    <a href="#" class="primary-btn view-card">
                      <router-link to="/cart" style="color:#FFF;">VIEW CARD</router-link>
                    </a>
                    <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Header End -->
</template>

<script>
export default {
  name: "HeaderPreloved",
  data() {
    return {
      keranjangUser: []
    };
  },
  methods: {
    // fungsi menghapus item pada keranjang
    removeItem(idx) {
      // cari tahu id dari si item yang akan dihapus, setelah itu di cocokkan dengan idx
      // keranjangnya di define dulu, diambil
      let keranjangUserStorage = JSON.parse(
        localStorage.getItem("keranjangUser")
      );

      // membuat variabel untuk itemnya,
      // jadi perlu di define menggunakan egma scrpt 6 (js) menggunakan map, untuk break nge listing.
      // menggunakan fungsi ero function untuk mendaoatkan id nya
      let itemKeranjangUserStorage = keranjangUserStorage.map(
        itemKeranjangUserStorage => itemKeranjangUserStorage.id
      );

      // cocokan idx item dengan id yang ada di storage
      // buat lagi variabel index untuk mencari id nya, ada proses pencocokan == idx,
      // kuncinya ada di findIndex(id => id == idx)
      let index = itemKeranjangUserStorage.findIndex(id => id == idx);

      // jika cocok indexnya akan di hapus dengan cara dibawah ini dengan splice
      this.keranjangUser.splice(index, 1);
      // 1 adalah berapa item yang dihapus dari nomor index

      // setelah proses itu semua makan akan di update di local storage
      const parsed = JSON.stringify(this.keranjangUser);
      localStorage.setItem("keranjangUser", parsed);
      // untuk di reload atau di refresh halamannya lagi
      window.location.reload();
    }
  },

  // didapatkan dari function mounted yang ada di file Product.vue
  // function bawaan dari vue js
  mounted() {
    // validasi untuk local storage nya
    if (localStorage.getItem("keranjangUser")) {
      // jika localstorage tersebut tersedia, maka akan diambil
      // tersedia di tempat yang tadi udh coba di console inspect-aplikasi
      try {
        this.keranjangUser = JSON.parse(localStorage.getItem("keranjangUser"));
      } catch (e) {
        localStorage.removeItem("keranjangUser");
      }
    }
  },

  // menampilkan data yang akan di kalkulasi sebelumnya menggunakan reduce (seperti nge looping, tapi ingin menghitung suatu nilai pada looping tersebut jadi
  // bukan hanya menampilkan, tetapi juga menghitung)
  // fungsi ini dapat digunakan tanpa adanya event (onclick, onhover), jadi fungsi ini sudah otomatis jalan
  computed: {
    totalHarga() {
      // di return -> maksudnya object apa yang nantinya ingin dikalkulasi atau di hitung (dalam hal ini object nya berarti keranjang user)
      return this.keranjangUser.reduce(function(items, data) {
        // mengembalikan nilai yang didapatkan dari keranjang user
        return items + data.price;
      }, 0);
      // 0 adalah parameter tambahan
    }
  }
};
</script>

<style scoped>
.photo-item {
  width: 80px;
  height: 80px;
}

.ht-right {
  margin-top: 15px;
}
/* .view-card {
  color: #fff !important;
} */

/* .logo img {
  width: 222px;
  height: 62px;
} */
</style>
