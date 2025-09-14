import './bootstrap';
import { createApp } from 'vue'
import VueBadge from './components/VueBadge.vue'

const app = createApp(VueBadge, { label: 'Vue OK' }).mount('#vue-badge-anchor')
app.component('vue-badge', VueBadge)
app.mount('#app')