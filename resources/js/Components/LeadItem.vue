<template>
  <li>
    <Link
      :href="href"
      class="
        py-1
        px-4
        bg-green-400
        border-2 border-green-500
        shadow-md
        transition
        hover:bg-green-300
        flex-col flex flex-wrap
      "
    >
      <slot />
      <p class="text-sm">Lyhyt kuvaus leadin ominaisuuksista.</p>
    </Link>
  </li>
</template>

<script>
import { defineComponent } from "vue";
import { Link } from "@inertiajs/inertia-vue3";
import { reactive } from "vue";

export default defineComponent({
  components: {
    Link,
    reactive,
  },
  props: ["href"],

  setup() {
    const data = reactive({
      name: null,
      message: null,
      date_of_contact: null,
    });

    return { data };
  },
});
</script>
