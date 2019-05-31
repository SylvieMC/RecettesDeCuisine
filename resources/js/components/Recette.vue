
<template>
<<<<<<< HEAD
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
=======
    <div class='recettes'>    	
    	<p>
        {{ recette.nom }}<br/>
        {{ recette.description }}<br/>
        </p>
        <a :href="'/utilisateurs/'+utilisateur[0].id">{{ utilisateur[0].pseudo }}</a>
        <div v-for="(categories,index) in categorie" :key="categories.id">
            <a :href="'/categories/'+categories.id">{{ categories.nom }}</a>
        </div>
        <p v-for="ingredient in ingredients">
            {{ ingredient.nom }}
        </p>
        <p v-for="etape in etapes">
            {{ etape.description }}
        </p>
>>>>>>> users
    </div>
</template>

<script>
    export default 
    {
    	props: ['recette','utilisateur','categorie','ingredients','etapes']
    }
</script>