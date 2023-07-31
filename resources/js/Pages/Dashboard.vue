<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>
 <div>
    <!-- Hero Section -->
    <div class="bg-blue py-12">
      <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <img src="../Components/images/guide.png" alt="" class="w-[250px] mx-auto">
        </div>
      </div>
    </div>

    <!-- Content Section -->
    <div class="py-8">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <!-- Add your content here -->
          <div class="p-6 text-gray-900">
            <h2 class=" text-center text-4xl uppercase font-semibold mb-4" style="font-family: 'Times New Roman', serif;">Welcome to our MDC Guidance System</h2>
            <p class="text-base mb-2" style="font-family: verdana;
  font-size: 20px;">
             To walk safely through the maze of human life, one needs the light of wisdom and the guidance of virtue. You just have to have the guidance to lead you in the direction until you can do it yourself. Wisdom is the best guide and faith is the best companion. Men give advice; God gives guidance.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

    </AppLayout>
</template>


