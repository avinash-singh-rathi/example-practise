<template>
<div class="container mt-5 mb-5">
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <div class="mb-3">
      <h2>Create Product</h2>
    </div>
    <form>
      <div class="form-group">
        <label for="productnametxt">Product Name</label>
        <input type="text" v-model="product.name" class="form-control" id="productnametxt" autofocus placeholder="Enter Product Name">
        <span v-if="errors.name" class="text-danger">{{errors.name[0]}}</span>
      </div>
      <div class="form-group">
        <label for="productpricetxt">Price</label>
        <input type="text" v-model="product.price" class="form-control" min="0" id="productpricetxt" placeholder="Price">
        <span v-if="errors.price" class="text-danger">{{errors.price[0]}}</span>
      </div>
      <div class="form-group">
        <label for="productqnttxt">Quantity</label>
        <input type="number" v-model="product.quantity" class="form-control" min="0" id="productqnttxt" placeholder="Quantity">
      </div>
      <div class="">
        <label for="productdsctxt">Discount</label>
        <div class="input-group mb-3">
          <input type="number" v-model="product.discount" class="form-control" placeholder="Discount" min="0" id="productdsctxt">
          <div class="input-group-append">
            <span class="input-group-text">%</span>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="productdesctxt">Description</label>
        <textarea class="form-control" v-model="product.description" id="productdesctxt" rows="8" cols="80"></textarea>
      </div>

      <button type="button" v-if="product.name && product.price && product.price > -5" @click="createProduct" class="btn btn-primary">Create</button>
    </form>
  </div>
</div>
</div>
</template>

<script>
export default {
  data(){
    return{
      product:{
        'name':'',
        'price':'',
        'quantity':'',
        'discount':'',
        'description':''
      },
      errors:{

      }
    }
  },
  methods:{
    createProduct(){
      this.$http.post('api/products',this.product)
      .then(response => {
        console.log(response)
      },
      function(status){
        if(status.body.errors){
          this.errors = status.body.errors
        }
      })
    }
  }
}
</script>

<style>
</style>
