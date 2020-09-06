<template>
    <section class="why-choose section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <!-- Image -->
                    <div class="why-img">
                        <img src="precon-master/images/why-choose.jpg" alt="#">
                        <a href="https://www.youtube.com/watch?v=FZQPhrdKjow" class="primary video-play mfp-fade"><i class="fa fa-play"></i>Watch now
                        <div class="waves-block">
                            <div class="waves wave-1"></div>
                            <div class="waves wave-2"></div>
                            <div class="waves wave-3"></div>
                        </div>
                        </a>
                    </div>
                    <!--/ End Image -->
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="choose-main">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12" v-for="choice in choices" :key="choice.id">
                                <a :href="choice.link" target="_blank">
                                    <div class="single-choose">
                                        <i :class="choice.icon"></i>
                                        <h4>{{ choice.title }}</h4>
                                        <p>{{ choice.description }}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data() {
        return{
            choices: [
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
                    link: 'http://quotesapi.yonkou.info/login'
                },
            ]
        }
    }
}
</script>

<style>

</style>
