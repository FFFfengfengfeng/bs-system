<template>
    <div id="app">
      <v-summary></v-summary>
      <transition name="fade" mode="out-in">
        <v-content></v-content>
      </transition>
    </div>
</template>

<script>
import summary from './components/Summary'
import content from './components/content'

export default {
  name: 'app',
  components: {
    'v-summary': summary,
    'v-content': content
  }
}
</script>

<style>
*{
  margin: 0;
  padding: 0;
}
ul,li{
  list-style: none;
}
html,body{
  height: 100%;
  width: 100%;
  position: relative;
  background: #FFF;
  font-family: '微软雅黑';
  overflow: hidden;
}
a{
  text-decoration: none;
}
a:hover{
  text-decoration: underline;
}
#app {
  height: 100%;
  width: 100%;
}
</style>
