<template>
  <div class="min-h-screen bg-gray-100">
    <Header />

    <div class="container mx-auto p-4">
      <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-4">{{ prestador.nome }}</h2>
        <p class="text-gray-600">{{ prestador.categoria }}</p>

        <!-- Reviews -->
        <section class="mt-6">
          <h3 class="text-xl font-semibold mb-4">Comentários</h3>
          <ReviewList :reviews="reviews" />
        </section>
      </div>
    </div>
  </div>
</template>

<script>
import Header from '@/Pages/Components/Header.vue';
import ReviewList from '@/Pages/Components/ReviewList.vue';

export default {
  components: {
    Header,
    ReviewList,
  },
  data() {
    return {
      prestador: {
        id: 1,
        nome: 'José Andrade',
        categoria: 'Pintor',
      },
      reviews: [
        {
          id: 1,
          autor: 'Maria Joaquina',
          comentario: 'Excelente serviço! Recomendo.',
        },
        {
          id: 2,
          autor: 'Carlos Silva',
          comentario: 'Muito profissional e pontual.',
        },
      ],
    };
  },
};
</script>