<template>
    <header id='header'>
        <!--<nav>
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
        </nav>-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" :href="link">
                <span class="d-block d-lg-none">Recettes de cuisine</span>
                <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" :src="'/img/recette-de-cuisine.jpg'" alt="recette de cuisine">
        </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li v-for="headerLink in headerLinks" :key="headerLink.id" class="nav-item">
                        <a :href="headerLink.link" class="nav-link js-scroll-trigger">
                            {{ headerLink.title }}
                        </a>
                    </li>
                </ul>
            </div>
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
                      link: '/'
                  },
                  {
                      id: 2,
                      title: 'Recettes',
                      link: '/recettes'
                  },
                  {
                      id: 3,
                      title: 'Plat',
                      link: '/categories/4'
                  },
                  {
                      id: 4,
                      title: 'Spécialité',
                      link: '/categories/7'
                  },
                  {
                      id: 5,
                      title: 'Dessert',
                      link: '/categories/3'
                  },
                  {
                      id: 6,
                      title: 'Fruits',
                      link: '/categories/9'
                  },
                  {
                      id: 7,
                      title: 'Asie',
                      link: '/categories/6'
                  },
                  {
                      id: 8,
                      title: 'Chocolat',
                      link: '/categories/5'
                  }
              ],
              image: {
                id: 1,
                src: '#',
              },
            };
        },
    }
</script>
