<template>
  <v-col class="mb-3" cols="12">
    <a v-bind:href="social_link.href" name="display" target="_blank">
      {{ social_link.title }}
    </a>
  </v-col>
</template>

<style>
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
</style>

<script>
export default {
  name: "Anchors",
    props: {
    social_link: Object,
  },
};

</script>
