<template>
  <v-app>
    <v-main>
      <Links :social_links="social_links" />
    </v-main>
  </v-app>
</template>

<script>
import Links from "./components/Links.vue";

export default {
  name: "App",
  components: {
    Links,
  },
  data() {
    return {
      social_link: "facebook",
      social_links: [
        {
          title: "See My Dribble",
          href: "dribble",
        },
        {
          title: "Read My Medium",
          href: "medium",
        },
        {
          title: "Visit My Github",
          href: "github",
        },
        {
          title: "Follow My instagram",
          href: "https://www.instagram.com/?hl=pt-br",
        },
      ],
    };
  },
};
</script>
