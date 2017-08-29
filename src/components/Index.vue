<template>
  
  <div class="hello">
    <h1>{{ msg }}</h1>
    <h2>{{ name }}</h2>
    <router-link to="test">测试</router-link>
  </div>
</template>

<script>
export default {
  name: 'hello',
  data () {
    return {
      msg: '锋锋锋',
      name: 'dada'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>

</style>
