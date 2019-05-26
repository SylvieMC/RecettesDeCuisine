<template>
    <div class='categories'>
    	<div v-for="categorie in categories" :key="categorie.id">
        	<p>{{ categorie.nom }}</p>
        </div>
    </div>
</template>

<script>
    export default 
    {
    	props: ['categories']
    }
</script>
