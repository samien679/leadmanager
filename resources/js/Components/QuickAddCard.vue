<template>
  <div
    class="
      p-2
      sm:px-4 sm:py-4
      max-w-sm
      bg-gradient-to-tr
      from-blue-300
      to-green-200
      border border-blue-400
      rounded-b-2xl rounded-tl-2xl
    "
  >
    <div class="flex justify-between">
      <span class="text-xl sm:text-2xl font-semibold mb-2">Quick Lead</span>
      <span
        class="fas fa-plus text-xl sm:text-2xl hover:text-green-600 transition"
      ></span>
    </div>
    <div class="">
      <form @submit.prevent="submit">
        <div>
          <jet-label for="contact" value="Contact " />
          <jet-input
            id="contact"
            type="text"
            class="mt-1 block w-full"
            required
            autofocus
          />
        </div>

        <div class="mt-4">
          <jet-label for="description" value="Description" />
          <jet-input
            id="description"
            type="text"
            class="mt-1 block w-full"
            required
            autocomplete="current-password"
          />
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import JetInput from "@/Jetstream/Input.vue";
import JetLabel from "@/Jetstream/Label.vue";
import JetValidationErrors from "@/Jetstream/ValidationErrors.vue";

export default {
  props: {
    type: {
      type: String,
      default: "lead",
    },
  },
  components: {
    JetInput,
    JetLabel,
    JetValidationErrors,
  },
};
</script>
