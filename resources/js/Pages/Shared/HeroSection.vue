<template>
  <div>
    <div class="bg-gradient-to-r from-purple-700 to-indigo-700 text-white py-10 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
      <div class="max-w-7xl flex items-center space-x-8">
        <!-- Title -->
        <h1 class="text-3xl font-bold font-mono">Welcome to Community Hub</h1>
        
        <!-- Categories Dropdown -->
        <select class="rounded-md border-2 border-gray-400 px-4 py-2 text-black bg-gray-100 hover:bg-gray-200">
          <option value="category1">Category 1</option>
          <option value="category2">Category 2</option>
          <option value="category3">Category 3</option>
        </select>
        
        <!-- Main Search Input -->
        <div class="relative">
          <input type="text" class="rounded-md border-2 border-gray-400 px-4 py-2 pl-10 w-64" placeholder="Search...">
          <div class="absolute inset-y-0 left-0 flex items-center pl-3">
            <svg class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-5.2-5.2M15 10a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
            </svg>
          </div>
        </div>
        
        <!-- Search Button -->
        <button class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">Search</button>
      </div>
      
      <!-- Register/Login Buttons -->
      <div class="flex space-x-4">
        <a href="/register" class="bg-gray-800 text-white py-2 px-4 rounded-md">Register</a>
        <a href="/login" class="bg-gray-800 text-white py-2 px-4 rounded-md">Login</a>
      </div>
      
      <!-- Online Users -->
      <div class="ml-8">
        <div class="rounded-full bg-green-500 h-4 w-4"></div>
        <p class="text-gray-300">Online: 234</p>
      </div>
    </div>
  </div>
</template>

<script setup>
</script>
