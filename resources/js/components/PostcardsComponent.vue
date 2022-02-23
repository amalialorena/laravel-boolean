<template>
  <div class="container">
    <!-- <div id="map" class="map" style="height: 300px"></div> -->
  
    <h1>Postcards:</h1>
    <div class="card" v-for="postcard in postcards" :key="postcard.id">
      <h4>{{ postcard.sender }}</h4>
      <p>{{ postcard.address }}</p>
      <p>{{ postcard.text }}</p>
      <div>
        <img
          v-if="postcard.image"
          :src="'/storage/postcards/' + postcard.image"
          alt="postcard.image"
          width="400px"
        />
        <p v-else>No image available</p>
      </div>
    </div>
  </div>
</template>

<script>
import tt from "@tomtom-international/web-sdk-maps";

export default {
  data() {
    return {
      postcards: [],
      abbadia: [9.33397, 45.89588],
    };
  },

  mounted() {
    axios
      .get("/api/postcards/list")
      .then((r) => (this.postcards = r.data))
      .catch((e) => console.error(e));

    // var map = tt.map({
    //   container: "map",
    //   key: "GJpBcQsMGEGTQjwmKY9ABdIiOR9gVzuk",
    //   center: this.abbadia,
    //   zoom: 15,
    // });

    // var marker = new tt.Marker({ color: 'red' })
    // .setLngLat(this.abbadia)
    // .addTo(map);

    // map.addControl(new tt.FullscreenControl());
    // map.addControl(new tt.NavigationControl());
  },
};
</script>
