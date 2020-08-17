<template>
  <div>
    <!-- Hero Section Begin -->
    <section class="hero-section">
      <carousel class="hero-items" :items="1" :nav="false">
        <div class="single-hero-items set-bg" style="background-image: url('/img/hero-4.jpg')">
          <div class="container">
            <div class="row">
              <div class="col-lg-5">
                <span>Be exclusive, Be Devine, Be yourself.</span>
                <h1 style="color:#4ca2cd;">Black friday</h1>
                <p
                  style="color:#085078;"
                >We will have an unexpected flash sale "Black Friday" surprise</p>
                <a href="#" class="primary-btn">Shop Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="single-hero-items set-bg" style="background-image: url('/img/hero-8.jpg')">
          <div class="container">
            <div class="row">
              <div class="col-lg-5">
                <span>Pay less, stay in fashion!</span>
                <h1 style="color:#659999;">Good Price</h1>
                <p
                  style="color:#134e5e;"
                >We sell preloved items of all brands with relatively cheap prices</p>
                <a href="#" class="primary-btn">Shop Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="single-hero-items set-bg" style="background-image: url('/img/banner-5.jpg')">
          <div class="container">
            <div class="row">
              <div class="col-lg-5">
                <span>A classic never goes out of style.</span>
                <h1 style="color:#f37335;">Good Quality</h1>
                <p
                  style="color:white;"
                >We can guarantee that all items here are good quality even if they are preloved</p>
                <a href="#" class="primary-btn">Shop Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="single-hero-items set-bg" style="background-image: url('/img/banner-4.jpg')">
          <div class="container">
            <div class="row">
              <div class="col-lg-5">
                <span>Life is a party, dress like it.</span>
                <h1 style="color:#3a6073;">Good Services</h1>
                <p
                  style="color:#be5869;"
                >We are ready to serve 24 hours anytime, anywhere practically online</p>
                <a href="#" class="primary-btn">Shop Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="single-hero-items set-bg" style="background-image: url('/img/hero-5.jpg')">
          <div class="container">
            <div class="row">
              <div class="col-lg-5">
                <span>Luxury, For the Woman Who Deserves It.</span>
                <h1 style="color:#c06c84;">Good Design</h1>
                <p
                  style="color:#134e5e;"
                >An attractive preloved shirt with a design that suits the present of a teenager</p>
                <a href="#" class="primary-btn">Shop Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="single-hero-items set-bg" style="background-image: url('/img/hero-9.jpg')">
          <div class="container">
            <div class="row">
              <div class="col-lg-5">
                <span>Dress like you’re already famous.</span>
                <h1 style="color:#a80077;">Good Style</h1>
                <p
                  style="color:white;"
                >Find your style with us, explore and expand your style! Come on girls</p>
                <a href="#" class="primary-btn">Shop Now</a>
              </div>
            </div>
          </div>
        </div>
      </carousel>
    </section>
    <!-- Hero Section End -->
  </div>
</template>

<script>
import carousel from "vue-owl-carousel";
export default {
  name: "SliderPreloved",
  components: {
    carousel
  }
};
</script>

<style scoped>
.hero-items .single-hero-items span {
  color: #c33764;
}
.hero-items .single-hero-items p {
  margin-bottom: 42px;
  margin-top: 30px;
  position: relative;
  top: 100px;
  font-size: 20px;
  text-align: center;
  opacity: 0;
}

/* .col-lg-5 a .primary-btn {
  border-radius: 50px;
} */
</style>