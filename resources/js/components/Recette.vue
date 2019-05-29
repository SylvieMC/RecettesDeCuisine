<template>
    <div class='recettes'>    	
        	<p>
            {{ recette.nom }}<br/>
            {{ recette.description }}<br/>
            {{ utilisateur.pseudo }}<br>
            <p v-for="categories in categorie">
                {{ categories.nom }}
            </p>
            <p v-for="ingredient in ingredients">
                {{ ingredient.nom }}
            </p>
            <p v-for="etape in etapes">
                {{ etape.description }}
            </p>
            </p>
    </div>
</template>

<script>
    export default 
    {
    	props: ['recette','utilisateur','categorie','ingredients','etapes']
    }
</script>