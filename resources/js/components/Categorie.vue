<template>
    <div class='categories'>
        <h2 class="mb-5">{{ categorie.nom }}</h2>
    	<div v-for="recette in recettes" class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="col-lg-3">
                <a :href="'/recettes/'+recette.id"><img class="img-thumbnail" :src="recette.image" :alt="recette.nom" ></a>
            </div>
            <div class="resume-content mr-auto">
                <h3 class="mb-3">{{ recette.nom }}</h3>
                <p class="mb-3">{{ recette.description }}</p>
                <button class="btn btn-outline-secondary float-right"><a :href="'/recettes/'+recette.id" title="">Voir la recette {{ recette.nom }}<i class="fa fa-arrow-right"></i></a></button>
            </div>
        </div>
        <!--<h2 class="mb-5">{{ categorie.nom }}</h2>
        <div v-for="recette in recettes" class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="col-lg-3">
                <a :href="'/recettes/'+recette.id"><img class="img-thumbnail" :src="recette.image" :alt="recette.nom" ></a>
            </div>
            <div class="resume-content mr-auto">
                <span class="text-primary float-right">De <a :href="'/utilisateurs/'+utilisateurs[index].id">{{ utilisateurs[index].pseudo }}</a> | {{ recette.temps_preparation }} min | Pour {{ recette.nombre_portion }} personnes</span>
                <h3 class="mb-0">{{ recette.nom }}</h3>
                <p class="mb-3">{{ recette.description }}</p>
                <button class="btn btn-outline-secondary float-right"><a :href="'/recettes/'+recette.id" title="">Voir la recette {{ recette.nom }}<i class="fa fa-arrow-right"></i></a></button>
            </div>
        </div>-->
    </div>
</template>

<script>
    export default 
    {
    	props: ['categorie','recettes']
    }
</script>
