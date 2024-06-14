<template>
  <div class="flex justify-between items-center mt-4">
    <div class="">
      <span>Showing </span>
      <span class="font-bold">{{ meta.from }}</span>
      <span> to </span>
      <span class="font-bold">{{ meta.to }}</span>
      <span> of </span>
      <span class="font-bold">{{ meta.total }}</span>
      <span> results</span>
    </div>
    
    <v-pagination
      v-model="page"
      :length="meta.last_page"
      :total-visible="7"
      variant="flat"
      @update:model-value="changePage"
    ></v-pagination>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import { Link } from '@inertiajs/vue3'
import { router } from '@inertiajs/vue3'

const props = defineProps(['meta'])
let page = ref(props.meta.current_page)

const changePage = (value) => {
  page.value = value
  router.get(props.meta.links[value].url)
}
</script>