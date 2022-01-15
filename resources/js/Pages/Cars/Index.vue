<template>
  <div class="container py-4">
    <div class="text-end mb-4">
      <a href="/create" class="btn btn-primary">Добавить</a>
    </div>

    <div v-if="$page.props.flash.success" type="success" class="mb-4 alert alert-success">
      {{ $page.props.flash.success }}
    </div>
    <div v-if="$page.props.flash.error" type="error" class="mb-4 alert alert-danger">
      {{ $page.props.flash.error }}
    </div>

    <table v-if="cars.data.length" class="table table-sm table-striped">
      <thead>
        <tr>
          <th>Марка</th>
          <th>Модель</th>
          <th>Номер</th>
          <th>Цвет</th>
          <th>Оплачено</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="car in cars.data" :key="car.id">
          <td>{{ car.brand }}</td>
          <td>{{ car.model }}</td>
          <td>{{ car.number }}</td>
          <td>{{ car.color }}</td>
          <td>
            <span v-if="car.is_paid">Да</span>
            <span v-else>Нет</span>
          </td>
          <td>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
            </svg>
          </td>
        </tr>
      </tbody>
    </table>
    <div v-else class="alert alert-warning">Нет ни одной добавленой записи</div>

    <!-- Paginator -->
  </div>
</template>

<script>
export default {
  props: {
    cars: Object,
  },
}
</script>
