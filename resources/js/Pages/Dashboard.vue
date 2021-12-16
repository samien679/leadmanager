<template>
  <app-layout title="Dashboard">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Dashboard
      </h2>
    </template>

    <div class="py-8">
      <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
        <div class="p-6 bg-teal-400 sm:rounded-md shadow-md">
          <div class="flex justify-around">
            <div class="p-8 flex">
              <div
                class="
                  w-16
                  h-16
                  text-center
                  rounded-full
                  border border-teal-700
                "
              >
                3
              </div>
              <div>Asiakasta</div>
            </div>
            <div class="p-8">2</div>
          </div>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import Welcome from "@/Jetstream/Welcome.vue";
import QuickAddCard from "../Components/QuickAddCard.vue";
import JetButton from "@/Jetstream/Button.vue";
import JetInput from "@/Jetstream/Input.vue";
import JetCheckbox from "@/Jetstream/Checkbox.vue";
import JetLabel from "@/Jetstream/Label.vue";
import JetValidationErrors from "@/Jetstream/ValidationErrors.vue";

export default defineComponent({
  components: {
    AppLayout,
    Welcome,
    JetButton,
    JetInput,
    JetCheckbox,
    JetLabel,
    JetValidationErrors,
    QuickAddCard,
  },
});
</script>
