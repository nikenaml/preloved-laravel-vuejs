<template>
  <div>
    <HeaderPreloved />
    <div class="breacrumb-section text-left">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcrumb-text product-more">
              <router-link to="/">
                <i class="fa fa-home"></i>Home
              </router-link>
              <span>About Us</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section id="about">
      <div class="about-left-col">
        <img src="img/about.png" alt />
      </div>
      <div class="about-right-col">
        <div class="about-text">
          <h1>About Us</h1>
          <span class="square"></span>
          <p>Situs jual beli barang bekas preloved berkualitas dari segala brand ternama. Kami akan membantu Anda membeli produk dengan cara mudah dan Anda dapat memilih daftar produk kami berdasarkan kategori yang Anda inginkan. Dijual dengan penuh ketulusan cinta dengan style yang cocok untuk semua kalangan usia dan harga yang sesuai dengan kantong para remaja.</p>
          <br />
          <br />
          <div class="line">
            <span class="line-1"></span>
            <br />
            <span class="line-2"></span>
            <br />
            <span class="line-3"></span>
          </div>
          <h2>Find your style with us, explore and expand your style! Come on guys</h2>
          <h3>"Good Style, Best Quality, Trusted Store, Fit Price"</h3>
        </div>
      </div>
    </section>

    <section id="team">
      <h1 class="headin">Meet The Team</h1>
      <div class="card-wrapper">
        <div class="card">
          <img src="img/p4.jpg" alt="card background" class="card-img" />
          <img src="img/lia.jpeg" alt="profile image" class="profile-img" />
          <h1>Annisa Rizki Liliandari</h1>
          <p class="job-title">Frontend Developer</p>
          <p
            class="about-job"
          >Bertanggung jawab atas tampilan depan website termasuk penyusunan serta pengelolaan website.</p>
          <v-btn>
            <a
              href="https://api.whatsapp.com/send?phone=6282213020687&text=Halo%20Saya%20ingin%20bertanya%20tanya%20lebih%20lanjut%20dengan%20anda.%20Terima%20Kasih"
              class="btn"
            >Contact</a>
          </v-btn>

          <ul class="social-media">
            <li>
              <a href="https://twitter.com/me_lurr">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="https://www.instagram.com/liandarizkia/">
                <i class="fa fa-instagram"></i>
              </a>
            </li>
            <li>
              <a href="mailto:annisarizkililiandari@gmail.com">
                <i class="fa fa-envelope-square"></i>
              </a>
            </li>
          </ul>
        </div>

        <div class="card">
          <img src="img/p5.jpg" alt="card background" class="card-img" />
          <img src="img/selvi.jpg" alt="profile image" class="profile-img" />
          <h1>Shelviyanah</h1>
          <p class="job-title">Database Analyst</p>
          <p class="about-job">Melakukan perancangan database dan bertugas menganalisis data.</p>
          <a
            href="https://api.whatsapp.com/send?phone=6283873343852&text=Saya%20tertarik%20untuk%20berlangganan%20KIRIM.EMAIL"
            class="btn"
          >Contact</a>
          <ul class="social-media">
            <li>
              <a href="https://twitter.com/me_lurr">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="https://www.instagram.com/shelviyanah/">
                <i class="fa fa-instagram"></i>
              </a>
            </li>
            <li>
              <a href="mailto:yanahshelvistore@gmail.com">
                <i class="fa fa-envelope-square"></i>
              </a>
            </li>
          </ul>
        </div>

        <div class="card">
          <img src="img/p3.jpg" alt="card background" class="card-img" />
          <img src="img/niken.jpg" alt="profile image" class="profile-img" />
          <h1>Niken Amelia</h1>
          <p class="job-title">Backend Developer</p>
          <p
            class="about-job"
          >Merancang serta menjalankan struktur model data, bertanggung jawab untuk membangun dan mengelola teknologi yang mendukung komponen server, aplikasi, dan database.</p>

          <v-btn>
            <a
              href="https://api.whatsapp.com/send?phone=6285311321124&text=Halo%20Saya%20ingin%20bertanya%20tanya%20lebih%20lanjut%20dengan%20anda.%20Terima%20Kasih"
              class="btn"
            >Contact</a>
          </v-btn>

          <ul class="social-media">
            <li>
              <a href="https://twitter.com/me_lurr">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="https://www.instagram.com/niken.aml/">
                <i class="fa fa-instagram"></i>
              </a>
            </li>
            <li>
              <a href="mailto:niken.amelia123@gmail.com">
                <i class="fa fa-envelope-square"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <FooterPreloved />
  </div>
</template>

<script>
import HeaderPreloved from "@/components/HeaderPreloved.vue";
import FooterPreloved from "@/components/FooterPreloved.vue";
export default {
  name: "About",
  components: {
    HeaderPreloved,
    FooterPreloved
  }
};
</script>

