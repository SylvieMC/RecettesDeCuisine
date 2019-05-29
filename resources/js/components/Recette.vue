<template>
    <div class='recettes'>    	
        	<p>
            {{ recette.nom }}<br/>
            {{ recette.description }}<br/>
            </p>
            <p v-for="user in utilisateur">{{ user.pseudo }}</p>
    </div>
</template>

<script>
    export default 
    {
    	props: ['recette','utilisateur']
    }
</script>