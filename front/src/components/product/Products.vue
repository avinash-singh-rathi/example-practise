<template>
<div class="album py-5 bg-light">
  <div class="container">
    <div class="row">
      <my-product v-for="(product, index) in products" :key="index" :aviprod="product" ></my-product>
    </div>
    <vue-pagination :pagedata="metadata" @paginate="getProducts"></vue-pagination>
  </div>
</div>
</template>

<script>
import Product from './Product.vue'
import Pagination from '../pagination/pagination.vue'
export default {
  data(){
    return {
      products:[],
      metadata:[],
    }
  },
  components:{
    'my-product' : Product,
    'vue-pagination' : Pagination
  },

  created(){
    this.$http.get('api/products')
    .then(response => {
      //console.log(response)
      this.products = response.body.data
      this.metadata = response.body.meta
    })
  },
  methods: {
    getProducts(value) {
            this.$http.get(`api/products?page=`+value)
                .then((response) => {
                    this.products = response.body.data;
                    this.metadata = response.body.meta
                })
                .catch(() => {
                    console.log('handle server error from here');
                });
              }
  }
}
</script>

<style>
</style>
