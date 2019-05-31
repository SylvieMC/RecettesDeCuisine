<template>
    <section class="resume-section p-3 p-lg-5 d-flex flex-column">
        <div class="my-auto utilisateurs">
            <h2 class="mb-5">

                {{ utilisateur.pseudo }} - <span class="text-primary">{{ utilisateur.role }}</span> <img class="rounded img-fluid float-right profile-picture" :src="avatar[0].url" alt="avatar" ></h2>
            <div v-for="recette in recettes" :key="recette.id" class="resume-item d-flex flex-column flex-md-row mb-5">
                <div class="col-lg-3">
                    <a :href="'/recettes/'+recette.id"><img class="img-thumbnail" :src="recette.image" :alt="recette.nom" ></a>
                </div>
                <div class="resume-content mr-auto">
                    <h3 class="mb-3">{{ recette.nom }}</h3>
                    <p class="mb-3">{{ recette.description }}</p>
                    <button class="btn btn-outline-secondary float-right"><a :href="'/recettes/'+recette.id" title="">Voir la recette {{ recette.nom }}<i class="fa fa-arrow-right"></i></a></button>
                </div>
            </div>

            <!--<h2 class="mb-5">La liste complete des recettes</h2>
            <img :src="avatar[0].url" alt="avatar"/>
            <p>{{ utilisateur.pseudo }}</p>
            <p>{{ utilisateur.role }}</p>
            <div class="recettes" v-for="recette in recettes" :key="recette.id">
                <img :src="recette.image" :alt="recette.nom">
                <a :href="'/recettes/'+recette.id">{{recette.nom}}</a>
                <p>{{recette.description}}</p>
            </div>-->
        </div>
    </section>
</template>

<script>
    export default 
    {
    	props: ['utilisateur', 'avatar', 'recettes']
    }
</script>