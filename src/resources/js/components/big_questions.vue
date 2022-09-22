<template>
  <draggable v-model="items" :options="options">
    <div v-for="(item, index) in items" :key="index">
      {{ item }}
    </div>
  </draggable>
</template>

<script>
import draggable from 'vuedraggable'

export default {
  components: { draggable },
   data () {
    return {
      items: [],
      options: {
        animation: 200
      },
    }
  },
  props: ['propItems'],
  mounted () {
    this.items = this.propItems
  },
}
</script>
