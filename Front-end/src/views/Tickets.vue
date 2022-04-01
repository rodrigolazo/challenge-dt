<template>
  <div>
    <b-container
      v-for="item in vuelos"
      :key="item.id"
      :class="$style.container"
    >
      <b-card-group deck>
        <b-card
          border-variant="primary"
          header="VUELO DISPONIBLE "
          header-bg-variant="primary"
          header-text-variant="white"
          align="center"
        >
          <div :class="$style.vuelos">
            <b-icon
              icon="check-circle-fill"
              aria-hidden="true"
              :class="$style.vuelo_item"
            ></b-icon>
            <b-card-text :class="$style.vuelo_item"
              >$ {{ item.precio }}</b-card-text
            >
            <b-card-text :class="$style.vuelo_item_aerolinea">{{
              item.aerolinea
            }}</b-card-text>
            <b-card-text :class="$style.vuelo_item"
              >Escalas: {{ item.escalar }}</b-card-text
            >
            <b-card-text :class="$style.vuelo_item_duracion"
              >Duracción: {{ item.duracion }}</b-card-text
            >
          </div>
        </b-card>
      </b-card-group>
    </b-container>
  </div>
</template>

<script>
import { mapState } from "vuex";
export default {
  computed: {
    ...mapState(["vuelos"]),
  },
};
</script>

<style module>
.container {
  margin-top: 2rem;
}
.vuelos {
  display: flex;
  color: rgb(39, 39, 39);
  font-size: 18px;
  justify-content: center;
  cursor: grab;
}

.vuelo_item {
  margin-left: 5rem;
  margin-right: 5rem;
}
.vuelo_item_aerolinea {
  margin-left: 5rem;
  margin-right: 5rem;
  color: brown;
}
.vuelo_item_duracion {
  margin-left: 5rem;
  margin-right: 5rem;
  color: #129beb;
}

.vuelos:hover {
  background-color: rgb(236, 236, 236);
}
</style>
