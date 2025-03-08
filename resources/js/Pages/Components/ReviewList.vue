<template>
  <div>
    <div v-for="review in reviews" :key="review.id" class="mb-4">
      <h4 class="font-semibold">{{ review.autor }}</h4>
      <p class="text-gray-600">{{ review.comentario }}</p>
      <div class="text-yellow-500">★★★★★</div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'ReviewList',
  props: {
    reviews: {
      type: Array,
      required: true,
    },
  },
};
</script>