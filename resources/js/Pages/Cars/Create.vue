<template>
  <div class="container py-4">
    <form @submit.prevent="store">
      <div class="mb-3">
        <label for="brand" class="form-label">Марка</label>
        <input v-model="form.brand" type="text" class="form-control" id="brand">
        <div v-show="form.errors.brand" class="text-danger">{{ form.errors.brand }}</div>
      </div>

      <div class="mb-3">
        <label for="model" class="form-label">Модель</label>
        <input v-model="form.model" type="text" class="form-control" id="model">
        <div v-show="form.errors.model" class="text-danger">{{ form.errors.model }}</div>
      </div>

      <div class="mb-3">
        <label for="number" class="form-label">Номер</label>
        <input v-model="form.number" type="text" class="form-control" id="number">
        <div class="form-text">Например А001РР22</div>
        <div v-show="form.errors.number" class="text-danger">{{ form.errors.number }}</div>
      </div>

      <div class="mb-3">
        <label for="color" class="form-label">Цвет</label>
        <select v-model="form.color" id="color" class="form-select">
          <option value=""></option>
          <option value="black">Черный</option>
          <option value="white">Белый</option>
          <option value="red">Красный</option>
        </select>
        <div v-show="form.errors.color" class="text-danger">{{ form.errors.color }}</div>
      </div>

      <div class="mb-3 form-check">
        <input v-model="form.is_paid" type="checkbox" id="is-paid" class="form-check-input">
        <label class="form-check-label" for="is-paid">Оплачено</label>
      </div>

      <div class="mb-3">
        <label for="comments" class="form-label">Дополнительный комментарий</label>
        <textarea v-model="form.comments" class="form-control" id="comments"></textarea>
        <div v-show="form.errors.comments" class="text-danger">{{ form.errors.comments }}</div>
      </div>

      <div class="d-flex justify-content-between">
        <a href="/" class="btn btn-light">Отмена</a>
        <button type="submit" class="btn btn-primary">Добавить</button>
      </div>
    </form>
  </div>
</template>

<script>
import { useForm } from "@inertiajs/inertia-vue3";

export default {
  setup() {
    const form = useForm({
      brand: "",
      model: "",
      number: "",
      color: "",
      is_paid: false,
      comments: "",
    });

    return { form };
  },

  methods: {
    store() {
      this.form.post('/');
    },
  },
}
</script>

