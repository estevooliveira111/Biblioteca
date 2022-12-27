<template>

  <div class="flex justify-center my-8">
    <div v-if="teste" class="bg-white rounded-lg border border-gray-200 w-96 text-gray-900">
      
      <!-- <button aria-current="true" type="button" class=" text-left px-6 py-2 border-b border-gray-200 w-full rounded-t-lg bg-blue-600 text-white cursor-pointer">
        The current link item
      </button> -->

      <template v-if="books">


      <button v-for="item in books" class="text-left px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-0 focus:bg-gray-200 focus:text-gray-600 transition duration-500 cursor-pointer">{{ item }}</button>

      </template>

      {{ teste  }}

      <!-- <button type="button" class="text-left px-6 py-2 border-gray-200 w-full rounded-b-lg focus:outline-none focus:ring-0 text-gray-400 cursor-default">A disabled link item</button> -->

    </div>
  </div>

</template>

<script>

import axios from '../api/axios'

export default{

  data() {
    return { books: '' }
  },

  created() {

    axios.get('http://localhost:3000/api').then(function (resposta) {
      console.log(resposta.data)
    })

  }

}

</script>

