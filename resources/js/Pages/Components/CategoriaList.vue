<template>
  <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
    <div
      v-for="(categoria, index) in categorias"
      :key="index"
      class="bg-white p-4 rounded-lg shadow-md text-center hover:bg-gray-50 cursor-pointer"
    >
      {{ categoria.name }}
    </div>
  </div>
</template>

<script>
export default {
  name: 'CategoriaList',
  props: {
    categorias: {
      type: Array,
      required: true,
    },
  },
};
</script>