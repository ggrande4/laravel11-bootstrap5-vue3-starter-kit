<script setup>
const props = defineProps({
  items: {
    type: Array,
  }
});

</script>

<template>
  <ul class="nav-main">
    <li v-for="(item, index) in items" :key="`item-${index}`" class="nav-main-item">
      <div>
        <RouterLink :to="{ name: item.to }" class="nav-main-link" :active-class="item.to && item.to !== '#' ? 'active' : ''">
          <i v-if="item.icon" :class="`nav-main-link-icon ${item.icon}`"></i>
          <span v-if="item.name" class="nav-main-link-name">
            {{ item.name }}
          </span>
        </RouterLink>
      </div>
    </li>
  </ul>
</template>
