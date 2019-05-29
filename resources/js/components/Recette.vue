<template>
    <div class='recettes'>    	
        	<p>
            {{ recette.nom }}<br/>
            {{ recette.description }}<br/>
            {{ utilisateur.pseudo }}
            </p>
    </div>
</template>

<script>
    export default 
    {
    	props: ['recette','utilisateur']
    }
</script>