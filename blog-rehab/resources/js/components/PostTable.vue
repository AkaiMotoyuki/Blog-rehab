<template>
  <v-app>
    <v-main>
      <v-data-table
        :headers="headers"
        :items="posts"
        item-key="id"
      />
    </v-main>
  </v-app>
</template>

<script>
export default {
  props: {
    posts: { type: Array, required: true }
  },
  data() {
    return {
      headers: [
        { title: 'ID', key: 'id' },
        { title: 'タイトル', key: 'title' },
        { title: '本文', key: 'body' },
      ]
    }
  }
}
</script>