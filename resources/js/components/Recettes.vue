<template>
    <div class='recettes'>
    	<div v-for="recette, index in recettes" :key="recette.id" class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="col-lg-3">
                <a :href="'/recettes/'+recette.id"><img class="img-thumbnail"  :src="recette.image" :alt="recette.nom" ></a>
            </div>
            <div class="resume-content mr-auto">
                <span class="text-primary float-right">Par <a :href="'/utilisateurs/'+utilisateurs[index].id">{{ utilisateurs[index].pseudo }}</a> | {{ recette.temps_preparation }} min | Pour {{ recette.nombre_portion }} personnes</span>
                <h3 class="mb-0">{{ recette.nom }}</h3>
                <span  v-for="(categorie,indice) in categories" class="subheading mb-3">
                    <span v-if="indice < count[0].nb">
                        #<a :href="'/categories/'+categories[0].id">{{ categories[0].nom }}</a>
                        {{removeFirstCategory()}}
                    </span>
                </span>
                {{removeFirstCount()}}
                <p class="mb-3">{{ recette.description }}</p>
                <button class="btn btn-outline-secondary float-right"><a :href="'/recettes/'+recette.id" title="">Voir la recette {{ recette.nom }}<i class="fa fa-arrow-right"></i></a></button>
            </div>
        </div>
    </div>

</template>

<script>
    export default 
    {
    	props: ['recettes','utilisateurs','categories', 'count'],
        methods: {
            removeFirstCategory : function(){
                this.categories.shift()
            },
            removeFirstCount : function(){
                this.count.shift()
            },
        },
    }
</script>
