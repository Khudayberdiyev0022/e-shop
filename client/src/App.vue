<template>
  <div>
    <my-header></my-header>
    <router-view></router-view>
    <my-footer></my-footer>
  </div>
</template>

<script>
import MyHeader from "@/components/app/MyHeader.vue";
import MyFooter from "@/components/app/MyFooter.vue";

export default {
  components: { MyFooter, MyHeader },
  // main.js
  mounted() {
    $(document).trigger("change");
  },
  methods: {},
};
</script>

<style></style>
