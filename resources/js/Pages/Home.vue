<template>
  <div class="min-h-screen bg-gray-100">
    <!-- Cabeçalho -->
    <Header />

    <!-- Conteúdo Principal -->
    <div class="container mx-auto p-4">
      <!-- Barra de Busca -->
      <div class="mb-8">
        <input
          type="text"
          placeholder="Buscar Prestador"
          class="w-full p-3 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
        />
      </div>

      <!-- Prestadores em Destaque -->
      <section class="mb-8">
        <h2 class="text-2xl font-bold mb-4">Prestadores de Serviços em Destaque</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
          <PrestadorCard
            v-for="prestador in topProviders"
            :key="prestador.id"
            :prestador="prestador"
          />
        </div>
      </section>

      <!-- Categorias -->
      <section class="mb-8">
        <h2 class="text-2xl font-bold mb-4">Categorias</h2>
        <CategoriaList :categorias="categories" />
      </section>
    </div>
  </div>
</template>

<script>
import Header from '@/Pages/Components/Header.vue';
import PrestadorCard from '@/Pages/Components/PrestadorCard.vue';
import CategoriaList from '@/Pages/Components/CategoriaList.vue';

export default {
  components: {
    Header,
    PrestadorCard,
    CategoriaList,
  },
  props: {
    topProviders: Array,
    categories: Array
  }
};
</script>