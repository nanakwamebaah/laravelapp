<template>
  <div id="app">
    
    <!--<nav>
      <ul>
        <li>
          <router-link :to="{name: 'catalog'}">catalog products</router-link>
        </li>
        <li>
          <router-link :to="{name: 'About'}">for you</router-link>
        </li>
      </ul>
    </nav>-->
    <!--<main class="container">
      <router-view/>
    </main>-->
    <router-view/>
    
    <footer>
            <p>Copyright 2021</p>
    </footer>
    
  </div>
</template>

<script>
export default {
  methods: {
    
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

#nav {
  padding: 30px;
}

#nav a {
  font-weight: bold;
  color: #2c3e50;
}

#nav a.router-link-exact-active {
  color: #42b983;
}
</style>
