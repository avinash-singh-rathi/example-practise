<template>
  <section class="section">
    <div class="container">
      <h1>Login</h1>
      <form>
        <div class="field">
        <p class="control has-icons-left has-icons-right">
          <input class="input" v-model="name" type="text" placeholder="Name">
          <span class="icon is-small is-left">
            <i class="fas fa-envelope"></i>
          </span>
          <span class="icon is-small is-right">
            <i class="fas fa-check"></i>
          </span>
        </p>
      </div>
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
        <button class="button is-success">
          Login
        </button>
      </p>
    </div>
    </form>

    </div>
  </section>
</template>

<script>

</script>

  <style>

  </style>
