<template>
  <div class="min-h-screen bg-gray-100">
    <div class="container mx-auto p-4">
      <h1 class="text-3xl font-bold mb-4">Serviços</h1>
      <div class="flex">
        <div class="w-1/4 pr-4">
          <h2 class="text-xl font-semibold mb-2">Filtros</h2>
          <select class="w-full p-2 border rounded mb-2">
            <option value="">Categoria</option>
            <!-- Opções de categoria -->
          </select>
          <select class="w-full p-2 border rounded mb-2">
            <option value="">Cidade</option>
            <!-- Opções de cidade -->
          </select>
          <select class="w-full p-2 border rounded">
            <option value="">Review</option>
            <option value="5">5 Estrelas</option>
            <option value="4">4 Estrelas</option>
            <option value="3">3 Estrelas</option>
            <option value="2">2 Estrelas</option>
            <option value="1">1 Estrela</option>
          </select>
        </div>
        <div class="w-3/4">
          <div v-for="servico in servicos" :key="servico.id" class="bg-white p-4 rounded shadow mb-4">
            <h2 class="text-xl font-semibold">{{ servico.nome }}</h2>
            <p class="text-gray-600">{{ servico.descricao }}</p>
            <div class="flex items-center mt-2">
              <span class="text-yellow-500">★ {{ servico.review }}</span>
              <span class="ml-2 text-gray-500">({{ servico.reviewCount }} reviews)</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'ServicosIndex',
  data() {
    return {
      servicos: [
        // Exemplo de dados
        { id: 1, nome: 'Pedreiro', descricao: 'Serviços de alvenaria em geral', review: 4.5, reviewCount: 10 },
        { id: 2, nome: 'Pintor', descricao: 'Pintura residencial e comercial', review: 4.0, reviewCount: 8 },
      ],
    }
  },
}
</script>