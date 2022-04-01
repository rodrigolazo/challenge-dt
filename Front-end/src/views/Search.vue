<template>
  <div :class="$style.contend">
    <b-container :class="$style.label">
      <label for="input-with-list">BUSCAR TICKETS AEREOS</label>
    </b-container>
    <b-form @submit="onSubmit">
      <b-container :class="$style.container">
        <b-form-input
          list="input-list"
          id="input-with-origen"
          v-model="form.origen"
          placeholder="Ciudad origen"
          :class="$style.input"
          required
        ></b-form-input>
        <b-form-datalist id="input-list" :options="options"></b-form-datalist>

        <b-form-input
          list="input-list"
          id="input-with-destino"
          v-model="form.destino"
          placeholder="Ciudad destino"
          :class="$style.input"
          required
        ></b-form-input>
        <b-form-datalist id="input-list" :options="options"></b-form-datalist>

        <b-form-datepicker
          id="datepicker-salida"
          v-model="form.salida"
          :date-format-options="{
            year: 'numeric',
            month: 'numeric',
            day: 'numeric',
          }"
          locale="en"
          placeholder="Fecha de salida"
          :class="$style.input"
          required
        ></b-form-datepicker>

        <b-form-datepicker
          id="datepicker-retorno"
          v-model="form.retorno"
          :date-format-options="{
            year: 'numeric',
            month: 'numeric',
            day: 'numeric',
          }"
          locale="en"
          placeholder="Fecha de retorno"
          :class="$style.input"
          required
        ></b-form-datepicker>
        <b-button type="submit" pill variant="dark">BUSCAR</b-button>
      </b-container>
    </b-form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      form: {
        origen: "",
        destino: "",
        salida: "",
        retorno: "",
      },
      options: [
        "Quito",
        "Guayaquil",
        "Bogota",
        "Medellin",
        "Caracas",
        "Lima",
        "La Paz",
        "Buenos Aires",
        "Cordova",
        "Santiago",
        "Montevideo",
        "Asunción",
        "Brazilia",
        "San Pablo",
        "Ciudad de Mexico",
        "New York",
        "Los Angeles",
        "Paris",
      ],
    };
  },
  methods: {
    onSubmit(event) {
      event.preventDefault();
      this.$router.push("/tickets");
    },
  },
};
</script>

<style module>
.contend {
  background-color: #129beb !important;
  height: 150px;
}
.container {
  display: flex;
  margin-top: 0.5rem;
}
.input {
  margin-right: 1rem;
}
.label {
  padding-top: 2rem;
  color: white;
  text-decoration: underline;
}
</style>
