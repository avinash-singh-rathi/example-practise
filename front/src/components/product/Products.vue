<template>
<div class="album py-5 bg-light">
  <div class="container">
    <div class="row">
      <my-product v-for="(product, index) in products" :key="index" :aviprod="product" ></my-product>
    </div>
  </div>
</div>
</template>

<script>
import Product from './Product.vue'
export default {
  data(){
    return {
      products:[]
    }
  },
  components:{
    'my-product' : Product
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
