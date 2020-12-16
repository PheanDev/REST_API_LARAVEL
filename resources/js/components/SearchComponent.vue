<template>
  <div>
    <input type="text" v-model="keywords" />
    <ul v-if="results.length > 0">
      <li v-for="result in results" :key="result.id" v-text="result.name"></li>
    </ul>
  </div>
</template>
<script>
export default {
    name:'SearchComponent',
  mounted() {
    console.log("inline template component");
  },
  data() {
    return {
      keyword: null,
      results: [],
    };
  },
  watch: {
    keyword(after, before) {
      this.fetch();
    },
  },
  methods: {
    fetch() {
      axios
        .get("/res-search", { params: { keyword: this.keyword } })
        .then((response) => (this.results = response.data))
        .catch((error) => {});
    },
  },
};
</script>