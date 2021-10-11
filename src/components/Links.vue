<template>
  <v-container align="start">
    <!-- src="https://avatars.dicebear.com/api/croodles-neutral/luisgomesbcc%40gmail.com.svg" -->

    <v-row class="text-center">
      <v-col class="mb-3" cols="1" align="center">
        <img 
        v-bind:src= profile_img
        width="200" 
        height="200" 
        v-bind:alt= profile_img
        />
        <h1>Hi There!</h1>
      </v-col>

      <div
        v-for="(social_link, i) in social_links"
        :key="i"
        class="mx-4"
        align="center"
      >
        <Anchor :social_link="social_link" />
      </div>
    </v-row>
  </v-container>
</template>

<style>
body {
  background-color: yellow;
}
a {
  border: 2px solid #242526;
  width: 250px;
  height: 2px;
  border-radius: 3px;
  padding: 20px;

  color: #242526;
  font-weight: bold;
  text-decoration: none;
  display: flex;
  flex-direction: column;
  justify-content: center;
  text-align: center;

  font-family: Helvetica, "Trebuchet MS", Verdana, sans-serif;
}
h1 {
  font-size: 2.5rem;
  font-family: "Indie Flower", cursive;
}
img {
  margin-top: 2rem;
  border-radius: 50%;
  background-color: white;
  display: flex;
  flex-direction: column;
  justify-content: center;
}
</style>

<script>
import Anchor from "./Anchor.vue";

export default {
  name: "Links",
  props: {
    social_links: Object,
    profile_img: String,
  },
  components: {
    Anchor,
  },
};
</script>
