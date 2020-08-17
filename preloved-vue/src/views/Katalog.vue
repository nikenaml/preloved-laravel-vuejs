<template>
  <div class="faq-page">
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
              <span>Katalog</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="masonry">
      <!-- <h1>Katalog Juni Menggelora</h1>
      <p>Katalog bulan Juni- Agustus, Tersedia!</p>-->
      <div class="grid">
        <img src="img/tshirt1.jpg" alt />
      </div>
      <div class="grid">
        <img src="img/cardi1.jpg" alt />
      </div>
      <div class="grid">
        <img src="img/handbag1.jpg" alt />
      </div>
      <div class="grid">
        <img src="img/products/insta3.jpg" alt />
      </div>
      <div class="grid">
        <img src="img/products/hoodie1.jpg" alt />
      </div>
      <div class="grid">
        <img src="img/products/man-large.jpg" alt />
      </div>
      <div class="grid">
        <img src="img/products/insta1.jpg" alt />
      </div>
      <div class="grid">
        <img src="img/products/insta4.jpg" alt />
      </div>
      <div class="grid">
        <img src="img/products/insta6.jpg" alt />
      </div>
      <div class="grid">
        <img src="img/products/insta5.jpg" alt />
      </div>
      <div class="grid">
        <img src="img/products/g1.jpg" alt />
      </div>
      <div class="grid">
        <img src="img/products/g2.jpg" alt />
      </div>
    </div>
    <FooterPreloved />
  </div>
</template>

<script>
import HeaderPreloved from "@/components/HeaderPreloved.vue";
import FooterPreloved from "@/components/FooterPreloved.vue";
// import "../script.js";

export default {
  name: "Katalog",
  components: {
    HeaderPreloved,
    FooterPreloved
  }
};
</script>

<style scoped>
/* body {
  font-family: "Roboto Condensed", sans-serif;
}

body {
  overflow: hidden;
} */

/* .works .filtering .filter {
  display: inline-block;
  padding: 2px 10px;
}

.works .filtering span {
  background: #ebeaef;
  text-transform: uppercase;
  cursor: pointer;
  font-size: 13px;
  font-weight: 600;
  margin: 0 5px;
  padding: 15px 20px;
  transition: all 0.3s ease 0s;
}

.works .filtering span:hover {
  background: #eb2f5b;
  color: #fff;
}

.works .filtering .active {
  background: #eb2f5b;
  box-shadow: 0px 8px 30px -5px rgba(0, 0, 0, 0.2);
  color: #fff;
}

.works .gallery {
  padding-left: 0;
  padding-right: 0;
  margin-bottom: -0.05em;
}

.works .larg-padding {
  padding: 0 15px;
}

.works .larg-padding .item-img {
  border: 10px solid #fff;
  margin-top: 30px;
}

.works .no-padding {
  padding: 0;
}

.works .no-padding .item-img {
  margin-top: 0;
}

.works .gutter {
  padding: 0 10px;
}

.works .gutter .item-img {
  margin-top: 20px;
}

.works .item-img {
  margin-top: 30px;
  position: relative;
}

.works .item-img:hover .item-img-overlay {
  opacity: 1;
  transform: scale(1, 1);
}

.works .item-img-overlay {
  background: rgba(0, 0, 0, 0.5);
  bottom: 0;
  left: 0;
  opacity: 0;
  padding: 30px;
  position: absolute;
  right: 0;
  text-align: center;
  top: 0;
  transform: scale(0, 0);
  transition: all 0.5s;
}

.works .item-img-overlay .icon {
  bottom: 30px;
  color: #eee;
  font-size: 30px;
  height: 30px;
  line-height: 30px;
  position: absolute;
  right: 30px;
  text-align: center;
  width: 30px;
}

.works .item-img-overlay p {
  color: #f2f2f2;
  font-weight: 400;
  margin-bottom: 0;
}

.works .item-img-overlay h3 {
  color: #fff;
  margin: 0;
  font-size: 25px;
  line-height: 1.3;
  font-weight: 500;
  line-height: 1.3;
  letter-spacing: 1px;
  display: inline-block;
  border-bottom: 3px solid #fff;
  padding-bottom: 5px;
  margin-bottom: 20px;
} */

.masonry {
  columns: 4;
  column-gap: 5px;
  /* position: relative;
  height: 100vh;
  width: 100%; */
}

/* .masonry h1 {
  position: relative;
  height: auto;
  width: 100%;
  left: 50px;
  transform: translateX(-50%);
  margin: 5% 0 2% 0;
  text-align: center;
  font-size: 2rem;
  font-weight: 650;
  letter-spacing: 1.5px;
  color: #017bf5;
  border-left: 5px solid #017bf5;
  border-right: 5px solid #017bf5;
  background: rgba(0, 0, 0, 0.05);
} */

/* .masonry p {
  position: relative;
  height: auto;
  width: 100%;
  text-align: center;
  font-size: 1.5rem;
  font-weight: 500;
  color: #777;
  margin-top: 20px;
} */

.masonry .grid {
  /* display: grid;
  height: 100%;
  width: 90%;
  margin: auto;
  padding: 45px 0;
  position: relative;
  grid-template-columns: auto auto auto auto;
  grid-gap: 2vmin;
  grid-auto-flow: dense; */
  display: inline-block;
  position: relative;
  margin-bottom: 15px;
}

.masonry .grid img {
  position: relative;
  height: 100%;
  width: 100%;
  overflow: hidden;
  border: 4px solid #ebebeb;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.9);
  border-radius: 2px;
}

.masonry .grid:before {
  border-radius: 5px;
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
}

.masonry .grid img {
  height: 100%;
  width: 100%;
  object-fit: cover;
  filter: brightness(0.5) grayscale(100);
  border-radius: 2px;
  transition: 0.3s ease-in-out;
}

.masonry .grid img:hover {
  filter: brightness(1) grayscale(0);
}

/* @media only screen and (max-width: 768px) {
  .masonry .grid {
    display: grid;
    grid-template-columns: auto auto auto;
  }
}

@media only screen and (max-width: 430px) {
  .masonry .grid {
    display: grid;
  }

  .masonry .grid img {
    display: grid;
    width: 100%;
    height: 100%;
    filter: brightness(1) grayscale(0);
  }
} */
</style>