<template>
<section class="section">
  <div class="container">
        <h1 class="title">Products</h1>
        <h2 class="subtitle">
          This page will show all products in pagination.
        </h2>
        <div class="tile is-ancestor">
          <div class="tile is-vertical">
            <div class="tile">
              <div class="tile is-parent is-vertical">
                <article v-for="product in products" class="tile is-child notification is-primary">
                  <p class="title">{{product.name}} </p>
                  <p class="subtitle">Rs. <strong>{{product.price}}</strong> </p>
                </article>
              </div>
            </div>
          </div>
        </div>
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
