<template>
    <header id='header'>
        <nav>
            <a id="logo" :href="link">
                <img :src="image.src" alt="Logo">
            </a>
            <ul class="menu">
                <li v-for="headerLink in headerLinks" :key="headerLink.id">
                    <a :href="headerLink.link">
                        {{ headerLink.title }}
                    </a>
                </li>
            </ul>
        </nav>
    </header>
</template>

<script>
    export default 
    {
        data() {
            return {
              link: '/',
              headerLinks: [
                {
                  id: 1,
                  title: 'Accueil',
                  link: '/',
                },
                {
                  id: 2,
                  title: 'Recettes',
                  link: '/recettes',
                },
                {
                  id: 3,
                  title: 'Categories',
                  link: '/categories',
                },
              ],
              image: {
                id: 1,
                src: '#',
              },
            };
        },
    }
</script>
