<template>
  <!-- Related Products Section End -->
  <div class="related-products spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title">
            <h2>Complete Your Look</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="product-item">
            <div class="pi-pic">
              <img src="/img/products/jeans1.jpg" alt />
              <ul>
                <li class="w-icon active">
                  <a href="#">
                    <i class="icon_bag_alt"></i>
                  </a>
                </li>
                <li class="quick-view">
                  <router-link to="/Products">+ Quick View</router-link>
                </li>
              </ul>
            </div>
            <div class="pi-text">
              <div class="catagory-name">Clothing Stradivarius</div>
              <a href="#">
                <h5>Drop Shoulder Cardigan Stradivarius</h5>
              </a>
              <div class="product-price">IDR 350.000</div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="product-item">
            <div class="pi-pic">
              <img src="/img/products/platform1.jpg" alt />
              <ul>
                <li class="w-icon active">
                  <a href="#">
                    <i class="icon_bag_alt"></i>
                  </a>
                </li>
                <li class="quick-view">
                  <a href="#">+ Quick View</a>
                </li>
              </ul>
            </div>
            <div class="pi-text">
              <div class="catagory-name">Trainers Bershka</div>
              <a href="#">
                <h5>Mickey gets arty platform trainers</h5>
              </a>
              <div class="product-price">IDR 550.000</div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="product-item">
            <div class="pi-pic">
              <img src="/img/products/Handbag1.jpg" alt />
              <ul>
                <li class="w-icon active">
                  <a href="#">
                    <i class="icon_bag_alt"></i>
                  </a>
                </li>
                <li class="quick-view">
                  <a href="#">+ Quick View</a>
                </li>
              </ul>
            </div>
            <div class="pi-text">
              <div class="catagory-name">Handbag Pomelo</div>
              <a href="#">
                <h5>Rectangle Hand Bag Blue</h5>
              </a>
              <div class="product-price">IDR 200.000</div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="product-item">
            <div class="pi-pic">
              <img src="/img/products/shoes1.jpg" alt />
              <ul>
                <li class="w-icon active">
                  <a href="#">
                    <i class="icon_bag_alt"></i>
                  </a>
                </li>
                <li class="quick-view">
                  <a href="#">+ Quick View</a>
                </li>
              </ul>
            </div>
            <div class="pi-text">
              <div class="catagory-name">Mules Berybenka</div>
              <a href="#">
                <h5>Casandra Avva Stripes Mules Beige</h5>
              </a>
              <div class="product-price">IDR 189.000</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Related Products Section End -->
</template>

<script>
export default {
  name: "RelatedProductPreloved",
  data() {
    return {
      publicPath: process.env.base_url
    };
  },
  mounted() {
    console.log(this.publicPath);
  }
};
</script>