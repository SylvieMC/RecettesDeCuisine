<template>
    <div class='recettes'>
    	<div v-for="recette, index in recettes" :key="recette.id">
        	<p>{{ recette.nom }}</p>
            <p>{{ recette.description }}</p>
            <p>{{ utilisateurs[index].pseudo }}</p>
            <p>
                {{ categories }}
            </p>
        </div>
    </div>
    
</template>

<script>
    export default 
    {
    	props: ['recettes','utilisateurs','categories']
    }
</script>
