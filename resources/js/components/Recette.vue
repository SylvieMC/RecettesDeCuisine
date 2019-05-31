
<template>
    <div class='recettes'>  
       	
        	<p>
            {{ recette.nom }}<br/>
            {{ recette.description }}<br/>
            {{ utilisateur.pseudo }}<br>
            <span v-for="categories in categorie">
                {{ categories.nom }}
            </span><br/>
            <span v-for="ingredient in ingredients">
                {{ ingredient.nom }}
            </span><br/>
            <span v-for="etape in etapes">
                {{ etape.description }}<br/>
            </span><br/>

            </p>
    </div>
</template>

<script>
    export default 
    {
    	props: ['recette','utilisateur','categorie','ingredients','etapes']
    }
</script>