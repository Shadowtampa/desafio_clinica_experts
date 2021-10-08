<template>
  <v-container align="start">
    <p>{{ social_links }}</p>

    <v-row class="text-center">
      <v-col class="mb-3" cols="1" align="center">
        <img
          src="https://avatars.dicebear.com/api/miniavs/luis%20antonio.svg"
          width="200"
          height="200"
        />
        <h1>Hi There!</h1>
      </v-col>

      <div
        v-for="(social_link, i) in social_links"
        :key="i"
        class="mx-4"
        align="center"
      >
      <Anchor />
      <p>{{social_link}}</p>

        <v-col class="mb-3" cols="12">
          <a v-bind:href="social_link.href" name="display" target="_blank">
            {{ social_link.title }}
          </a>
        </v-col>

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
// import Anchor from "./Anchor.vue";

export default {
  name: "Links",
  props: {
    social_links: Object,
  },
};
</script>
