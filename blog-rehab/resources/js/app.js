import './bootstrap';
import { createApp } from 'vue'
import 'vuetify/styles'
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'
import VueBadge from './components/VueBadge.vue'
import PostTable from './components/PostTable.vue'

const app = createApp(VueBadge, { label: 'Vue OK' })
const vuetify = createVuetify({
    components,
    directives,
})
const el = document.getElementById('app')
const payload = JSON.parse(el.dataset.posts)
const posts = Array.isArray(payload) ? payload : (payload?.data ?? [])
app.use(vuetify)
app.component('vue-badge', VueBadge)
app.mount('#test')

createApp(PostTable, { posts })
  .use(vuetify)
  .mount('#app')