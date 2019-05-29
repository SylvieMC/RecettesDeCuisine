<template>
    <div class='recettes'>    	
        	<p>
            {{ recette.nom }}<br/>
            {{ recette.description }}
            </p>
    </div>
</template>

<script>
    export default 
    {
    	props: ['recette']
    }
</script>