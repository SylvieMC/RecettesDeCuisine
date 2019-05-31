<template>
    <div class='categories'>
    	<p>{{ categorie.nom }}</p>
    	<div v-for="recette in recettes">
            <img :src="recette.image" :alt="recette.nom">
    		<a :href="'/recettes/'+recette.id">{{recette.nom}}</a>
            <p>{{recette.description}}</p>
        </div>
    </div>
</template>

<script>
    export default 
    {
    	props: ['categorie','recettes']
    }
</script>
