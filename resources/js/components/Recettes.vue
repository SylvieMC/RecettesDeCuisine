<template>
    <div class='recettes'>
    	<div v-for="recette, index in recettes" :key="recette.id">
            <a :href="'/recettes/'+recette.id">{{ recette.nom }}</a>
            <img :src="recette.image" :alt="recette.nom">
        	<p>{{ recette.nom }}</p>
            <p>{{ recette.description }}</p>
            <a :href="'/utilisateurs/'+utilisateurs[index].id">{{ utilisateurs[index].pseudo }}</a>
            <div v-for="(categorie,indice) in categories">
                <p v-if="indice < count[0].nb">
                <a :href="'/categories/'+categories[0].id">{{ categories[0].nom }}</a>
                {{removeFirstCategory()}}
                </p>
            </div>
            <div>
                {{removeFirstCount()}}
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
