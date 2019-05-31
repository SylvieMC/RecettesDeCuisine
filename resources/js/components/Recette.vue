
<template>
    <!--<div class='recettes'>
        <img :src="recette.image" :alt="recette.nom">  	
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
    </div>-->
    <div class="resume-item d-flex flex-column flex-md-row mb-5 col">
        <div class="col-lg-4">
            <img class="img-thumbnail mb-3" :src="recette.image" :alt="recette.nom">
            <div>
                <b>Ingrédients</b> :<ul>
                <li v-for="ingredient in ingredients">
                    {{ ingredient.nom }}
                </li>
            </ul><b>Temps Total : {{ recette.temps_preparation }} min</b>
            </div>
        </div>
        <div class="resume-content mr-auto">
            <h2 class="mb-0">{{ recette.nom }}</h2>
            <div class="subheading mb-3">
                <span v-for="(categories,index) in categorie" :key="categories.id">
                    #<a :href="'/categories/'+categories.id">{{ categories.nom }}</a>
                </span> - recette de <a :href="'/utilisateurs/'+utilisateur[0].id">{{ utilisateur[0].pseudo }}</a> POUR {{ recette.nombre_portion }} PERSONNES</div>
            <p class="mb-3">{{ recette.description }}</p>
            <h4>Préparation</h4>
            <ul v-for="etape in etapes" class="list-group">
                <li class="list-group-item">{{ etape.description }}</li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default 
    {
    	props: ['recette','utilisateur','categorie','ingredients','etapes']
    }
</script>