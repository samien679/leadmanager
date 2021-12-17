<template>
  <app-layout title="Dashboard">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Dashboard
      </h2>
    </template>

    <div class="py-8">
      <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
        <div
          class="p-6 bg-gray-200 sm:rounded-sm shadow-sm border border-gray-400"
        >
          <div class="flex justify-around">
            <DashboardItem :value="57" :description="Leadia" />
            <DashboardItem :value="12" :description="Asiakasta" />
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
import JetButton from "@/Jetstream/Button.vue";
import JetInput from "@/Jetstream/Input.vue";
import JetCheckbox from "@/Jetstream/Checkbox.vue";
import JetLabel from "@/Jetstream/Label.vue";
import JetValidationErrors from "@/Jetstream/ValidationErrors.vue";
import QuickAddCard from "../Components/QuickAddCard.vue";
import DashboardItem from "../Components/DashboardItem.vue";

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
    DashboardItem,
  },
});
</script>
