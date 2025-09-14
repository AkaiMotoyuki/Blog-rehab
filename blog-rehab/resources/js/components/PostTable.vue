<template>
  <v-app>
    <v-main>
        <v-data-table
            :headers="headers"
            :items="posts"
            item-key="id"
            :items-per-page="10"
            hover
        >
        <template #item.actions="{ item }">
            <v-btn size="small" color="primary" class="mr-2">編集</v-btn>
            <v-btn size="small" color="error" variant="outlined">削除</v-btn>
        </template>
      </v-data-table>
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
        { title: '操作', key: 'actions', sortable: false, align: 'center' },
      ]
    }
  }
}
</script>