<template>
  <!-- Sub Category Section Begin -->
  <div class="banner-section spad">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4">
          <div class="single-banner">
            <img src="img/banner-6.jpg" alt />
            <div class="inner-text">
              <router-link to="/shop">
                <h4>Men’s</h4>
              </router-link>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="single-banner">
            <img src="img/banner-7.jpg" alt />
            <div class="inner-text">
              <router-link to="/shop">
                <h4>Women’s</h4>
              </router-link>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="single-banner">
            <img src="img/banner-8.jpg" alt />
            <div class="inner-text">
              <router-link to="/shop">
                <h4>Kid’s</h4>
              </router-link>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Sub Category Section End -->
</template>

<script>
export default {
  name: "SubCategory"
};
</script>