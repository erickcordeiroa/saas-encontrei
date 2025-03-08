<template>
  <div class="bg-white p-4 rounded-lg shadow-md text-center">
    <!-- Colocar uma imagem que vem do banco aqui -->
    <img :src="prestador.avatar" alt="Avatar" class="w-100 rounded-lg mx-auto mb-4">

    <h3 class="text-xl font-semibold">{{ prestador.name }}</h3>
    <p class="text-gray-600">{{ prestador.category.name}}</p>
    <div class="mt-2">
      <span class="text-yellow-500">★★★★★</span>
      <span class="text-gray-500 ml-2">{{ normalizedRating }}</span>
    </div>
    <button class="mt-4 w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">
      Ver Detalhes
    </button>
  </div>
</template>

<script>
export default {
  name: 'PrestadorCard',
  props: {
    prestador: {
      type: Object,
      required: true,
    },
  },
  computed: {
    normalizedRating() {
      return Math.min(Math.max(this.prestador.reviews_sum_rating / 5, 0), 5);
    }
  }
};
</script>