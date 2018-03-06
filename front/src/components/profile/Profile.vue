<template>
  <div>
     <h1>Hello World</h1>
  </div>
</template>

<script>
export default {
  data(){
    return {
      vuser:[]
    }
  },
  created(){
    console.log('This is working')
    this.$http.get('api/auth/user')
    .then(response => {
      console.log('This is working')
      console.log(response);
    })
  },
  computed:{
    vtuser(){

    }
  }
}
</script>

<style>
</style>
