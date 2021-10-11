<template>
  <v-app>
    <v-main>
      <Links :social_links="social_links" :profile_img="profile_img"/>
    </v-main>
  </v-app>
</template>


<script>
import Links from "./components/Links.vue";
// import Social from "./services/socials";
import axios from "axios";

export default {
  name: "App",
  components: {
    Links,
  },
  data() {
    return {
      social_links: null,
      profile_img: null,
    };
  },
  mounted() {
    this.getSocials();
    this.getLoggedUserImg();
  },
  methods: {
    getSocials() {
    axios
      .get("http://127.0.0.1:8000/api/socials/")
      .then((response) => {
        this.social_links = response.data;
      })
      .catch((error) => {
        console.log(error);
      });
    },
    getLoggedUserImg() {
    axios
      .get("http://127.0.0.1:8000/api/users/1")
      .then((response) => {
        this.profile_img = response.data.img_profile_src;
      })
      .catch((error) => {
        console.log(error);
      });
    },
  },
};
</script>
