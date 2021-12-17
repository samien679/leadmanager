<template>
  <div class="p-8 flex flex-col">
    <div
      class="
        w-24
        h-24
        p-4
        border-2 border-gray-400
        bg-gradient-to-br
        from-gray-300
        to-gray-400
        rounded-full
        flex
        items-center
        justify-center
        shadow-sm
      "
    >
      <div class="text-3xl font-semibold">{{ value }}</div>
    </div>
    <div class="p-4">{{ description }}</div>
  </div>
</template>

<script>
export default {
  props: {
    description: {
      type: String,
      default: "-",
    },

    value: {
      type: Number,
      default: "-",
    },
  },

  setup() {},
};
</script>
