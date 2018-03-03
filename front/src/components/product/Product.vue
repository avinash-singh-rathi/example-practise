<template>
  <div class="col-md-4">
    <div class="card mb-4 box-shadow">
      <img class="card-img-top" src="https://vend-ecom-prod-assets.s3.amazonaws.com/storefront-assets/c335f761-cbb0-4fb6-a25c-e514c1ef69dd/4763d811-6b0a-11e5-8929-0227de8a12cd/51187501-6b0a-11e5-8929-0227de8a12cd.png" alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title">{{ aviprod.name }}</h4>
        <p class="card-text">{{ aviprod.description}}</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary">Buy</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Wish</button>
          </div>
          <small class="text-muted">$ {{ aviprod.price }}</small>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props:['aviprod']
}
</script>

<style>
</style>
