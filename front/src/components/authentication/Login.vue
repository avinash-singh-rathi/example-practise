<template>
<section class="section">
  <div class="container">
    <h1>Login</h1>

    <div class="field">
    <p class="control has-icons-left has-icons-right">
      <input class="input" v-model="email" type="email" placeholder="Email">
      <span class="icon is-small is-left">
        <i class="fas fa-envelope"></i>
      </span>
      <span class="icon is-small is-right">
        <i class="fas fa-check"></i>
      </span>
    </p>
  </div>
  <div class="field">
    <p class="control has-icons-left">
      <input class="input" v-model="password" type="password" placeholder="Password">
      <span class="icon is-small is-left">
        <i class="fas fa-lock"></i>
      </span>
    </p>
  </div>
  <div class="field">
    <p class="control">
      <button @click="login" class="button is-success">
        Login
      </button>
    </p>
  </div>


  </div>
</section>
</template>

<script>
export default {
 data () {
   return {
     email: '',
     password: ''
   }
 },
 methods:{
   login(){
     var data = {
       client_id:2,
       client_secret:'IzAW9bPhTa3NlC9XoImXJeudmiUKYNZZYo5bebuo',
       grant_type: 'password',
       username: this.email,
       password: this.password
     }
     this.$http.post('oauth/token',data)
     .then(function(response){
       this.$auth.setToken(response.body.access_token, response.body.expires_in * Date.now())
       this.$router.push('/feed')
     })
   }
 }
}
</script>

<style>

</style>
