<template>
  <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
    <div v-for="post in posts" :key="post.id" class="bg-gray-200 rounded-lg shadow-md p-6 flex flex-col">
      <h3 class="text-lg font-semibold mb-2">{{ post.title }}</h3>
      <p class="text-gray-700">{{ post.content }}</p>
      <div class="flex mt-auto items-center space-x-4">
        <button @click="likePost(post.id)" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md flex items-center">
          <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M5.293 9.293a1 1 0 0 1 1.414 1.414l-2.5 2.5a1 1 0 1 1-1.414-1.414L5.5 10.086l-1.793-1.793a1 1 0 1 1 1.414-1.414l2.5 2.5zm9.414 0a1 1 0 0 1 1.414 1.414l-2.5 2.5a1 1 0 1 1-1.414-1.414l2.5-2.5a1 1 0 0 1 0-1.414zM10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20z" clip-rule="evenodd"/>
          </svg>
          Like
        </button>
        <button @click="unlikePost(post.id)" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md flex items-center">
          <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm2.293-9.293a1 1 0 0 1 1.414 1.414l-1.5 1.5a1 1 0 0 1-1.414-1.414l1.5-1.5zm-4.586 1.414a1 1 0 0 1 1.414-1.414l1.5 1.5a1 1 0 0 1-1.414 1.414l-1.5-1.5zM10 3a7 7 0 0 0-1.326 13.863L3 17l1.137-3.409A7 7 0 1 0 10 3z" clip-rule="evenodd"/>
          </svg>
          Unlike
        </button>
      </div>
    </div>
  </div>
</template>

<script setup>
  const posts = [
    { id: 1, title: 'Post Title 1', content: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec accumsan purus.' },
    { id: 2, title: 'Post Title 2', content: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec accumsan purus.' },
    { id: 3, title: 'Post Title 3', content: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec accumsan purus.' }
  ];

  const likePost = (postId) => {
    // Logic for liking the post
    console.log('Liked post with ID:', postId);
  };

  const unlikePost = (postId) => {
    // Logic for unliking the post
    console.log('Unliked post with ID:', postId);
  };
</script>
