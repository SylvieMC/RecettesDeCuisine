<template>
    <div class='utilisateurs'>
    	<div v-for="utilisateur in utilisateurs" :key="utilisateur.id">
        	<a :href="'utilisateurs/'+utilisateur.id">{{ utilisateur.pseudo }}</a>
        	<p>{{ utilisateur.role }}</p>
        </div>
    </div>
</template>

<script>
    export default 
    {
    	props: ['utilisateurs']
    }
</script>