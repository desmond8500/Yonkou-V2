<template>
    <section class="services pattern-1 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-12">
                    <div class="section-title text-center m-bottom-30">
                        <h2><span>Creative</span>Services</h2>
                        <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sagittis, libero a blandit efficitur, erat tortor tincidunt magna, eu porta felis arcu et lacus. Vestibulum accumsan odio sem<a href="services.html">View more service.</a></p>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-4 col-md-6 col-12" v-for="service in services" :key="service.id">
                    <div class="single-service">
                        <div class="icon"><i :class="service.icon"></i></div>
                        <h4><a :href="service.link">{{ service.title }}</a></h4>
                        <p>{{ service.description }}</p>
                        <a :href="service.link" target="_blank" class="btn theme-2 no-style">Consulter<i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="m-top-50 text-center">
                        <a href="services.html" class="btn theme-2 effect radius">More Services<i class="fa fa-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data() {
        return {
            services: [
                {
                    id: 1,
                    title: 'Yonkou Tutos',
                    description: 'Receuil de notes en developpement Web',
                    icon: 'fa fa-laptop',
                    link: 'https://gracious-bhaskara-6d8339.netlify.app/'
                },
                {
                    id: 2,
                    title: 'Estm Courses',
                    description: 'Ensemble des cours fait à l\'estm',
                    icon: 'fa fa-book',
                    link: 'https://gracious-bhaskara-6d8339.netlify.app/'
                },
                {
                    id: 3,
                    title: 'Sen EcoloMarket4',
                    description: 'Plateforme de vente en ligne de produits recyclables et recyclés',
                    icon: 'fa fa-book',
                    link: 'http://senecolo4.yonkou.info/landingpage'
                },
                {
                    id: 4,
                    title: 'Quotes API',
                    description: 'Gestion de citations en ligne',
                    icon: 'fa fa-book',
                    link: 'http://quotesapi.yonkou.info/login'
                },
                {
                    id: 5,
                    title: 'Tyto services',
                    description: 'Gestion de citations en ligne',
                    icon: 'fa fa-book',
                    link: 'http://mydash.tytoservices.com'
                },
                {
                    id: 5,
                    title: 'The Engineers',
                    description: 'Gestion de citations en ligne',
                    icon: 'fa fa-book',
                    link: 'http://backoffice.yonkou.info'
                },
            ]
        }
    }
}
</script>

<style>

</style>
