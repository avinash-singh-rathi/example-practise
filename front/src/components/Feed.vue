<template>
<section class="section">
  <div class="container">
        <h1 class="title">Products</h1>
        <h2 class="subtitle">
          This page will show all products in pagination.
        </h2>
        <ul>
          <li v-for="product in products">{{ product.name}} | {{ product.price }}</li>
        </ul>
  </div>
</section>


</template>

<script>
export default {
  data(){
    return {
      products:[]
    }
  },
  created(){
    this.$http.get('api/products')
    .then(response => {
      this.products = response.body.data
    })
  }
}
</script>

<style>
</style>
