<template>
  <AppLayout>
    <Container>
      <ul>
        <li v-for="post in posts.data" :key="post.id" class="px-2 py-4 border-b">
          {{ post.title }}
        </li>
      </ul>

      <Pagination :meta="posts.meta"/>
    </Container>
  </AppLayout>
</template>

<script setup>

import AppLayout from '@/Layouts/AppLayout.vue';
import Container from '@/Components/Container.vue';
import Pagination from '@/Components/Pagination.vue'

const props = defineProps(['posts'])
</script>