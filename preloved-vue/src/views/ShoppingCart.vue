<template>
  <div>
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
              <span>Checkout</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="row">
              <div class="col-lg-12">
                <div class="cart-table">
                  <table>
                    <thead>
                      <tr>
                        <th>Image</th>
                        <th class="p-name text-center">Product Name</th>
                        <th>Price</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="keranjang in keranjangUser" :key="keranjang.id">
                        <td class="cart-pic first-row">
                          <img class="img-cart" :src="keranjang.photo" />
                        </td>
                        <td class="cart-title first-row text-center">
                          <h5>{{keranjang.name}}</h5>
                        </td>
                        <td class="p-price first-row">Rp{{keranjang.price}}</td>
                        <td @click="removeItem(keranjangUser.index)" class="delete-item">
                          <a href="#">
                            <i class="material-icons">close</i>
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="col-lg-8">
                <h4 class="mb-4 text-left">Informasi Pembeli:</h4>
                <div class="user-checkout text-left">
                  <form>
                    <div class="form-group">
                      <label for="namaLengkap">Nama lengkap</label>
                      <input
                        type="text"
                        class="form-control"
                        id="namaLengkap"
                        aria-describedby="namaHelp"
                        placeholder="Masukan Nama"
                        v-model="customerInfo.name"
                      />
                      <!-- v-model untuk memasukkan data ke object customer.info yang sudah dibuat -->
                    </div>
                    <div class="form-group">
                      <label for="emailAddress">Email Address</label>
                      <input
                        type="email"
                        class="form-control"
                        id="emailAddress"
                        aria-describedby="emailHelp"
                        placeholder="Masukan Email"
                        v-model="customerInfo.email"
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
                        v-model="customerInfo.number"
                      />
                    </div>
                    <div class="form-group">
                      <label for="alamatLengkap">Alamat Lengkap</label>
                      <textarea
                        class="form-control"
                        id="alamatLengkap"
                        rows="3"
                        v-model="customerInfo.address"
                      ></textarea>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="row">
              <div class="col-lg-12">
                <div class="proceed-checkout text-left">
                  <ul>
                    <li class="subtotal">
                      ID Transaction
                      <span>#SH12000</span>
                    </li>
                    <li class="subtotal mt-3">
                      Subtotal
                      <span>Rp{{ totalHarga }},00</span>
                    </li>
                    <li class="subtotal mt-3">
                      Pajak
                      <span>10% dari subtotal = Rp{{ditambahPajak}}</span>
                    </li>
                    <li class="subtotal mt-3">
                      Total Biaya
                      <span>Rp{{ totalBiaya }}</span>
                    </li>
                    <li class="subtotal mt-3">
                      Bank Transfer
                      <span>Mandiri</span>
                    </li>
                    <li class="subtotal mt-3">
                      No. Rekening
                      <span>2208 1996 1403</span>
                    </li>
                    <li class="subtotal mt-3">
                      Nama Penerima
                      <span>Memi Melur</span>
                    </li>
                  </ul>
                  <!-- <router-link to="/success"> -->
                  <a @click="checkout()" href="#" class="proceed-btn">I ALREADY PAID</a>
                  <!-- </router-link> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Shopping Cart Section End -->
    <FooterPreloved />
  </div>
</template>

<script>
import HeaderPreloved from "@/components/HeaderPreloved.vue";
import FooterPreloved from "@/components/FooterPreloved.vue";
// jika menggunakan api maka jangan lupa axios
import axios from "axios";

export default {
  name: "Cart",
  components: {
    HeaderPreloved,
    FooterPreloved
  },
  data() {
    return {
      keranjangUser: [],

      // informasi customer bersifat objek, isi tersebut didapat dari api
      customerInfo: {
        name: "",
        email: "",
        number: "",
        address: ""
      }
    };
  },
  methods: {
    // fungsi menghapus item pada keranjang
    removeItem(index) {
      this.keranjangUser.splice(index, 1);
      // setelah dihilangkan itemnya, lalu setelah itu akan menyimpan ulang kembali,
      // karena untuk memberikan data yang baru, simpan keranjang user terbaru
      // menyimpan kondisi terbaru setelah dihapus
      const parsed = JSON.stringify(this.keranjangUser);
      localStorage.setItem("keranjangUser", parsed);
    },

    // fungsi mengirim data ke API
    checkout() {
      // map : untuk menghitung produk apa saja yang dimiliki di local storage
      // digunakan map untuk data produk yang nantinya berjumlah banyak, dari kumpulan tsb
      // dijadikan object
      // baru nanti bisa di push di dalam checkoutData
      // let product atau produk2 tersebut dibuat array lalu dimasukkan kepada object
      let productIds = this.keranjangUser.map(function(product) {
        return product.id;
      });

      // ini untuk persiapan data
      // -----proses alur-----
      // data dari v-model itu dikirimkan ke object bagian data,
      // akan dikirim jika fungsi checkout ditekan, begitu ditekan
      // akan mengambil name,email,dll

      let checkoutData = {
        name: this.customerInfo.name,
        email: this.customerInfo.email,
        number: this.customerInfo.number,
        address: this.customerInfo.address,
        transaction_total: this.totalBiaya,
        transaction_status: "PENDING",
        transaction_details: productIds
      };

      axios
        .post("http://127.0.0.1:8000/api/checkout", checkoutData)

        .then(() => this.$router.push("success"))
        .catch(err => console.log(err));
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

  computed: {
    totalHarga() {
      // di return -> maksudnya object apa yang nantinya ingin dikalkulasi atau di hitung (dalam hal ini object nya berarti keranjang user)
      return this.keranjangUser.reduce(function(items, data) {
        // mengembalikan nilai yang didapatkan dari keranjang user
        return items + data.price;
      }, 0);
      // 0 adalah parameter tambahan
    },
    ditambahPajak() {
      return (this.totalHarga * 10) / 100;
    },
    totalBiaya() {
      return this.totalHarga + this.ditambahPajak;
    }
  }
};
</script>

<style scoped>
.img-cart {
  width: 100px;
  height: 100px;
}
</style>