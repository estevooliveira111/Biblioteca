<template>

  <div class="my-12 mx-auto max-w-3xl text-center">
    <h1 class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 bg-clip-text text-3xl font-extrabold text-transparent sm:text-5xl">Livros</h1>
  </div>

  <div class="flex justify-center my-8">
    <div class="bg-white rounded-lg border border-gray-200 text-gray-900">

      <button :key="key" v-for="(item, key) in books" class="text-left px-6 py-2 border-b border-gray-200 w-full hover:bg-blue-600 hover:text-white focus:outline-none focus:ring-0 focus:bg-gray-200 focus:text-gray-600 transition duration-500">{{ item }}</button>

    </div>
  </div>

</template>

<script>

export default {

  data: () => ({
    books: []
  }),

  async created() {
    const response = await fetch("http://localhost:8000/api/");
    const data = await response.json();
    this.books = data;
  }

}

</script>
