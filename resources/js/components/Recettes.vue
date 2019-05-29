
<template>
    <div class='recettes'>
    	<div v-for="recette in recettes" :key="recette.id">
        	<p>{{ recette.nom }}</p>
        </div>
    </div>
</template>

<script>
    export default 
    {
    	props: ['recettes']
    }
</script>
