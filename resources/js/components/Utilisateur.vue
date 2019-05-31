<template>
    <div class='utilisateurs'>
        <img :src="avatar[0].url" alt="avatar"/>
    	<p>{{ utilisateur.pseudo }}</p>
    	<p>{{ utilisateur.role }}</p>
        <div class="recettes" v-for="recette in recettes" :key="recette.id">
            <a :href="'/recettes/'+recette.id">{{recette.nom}}</a>
            <p>{{recette.description}}</p>
        </div>
    </div>
</template>

<script>
    export default 
    {
    	props: ['utilisateur', 'avatar', 'recettes']
    }
</script>