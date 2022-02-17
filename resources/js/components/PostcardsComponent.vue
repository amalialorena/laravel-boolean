<template>
    <div class="container">
        <h1>Postcards:</h1>
        <div class="card" v-for="postcard in postcards" :key="postcard.id">
           <h4>{{postcard.sender}}</h4> 
           <p>{{postcard.address}}</p>
           <p>{{postcard.text}}</p>
           <div>
               <img v-if="postcard.image" :src="'/storage/postcards/'+ postcard.image" alt="postcard.image" width="400px">
               <p v-else>No image available</p>
           </div>
           
        </div>
    </div>

</template>

<script>
    export default {

        data(){
            return{
                postcards:[],
            };
        },

        mounted() {
            axios.get('/api/postcards/list')
                .then(r=> this.postcards = r.data)
                .catch(e=>console.error(e));
        }
    }
</script>
