

<template>
  <div>
    <li
      v-for="post in posts"
      class="bg-green-400 hover:bg-violet-400"
    >
      {{ post[0][0] }}
    </li>
  </div>
</template>

<script setup>
defineProps({
  posts : Object
})

</script>
