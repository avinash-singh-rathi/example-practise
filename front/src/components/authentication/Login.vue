<template>
<div class="body-cs">
  <form class="form-signin">
        <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" v-model="email" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" v-model="password" class="form-control" placeholder="Password" required>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button @click="login" class="btn btn-lg btn-primary btn-block" type="button">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
  </form>
</div>
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
.body-cs {
  display: -ms-flexbox;
  display: -webkit-box;
  display: flex;
  -ms-flex-align: center;
  -ms-flex-pack: center;
  -webkit-box-align: center;
  align-items: center;
  -webkit-box-pack: center;
  justify-content: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>
