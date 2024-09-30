<script setup>
    import {ref} from 'vue';
    const name = ref('')
</script>

<template>

    {{ name }}
    <input type="text" v-model="name">

    <div class="small">
    <line-chart :chart-data="datacollection"></line-chart>
    <button @click="fillData()">Randomize</button>
  </div>

</template>

