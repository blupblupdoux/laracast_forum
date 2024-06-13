<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Container from '@/Components/Container.vue';

const props = defineProps(['posts'])
</script>

<template>
  <AppLayout>
    <Container>
      <ul class="divide-y">
        <li v-for="post in posts" :key="post.id" class="px-2 py-4">
          {{ post.title }}
        </li>
      </ul>
    </Container>
    
  </AppLayout>
</template>