<style scoped>
#about {
  padding: 100px 0;
  display: flex;
  align-items: center;
  flex-wrap: wrap;
}

.about-left-col {
  flex-basis: 50%;
}

.about-left-col img {
  width: 100%;
}

.about-right-col {
  flex-basis: 50%;
  text-align: right;
}

.about-text {
  max-width: 500px;
  margin-right: 100px;
  display: inline-block;
}

.square {
  height: 12px;
  width: 12px;
  display: inline-block;
  background: #f67c92;
  margin: 15px;
}

.line-1 {
  width: 15px;
  height: 15px;
  background: #f67c92;
  display: inline-block;
}

.line-2 {
  width: 80px;
  height: 1px;
  background: #f67c92;
  display: inline-block;
}

.line-3 {
  width: 60px;
  height: 1px;
  background: #f67c92;
  display: inline-block;
}

.line {
  line-height: 8px;
}

.about-text h2 {
  margin: 50px 0 10px;
  font-size: 28px;
  font-style: italic;
}

.about-text h3 {
  font-size: 20px;
  font-style: italic;
  color: #797979;
}

@media only screen and (max-width: 770px) {
  h1 {
    font-size: 25px;
  }
  .about-left-col,
  .about-right-col {
    flex-basis: 100%;
  }
  .about-text {
    margin: 50px 50px 0;
    display: inline-block;
  }

  .about-text h2 {
    font-size: 18px;
  }
}

/* bagian team */
/* a {
  text-decoration: none;
  color: #fff;
} */

section #team {
  padding: 10rem 0;
  background-color: #fff;
}

.heading {
  text-transform: uppercase;
  font-size: 3.5rem;
  letter-spacing: 3px;
  margin-right: 3px;
  margin-bottom: 5rem;
  text-align: center;
  color: #333;
  position: relative;
}

.heading::after {
  content: "";
  width: 10rem;
  height: 0.8rem;
  background-color: #45e19f;
  position: absolute;
  bottom: 0.2rem;
  left: 50%;
  transform: translateX(-50%);
  border-radius: 2rem;
}

.card-wrapper {
  display: flex;
  align-items: center;
  align-content: center;
  flex-direction: column;
}

.card {
  width: 32rem;
  background-color: #ebeef8;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin: 2rem 0;
  box-shadow: 0.5rem 0.5rem 3rem rgba(0, 0, 0, 0.2);
}

.card .card-img {
  width: 100%;
  height: 26rem;
  object-fit: cover;
  -webkit-clip-path: polygon(0 0, 100% 0, 100% 78%, 0% 100%);
  clip-path: polygon(0 0, 100% 0, 100% 78%, 0% 100%);
}

.profile-img {
  width: 15rem;
  height: 15rem;
  object-fit: cover;
  border-radius: 50%;
  margin-top: -11rem;
  z-index: 999;
  border: 1rem solid #ebeef8;
}

.card h1 {
  font-size: 2.5rem;
  color: #333;
  margin: 1.5rem 0;
}

.job-title {
  color: #777;
  font-size: 1.5rem;
  font-weight: 300;
}

.about-job {
  font-size: 1.2rem;
  margin: 1.5rem 0;
  font-style: italic;
  text-align: center;
  color: #333;
}

.card .btn {
  padding: 1rem 2.5rem;
  background-color: #445ae3;
  border-radius: 2rem;
  margin: 1rem 0;
  text-transform: uppercase;
  color: #eee;
  font-size: 1.4rem;
  transition: all 0.5s;
}

.card .btn:hover {
  transform: translateY(-2px);
  box-shadow: 0.5rem 0.5rem 2rem rgba(0, 0, 0, 0.2);
}

.card .btn:active {
  transform: translateY(0);
  box-shadow: none;
}

.social-media {
  width: 100%;
  list-style: none;
  display: flex;
  justify-content: space-evenly;
  padding: 2rem 0;
  margin-top: 1.5rem;
  border-top: 1px solid rgba(0, 0, 0, 0.1);
}

.social-media i {
  font-size: 3rem;
}

.fa-instagram {
  color: #3b5999;
}

.fa-envelope-square {
  color: #dd4b39;
}

.fa-instagram:hover,
.fa-envelope-square:hover {
  color: #45e19f;
}

@media screen and (min-width: 700px) {
  .card-wrapper {
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
  }

  .card {
    margin: 3rem;
    transition: transform 0.5s;
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
    }
    to {
      opacity: 1;
    }
  }

  .card:nth-child(1) {
    animation: fadeIn 0.5s 0.5s backwards;
  }

  .card:nth-child(2) {
    animation: fadeIn 0.5s 0.5s backwards;
  }

  .card:nth-child(3) {
    animation: fadeIn 0.5s 0.5s backwards;
  }

  .card:nth-child(4) {
    animation: fadeIn 0.5s 0.5s backwards;
  }

  .card:hover {
    transform: scale(1.05);
  }
}
</style>
